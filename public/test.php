<?php

    /** 
     *  
     * 将xml转为数组 
     * @param string $xml xml字符串 
     * @param string $version xml版本 
     * @param string $charset xml编码 
     */  
    function xmlToArray($xml, $version="1.0", $charset="utf-8"){  
        $doc = new DOMDocument ("1.0", $charset);  
        $doc->loadXML ($xml);  
        $result = domNodeToArray($doc);  
        if(isset($result['#document'])){  
            $result = $result['#document'];  
        }  
        return $result;  
    }  
    /** 
     *  
     * 将domNode转为数组 
     * @param DOMNode $oDomNode 
     */  
    function domNodeToArray(DOMNode $oDomNode = null) {  
        // return empty array if dom is blank  
        if (! $oDomNode->hasChildNodes ()) {  
            $mResult = $oDomNode->nodeValue;  
        } else {  
            $mResult = array ();  
            foreach ( $oDomNode->childNodes as $oChildNode ) {  
                // how many of these child nodes do we have?  
                // this will give us a clue as to what the result structure should be  
                $oChildNodeList = $oDomNode->getElementsByTagName ( $oChildNode->nodeName );  
                $iChildCount = 0;  
                // there are x number of childs in this node that have the same tag name  
                // however, we are only interested in the # of siblings with the same tag name  
                foreach ( $oChildNodeList as $oNode ) {  
                    if ($oNode->parentNode->isSameNode ( $oChildNode->parentNode )) {  
                        $iChildCount ++;  
                    }  
                }  
                $mValue = domNodeToArray ( $oChildNode );  
                $sKey = ($oChildNode->nodeName {0} == '#') ? 0 : $oChildNode->nodeName;  
                $mValue = is_array ( $mValue ) ? $mValue [$oChildNode->nodeName] : $mValue;  
                // how many of thse child nodes do we have?  
                if ($iChildCount > 1) { // more than 1 child - make numeric array  
                    $mResult [$sKey] [] = $mValue;  
                } else {  
                    $mResult [$sKey] = $mValue;  
                }  
            }  
            // if the child is <foo>bar</foo>, the result will be array(bar)  
            // make the result just 'bar'  
            if (count ( $mResult ) == 1 && isset ( $mResult [0] ) && ! is_array ( $mResult [0] )) {  
                $mResult = $mResult [0];  
            }  
        }  
        // get our attributes if we have any  
        $arAttributes = array ();  
        if ($oDomNode->hasAttributes ()) {  
            foreach ( $oDomNode->attributes as $sAttrName => $oAttrNode ) {  
                // retain namespace prefixes  
                $arAttributes ["@{$oAttrNode->nodeName}"] = $oAttrNode->nodeValue;  
            }  
        }  
        // check for namespace attribute - Namespaces will not show up in the attributes list  
        if ($oDomNode instanceof DOMElement && $oDomNode->getAttribute ( 'xmlns' )) {  
            $arAttributes ["@xmlns"] = $oDomNode->getAttribute ( 'xmlns' );  
        }  
        if (count ( $arAttributes )) {  
            if (! is_array ( $mResult )) {  
                $mResult = (trim ( $mResult )) ? array ($mResult ) : array ();  
            }  
            $mResult = array_merge ( $mResult, $arAttributes );  
        }  
        $arResult = array ($oDomNode->nodeName => $mResult );  
        return $arResult;  
    }  
    
    function xmltoarr($path){
        $xmlfile = file_get_contents($path);//提取xml文档中的内容以字符串格式赋给变量
        $ob= simplexml_load_string($xmlfile);//将字符串转化为变量
        $json = json_encode($ob);//将对象转化为JSON格式的字符串
        $configData = json_decode($json, true);//将JSON格式的字符串转化为数组
        //print_r($configData);
        return $configData;
    }
    $path = 'C:\Program Files (x86)\Tencent\QQ\I18N\2052\LocList.xml';
    $region_arr = xmltoarr($path);
    //print_r($region_arr);
    $my_arr = array();
    $sql = "";
    foreach ($region_arr as $key=>$val){
        foreach ($val as $country){
            //第一层，处理国家数据
            if(isset($country['Name'])){
                $country_name = $country['Name'];
                $country_code = $country['Code'];
            }else{
                $country_name = $country['@attributes']['Name'];
                $country_code = $country['@attributes']['Code'];
            }
            $sql .= 'INSERT INTO `mt_region` VALUES ("'.$country_code.'", "'.$country_name.'", "0", "1");'.PHP_EOL; 
            $country_state = empty($country['State']) ? "" : $country['State'];
            //第二层，处理省、州数据
            if($country_state != ""){
                
                foreach($country_state as $state){
                    if(isset($state['Name'])){//如果能直接获取省名称，说明这是没有下属城市的单一省，直接获取省名称和省代码
                        $state_name = $state['Name'];
                        $state_code = $state['Code'];
                        $sql .= 'INSERT INTO `mt_region` VALUES ("'.$state_code.'", "'.$state_name.'", "'.$country_code.'", "2");'.PHP_EOL; 
                    }else{//获取省名称及省代码；
                        if(!isset($state['@attributes'])){//没有省，只有城市
                            $state_name = "";
                            $state_code = "";                         
                        }else{
                            $state_name = $state['@attributes']['Name'];
                            $state_code = $state['@attributes']['Code'];
                            $sql .= 'INSERT INTO `mt_region` VALUES ("'.$state_code.'", "'.$state_name.'", "'.$country_code.'", "2");'.PHP_EOL; 
                        }
                    }
                    //if($country_name == '阿尔巴尼亚') print_r($state);
                    $state_city = empty($state['City']) ? $state : $state['City'];
                    //if($country_name == '阿尔巴尼亚') print_r($state_city);
                    //第三层，处理城市数据
                    if($state_city != ""){                        
                        foreach($state_city as $city){ 
                            if(isset($city['Name'])){
                                $city_name = $city['Name'];
                                $city_code = $city['Code'];
                            }else{
                                $city_name = $city['@attributes']['Name'];
                                $city_code = $city['@attributes']['Code'];
                            }
                            //如果有城市但是没有州，则把上级父ID挂在国家CODE下，否则挂在省CODE下
                            if($state_name == ""){
                                $sql .= 'INSERT INTO `mt_region` VALUES ("'.$city_code.'", "'.$city_name.'", "'.$country_code.'", "3");'.PHP_EOL;
                            }else{
                                $sql .= 'INSERT INTO `mt_region` VALUES ("'.$city_code.'", "'.$city_name.'", "'.$state_code.'", "3");'.PHP_EOL;
                            }
                            $city_region = empty($city['Region']) ? "" : $city['Region'];
                            //第四层，处理区数据
                            if($city_region != ""){
                                foreach($city_region as $region){
                                    if(isset($region['Name'])){
                                        $region_name = $region['Name'];
                                        $region_code = $region['Code'];
                                    }else{
                                        $region_name = $region['@attributes']['Name'];
                                        $region_code = $region['@attributes']['Code'];
                                    }
                                    $sql .= 'INSERT INTO `mt_region` VALUES ("'.$region_code.'", "'.$region_name.'", "'.$city_code.'", "4");'.PHP_EOL;
                                    //echo '国家名称='.$country_name.'；国家代码='.$country_code.'；省/州名称='.$state_name.'；省/州代码='.$state_code.'；城市名称='.$city_name.'；城市代码='.$city_code.'；区名称='.$region_name.'；区代码='.$region_code.'；流程打印4<hr />';
                                }
                            }else{
                                //echo '国家名称='.$country_name.'；国家代码='.$country_code.'；省/州名称='.$state_name.'；省/州代码='.$state_code.'；城市名称='.$city_name.'；城市代码='.$city_code.'；区名称=\"\"；区代码=\"\"；流程打印3<hr />';
                            }
                        }
                    }else{
                        //echo '国家名称='.$country_name.'；国家代码='.$country_code.'；省/州名称='.$state_name.'；省/州代码='.$state_code.'；城市名称=\"\"；城市代码=\"\"；区名称=\"\"；区代码=\"\"；流程打印2<hr />';
                    }
                }
            }else{
                //echo '国家名称='.$country_name.'；国家代码='.$country_code.'；省/州名称=\"\"；省/州代码=\"\"；城市名称=\"\"；城市代码=\"\"；区名称=\"\"；区代码=\"\"；流程打印1<hr />';
            }
        }
    }
//    $url = "C:\Program Files (x86)\Tencent\QQ\I18N\2052\LocList.xml";  
//    $contentxml = simplexml_load_file($url);  //取得xml对象，需要转化为数组
//    print_r($contentxml);
    //$xml = file_get_contents($path);
    //$contentxml = xmlToArray($xml);  //取得xml对象，需要转化为数组
    $sql_file = "c:\wamp64\sql_area.sql";
    file_put_contents($sql_file, $sql);