/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : lxf01

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-11-02 18:35:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for p_user
-- ----------------------------
DROP TABLE IF EXISTS `p_user`;
CREATE TABLE `p_user` (
  `userCode` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastName` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  PRIMARY KEY (`userCode`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of p_user
-- ----------------------------
INSERT INTO `p_user` VALUES ('1', '刘', '翔飞', '24');
INSERT INTO `p_user` VALUES ('2', '刘', '裕章', '28');
INSERT INTO `p_user` VALUES ('3', '王', '迪', '28');
INSERT INTO `p_user` VALUES ('4', '章', '德文', '30');
INSERT INTO `p_user` VALUES ('5', '余', '捷', '28');
INSERT INTO `p_user` VALUES ('6', '刘', '晋梅', '35');
INSERT INTO `p_user` VALUES ('25', 'ken', 'test', '32');
