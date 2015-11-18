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

----
--菜单
----
DROP TABLE IF EXISTS `p_menu`;
CREATE TABLE p_menu (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  orderNum int(11),
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

insert into p_menu(name,orderNum) values('原盅炖汤类','1');
insert into p_menu(name,orderNum) values('老火煲粥类','2');
insert into p_menu(name,orderNum) values('广式肠粉类','3');
insert into p_menu(name,orderNum) values('精品炒饭类','4');

DROP TABLE IF EXISTS `p_item`;
create table p_item (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  menuId int(11),
  orderNum int(11),
  price int(11),
  sales int(11),
  picAddress varchar(100),
  PRIMARY KEY (id)
);
--原盅炖汤类
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('青榄鲜鲍鱼仔炖鸡','1','1','25','5','1-1.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('海底椰园肉炖猪展','1','2','20','97','1-2.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('花旗参炖竹丝鸡','1','3','16','54','1-3.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('凉瓜炖排骨汤','1','4','16','35','1-4.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('马蹄红萝卜栗米炖龙骨','1','5','13','85','1-5.jpg');

--老火煲粥类
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('枸杞猪肝粥','2','1','12','8','2-1.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('状元及第粥','2','2','10','21','2-2.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('皮蛋瘦肉粥','2','3','10','45','2-3.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('猪肝肉粥','2','4','12','5','2-4.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('滑鸡粥','2','5','12','5','2-5.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('鱼片粥','2','6','12','5','2-6.jpg');
--广式肠粉类
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('牛肉肠粉','3','1','16','25','3-1.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('特色炒肠粉','3','2','12','25','3-2.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('韭王肉肠粉','3','3','12','34','3-3.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('猪润肠','3','4','12','12','3-4.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('鱼片肠','3','5','10','34','3-5.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('金黄炸两肠','3','6','10','9','3-6.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('鸡蛋肠粉','3','7','8','15','3-7.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('斋肠','3','8','6','22','3-8.jpg');

--精品炒饭类
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('西式炒饭','4','1','18','25','4-1.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('Xo酱海鲜炒饭','4','2','26','52','4-2.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('上水特色炒饭','4','3','43','23','4-3.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('福建炒饭','4','4','83','12','4-4.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('豉油皇叉烧菜粒炒饭','5','5','13','54','4-5.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('生炒牛肉饭','4','6','13','32','4-6.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('印尼炒饭','4','7','13','72','4-7.jpg');
insert into p_item(name,menuId,orderNum,price,sales,picAddress) value('扬州炒饭','4','8','13','25','4-8.jpg');


select id,name,orderNum from p_menu order by orderNum

