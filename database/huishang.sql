/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : huishang

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-01-29 09:45:04
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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, null, '0', '1', '0', '/', '2018-01-26 16:37:46', '2018-01-26 16:37:46', null);
INSERT INTO `articles` VALUES ('2', '关于慧尚', null, null, null, '0', '1', '0', '/about', '2018-01-26 16:38:11', '2018-01-26 16:38:11', null);
INSERT INTO `articles` VALUES ('3', '课程中心', null, null, null, '0', '1', '0', '/class', '2018-01-26 16:38:48', '2018-01-26 16:38:48', null);
INSERT INTO `articles` VALUES ('4', '名师团队', null, null, null, '0', '1', '0', '/team', '2018-01-26 16:39:07', '2018-01-26 16:39:07', null);
INSERT INTO `articles` VALUES ('5', '学习环境', null, null, null, '0', '1', '0', '/environment', '2018-01-26 16:40:15', '2018-01-26 16:40:15', null);
INSERT INTO `articles` VALUES ('6', '优惠活动', null, null, null, '0', '1', '0', '/news', '2018-01-26 16:40:48', '2018-01-26 16:40:48', null);
INSERT INTO `articles` VALUES ('7', '联系我们', null, null, null, '0', '1', '0', '/contact', '2018-01-26 16:41:17', '2018-01-26 16:41:17', null);
INSERT INTO `articles` VALUES ('8', '慧尚简介', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p>', '2', '1', '0', null, '2018-01-26 16:42:50', '2018-01-26 17:02:22', null);
INSERT INTO `articles` VALUES ('9', '慧尚文化', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p>', '2', '1', '0', null, '2018-01-26 16:43:01', '2018-01-26 17:02:32', null);
INSERT INTO `articles` VALUES ('10', '教育理念', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p>', '2', '1', '0', null, '2018-01-26 16:43:09', '2018-01-26 17:02:27', null);
INSERT INTO `articles` VALUES ('11', '课程体系', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p>', '2', '1', '0', null, '2018-01-26 16:43:19', '2018-01-26 17:02:39', null);
INSERT INTO `articles` VALUES ('12', '小学', null, null, null, '3', '1', '0', null, '2018-01-26 16:43:48', '2018-01-26 16:43:48', null);
INSERT INTO `articles` VALUES ('13', '初中', null, null, null, '3', '1', '0', null, '2018-01-26 16:43:54', '2018-01-26 16:43:54', null);
INSERT INTO `articles` VALUES ('14', '高中', null, null, null, '3', '1', '0', null, '2018-01-26 16:44:01', '2018-01-26 16:44:01', null);
INSERT INTO `articles` VALUES ('15', '顺庆校区', null, '南充市顺庆区凤鸣路6号（佳兆业商业广场）', null, '5', '1', '0', null, '2018-01-26 16:44:46', '2018-01-26 20:54:31', null);
INSERT INTO `articles` VALUES ('16', '嘉陵校区', null, '南充市顺庆区凤鸣路6号（佳兆业商业广场）', null, '5', '1', '0', null, '2018-01-26 16:44:54', '2018-01-26 20:54:42', null);
INSERT INTO `articles` VALUES ('17', '高坪校区', null, '南充市顺庆区凤鸣路6号（佳兆业商业广场）', null, '5', '1', '0', null, '2018-01-26 16:45:03', '2018-01-26 20:54:50', null);
INSERT INTO `articles` VALUES ('18', '人才招聘', null, null, null, '7', '1', '0', '/contact', '2018-01-26 16:46:13', '2018-01-26 16:46:13', null);
INSERT INTO `articles` VALUES ('19', '在线报名', null, null, null, '7', '1', '0', '/contact/order', '2018-01-26 16:46:35', '2018-01-26 16:46:35', null);
INSERT INTO `articles` VALUES ('20', '联系方式', null, null, null, '7', '1', '0', '/contact/way', '2018-01-26 16:46:52', '2018-01-26 16:46:52', null);
INSERT INTO `articles` VALUES ('21', '语文-基础+阅读', null, '私人指导 双人培育 突破高分', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，</p><p><br/></p>', '12', '0', '0', null, '2018-01-26 17:35:59', '2018-01-26 17:35:59', null);
INSERT INTO `articles` VALUES ('22', '语文-基础+阅读2', null, '私人指导 双人培育 突破高分', '<p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p style=\"white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p style=\"white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，</p><p><br/></p>', '12', '0', '0', null, '2018-01-26 17:36:22', '2018-01-26 17:36:22', null);
INSERT INTO `articles` VALUES ('23', '郑新宇2', null, '不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念', '<p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p style=\"white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p style=\"white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程</p><p><br/></p>', '4', '0', '0', '小学辅导-数学老师', '2018-01-26 17:45:05', '2018-01-26 17:45:05', null);
INSERT INTO `articles` VALUES ('24', '郑新宇5', '/images/1516959908706.jpg', '不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程</p><p><br/></p>', '4', '0', '0', '小学辅导-数学老师', '2018-01-26 17:45:08', '2018-01-26 17:45:08', null);
INSERT INTO `articles` VALUES ('25', '环境1', '/images/1516970195780.jpg', null, null, '15', '0', '0', null, '2018-01-26 20:36:35', '2018-01-26 20:36:35', null);
INSERT INTO `articles` VALUES ('26', '环境2', '/images/1516970203206.jpg', null, null, '15', '0', '0', null, '2018-01-26 20:36:43', '2018-01-26 20:36:43', null);
INSERT INTO `articles` VALUES ('27', '中学时代是人生的重要阶段', '/images/1516970403894.jpg', '在日常的家居装修中，或者是正在准备打算在日常的家居装修中，或者是正在准备装修的业主朋友来说，家装装修报价', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '6', '0', '0', null, '2018-01-26 20:40:03', '2018-01-26 20:40:03', null);
INSERT INTO `articles` VALUES ('28', '销售经理', null, '2人', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">待遇：4000-6000元/月+提成+年底双薪+年终奖金</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">要求：年龄18-30岁以下，限女性，身高1.60以上，性格活泼开朗，形象气质佳。</p><p><br/></p>', '18', '0', '0', null, '2018-01-26 20:45:37', '2018-01-26 20:45:37', null);
INSERT INTO `articles` VALUES ('29', '销售经理', null, '2人', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">待遇：4000-6000元/月+提成+年底双薪+年终奖金</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">要求：年龄18-30岁以下，限女性，身高1.60以上，性格活泼开朗，形象气质佳。</p><p><br/></p>', '18', '0', '0', null, '2018-01-26 20:45:57', '2018-01-26 20:45:57', null);
INSERT INTO `articles` VALUES ('30', '轮播图', null, null, null, '1', '0', '0', null, '2018-01-26 21:08:48', '2018-01-26 21:08:48', null);
INSERT INTO `articles` VALUES ('31', '轮播图1', '/images/1516972147115.jpg', null, null, '30', '0', '0', null, '2018-01-26 21:09:07', '2018-01-26 21:09:07', null);
INSERT INTO `articles` VALUES ('32', '轮播图2', '/images/1516972154831.jpg', null, null, '30', '0', '0', null, '2018-01-26 21:09:14', '2018-01-26 21:09:14', null);
INSERT INTO `articles` VALUES ('33', '首页学员', null, null, null, '1', '0', '0', null, '2018-01-26 21:11:33', '2018-01-26 21:11:33', null);
INSERT INTO `articles` VALUES ('34', '2016年毕业', '/images/1516972326814.jpg', null, null, '33', '0', '0', null, '2018-01-26 21:12:06', '2018-01-26 21:12:06', null);
INSERT INTO `articles` VALUES ('35', '2017年毕业', '/images/1516972338563.jpg', null, null, '33', '0', '0', null, '2018-01-26 21:12:18', '2018-01-26 21:12:18', null);
INSERT INTO `articles` VALUES ('36', '为什么选择慧尚教育', null, null, null, '1', '0', '0', null, '2018-01-26 21:16:04', '2018-01-26 21:16:04', null);
INSERT INTO `articles` VALUES ('37', '测评定位', '/images/1516972590450.png', '慧尚教育专业学科测评师定制学生的综合测试试卷，找出学生的学习薄弱环节以及知识盲区，得出测评报告。', null, '36', '0', '0', null, '2018-01-26 21:16:30', '2018-01-26 21:16:30', null);
INSERT INTO `articles` VALUES ('38', '学习方案', '/images/1516972604299.png', '慧尚教育专业学科测评师定制学生的综合测试试卷，找出学生的学习薄弱环节以及知识盲区，得出测评报告。', null, '36', '0', '0', null, '2018-01-26 21:16:44', '2018-01-26 21:16:44', null);
INSERT INTO `articles` VALUES ('39', '这些问题你是否存在？严重影响学习效率呢？', '/images/1516972902877.png', null, null, '1', '0', '0', null, '2018-01-26 21:21:42', '2018-01-26 21:21:42', null);
INSERT INTO `articles` VALUES ('40', '上课听不懂，课下难补充', '/images/1516972938641.jpg', '老师进度快、难度高。\r\n课下看不懂、作业难完成。', null, '39', '0', '0', null, '2018-01-26 21:22:18', '2018-01-26 21:22:18', null);
INSERT INTO `articles` VALUES ('41', '平时题目会做，考试分数低', '/images/1516972959895.jpg', '老师讲解题目能听懂，基本题\r\n型会做，考试总是没思路。', null, '39', '0', '0', null, '2018-01-26 21:22:39', '2018-01-26 21:22:39', null);
INSERT INTO `articles` VALUES ('42', '四大精准课程，切实帮助孩子高效提分', null, null, null, '1', '0', '0', null, '2018-01-26 21:36:43', '2018-01-26 21:36:43', null);
INSERT INTO `articles` VALUES ('43', '“卓越人才计划” 系列课程', '/images/1516973846220.jpg', null, null, '42', '0', '0', null, '2018-01-26 21:37:26', '2018-01-26 21:37:26', null);
INSERT INTO `articles` VALUES ('44', '专题精讲 系列课程', '/images/1516973861893.jpg', null, null, '42', '0', '0', null, '2018-01-26 21:37:41', '2018-01-26 21:37:41', null);
INSERT INTO `articles` VALUES ('45', '全年级全科目辅导基础难点全掌握', null, null, null, '1', '0', '0', null, '2018-01-26 21:41:26', '2018-01-26 21:41:26', null);
INSERT INTO `articles` VALUES ('46', '语文', null, null, '<p>拼音认字掌握</p><p>阅读水平提升</p><p>作文强化</p><p><br/></p>', '45', '0', '0', null, '2018-01-26 21:42:58', '2018-01-26 21:42:58', null);
INSERT INTO `articles` VALUES ('47', '数学', null, null, '<p>运算法则掌握</p><p>计算能力强化</p><p>几何图形认知</p><p>应用题活解</p><p><br/></p>', '45', '0', '0', null, '2018-01-26 21:43:10', '2018-01-26 21:43:10', null);
INSERT INTO `articles` VALUES ('48', '能让孩子提分的才是好老师', null, null, null, '1', '0', '0', null, '2018-01-26 21:46:49', '2018-01-26 21:46:49', null);
INSERT INTO `articles` VALUES ('49', '超过50名', null, '来自南充名校的教师队伍', null, '48', '0', '0', null, '2018-01-26 21:47:36', '2018-01-26 21:47:36', null);
INSERT INTO `articles` VALUES ('50', '教学方法/讲课技巧', null, '等3轮严格筛选', null, '48', '0', '0', null, '2018-01-26 21:47:47', '2018-01-26 21:47:47', null);
INSERT INTO `articles` VALUES ('51', '首页校园图片11张', null, null, null, '1', '0', '0', null, '2018-01-26 22:02:58', '2018-01-26 22:02:58', null);
INSERT INTO `articles` VALUES ('52', '图1', '/images/1516975414713.jpg', null, null, '51', '0', '0', null, '2018-01-26 22:03:34', '2018-01-26 22:03:34', null);
INSERT INTO `articles` VALUES ('53', '图2', '/images/1516975425650.jpg', null, null, '51', '0', '0', null, '2018-01-26 22:03:45', '2018-01-26 22:03:45', null);
INSERT INTO `articles` VALUES ('54', '慧尚学员', null, null, null, '2', '1', '0', '/about/student', '2018-01-29 09:26:32', '2018-01-29 09:26:32', null);
INSERT INTO `articles` VALUES ('55', '佴鸿洲', '/images/1517189283213.jpg', '“我很感谢英豪教育的储老师，高考数学145分,他教给我的快速提分技巧很实用！”', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">一切从零开始的文化课，第一次测试，所有科目加起来成绩不理想，孩子虽然感受到了压力但是还是非常有信心，周老师为学生独家定制了以“一科带动多科”的学习阶段冲刺，在二诊的时候学生的成绩已经过了艺术本科线达到了理想的分数，孩子非常的惊喜！！！！于是对文化学习产生了更大的信心，在周老师的课程微调计划下，孩子在三诊考试成功突破！！在6月22日高考成绩出来的时候，周老师接到了孩子妈妈喜悦而泣的电话，孩子考了545分，超过了重本线10分！</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">一切从零开始的文化课，第一次测试，所有科目加起来成绩不理想，孩子虽然感受到了压力但是还是非常有信心，周老师为学生独家定制了以“一科带动多科”的学习阶段冲刺，在二诊的时候学生的成绩已经过了艺术本科线达到了理想的分数，孩子非常的惊喜！！！！于是对文化学习产生了更大的信心，在周老师的课程微调计划下，孩子在三诊考试成功突破！！在6月22日高考成绩出来的时候，周老师接到了孩子妈妈喜悦而泣的电话，孩子考了545分，超过了重本线10分！</p><p><br/></p>', '54', '0', '0', '艺体生文化课全托班', '2018-01-29 09:28:03', '2018-01-29 09:28:03', null);
INSERT INTO `articles` VALUES ('56', '佴鸿洲2', '/images/1517189771733.jpg', '“我很感谢英豪教育的储老师，高考数学145分,他教给我的快速提分技巧很实用！”', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">一切从零开始的文化课，第一次测试，所有科目加起来成绩不理想，孩子虽然感受到了压力但是还是非常有信心，周老师为学生独家定制了以“一科带动多科”的学习阶段冲刺，在二诊的时候学生的成绩已经过了艺术本科线达到了理想的分数，孩子非常的惊喜！！！！于是对文化学习产生了更大的信心，在周老师的课程微调计划下，孩子在三诊考试成功突破！！在6月22日高考成绩出来的时候，周老师接到了孩子妈妈喜悦而泣的电话，孩子考了545分，超过了重本线10分！</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">一切从零开始的文化课，第一次测试，所有科目加起来成绩不理想，孩子虽然感受到了压力但是还是非常有信心，周老师为学生独家定制了以“一科带动多科”的学习阶段冲刺，在二诊的时候学生的成绩已经过了艺术本科线达到了理想的分数，孩子非常的惊喜！！！！于是对文化学习产生了更大的信心，在周老师的课程微调计划下，孩子在三诊考试成功突破！！在6月22日高考成绩出来的时候，周老师接到了孩子妈妈喜悦而泣的电话，孩子考了545分，超过了重本线10分！</p><p><br/></p>', '54', '0', '0', '艺体生文化课全托班', '2018-01-29 09:28:45', '2018-01-29 09:36:11', null);

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '李肇星', '15882223232', null, null, '课程：2<br>留言详情：测试', '127.0.0.1', '2018-01-26 21:05:39', '2018-01-26 21:05:39', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
  `education` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `good_at` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design_concept` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_age` int(11) DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of teams
-- ----------------------------

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
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_name_unique` (`name`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$n76G6X.USuc/h/NnEJKR.eKS9FGiyan1OxdYysP88J5k2NDJY3dYq', null, null, null, null);
