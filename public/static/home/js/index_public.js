function indexload(index) {
    clientSideInclude('index_top', 'include/header.html');
    navbar(index);
}

function indexfooter() {
    clientSideInclude('foot_bar', 'include/footer.html');
}

function clientSideInclude(id, url) {
    var req = false;

    // Safari, Firefox, 及其他非微软浏览器
    if (window.XMLHttpRequest) {
        try {
            req = new XMLHttpRequest();
        } catch (e) {
            req = false;
        }
    } else if (window.ActiveXObject) {

        // For Internet Explorer on Windows
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                req = false;
            }
        }
    }
    var element = document.getElementById(id);
    if (!element) {
        alert("函数clientSideInclude无法找到id " + id + "。" +
                "你的网页中必须有一个含有这个id的div 或 span 标签。");
        return;
    }
    if (req) {
        // 同步请求，等待收到全部内容
        req.open("GET", url, false);
        req.send(null);
        element.innerHTML = req.responseText;
    } else {
        element.innerHTML =
                "对不起，你的浏览器不支持" +
                "XMLHTTPRequest 对象。这个网页的显示要求" +
                "Internet Explorer 5 以上版本, " +
                "或 Firefox 或 Safari 浏览器，也可能会有其他可兼容的浏览器存在。";
    }
}

function navbar(index) {
    var arr = document.getElementsByClassName("head03_ul2")[0].getElementsByTagName("li");
    var _a = document.getElementsByClassName("head03_ul2")[0].getElementsByTagName("a");

    for (var i = 0; i < arr.length; i++) {
    	_a[i].setAttribute("class", "head03_a");
    	arr[i].setAttribute("class", "");
        if (i == index) {
            arr[i].setAttribute("class", "active");
        }
    }
}
$(function(){
	var $dropmenu=$(".head03 .dropdown-menu");
		$dropmenu.css("display","none");
	var $btntoggle=$(".head03 .dropdown-toggle");
		
		$btntoggle.click(function(){
			$dropmenu.toggle();
		})
});





















