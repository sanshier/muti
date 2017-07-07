/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : muti

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-07 21:10:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mt_admin
-- ----------------------------
DROP TABLE IF EXISTS `mt_admin`;
CREATE TABLE `mt_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `account` varchar(20) DEFAULT NULL COMMENT '管理员账号',
  `password` varchar(32) DEFAULT NULL COMMENT '管理员密码',
  `salt` varchar(4) DEFAULT NULL COMMENT '盐',
  `name` varchar(10) DEFAULT NULL COMMENT '姓名',
  `position` varchar(10) DEFAULT NULL COMMENT '岗位',
  `work_no` varchar(5) DEFAULT NULL COMMENT '工号',
  `sexy` varchar(1) DEFAULT NULL COMMENT '性别',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `status` varchar(1) DEFAULT '1' COMMENT '状态 0-无效 1-正常 默认=1',
  `role_id` int(11) DEFAULT NULL COMMENT '角色',
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后修改时间',
  `creater` int(11) DEFAULT NULL COMMENT '操作人',
  `deletetime` int(11) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of mt_admin
-- ----------------------------
INSERT INTO `mt_admin` VALUES ('1', 'admin', '66d5b4f8cd63e9f45bed93e7accdde7d', null, null, null, '001', null, '2017-07-04 17:25:50', '1', '1', '2017-07-07 09:05:45', null, null);

-- ----------------------------
-- Table structure for mt_article
-- ----------------------------
DROP TABLE IF EXISTS `mt_article`;
CREATE TABLE `mt_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `article_cat` varchar(1) DEFAULT NULL COMMENT '所属分类',
  `article_topic` varchar(50) DEFAULT NULL COMMENT '文章标题',
  `article_summary` text COMMENT '文章简介',
  `article_content` blob COMMENT '文章内容',
  `creater` int(11) DEFAULT NULL COMMENT '操作人',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `article_status` varchar(1) DEFAULT NULL COMMENT '状态 0-无效 1-有效',
  `article_is_recommend` varchar(1) DEFAULT NULL COMMENT '是否推荐 0-不推荐 1-推荐 默认=0',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章主题';

-- ----------------------------
-- Records of mt_article
-- ----------------------------

-- ----------------------------
-- Table structure for mt_article_cat
-- ----------------------------
DROP TABLE IF EXISTS `mt_article_cat`;
CREATE TABLE `mt_article_cat` (
  `article_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_cat_name` varchar(20) DEFAULT NULL,
  `article_cat_level` int(11) DEFAULT NULL,
  `article_cat_parent` int(11) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`article_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mt_article_cat
-- ----------------------------

-- ----------------------------
-- Table structure for mt_country
-- ----------------------------
DROP TABLE IF EXISTS `mt_country`;
CREATE TABLE `mt_country` (
  `country_code` varchar(20) NOT NULL COMMENT '国家代码',
  `english_name` varchar(50) DEFAULT NULL COMMENT '国名英文',
  `chinese_name` varchar(50) DEFAULT NULL COMMENT '国名中文',
  `local_name` varchar(50) DEFAULT NULL COMMENT '国名当地',
  `location` varchar(20) DEFAULT NULL COMMENT '所在洲',
  `local_language` varchar(20) DEFAULT NULL COMMENT '官方语言',
  `local_dialect` varchar(50) DEFAULT NULL COMMENT '本地方言',
  PRIMARY KEY (`country_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='国家';

-- ----------------------------
-- Records of mt_country
-- ----------------------------
INSERT INTO `mt_country` VALUES ('ABW', null, '阿鲁巴', null, null, null, null);
INSERT INTO `mt_country` VALUES ('AFG', null, '阿富汗', null, null, null, null);
INSERT INTO `mt_country` VALUES ('AGO', null, '安哥拉', null, null, null, null);
INSERT INTO `mt_country` VALUES ('AIA', null, '安圭拉', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ALA', null, '奥兰群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ALB', null, '阿尔巴尼亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('AND', null, '安道尔', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ANT', null, '荷属安地列斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ARE', null, '阿拉伯联合酋长国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ARG', null, '阿根廷', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ARM', null, '亚美尼亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ASC', null, '阿森松岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ASM', null, '美属萨摩亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ATA', null, '南极洲', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ATF', null, '法属南部领地', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ATG', null, '安提瓜岛和巴布达', null, null, null, null);
INSERT INTO `mt_country` VALUES ('AUS', null, '澳大利亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('AUT', null, '奥地利', null, null, null, null);
INSERT INTO `mt_country` VALUES ('AZE', null, '阿塞拜疆', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BDI', null, '布隆迪', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BEL', null, '比利时', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BEN', null, '贝宁', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BFA', null, '布基纳法索', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BGD', null, '孟加拉', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BGR', null, '保加利亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BHR', null, '巴林', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BHS', null, '巴哈马', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BIH', null, '波斯尼亚和黑塞哥维那', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BLR', null, '白俄罗斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BLZ', null, '伯利兹', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BMU', null, '百慕大', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BOL', null, '玻利维亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BRA', null, '巴西', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BRB', null, '巴巴多斯岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BRN', null, '文莱', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BTN', null, '不丹', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BVT', null, '布韦岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('BWA', null, '博茨瓦纳', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CAF', null, '中非共和国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CAN', null, '加拿大', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CCK', null, '科科斯群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CHE', null, '瑞士', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CHL', null, '智利', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CIV', null, '科特迪瓦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CMR', null, '喀麦隆', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CN', null, '中国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('COD', null, '刚果民主共和国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('COG', null, '刚果', null, null, null, null);
INSERT INTO `mt_country` VALUES ('COK', null, '库克群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('COL', null, '哥伦比亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('COM', null, '科摩罗', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CPV', null, '佛得角', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CRI', null, '哥斯达黎加', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CUB', null, '古巴', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CXR', null, '圣诞岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CYM', null, '开曼群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CYP', null, '塞浦路斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('CZE', null, '捷克共和国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('DEU', null, '德国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('DJI', null, '吉布提', null, null, null, null);
INSERT INTO `mt_country` VALUES ('DMA', null, '多米尼加', null, null, null, null);
INSERT INTO `mt_country` VALUES ('DNK', null, '丹麦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('DOM', null, '多米尼加共和国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('DZA', null, '阿尔及利亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ECU', null, '厄瓜多尔', null, null, null, null);
INSERT INTO `mt_country` VALUES ('EGY', null, '埃及', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ERI', null, '厄立特里亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ESP', null, '西班牙', null, null, null, null);
INSERT INTO `mt_country` VALUES ('EST', null, '爱沙尼亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ETH', null, '埃塞俄比亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('FIN', null, '芬兰', null, null, null, null);
INSERT INTO `mt_country` VALUES ('FJI', null, '斐济', null, null, null, null);
INSERT INTO `mt_country` VALUES ('FLK', null, '弗兰克群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('FRA', null, '法国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('FRO', null, '法罗群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('FSM', null, '密克罗尼西亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GAB', null, '加蓬', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GBR', null, '英国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GEO', null, '乔治亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GGY', null, '格恩西岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GHA', null, '加纳', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GIB', null, '直布罗陀', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GIN', null, '几内亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GLP', null, '瓜德罗普', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GMB', null, '冈比亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GNB', null, '几内亚比绍', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GRC', null, '希腊', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GRD', null, '格林纳达', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GRL', null, '格陵兰', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GTM', null, '危地马拉', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GUF', null, '法属圭亚那', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GUM', null, '关岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('GUY', null, '圭亚那', null, null, null, null);
INSERT INTO `mt_country` VALUES ('HMD', null, '赫德和麦克唐纳群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('HND', null, '洪都拉斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('HRV', null, '克罗地亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('HTI', null, '海地', null, null, null, null);
INSERT INTO `mt_country` VALUES ('HUN', null, '匈牙利', null, null, null, null);
INSERT INTO `mt_country` VALUES ('IDN', null, '印度尼西亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('IMN', null, '曼岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('IND', null, '印度', null, null, null, null);
INSERT INTO `mt_country` VALUES ('IOT', null, '英属印度洋领地', null, null, null, null);
INSERT INTO `mt_country` VALUES ('IRL', null, '爱尔兰', null, null, null, null);
INSERT INTO `mt_country` VALUES ('IRN', null, '伊朗', null, null, null, null);
INSERT INTO `mt_country` VALUES ('IRQ', null, '伊拉克', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ISL', null, '冰岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ISR', null, '以色列', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ITA', null, '意大利', null, null, null, null);
INSERT INTO `mt_country` VALUES ('JAM', null, '牙买加', null, null, null, null);
INSERT INTO `mt_country` VALUES ('JEY', null, '泽西岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('JOR', null, '约旦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('JPN', null, '日本', null, null, null, null);
INSERT INTO `mt_country` VALUES ('KAZ', null, '哈萨克斯坦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('KEN', null, '肯尼亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('KGZ', null, '吉尔吉斯斯坦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('KHM', null, '柬埔寨', null, null, null, null);
INSERT INTO `mt_country` VALUES ('KIR', null, '基里巴斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('KNA', null, '圣基茨和尼维斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('KOR', null, '韩国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('KWT', null, '科威特', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LAO', null, '老挝', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LBN', null, '黎巴嫩', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LBR', null, '利比里亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LBY', null, '利比亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LCA', null, '圣卢西亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LIE', null, '列支敦士登', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LKA', null, '斯里兰卡', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LSO', null, '莱索托', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LTU', null, '立陶宛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LUX', null, '卢森堡', null, null, null, null);
INSERT INTO `mt_country` VALUES ('LVA', null, '拉脱维亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MAR', null, '摩洛哥', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MCO', null, '摩纳哥', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MDA', null, '摩尔多瓦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MDG', null, '马达加斯加', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MDV', null, '马尔代夫', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MEX', null, '墨西哥', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MHL', null, '马绍尔群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MKD', null, '马其顿', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MLI', null, '马里', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MLT', null, '马耳他', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MMR', null, '缅甸', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MNG', null, '蒙古', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MNP', null, '北马里亚纳群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MOZ', null, '莫桑比克', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MRT', null, '毛里塔尼亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MSR', null, '蒙特塞拉特', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MTQ', null, '马提尼克', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MUS', null, '毛里求斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MWI', null, '马拉维', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MYS', null, '马来西亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('MYT', null, '马约特岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NAM', null, '纳米比亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NCL', null, '新喀里多尼亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NER', null, '尼日尔', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NFK', null, '诺福克', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NGA', null, '尼日利亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NIC', null, '尼加拉瓜', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NIU', null, '纽埃', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NLD', null, '荷兰', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NOR', null, '挪威', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NPL', null, '尼泊尔', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NRU', null, '瑙鲁', null, null, null, null);
INSERT INTO `mt_country` VALUES ('NZL', null, '新西兰', null, null, null, null);
INSERT INTO `mt_country` VALUES ('OMN', null, '阿曼', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PAK', null, '巴基斯坦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PAN', null, '巴拿马', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PCN', null, '皮特凯恩', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PER', null, '秘鲁', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PHL', null, '菲律宾', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PLW', null, '帕劳群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PNG', null, '巴布亚新几内亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('POL', null, '波兰', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PRI', null, '波多黎各', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PRK', null, '朝鲜', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PRT', null, '葡萄牙', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PRY', null, '巴拉圭', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PSE', null, '巴勒斯坦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('PYF', null, '法属波利尼西亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('QAT', null, '卡塔尔', null, null, null, null);
INSERT INTO `mt_country` VALUES ('REU', null, '留尼旺岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ROU', null, '罗马尼亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('RUS', null, '俄罗斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('RWA', null, '卢旺达', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SAU', null, '沙特阿拉伯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SCG', null, '塞尔维亚,黑山', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SDN', null, '苏丹', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SEN', null, '塞内加尔', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SGP', null, '新加坡', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SGS', null, '南乔治亚和南桑德威奇群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SHN', null, '圣赫勒拿', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SJM', null, '斯瓦尔巴和扬马廷', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SLB', null, '所罗门群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SLE', null, '塞拉利昂', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SLV', null, '萨尔瓦多', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SMR', null, '圣马力诺', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SOM', null, '索马里', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SPM', null, '圣皮埃尔和米克隆群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('STP', null, '圣多美和普林西比', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SUR', null, '苏里南', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SVK', null, '斯洛伐克', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SVN', null, '斯洛文尼亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SWE', null, '瑞典', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SWZ', null, '斯威士兰', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SYC', null, '塞舌尔', null, null, null, null);
INSERT INTO `mt_country` VALUES ('SYR', null, '叙利亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TAA', null, '特里斯坦达昆哈', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TCA', null, '特克斯和凯克特斯群岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TCD', null, '乍得', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TGO', null, '多哥', null, null, null, null);
INSERT INTO `mt_country` VALUES ('THA', null, '泰国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TJK', null, '塔吉克斯坦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TKL', null, '托克劳', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TKM', null, '土库曼斯坦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TLS', null, '东帝汶', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TON', null, '汤加', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TTO', null, '特立尼达和多巴哥', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TUN', null, '突尼斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TUR', null, '土耳其', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TUV', null, '图瓦卢', null, null, null, null);
INSERT INTO `mt_country` VALUES ('TZA', null, '坦桑尼亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('UGA', null, '乌干达', null, null, null, null);
INSERT INTO `mt_country` VALUES ('UKR', null, '乌克兰', null, null, null, null);
INSERT INTO `mt_country` VALUES ('UMI', null, '美属外岛', null, null, null, null);
INSERT INTO `mt_country` VALUES ('URY', null, '乌拉圭', null, null, null, null);
INSERT INTO `mt_country` VALUES ('USA', null, '美国', null, null, null, null);
INSERT INTO `mt_country` VALUES ('UZB', null, '乌兹别克斯坦', null, null, null, null);
INSERT INTO `mt_country` VALUES ('VAT', null, '梵蒂冈', null, null, null, null);
INSERT INTO `mt_country` VALUES ('VCT', null, '圣文森特和格林纳丁斯', null, null, null, null);
INSERT INTO `mt_country` VALUES ('VEN', null, '委内瑞拉', null, null, null, null);
INSERT INTO `mt_country` VALUES ('VGB', null, '维尔京群岛，英属', null, null, null, null);
INSERT INTO `mt_country` VALUES ('VIR', null, '维尔京群岛，美属', null, null, null, null);
INSERT INTO `mt_country` VALUES ('VNM', null, '越南', null, null, null, null);
INSERT INTO `mt_country` VALUES ('VUT', null, '瓦努阿图', null, null, null, null);
INSERT INTO `mt_country` VALUES ('WLF', null, '瓦利斯和福图纳', null, null, null, null);
INSERT INTO `mt_country` VALUES ('WSM', null, '萨摩亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('YEM', null, '也门', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ZAF', null, '南非', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ZMB', null, '赞比亚', null, null, null, null);
INSERT INTO `mt_country` VALUES ('ZWE', null, '津巴布韦', null, null, null, null);

-- ----------------------------
-- Table structure for mt_ep_account
-- ----------------------------
DROP TABLE IF EXISTS `mt_ep_account`;
CREATE TABLE `mt_ep_account` (
  `ep_account_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '企业用户子账户ID',
  `uid` int(11) DEFAULT NULL,
  `ep_id` int(11) DEFAULT NULL COMMENT '子账户所属企业ID',
  `ep_account_name` varchar(20) DEFAULT NULL COMMENT '姓名',
  `ep_account_mobile` varchar(20) DEFAULT NULL COMMENT '联系电话',
  `ep_role_id` int(11) DEFAULT NULL COMMENT '角色ID',
  `admin_uid` int(11) DEFAULT NULL COMMENT '创建该子账户的管理员ID，即管理员的uid',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `status` varchar(1) DEFAULT '1' COMMENT '子账户状态 0-冻结 1-正常 默认=1',
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ep_account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='企业管理员开设的子账户';

-- ----------------------------
-- Records of mt_ep_account
-- ----------------------------

-- ----------------------------
-- Table structure for mt_ep_info
-- ----------------------------
DROP TABLE IF EXISTS `mt_ep_info`;
CREATE TABLE `mt_ep_info` (
  `ep_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '企业信息ID',
  `uid` int(11) DEFAULT NULL,
  `ep_name` varchar(100) DEFAULT NULL COMMENT '企业名称',
  `ep_mobile` varchar(11) DEFAULT NULL COMMENT '手机号码',
  `license` varchar(20) DEFAULT NULL COMMENT '营业执照号码',
  `lic_country` varchar(20) DEFAULT NULL COMMENT '营业执照所在地（国家）',
  `lic_province` varchar(20) DEFAULT NULL COMMENT '营业执照所在地（省）',
  `lic_city` varchar(20) DEFAULT NULL COMMENT '营业执照所在地（城市）',
  `lic_address` varchar(255) DEFAULT NULL COMMENT '常用地址',
  `lic_exp_date` varchar(10) DEFAULT NULL COMMENT '营业年限 1900-01-01',
  `is_lic_forever` varchar(1) DEFAULT '0' COMMENT '是否永久 0-否 1-是 默认=0',
  `lic_scope` text COMMENT '经营范围',
  `org_code` varchar(20) DEFAULT NULL COMMENT '组织机构代码证号码',
  `lic_photo` varchar(100) DEFAULT NULL COMMENT '营业执照副本图片',
  `org_photo` varchar(100) DEFAULT NULL COMMENT '组织机构代码证图片',
  `legal_person` varchar(20) DEFAULT NULL COMMENT '法人姓名',
  `legal_mobile` varchar(20) DEFAULT NULL COMMENT '法人联系电话',
  `legal_photo_1` varchar(100) DEFAULT NULL COMMENT '法人身份证正面',
  `legal_photo_2` varchar(100) DEFAULT NULL COMMENT '法人身份证反面',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ep_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='企业信息表';

-- ----------------------------
-- Records of mt_ep_info
-- ----------------------------

-- ----------------------------
-- Table structure for mt_ep_role
-- ----------------------------
DROP TABLE IF EXISTS `mt_ep_role`;
CREATE TABLE `mt_ep_role` (
  `ep_role_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '企业角色ID',
  `ep_role_name` varchar(10) DEFAULT NULL COMMENT '角色名称',
  `ep_id` int(11) DEFAULT NULL COMMENT '所属企业ID',
  `ep_power_list` varchar(100) DEFAULT NULL COMMENT '权限列表，以 “,” 分隔',
  `uid` int(11) DEFAULT NULL COMMENT '创建人ID',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `status` varchar(1) DEFAULT NULL COMMENT '状态 0-无效 1-有效',
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后更新时间',
  PRIMARY KEY (`ep_role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='企业角色表';

-- ----------------------------
-- Records of mt_ep_role
-- ----------------------------

-- ----------------------------
-- Table structure for mt_expo_info
-- ----------------------------
DROP TABLE IF EXISTS `mt_expo_info`;
CREATE TABLE `mt_expo_info` (
  `expo_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '展会ID',
  `expo_topic` varchar(100) DEFAULT NULL COMMENT '展会名称',
  `expo_range` varchar(50) DEFAULT NULL COMMENT '展品范围',
  `expo_start_d` varchar(10) DEFAULT NULL COMMENT '举办日期（开始）',
  `expo_end_d` varchar(10) DEFAULT NULL COMMENT '举办日期（结束）',
  `expo_period` varchar(20) DEFAULT NULL COMMENT '举办周期',
  `expo_city` int(11) DEFAULT NULL COMMENT '城市',
  `expo_country` varchar(10) DEFAULT NULL COMMENT '国家',
  `creater` int(11) DEFAULT NULL COMMENT '发布人',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  PRIMARY KEY (`expo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='展会信息表';

-- ----------------------------
-- Records of mt_expo_info
-- ----------------------------

-- ----------------------------
-- Table structure for mt_job
-- ----------------------------
DROP TABLE IF EXISTS `mt_job`;
CREATE TABLE `mt_job` (
  `job_id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL COMMENT '发起人ID',
  `job_cat_id_1` int(11) DEFAULT NULL COMMENT '任务1级分类',
  `job_cat_id_2` int(11) DEFAULT NULL COMMENT '任务2级分类',
  `job_topic` varchar(10) DEFAULT NULL COMMENT '任务主题',
  `job_hangye` varchar(20) DEFAULT NULL COMMENT '行业属性',
  `job_begin_d` varchar(10) DEFAULT NULL COMMENT '任务开始日期',
  `job_begin_t` varchar(5) DEFAULT NULL COMMENT '任务开始时间，时:分，例如：21:16',
  `job_end_d` varchar(10) DEFAULT NULL COMMENT '任务结束日期，年月日，例如：2017-05-30',
  `job_end_t` varchar(5) DEFAULT NULL COMMENT '任务结束时间，精确到分，格式：21:16',
  `job_start_country` int(11) DEFAULT NULL COMMENT '起始地点（国家）ID',
  `job_start_city` int(11) DEFAULT NULL COMMENT '起始地点（城市）ID',
  `job_start_address` varchar(255) DEFAULT NULL COMMENT '起始地点（详细地址）',
  `job_end_country` int(11) DEFAULT NULL COMMENT '结束地点（国家）ID',
  `job_end_city` int(11) DEFAULT NULL COMMENT '结束地点（城市）ID',
  `job_end_address` varchar(255) DEFAULT NULL COMMENT '结束地点（详细地址）',
  `job_person_num` smallint(2) DEFAULT '1' COMMENT '人员数量 默认=1',
  `job_person_male` smallint(2) DEFAULT NULL COMMENT '男人数量',
  `job_person_famale` smallint(2) DEFAULT NULL COMMENT '女人数量',
  `job_person_child` smallint(2) DEFAULT NULL COMMENT '儿童数量',
  `job_language` varchar(255) DEFAULT NULL COMMENT '用户具备的语言能力，json字符串，例如：[{"lang":"中文","level":"精通"},{"lang":"英语","level":"熟练"}]',
  `job_driver` varchar(1) DEFAULT '0' COMMENT '驾驶能力 0-不会开车 1-会开车 默认=0',
  `job_need_car` varchar(1) DEFAULT '0' COMMENT '是否需要车 0-不需要 1-需要 默认=0',
  `job_car_type` varchar(10) DEFAULT NULL COMMENT '车型',
  `job_car_seats_num` smallint(2) DEFAULT '0' COMMENT '座位数 默认=0',
  `job_car_child_num` tinyint(1) DEFAULT '0' COMMENT '儿童座椅数， 默认=0',
  `job_car_method` varchar(1) DEFAULT '0' COMMENT '用车类型 0-不用车 1-仅接送 2-全程，默认=0',
  `job_car_start_d` varchar(10) DEFAULT NULL COMMENT '出发日期，格式：2008-01-31',
  `job_car_start_t` varchar(5) DEFAULT NULL COMMENT '出发时间，格式：21：10',
  `job_car_start_country` int(11) DEFAULT NULL COMMENT '出发地点（国家）ID',
  `job_car_start_city` int(11) DEFAULT NULL COMMENT '出发地点（城市）ID',
  `job_car_start_address` varchar(255) DEFAULT NULL COMMENT '出发地址（详细地址）',
  `job_remark` text COMMENT '备注',
  `job_attachment` text COMMENT '附件（最多5个）json字符串，格式如：[{"file_name":"xxx.jpg","file_path":"/images/attachment/33/1706/"},{"file_name":"yyy.jpg","file_path":"/images/attachment/65/1704/"}]',
  `job_budget` decimal(10,2) DEFAULT NULL COMMENT '预算价格',
  `job_close_date` varchar(10) DEFAULT NULL COMMENT '截止日期，任务在指定日期23：59：59失效',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后修改时间',
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='任务表';

-- ----------------------------
-- Records of mt_job
-- ----------------------------

-- ----------------------------
-- Table structure for mt_job_catalog
-- ----------------------------
DROP TABLE IF EXISTS `mt_job_catalog`;
CREATE TABLE `mt_job_catalog` (
  `job_cat_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主题分类ID',
  `job_cat_name` varchar(10) DEFAULT NULL COMMENT '分类名称',
  `job_cat_level` int(11) DEFAULT '0' COMMENT '分类级别，最高级为0',
  `job_cat_parent` int(11) DEFAULT '0' COMMENT '父分类ID，最高级分类的父ID为0',
  `status` varchar(1) DEFAULT NULL COMMENT '状态 0-无效 1-有效',
  PRIMARY KEY (`job_cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='任务主题分类';

-- ----------------------------
-- Records of mt_job_catalog
-- ----------------------------

-- ----------------------------
-- Table structure for mt_log_record
-- ----------------------------
DROP TABLE IF EXISTS `mt_log_record`;
CREATE TABLE `mt_log_record` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `os` varchar(18) DEFAULT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COMMENT='后台操作日志记录';

-- ----------------------------
-- Records of mt_log_record
-- ----------------------------
INSERT INTO `mt_log_record` VALUES ('87', '1', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-03 15:08:26');
INSERT INTO `mt_log_record` VALUES ('88', '1', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-04 16:44:09');
INSERT INTO `mt_log_record` VALUES ('89', '1', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-04 17:27:46');
INSERT INTO `mt_log_record` VALUES ('90', '0', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-05 23:52:26');
INSERT INTO `mt_log_record` VALUES ('91', '0', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-05 23:53:07');
INSERT INTO `mt_log_record` VALUES ('92', '0', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-05 23:54:17');
INSERT INTO `mt_log_record` VALUES ('93', '0', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-05 23:55:05');
INSERT INTO `mt_log_record` VALUES ('94', '0', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-05 23:57:58');
INSERT INTO `mt_log_record` VALUES ('95', '0', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-06 00:01:44');
INSERT INTO `mt_log_record` VALUES ('96', '0', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-06 00:03:19');
INSERT INTO `mt_log_record` VALUES ('97', '0', '::1', 'Windows 10', 'chrome-59', '登录成功', '2017-07-07 01:41:59');

-- ----------------------------
-- Table structure for mt_mobile_code
-- ----------------------------
DROP TABLE IF EXISTS `mt_mobile_code`;
CREATE TABLE `mt_mobile_code` (
  `region_name` varchar(20) DEFAULT NULL,
  `mobile_pre` varchar(8) DEFAULT NULL,
  `zhou` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='各国手机区号';

-- ----------------------------
-- Records of mt_mobile_code
-- ----------------------------

-- ----------------------------
-- Table structure for mt_offer
-- ----------------------------
DROP TABLE IF EXISTS `mt_offer`;
CREATE TABLE `mt_offer` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '报价ID',
  `offer_uid` int(11) DEFAULT NULL COMMENT '报价译员ID',
  `job_id` int(11) DEFAULT NULL COMMENT '任务ID',
  `offer_price` decimal(10,2) DEFAULT NULL COMMENT '出价',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `offer_status` varchar(1) DEFAULT '1' COMMENT '报价状态 0-无效 1-询价中 2-被采纳 3-被拒绝 默认为1',
  `updatetime` timestamp NULL DEFAULT NULL COMMENT '采纳时间，默认为NULL，当被采纳时才记录当前时间',
  PRIMARY KEY (`offer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='报价记录';

-- ----------------------------
-- Records of mt_offer
-- ----------------------------

-- ----------------------------
-- Table structure for mt_order
-- ----------------------------
DROP TABLE IF EXISTS `mt_order`;
CREATE TABLE `mt_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `job_id` int(11) DEFAULT NULL COMMENT '任务关联ID',
  `offer_id` int(11) DEFAULT NULL COMMENT '报价单关联ID',
  `job_info` text COMMENT '任务详情，json',
  `supplier_id` int(11) DEFAULT NULL COMMENT '译员ID',
  `uid` int(11) DEFAULT NULL COMMENT '客户ID',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单创建时间',
  `job_begin_d` varchar(10) DEFAULT NULL COMMENT '执行日期开始',
  `job_end_d` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '执行日期结束',
  `order_status` varchar(1) DEFAULT '1' COMMENT '订单状态 0-作废 1-执行中 2-完结 默认=1',
  `job_country` int(11) DEFAULT NULL COMMENT '执行地点（国家）ID',
  `job_city` int(11) DEFAULT NULL COMMENT '执行地点（城市）',
  `order_price` decimal(10,2) DEFAULT NULL COMMENT '交易金额',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of mt_order
-- ----------------------------

-- ----------------------------
-- Table structure for mt_person_info
-- ----------------------------
DROP TABLE IF EXISTS `mt_person_info`;
CREATE TABLE `mt_person_info` (
  `person_info_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '个人信息记录ID，自增量',
  `uid` int(11) DEFAULT NULL COMMENT '用户ID',
  `name` varchar(20) DEFAULT NULL COMMENT '姓名',
  `sexy` varchar(1) DEFAULT NULL COMMENT '性别 0--女 1-男 2-保密',
  `birthday` varchar(10) DEFAULT NULL COMMENT '生日 1900-01-01',
  `photo` varchar(100) DEFAULT NULL COMMENT '头像图片',
  `b_country` varchar(20) DEFAULT NULL COMMENT '籍贯-国家名称',
  `b_province` varchar(20) DEFAULT NULL COMMENT '籍贯-省/州名称',
  `b_city` varchar(20) DEFAULT NULL COMMENT '籍贯-城市名称',
  `l_country` varchar(20) DEFAULT NULL COMMENT '所在地-国家名称',
  `l_province` varchar(20) DEFAULT NULL COMMENT '所在地-省/州名称',
  `l_city` varchar(20) DEFAULT NULL COMMENT '所在地-城市名称',
  `l_address` varchar(255) DEFAULT NULL COMMENT '所在地-详细地址',
  `weixin` varchar(20) DEFAULT NULL COMMENT '微信号码',
  `qq` varchar(20) DEFAULT NULL COMMENT 'QQ号码',
  `ID_type` varchar(1) DEFAULT NULL COMMENT '证件类型 1-身份证 2-护照',
  `ID_number` varchar(20) DEFAULT NULL COMMENT '证件号码',
  `ID_photo_1` varchar(100) DEFAULT NULL COMMENT '证件照片（正面）url',
  `ID_photo_2` varchar(100) DEFAULT NULL COMMENT '证件照片（反面）url',
  `ID_exp_date` varchar(10) DEFAULT NULL COMMENT '证件有效期',
  `ID_is_forever` varchar(1) DEFAULT NULL COMMENT '证件是否永久有效 0-否 1-是 默认为否',
  `mobile_pre` varchar(6) DEFAULT NULL COMMENT '手机区号',
  `mobile` varchar(20) DEFAULT NULL COMMENT '手机号码',
  `email` varchar(50) DEFAULT NULL COMMENT '电子邮箱',
  `is_ID_true` varchar(1) DEFAULT '0' COMMENT '证件是否验证通过 0-否 1-是',
  `is_mobile_true` varchar(1) DEFAULT '0' COMMENT '手机号码是否验证通过 0-否 1-是',
  `is_email_true` varchar(1) DEFAULT '0' COMMENT '邮箱是否验证通过 0-否 1-是',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`person_info_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='个人用户信息表';

-- ----------------------------
-- Records of mt_person_info
-- ----------------------------

-- ----------------------------
-- Table structure for mt_power
-- ----------------------------
DROP TABLE IF EXISTS `mt_power`;
CREATE TABLE `mt_power` (
  `power_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `power_code` varchar(20) DEFAULT NULL COMMENT '权限代码',
  `power_controller` varchar(30) DEFAULT NULL COMMENT '控制器名称',
  `power_action` varchar(30) DEFAULT NULL COMMENT '方法名称',
  PRIMARY KEY (`power_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='权限列表';

-- ----------------------------
-- Records of mt_power
-- ----------------------------

-- ----------------------------
-- Table structure for mt_region
-- ----------------------------
DROP TABLE IF EXISTS `mt_region`;
CREATE TABLE `mt_region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(20) DEFAULT NULL COMMENT '国家、省、市名称',
  `region_parent` int(11) DEFAULT NULL COMMENT '父级ID',
  `region_level` int(11) DEFAULT NULL COMMENT '级别 0-国家 1-省 2- 城市',
  PRIMARY KEY (`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='国家地区表';

-- ----------------------------
-- Records of mt_region
-- ----------------------------

-- ----------------------------
-- Table structure for mt_role
-- ----------------------------
DROP TABLE IF EXISTS `mt_role`;
CREATE TABLE `mt_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `role_name` varchar(10) DEFAULT NULL COMMENT '角色名称',
  `role_power` text COMMENT '权限集合',
  `status` varchar(1) DEFAULT '1' COMMENT '状态 0-无效 1-有效',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of mt_role
-- ----------------------------
INSERT INTO `mt_role` VALUES ('1', '系统管理员', null, '1');

-- ----------------------------
-- Table structure for mt_user
-- ----------------------------
DROP TABLE IF EXISTS `mt_user`;
CREATE TABLE `mt_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `account` varchar(20) DEFAULT NULL COMMENT '登录账号',
  `pwd` varchar(40) DEFAULT NULL COMMENT '登录密码',
  `salt` int(6) DEFAULT NULL COMMENT '用于混淆密码',
  `user_type` varchar(1) DEFAULT NULL COMMENT '用户类型  s-个人用户 e-企业用户',
  `status` varchar(1) DEFAULT '1' COMMENT '用户状态 0-冻结 1-正常 默认值=1',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '注册时间戳记',
  `is_supplier` varchar(1) DEFAULT '0' COMMENT '是否译员 0-否 1-是 默认=0',
  `is_admin` varchar(1) DEFAULT '0' COMMENT '是否管理员 0-否 1-是 默认=0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='注册基本数据';

-- ----------------------------
-- Records of mt_user
-- ----------------------------
