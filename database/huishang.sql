/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : huishang

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-01-26 18:02:42
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
INSERT INTO `articles` VALUES ('15', '顺庆校区', null, null, null, '5', '1', '0', null, '2018-01-26 16:44:46', '2018-01-26 16:44:46', null);
INSERT INTO `articles` VALUES ('16', '嘉陵校区', null, null, null, '5', '1', '0', null, '2018-01-26 16:44:54', '2018-01-26 16:44:54', null);
INSERT INTO `articles` VALUES ('17', '高坪校区', null, null, null, '5', '1', '0', null, '2018-01-26 16:45:03', '2018-01-26 16:45:03', null);
INSERT INTO `articles` VALUES ('18', '人才招聘', null, null, null, '7', '1', '0', '/contact', '2018-01-26 16:46:13', '2018-01-26 16:46:13', null);
INSERT INTO `articles` VALUES ('19', '在线报名', null, null, null, '7', '1', '0', '/contact/order', '2018-01-26 16:46:35', '2018-01-26 16:46:35', null);
INSERT INTO `articles` VALUES ('20', '联系方式', null, null, null, '7', '1', '0', '/contact/way', '2018-01-26 16:46:52', '2018-01-26 16:46:52', null);
INSERT INTO `articles` VALUES ('21', '语文-基础+阅读', null, '私人指导 双人培育 突破高分', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，</p><p><br/></p>', '12', '0', '0', null, '2018-01-26 17:35:59', '2018-01-26 17:35:59', null);
INSERT INTO `articles` VALUES ('22', '语文-基础+阅读2', null, '私人指导 双人培育 突破高分', '<p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p style=\"white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p style=\"white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，</p><p><br/></p>', '12', '0', '0', null, '2018-01-26 17:36:22', '2018-01-26 17:36:22', null);
INSERT INTO `articles` VALUES ('23', '郑新宇2', null, '不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念', '<p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p style=\"white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p style=\"white-space: normal;\"><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; white-space: normal; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程</p><p><br/></p>', '4', '0', '0', '小学辅导-数学老师', '2018-01-26 17:45:05', '2018-01-26 17:45:05', null);
INSERT INTO `articles` VALUES ('24', '郑新宇5', '/images/1516959908706.jpg', '不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念不断改变教育信条，改变是为了成长，是为了不改变，为了坚定不移信念', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; line-height: 24px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程</p><p><br/></p>', '4', '0', '0', '小学辅导-数学老师', '2018-01-26 17:45:08', '2018-01-26 17:45:08', null);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_name_unique` (`name`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$n76G6X.USuc/h/NnEJKR.eKS9FGiyan1OxdYysP88J5k2NDJY3dYq', null, null, null, null);
