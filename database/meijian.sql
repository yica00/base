/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : meijian

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-11-28 09:08:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comtent` text COLLATE utf8mb4_unicode_ci,
  `pid` int(11) NOT NULL,
  `is_nav` tinyint(4) NOT NULL DEFAULT '1',
  `serial_number` int(11) NOT NULL DEFAULT '0',
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, null, '0', '1', '0', '/', '2017-11-27 10:53:36', '2017-11-27 10:53:36', null);
INSERT INTO `articles` VALUES ('2', '品牌中心', null, null, null, '0', '1', '0', '/about', '2017-11-27 10:54:02', '2017-11-27 10:54:02', null);
INSERT INTO `articles` VALUES ('3', '新闻中心', null, null, null, '0', '1', '0', '/news', '2017-11-27 10:54:20', '2017-11-27 10:54:20', null);
INSERT INTO `articles` VALUES ('4', '口腔项目', null, null, null, '0', '1', '0', '/item', '2017-11-27 10:55:50', '2017-11-27 10:55:50', null);
INSERT INTO `articles` VALUES ('5', '专家团队', null, null, null, '0', '1', '0', '/team', '2017-11-27 10:56:07', '2017-11-27 10:56:07', null);
INSERT INTO `articles` VALUES ('6', '经典案例', null, null, null, '0', '1', '0', '/case', '2017-11-27 10:56:26', '2017-11-27 10:56:26', null);
INSERT INTO `articles` VALUES ('7', '先进设备', null, null, null, '0', '1', '0', '/equipment', '2017-11-27 10:56:58', '2017-11-27 10:56:58', null);
INSERT INTO `articles` VALUES ('8', '联系我们', null, null, null, '0', '1', '0', '/contact', '2017-11-27 10:57:15', '2017-11-27 10:57:15', null);
INSERT INTO `articles` VALUES ('9', '品牌简介', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">全国拥有近5万平米装饰展示区，包含软装、家具、建材及几十个不同风格实景样板间。上千名经验丰富装饰人，与200多个知名主材品牌紧密合作，并定期对施工团队进行技术、安全服务培训，力求精益求精，为广大业主提供优质装修服务。一键报价全程透明，PC+移动客户端对工地全程监控，建材产品统一集采、仓储、物流、安装。</p><p><br/></p>', '2', '1', '0', '/about', '2017-11-27 11:00:03', '2017-11-27 11:35:54', null);
INSERT INTO `articles` VALUES ('10', '品牌文化', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: red; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">全国拥有近5万平米装饰展示区，包含软装、家具、建材及几十个不同风格实景样板间。上千名经验丰富装饰人，与200多个知名主材品牌紧密合作，并定期对施工团队进行技术、安全服务培训，力求精益求精，为广大业主提供优质装修服务。一键报价全程透明，PC+移动客户端对工地全程监控，建材产品统一集采、仓储、物流、安装。1</p><p><br/></p>', '2', '1', '0', '/about/culture', '2017-11-27 11:00:20', '2017-11-27 11:36:07', null);
INSERT INTO `articles` VALUES ('11', '环境展示', null, null, null, '2', '1', '0', '/about/env', '2017-11-27 11:00:53', '2017-11-27 11:00:53', null);
INSERT INTO `articles` VALUES ('12', '荣誉资质', null, null, null, '2', '1', '0', '/about/honor', '2017-11-27 11:01:14', '2017-11-27 11:01:14', null);
INSERT INTO `articles` VALUES ('13', '医院新闻', null, null, null, '3', '1', '0', null, '2017-11-27 11:01:41', '2017-11-27 11:01:41', null);
INSERT INTO `articles` VALUES ('14', '口腔百科', null, null, null, '3', '1', '0', null, '2017-11-27 11:01:54', '2017-11-27 11:01:54', null);
INSERT INTO `articles` VALUES ('15', '口腔保养', null, null, null, '3', '1', '0', null, '2017-11-27 11:02:02', '2017-11-27 11:02:02', null);
INSERT INTO `articles` VALUES ('16', '生态种植', '/images/1511762928677.jpg', '项目的简介，请自己编辑，“白瓷娃娃””3D焕肤项目是通过全新点阵射频技术，融合高纯度生物活性能量素等，让治疗深达肌肤真皮层，促进胶原蛋白新生，独有营养物质深入皮肤深层，增加皮肤弹性，缩小毛孔，祛除皱纹。“白瓷娃娃””3D焕肤项目是通过全新点阵射频技术', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">小曲大学生活即将结束，快要进入实习阶段了，对此她有一个顾虑让她非常担心，因为小曲的牙齿不争气，上颌前突，下牙不齐，害怕出去面试的时候首先会扣了印象分。在朋友们的建议下，小曲来到爱齿尔口腔进行牙齿矫正，希望能够在毕业前将自己的牙齿变得整整齐齐，漂漂亮亮。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">小曲大学生活即将结束，快要进入实习阶段了，对此她有一个顾虑让她非常担心，因为小曲的牙齿不争气，上颌前突，下牙不齐，害怕出去面试的时候首先会扣了印象分。在朋友们的建议下，小曲来到爱齿尔口腔进行牙齿矫正，希望能够在毕业前将自己的牙齿变得整整齐齐，漂漂亮亮。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">小曲大学生活即将结束，快要进入实习阶段了，对此她有一个顾虑让她非常担心，因为小曲的牙齿不争气，上颌前突，下牙不齐，害怕出去面试的时候首先会扣了印象分。在朋友们的建议下，小曲来到爱齿尔口腔进行牙齿矫正，希望能够在毕业前将自己的牙齿变得整整齐齐，漂漂亮亮。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">小曲大学生活即将结束，快要进入实习阶段了，对此她有一个顾虑让她非常担心，因为小曲的牙齿不争气，上颌前突，下牙不齐，害怕出去面试的时候首先会扣了印象分。在朋友们的建议下，小曲来到爱齿尔口腔进行牙齿矫正，希望能够在毕业前将自己的牙齿变得整整齐齐，漂漂亮亮。</p><p><br/></p>', '4', '1', '0', '1', '2017-11-27 11:02:31', '2017-11-27 17:39:24', null);
INSERT INTO `articles` VALUES ('17', '联系我们', null, null, null, '8', '1', '0', '/contact', '2017-11-27 11:03:12', '2017-11-27 11:03:12', null);
INSERT INTO `articles` VALUES ('18', '预约挂号', null, null, null, '8', '1', '0', '/contact/order', '2017-11-27 11:03:49', '2017-11-27 11:03:49', null);
INSERT INTO `articles` VALUES ('19', '环境1', '/images/1511753792745.jpg', null, null, '11', '0', '0', null, '2017-11-27 11:36:32', '2017-11-27 11:36:32', null);
INSERT INTO `articles` VALUES ('20', '环境2', '/images/1511753806348.jpg', null, null, '11', '0', '0', null, '2017-11-27 11:36:46', '2017-11-27 11:36:46', null);
INSERT INTO `articles` VALUES ('21', '荣誉1', '/images/1511753834480.jpg', null, null, '12', '0', '0', null, '2017-11-27 11:37:14', '2017-11-27 11:37:14', null);
INSERT INTO `articles` VALUES ('22', '他们因为牙齿缺失', '/images/1511754984298.jpg', '他们因为牙齿缺失，硬的啃不动、筋道的嚼不了，勉强吃下的软食还得忍受“塞牙”“疼痛”的尴尬。人到老年本身吸收就...', '<p>他们因为牙齿缺失，硬的啃不动、筋道的嚼不了，勉强吃下的软食还得忍受“塞牙”“疼痛”的尴尬。人到老年本身吸收就...</p><p>他们因为牙齿缺失，硬的啃不动、筋道的嚼不了，勉强吃下的软食还得忍受“塞牙”“疼痛”的尴尬。人到老年本身吸收就...</p><p>、他们因为牙齿缺失，硬的啃不动、筋道的嚼不了，勉强吃下的软食还得忍受“塞牙”“疼痛”的尴尬。人到老年本身吸收就...</p><p>他们因为牙齿缺失，硬的啃不动、筋道的嚼不了，勉强吃下的软食还得忍受“塞牙”“疼痛”的尴尬。人到老年本身吸收就...</p>', '13', '0', '0', null, '2017-11-27 11:56:24', '2017-11-27 12:01:53', null);
INSERT INTO `articles` VALUES ('23', '种植牙比传统假牙更具有哪些优势?', null, '人工种植牙，并非种植牙齿，而是在牙骨内打入金属牙根，待金属牙根与牙槽骨紧密结合后，在其上装置假牙。目前的种植牙适用性非常广泛，不仅可以修复单颗牙缺失还可以修复多颗牙缺失......', '<p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">&nbsp;平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”。《第33次中国互联网发展状况统计报告》显</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\"><span style=\"color: rgb(51, 51, 51); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">&nbsp;平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”。《第33次中国互联网发展状况统计报告》显</span></span></p>', '16', '0', '0', null, '2017-11-27 14:10:15', '2017-11-27 14:10:15', null);
INSERT INTO `articles` VALUES ('24', '补牙术后一定要注意', null, '补牙是较常见的一种治疗牙齿的方法。但是很多人都不会注意，补牙后的一些护理事项，从而造成牙齿再次的损害。不仅给自己带来不便，还会有很多的麻烦。那么刚补完牙要注意什么呢？......', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">小曲大学生活即将结束，快要进入实习阶段了，对此她有一个顾虑让她非常担心，因为小曲的牙齿不争气，上颌前突，下牙不齐，害怕出去面试的时候首先会扣了印象分。在朋友们的建议下，小曲来到爱齿尔口腔进行牙齿矫正，希望能够在毕业前将自己的牙齿变得整整齐齐，漂漂亮亮。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">小曲大学生活即将结束，快要进入实习阶段了，对此她有一个顾虑让她非常担心，因为小曲的牙齿不争气，</p><p><br/></p>', '16', '0', '0', null, '2017-11-27 14:10:59', '2017-11-27 14:10:59', null);
INSERT INTO `articles` VALUES ('25', 'DIO种植体+氧化锆全瓷修复体', null, '牙齿问题：上颌前突/下牙不齐\r\n,医生名字：陈秋思    治疗日期：2016年11月\r\n,详情：顾客2年前因上前牙缺失，佩戴的活动义齿异物感明显，进食易脱位，在生活和工作上都受到...', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">小曲大学生活即将结束，快要进入实习阶段了，对此她有一个顾虑让她非常担心，因为小曲的牙齿不争气，上颌前突，下牙不齐，害怕出去面试的时候首先会扣了印象分。在朋友们的建议下，小曲来到爱齿尔口腔进行牙齿矫正，希望能够在毕业前将自己的牙齿变得整整齐齐，漂漂亮亮。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">小曲大学生活即将结束，快要进入实习阶段了，对此她有一个顾虑让她非常担心，因为小曲的牙齿不争气，上颌前突，下牙不齐，害怕出去面试的时候首先会扣了印象分。在朋友们的建议下，小曲来到爱齿尔口腔进行牙齿矫正，希望能够在毕业前将自己的牙齿变得整整齐齐，漂漂亮亮。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\"><br/></p><p><br/></p>', '6', '0', '0', null, '2017-11-27 15:11:20', '2017-11-27 15:11:20', null);
INSERT INTO `articles` VALUES ('26', '牙齿正畸照片对1', null, null, '<p><br/></p><p><img src=\"/Uploads/image/151176672133413696.jpg\" title=\"151176672133413696.jpg\"/>&nbsp;<img src=\"/Uploads/image/151176672117935180.jpg\" title=\"151176672117935180.jpg\"/></p><p><br/></p>', '25', '0', '0', null, '2017-11-27 15:12:37', '2017-11-27 15:12:37', null);
INSERT INTO `articles` VALUES ('27', '那里对比2', null, null, '<p><br/></p><p><img src=\"/Uploads/image/151176672133413696.jpg\" title=\"151176672133413696.jpg\"/>&nbsp;<img src=\"/Uploads/image/151176672117935180.jpg\" title=\"151176672117935180.jpg\"/></p><p><br/></p>', '25', '0', '0', null, '2017-11-27 15:12:53', '2017-11-27 15:12:53', null);
INSERT INTO `articles` VALUES ('28', '法国赛特力Prophy-Max超声治', '/images/1511772576416.jpg', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp; &nbsp; 平均每天工作10小时以上，基本没有休息日，睡眠不足……在今天这个视屏年代，如此辛劳的无疑就是我们的眼睛了。移动网络时代，眼睛是损耗最大的器官，堪称“眼劳模”。《第33次中国互联网发展状况统计报告》显示，我国手机上网用户达到5亿。那么，我们该如何解救被视屏绑架的眼睛？本期特邀北京大学人民医院眼科钱彤医生，教大家如何科学护眼。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;钱医生说：“据不完全统计，中小学生的近视人群达到80%以上，眼睛劳损以及近视问题已经低龄化。”在2014年谷歌发布的中国智能手机使用情况调查报告中，智能手机几乎出现在所有的生活场景中：在家使用手机的人最多，高达94%；其次就是公共交通工具上，达到89%；餐馆和工作场合的比例一样高，为86%。眼睛疲劳跟长时间视屏关系很大。</p><p><br/></p>', '7', '0', '0', null, '2017-11-27 16:49:36', '2017-11-27 16:49:36', null);
INSERT INTO `articles` VALUES ('29', '轮播图', null, null, null, '1', '0', '0', null, '2017-11-27 17:21:08', '2017-11-27 17:21:08', null);
INSERT INTO `articles` VALUES ('30', '轮播图1', '/images/1511774652348.jpg', null, null, '29', '0', '0', null, '2017-11-27 17:24:12', '2017-11-27 17:24:12', null);
INSERT INTO `articles` VALUES ('31', '轮播图2', '/images/1511774658131.jpg', null, null, '29', '0', '0', null, '2017-11-27 17:24:18', '2017-11-27 17:24:18', null);
INSERT INTO `articles` VALUES ('32', '牙齿缺损怎么办', '/images/1511830909106.jpg', null, '<p>&nbsp;&nbsp;&nbsp;&nbsp;和生理解剖外形损坏或异常。造成的原因很多，如：龋齿，外伤，釉质发育不全，磨损等。 牙体缺损后常表现为正常牙体大小、形态、颜色、咬合异常，及邻近关系的破坏。正常的牙体应完整无缺损，牙齿缺损有先天和后天之分。 先天的牙缺损是多因为牙胚发育受损害主要是釉质发育异常，可引起牙齿质地改变，主要是釉质发育不全和釉质钙化不全。 后天的牙缺损则是各种原因致牙体病变而使牙齿形态出现缺损，就会损害牙形美观。</p>', '14', '0', '0', null, '2017-11-28 09:01:49', '2017-11-28 09:01:49', null);

-- ----------------------------
-- Table structure for cars
-- ----------------------------
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `displacement` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `category` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cars
-- ----------------------------

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `product` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_06_24_170051_create_article_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_06_26_154310_create_teams_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_06_28_144157_create_messages_table', '1');
INSERT INTO `migrations` VALUES ('6', '2017_07_01_115424_create_car_table', '1');
INSERT INTO `migrations` VALUES ('7', '2017_07_18_144831_create_order_lists_table', '1');

-- ----------------------------
-- Table structure for order_lists
-- ----------------------------
DROP TABLE IF EXISTS `order_lists`;
CREATE TABLE `order_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_data` timestamp NULL DEFAULT NULL,
  `category` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `organization` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of order_lists
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `honor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `good_at` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_age` int(11) DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('1', '戴顺华', '主治医师', '美健口腔业务院长、主任医师\r\n,口腔疑难杂症会诊中心主任\r\n,口腔医学会口腔种植专业委员', null, '生态种植\r\n,美学正畸\r\n,牙齿美容\r\n,牙齿美白', '10', '/images/1511749776906.jpg', '早年在部队医院外科任中校主治医师，1986年开始研究进修学习美容整形，1988年在南充五星花园创办部队医院美容整形门诊部，专业从事美容整形工作，1991年军转地后创办五星美容整形医院至今，为美容界培养美容医师多人，为求美者美容整形数万人。', null, '2017-11-27 10:29:36', '2017-11-27 10:29:47', null);
INSERT INTO `teams` VALUES ('2', '李翔', '主治医师', '美健口腔业务院长、主任医师\r\n,口腔疑难杂症会诊中心主任\r\n,口腔医学会口腔种植专业委员', null, '生态种植\r\n,美学正畸\r\n,牙齿美容\r\n,牙齿美白', '20', '/images/1511749853958.jpg', '早年在部队医院外科任中校主治医师，1986年开始研究进修学习美容整形，1988年在南充五星花园创办部队医院美容整形门诊部，专业从事美容整形工作，1991年军转地后创办五星美容整形医院至今，为美容界培养美容医师多人，为求美者美容整形数万人。', null, '2017-11-27 10:30:53', '2017-11-27 10:30:53', null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$39yl4QYAy/0abgSFEPTBluCnDgUtLRtN2yIajrB5cDPohTka2iiN2', null, null, null, null);
