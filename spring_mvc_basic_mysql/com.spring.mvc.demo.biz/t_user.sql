/*
Navicat MySQL Data Transfer

Source Server         : aliyun
Source Server Version : 50518
Source Host           : rds52sv2id860gox5m2g.mysql.rds.aliyuncs.com:3306
Source Database       : rha4d0e6orf44k43

Target Server Type    : MYSQL
Target Server Version : 50518
File Encoding         : 65001

Date: 2015-11-03 09:07:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `userid` varchar(20) NOT NULL,
  `userName` varchar(200) DEFAULT NULL,
  `enabled` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `deptCode` varchar(200) DEFAULT NULL,
  `deptName` varchar(200) DEFAULT NULL,
  `posCode` varchar(200) DEFAULT NULL,
  `posName` varchar(200) DEFAULT NULL,
  `mobilePhone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('LIUXIANGFEI', '刘翔飞', '1', '{SSHA}WDC9o9TwubzK6qjtJ34H8mPeCk8xNDQ1OTQyMjk3MDUx', '', '', '', '', '', '');
