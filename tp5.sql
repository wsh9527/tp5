/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50547
Source Host           : 192.168.1.234:3306
Source Database       : tp5

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-01-06 17:27:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wx_user
-- ----------------------------
DROP TABLE IF EXISTS `wx_user`;
CREATE TABLE `wx_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `role` smallint(6) unsigned NOT NULL COMMENT '组ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态 1:启用 0:禁止',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注说明',
  `last_login_time` int(11) unsigned NOT NULL COMMENT '最后登录时间',
  `last_login_ip` varchar(15) DEFAULT NULL COMMENT '最后登录IP',
  `last_location` varchar(100) DEFAULT NULL COMMENT '最后登录位置',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_user
-- ----------------------------
INSERT INTO `wx_user` VALUES ('1', 'admin', '4297f44b13955235245b2497399d7a93', '5', '1', '', '1478251960', '127.0.0.1', '');

-- ----------------------------
-- Table structure for wx_users
-- ----------------------------
DROP TABLE IF EXISTS `wx_users`;
CREATE TABLE `wx_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(90) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `lasttime` varchar(13) NOT NULL,
  `status` varchar(1) NOT NULL,
  `createip` varchar(30) NOT NULL,
  `lastip` varchar(30) NOT NULL,
  `diynum` int(11) NOT NULL,
  `activitynum` int(11) NOT NULL,
  `card_num` int(11) NOT NULL,
  `card_create_status` tinyint(1) NOT NULL,
  `wechat_card_num` mediumint(4) NOT NULL DEFAULT '0',
  `money` int(11) NOT NULL,
  `viptime` varchar(13) NOT NULL,
  `connectnum` int(11) NOT NULL DEFAULT '0',
  `lastloginmonth` smallint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_users
-- ----------------------------
INSERT INTO `wx_users` VALUES ('1', '4', 'test', 'e10adc3949ba59abbe56e057f20f883e', '444897116@qq.com', '1478252012', '1483691939', '1', '127.0.0.1', '127.0.0.1', '0', '0', '0', '0', '1', '999999', '1509984000', '0', '1');
