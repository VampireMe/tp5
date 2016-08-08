/*
Navicat MySQL Data Transfer

Source Server         : 192.168.28.50
Source Server Version : 50546
Source Host           : 192.168.28.50:3306
Source Database       : 9939_com_portal

Target Server Type    : MYSQL
Target Server Version : 50546
File Encoding         : 65001

Date: 2016-08-08 18:00:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for func
-- ----------------------------
DROP TABLE IF EXISTS `func`;
CREATE TABLE `func` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(50) NOT NULL,
  `moduleid` varchar(50) DEFAULT NULL,
  `controllerid` varchar(50) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `show_style` tinyint(4) NOT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `is_super` int(11) DEFAULT '0' COMMENT '是否超级权限 1、是;0、否',
  `order_by` int(11) DEFAULT '0',
  `create_time` int(10) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '是否显示 1、显示 0、不显示',
  PRIMARY KEY (`id`),
  KEY `index_parent_status_orderby` (`parent_id`,`status`,`order_by`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of func
-- ----------------------------
INSERT INTO `func` VALUES ('1', '系统管理', 'system', 'default', '/system/default/index', '0', '0', '系统设置', '0', '10', null, '1');
INSERT INTO `func` VALUES ('2', '功能管理', 'system', 'func', '/system/func/index', '1', '0', '功能列表', '0', '0', null, '1');
INSERT INTO `func` VALUES ('3', '角色管理', 'system', 'role', '/system/role/index', '1', '0', '角色管理', '0', '0', '1344744889', '1');
INSERT INTO `func` VALUES ('4', '用户管理', 'system', 'user', '/system/user/index', '1', '0', '用户管理', '0', '0', '1344824848', '1');
INSERT INTO `func` VALUES ('5', '基础数据', 'basedata', 'default', '/basedata/default/index', '0', '0', '基础数据管理', '0', '0', null, '1');
INSERT INTO `func` VALUES ('6', '疾病管理', 'basedata', 'disease', '/basedata/disease/index', '5', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('7', '症状管理', 'basedata', 'symptom', '/basedata/symptom/index', '5', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('8', '科室管理', 'basedata', 'department', '/basedata/department/index', '5', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('9', '内容管理', 'cms', 'default', '/cms/default/index', '0', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('10', '问答管理', 'ask', 'default ', '/ask/default/index ', '0', '0', '问答管理', '0', '0', null, '1');
INSERT INTO `func` VALUES ('11', '统计管理', '', '', '', '0', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('12', '生成管理', 'generate', 'default', '/generate/default/index', '0', '0', '生成管理', '0', '0', null, '1');
INSERT INTO `func` VALUES ('13', '采集管理', '', '', '', '0', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('14', '会员管理', '', '', '', '0', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('15', '医圈管理', '', '', '', '0', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('16', '病案管理', '', '', '', '0', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('17', '分类管理', 'basedata', 'category', '/basedata/category/index', '5', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('18', '疾病文章管理', 'cms', 'article', '/cms/article/index', '9', '0', '疾病文章管理', '0', '0', null, '1');
INSERT INTO `func` VALUES ('19', '症状图片上传', 'basedata', 'symptom', '/basedata/symptom/upload', '5', '0', '', '0', '0', null, '0');
INSERT INTO `func` VALUES ('20', '部位管理', 'basedata', 'part', '/basedata/part/index', '5', '0', '', '0', '0', null, '1');
INSERT INTO `func` VALUES ('21', '缓存管理', 'generate', 'cache', '/generate/cache/index', '12', '0', '缓存管理', '0', '0', null, '1');
INSERT INTO `func` VALUES ('25', '生成 sitemap', 'generate', 'sitemap', '/generate/sitemap/index', '12', '0', '生成相关的 sitemap 地址', '0', '0', null, '1');
INSERT INTO `func` VALUES ('26', '疾病关键词', 'ask', 'keywords', '/ask/keywords/index', '10', '0', '疾病关键词操作', '0', '0', null, '1');
INSERT INTO `func` VALUES ('27', '广告位管理', 'cms', 'position', '/cms/position/index', '9', '0', '广告位管理', '0', '0', '1470650258', '1');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) DEFAULT NULL,
  `user_group_id` int(10) unsigned NOT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `create_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('4', '超级管理员', '1', '管理员权限 ', '1344768875');
INSERT INTO `roles` VALUES ('5', '管理员', '1', '管理员', '1383274250');
INSERT INTO `roles` VALUES ('6', '编辑', '1', '编辑', '0');

-- ----------------------------
-- Table structure for role_purview
-- ----------------------------
DROP TABLE IF EXISTS `role_purview`;
CREATE TABLE `role_purview` (
  `role_id` int(10) unsigned NOT NULL,
  `func_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`func_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_purview
-- ----------------------------
INSERT INTO `role_purview` VALUES ('4', '1');
INSERT INTO `role_purview` VALUES ('4', '2');
INSERT INTO `role_purview` VALUES ('4', '3');
INSERT INTO `role_purview` VALUES ('4', '4');
INSERT INTO `role_purview` VALUES ('4', '5');
INSERT INTO `role_purview` VALUES ('4', '6');
INSERT INTO `role_purview` VALUES ('4', '7');
INSERT INTO `role_purview` VALUES ('4', '8');
INSERT INTO `role_purview` VALUES ('4', '9');
INSERT INTO `role_purview` VALUES ('4', '10');
INSERT INTO `role_purview` VALUES ('4', '11');
INSERT INTO `role_purview` VALUES ('4', '12');
INSERT INTO `role_purview` VALUES ('4', '13');
INSERT INTO `role_purview` VALUES ('4', '14');
INSERT INTO `role_purview` VALUES ('4', '15');
INSERT INTO `role_purview` VALUES ('4', '16');
INSERT INTO `role_purview` VALUES ('4', '17');
INSERT INTO `role_purview` VALUES ('4', '18');
INSERT INTO `role_purview` VALUES ('4', '19');
INSERT INTO `role_purview` VALUES ('5', '1');
INSERT INTO `role_purview` VALUES ('5', '2');
INSERT INTO `role_purview` VALUES ('5', '3');
INSERT INTO `role_purview` VALUES ('5', '4');
INSERT INTO `role_purview` VALUES ('5', '5');
INSERT INTO `role_purview` VALUES ('5', '6');
INSERT INTO `role_purview` VALUES ('5', '7');
INSERT INTO `role_purview` VALUES ('5', '8');
INSERT INTO `role_purview` VALUES ('5', '9');
INSERT INTO `role_purview` VALUES ('5', '10');
INSERT INTO `role_purview` VALUES ('5', '11');
INSERT INTO `role_purview` VALUES ('5', '12');
INSERT INTO `role_purview` VALUES ('5', '13');
INSERT INTO `role_purview` VALUES ('5', '17');
INSERT INTO `role_purview` VALUES ('5', '18');
INSERT INTO `role_purview` VALUES ('6', '5');
INSERT INTO `role_purview` VALUES ('6', '6');
INSERT INTO `role_purview` VALUES ('6', '7');
INSERT INTO `role_purview` VALUES ('6', '8');
INSERT INTO `role_purview` VALUES ('6', '9');
INSERT INTO `role_purview` VALUES ('6', '10');
INSERT INTO `role_purview` VALUES ('6', '11');
INSERT INTO `role_purview` VALUES ('6', '12');
INSERT INTO `role_purview` VALUES ('6', '13');
INSERT INTO `role_purview` VALUES ('6', '14');
INSERT INTO `role_purview` VALUES ('6', '15');
INSERT INTO `role_purview` VALUES ('6', '16');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `real_name` varchar(20) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `user_group_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0、已删除 1、有效',
  `auth_key` varchar(50) DEFAULT NULL,
  `password` varchar(65) DEFAULT NULL,
  `is_super` tinyint(2) DEFAULT '0' COMMENT '是否为超级用户 1、是 0、否',
  `create_time` int(10) unsigned DEFAULT NULL,
  `update_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '5xdd@163.com', '王普强', '15810309771', '1', '1', '1344772904', '82fec8c9fe34bbf1c1561639a98afc8f', '1', '1344772904', '1456741441');

-- ----------------------------
-- Table structure for user_group
-- ----------------------------
DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) DEFAULT NULL,
  `contact_name` varchar(20) DEFAULT NULL,
  `contact_phone` varchar(15) DEFAULT NULL,
  `addr` varchar(255) DEFAULT NULL,
  `create_time` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_group
-- ----------------------------

-- ----------------------------
-- Table structure for user_purview
-- ----------------------------
DROP TABLE IF EXISTS `user_purview`;
CREATE TABLE `user_purview` (
  `user_id` int(10) unsigned NOT NULL,
  `func_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`func_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_purview
-- ----------------------------
INSERT INTO `user_purview` VALUES ('1', '1');
INSERT INTO `user_purview` VALUES ('1', '2');
INSERT INTO `user_purview` VALUES ('1', '3');
INSERT INTO `user_purview` VALUES ('1', '4');
INSERT INTO `user_purview` VALUES ('1', '5');
INSERT INTO `user_purview` VALUES ('1', '6');
INSERT INTO `user_purview` VALUES ('1', '7');
INSERT INTO `user_purview` VALUES ('1', '8');
INSERT INTO `user_purview` VALUES ('1', '9');
INSERT INTO `user_purview` VALUES ('1', '10');
INSERT INTO `user_purview` VALUES ('1', '11');
INSERT INTO `user_purview` VALUES ('1', '12');
INSERT INTO `user_purview` VALUES ('1', '13');
INSERT INTO `user_purview` VALUES ('1', '14');
INSERT INTO `user_purview` VALUES ('1', '15');
INSERT INTO `user_purview` VALUES ('1', '16');
INSERT INTO `user_purview` VALUES ('1', '17');
INSERT INTO `user_purview` VALUES ('1', '18');
INSERT INTO `user_purview` VALUES ('1', '19');

-- ----------------------------
-- Table structure for user_role_relate
-- ----------------------------
DROP TABLE IF EXISTS `user_role_relate`;
CREATE TABLE `user_role_relate` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_role_relate
-- ----------------------------
INSERT INTO `user_role_relate` VALUES ('1', '4');
