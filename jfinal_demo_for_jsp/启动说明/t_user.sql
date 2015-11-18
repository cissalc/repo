/*
Navicat MySQL Data Transfer

Source Server         : slave01
Source Server Version : 50173
Source Host           : 192.168.31.203:3306
Source Database       : jfinal_demo

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2015-11-18 18:02:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `userId` varchar(20) NOT NULL,
  `userName` varchar(200) DEFAULT NULL,
  `enabled` varchar(200) DEFAULT NULL,
  `passWord` varchar(200) DEFAULT NULL,
  `deptCode` varchar(200) DEFAULT NULL,
  `deptName` varchar(200) DEFAULT NULL,
  `posCode` varchar(200) DEFAULT NULL,
  `posName` varchar(200) DEFAULT NULL,
  `mobilePhone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('1', '1', '0', null, null, '1', null, '1', '1', '1');
INSERT INTO `t_user` VALUES ('2', '2', '0', null, null, '2', null, '2', null, null);
INSERT INTO `t_user` VALUES ('3', '3', '0', null, null, '3', null, '3', '3', '3');
INSERT INTO `t_user` VALUES ('LIUJINMEI', '刘晋梅', '1', '{SSHA}WDC9o9TwubzK6qjtJ34H8mPeCk8xNDQ1OTQyMjk3MDUx', '001', '软件开发部', '006', '产品负责人', '18925231121', '***');
INSERT INTO `t_user` VALUES ('LIUXIANGFEI', '刘翔飞', '1', '{SSHA}WDC9o9TwubzK6qjtJ34H8mPeCk8xNDQ1OTQyMjk3MDUx', '001', '软件开发部', '006', '程序员鼓励师', '13025442101', '1195718067@qq.com');
INSERT INTO `t_user` VALUES ('LIUYUZHANG', '刘裕章', '1', '{SSHA}WDC9o9TwubzK6qjtJ34H8mPeCk8xNDQ1OTQyMjk3MDUx', '001', '软件开发部', '001', '屌丝程序猿', '18681526878', 'lyzsysu@qq.com');
INSERT INTO `t_user` VALUES ('MADONG', '麻东', '1', '{SSHA}WDC9o9TwubzK6qjtJ34H8mPeCk8xNDQ1OTQyMjk3MDUx', '001', '软件开发部', '005', 'UI设计工程师', '***', '***');
INSERT INTO `t_user` VALUES ('WANGDI', '王迪', '1', '{SSHA}WDC9o9TwubzK6qjtJ34H8mPeCk8xNDQ1OTQyMjk3MDUx', '002', '财务部', '003', '高级程序员鼓励师', '***', '87336271@qq.com');
INSERT INTO `t_user` VALUES ('YUJIE', '余捷', '1', '{SSHA}WDC9o9TwubzK6qjtJ34H8mPeCk8xNDQ1OTQyMjk3MDUx', '002', '财务部', '002', '财务人员', '***', 'yujie@eastonedata.com');
INSERT INTO `t_user` VALUES ('ZHANGDEWEN', '张德文', '1', '{SSHA}WDC9o9TwubzK6qjtJ34H8mPeCk8xNDQ1OTQyMjk3MDUx', '001', '软件开发部', '004', '产品经理', '***', '22255167@qq.com');
