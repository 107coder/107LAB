/*
Navicat MySQL Data Transfer
dgfjds
Source Server         : 本地MySQL
Source Server Version : 50725
Source Host           : localhost:3306
Source Database       : liuzihan

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-05-26 10:16:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `content` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('      计算机与信息工程学院心理健康教育工作站始建于2015年3月，在学院101办公室，占地面积50平方米。工作站领导小组由学院党委副书记、各年级辅导员、年级朋辈辅导员组成。工作站宗旨以增强学生的心理素质为目的，以普及心理健康知识，帮助学生解除心理困扰，增强心理适应能力，努力开发个人潜能，促进学生全面成长为宗旨，组织开展面向全院学生的心理健康教育的相关活动。');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `keywords` varchar(100) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `addtime` varchar(10) DEFAULT NULL,
  `content` varchar(3000) DEFAULT NULL,
  `toptop` int(2) DEFAULT NULL,
  `link` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', null, null, null, null, null, null, null);
INSERT INTO `news` VALUES ('34', '飞机回到房间', 'v展开v', '唐家三少', '1557398202', '123', '0', null);
INSERT INTO `news` VALUES ('35', '飞机回到房间', 'v展开gg', '唐家三少', '1557399284', '一定是速度会很快辜负大家。', '0', null);
INSERT INTO `news` VALUES ('36', '深度加', '国家的实力感觉', '十九分', '1557406243', '顺利度过换手率很高的啦发挥了含苞待放。', '0', null);
INSERT INTO `news` VALUES ('38', '计算机与信息工程学院举办心理健康运动会', '我校各学院纷纷举办心理健康运动会', '107Laboratory', '1557553576', '我校各学院纷纷举办心理健康运动会,精彩纷呈。', '0', null);
INSERT INTO `news` VALUES ('41', '深度加工零件数量', '塑造健全人格,成就美好未来——数学与统计学院开展心理健康教育宣传周活动', '唐家三少', '1557571446', '看过v在看守所广播和菲律宾防护各方都很，i苏菲供应商的发言稿i第三方。', '0', null);
INSERT INTO `news` VALUES ('42', '河南大学', '第一临床学院成功举办心理健康宣传周系列活动', '刘若宸', '1557571591', '戴维南定理，现代高数，概率论，c++，php，java web，phython。', '0', null);
INSERT INTO `news` VALUES ('43', '河南大学', '关注心理健康，拥抱美好明天——化学化工学院举办心理健康周系列教育活动', '刘若宸', '1557571617', '戴维南定理，现代高数，概率论，c++，php，java web，phython。', '0', null);
INSERT INTO `news` VALUES ('44', '河南大学', '土木建筑学院成功举办心理健康运动会', '刘若宸', '1557571638', '戴维南定理，现代高数，概率论，c++，php，java web，phython。', '1', './new_file.php');
INSERT INTO `news` VALUES ('45', '河南大学', '<a href=\"./new_file.php\">生命科学学院开展2017年度心理健康教育宣传系列活动</a>', '刘若宸', '1557571667', '戴维南定理，现代高数，概率论，c++，php，java web，phython。', '1', null);
INSERT INTO `news` VALUES ('46', '飞机回到房间', '<a href=\"./new_file.php\">v</a>', '十九分', '1557714995', '发货和封杀快。', '0', null);
INSERT INTO `news` VALUES ('47', '河南大学', '中美贸易战', '刘若宸', '1558353799', 'a安抚就会开始进攻和。', '0', 'new_file.php');
INSERT INTO `news` VALUES ('48', '河南大学', '中美贸易战', '刘若宸', '1558354957', '123', '0', 'new_file.php');

-- ----------------------------
-- Table structure for super
-- ----------------------------
DROP TABLE IF EXISTS `super`;
CREATE TABLE `super` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `userid` int(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sex` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of super
-- ----------------------------
INSERT INTO `super` VALUES ('1', '123456', '123456', null, '男');

-- ----------------------------
-- Table structure for text
-- ----------------------------
DROP TABLE IF EXISTS `text`;
CREATE TABLE `text` (
  `id` char(10) NOT NULL,
  `name` char(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of text
-- ----------------------------
INSERT INTO `text` VALUES ('1812050102', '刘子涵');

-- ----------------------------
-- Table structure for userload
-- ----------------------------
DROP TABLE IF EXISTS `userload`;
CREATE TABLE `userload` (
  `userid` int(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sex` varchar(3) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`,`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userload
-- ----------------------------
INSERT INTO `userload` VALUES ('1234', '1234', '3276255282@qq.com', '保密', '5');
INSERT INTO `userload` VALUES ('1234', '1234', '3276255282@qq.com', '保密', '7');
INSERT INTO `userload` VALUES ('12345', '12345', '3276255282@qq.com', '3', '8');
INSERT INTO `userload` VALUES ('123', '1223', '3276255282@qq.com', '保密', '9');
INSERT INTO `userload` VALUES ('123', '123', null, '女', '10');
