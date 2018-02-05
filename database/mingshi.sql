/*
Navicat MySQL Data Transfer

Source Server         : MYSQL
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : mingshi

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-02-05 16:14:27
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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', '网站首页', null, null, null, '0', '1', '0', '/', '2018-02-05 14:30:45', '2018-02-05 14:30:45', null);
INSERT INTO `articles` VALUES ('2', '关于我们', null, null, null, '0', '1', '0', '/about', '2018-02-05 14:31:03', '2018-02-05 14:31:03', null);
INSERT INTO `articles` VALUES ('3', '课程中心', null, null, null, '0', '1', '0', '/class', '2018-02-05 14:31:28', '2018-02-05 14:31:28', null);
INSERT INTO `articles` VALUES ('4', '师资团队', null, null, null, '0', '1', '0', '/team', '2018-02-05 14:31:51', '2018-02-05 14:31:51', null);
INSERT INTO `articles` VALUES ('5', '学习环境', null, null, null, '0', '1', '0', '/envrionment', '2018-02-05 14:32:48', '2018-02-05 14:32:48', null);
INSERT INTO `articles` VALUES ('6', '优惠活动', null, null, null, '0', '1', '0', '/news', '2018-02-05 14:33:06', '2018-02-05 14:33:06', null);
INSERT INTO `articles` VALUES ('7', '在线报名', null, null, null, '0', '1', '0', '/order', '2018-02-05 14:33:48', '2018-02-05 14:33:48', null);
INSERT INTO `articles` VALUES ('8', '联系我们', null, null, null, '0', '1', '0', '/contact', '2018-02-05 14:34:09', '2018-02-05 14:34:09', null);
INSERT INTO `articles` VALUES ('9', '企业简介', null, null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 20px; color: red; line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); font-size: 24px;\">说明：此处由网站编辑或者客户自由在后台编辑文本内容，可图文配置，可纯文字，亦可纯图。编辑模板：左图右文，右图左文，上图下文，上文下图，文字包围图片等。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 20px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">全国拥有近5万平米装饰展示区，包含软装、家具、建材及几十个不同风格实景样板间。上千名经验丰富装饰人，与200多个知名主材品牌紧密合作，并定期对施工团队进行技术、安全服务培训，力求精益求精，为广大业主提供优质装修服务。一键报价全程透明，PC+移动客户端对工地全程监控，建材产品统一集采、仓储、物流、安装。</p><p><br/></p>', '2', '1', '0', null, '2018-02-05 14:37:00', '2018-02-05 14:39:03', null);
INSERT INTO `articles` VALUES ('10', '企业文化', null, null, null, '2', '1', '0', null, '2018-02-05 14:37:06', '2018-02-05 14:37:06', null);
INSERT INTO `articles` VALUES ('11', '教育理念', null, null, null, '2', '1', '0', null, '2018-02-05 14:37:18', '2018-02-05 14:37:18', null);
INSERT INTO `articles` VALUES ('12', '优秀学员', null, null, null, '2', '1', '0', '/about/student', '2018-02-05 14:37:36', '2018-02-05 14:37:36', null);
INSERT INTO `articles` VALUES ('13', '小升初', null, null, null, '3', '1', '0', null, '2018-02-05 14:38:01', '2018-02-05 14:38:01', null);
INSERT INTO `articles` VALUES ('14', '初中培训', null, null, null, '3', '1', '0', null, '2018-02-05 14:38:09', '2018-02-05 14:38:09', null);
INSERT INTO `articles` VALUES ('15', '高中培训', null, null, null, '3', '1', '0', null, '2018-02-05 14:38:16', '2018-02-05 14:38:16', null);
INSERT INTO `articles` VALUES ('16', '佴鸿洲', '/images/1517812974295.jpg', '“我很感谢英豪教育的储老师，高考数学145分,他教给我的快速提分技巧很实用！”', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">一切从零开始的文化课，第一次测试，所有科目加起来成绩不理想，孩子虽然感受到了压力但是还是非常有信心，周老师为学生独家定制了以“一科带动多科”的学习阶段冲刺，在二诊的时候学生的成绩已经过了艺术本科线达到了理想的分数，孩子非常的惊喜！！！！于是对文化学习产生了更大的信心，在周老师的课程微调计划下，孩子在三诊考试成功突破！！在6月22日高考成绩出来的时候，周老师接到了孩子妈妈喜悦而泣的电话，孩子考了545分，超过了重本线10分！</p><p><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">一切从零开始的文化课，第一次测试，所有科目加起来成绩不理想，孩子虽然感受到了压力但是还是非常有信心，周老师为学生独家定制了以“一科带动多科”的学习阶段冲刺，在二诊的时候学生的成绩已经过了艺术本科线达到了理想的分数，孩子非常的惊喜！！！！于是对文化学习产生了更大的信心，在周老师的课程微调计划下，孩子在三诊考试成功突破！！在6月22日高考成绩出来的时候，周老师接到了孩子妈妈喜悦而泣的电话，孩子考了545分，超过了重本线10分！</p><p><br/></p>', '12', '0', '0', '艺体生文化课全托班', '2018-02-05 14:42:54', '2018-02-05 14:42:54', null);
INSERT INTO `articles` VALUES ('17', '小升初奥数精讲', '/images/1517814520246.jpg', '2018-01-29', '<p><span style=\"font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。根据学生成长阶段的不同，为广大中学生提供多样化的培训课程，包括量身定制的个性化课程、丰富高效的精品班课程、激情飞扬的专题课程以及艺体生文化课本科特训营等众多选择，全面引燃高效的学习热潮。慧尚教育是理科壹号教育的旗舰店，专注于包括小学毕业生到高中毕业生在内的中学教育，旨在为12至18岁的学生提供一流的全科课外培训。</span></p>', '13', '0', '0', '王老师', '2018-02-05 14:43:55', '2018-02-05 15:08:40', null);
INSERT INTO `articles` VALUES ('18', '环境1', '/images/1517813605417.jpg', null, null, '5', '0', '0', null, '2018-02-05 14:53:25', '2018-02-05 14:53:25', null);
INSERT INTO `articles` VALUES ('19', '环境2', '/images/1517813612601.jpg', null, null, '5', '0', '0', null, '2018-02-05 14:53:32', '2018-02-05 14:53:32', null);
INSERT INTO `articles` VALUES ('20', '现代农业示范园为民增收', '/images/1517813645837.jpg', null, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在距离临沭县约十公里的周庄，有一片约占地327亩的史丹利（荷兰）现代农业示范园，这里交通便利，生态环境良好，田园风光优美，灿烂的人文景观与秀丽的自燃风光交相辉映，拥有丰富的农业与乡村旅游资源。29日，全国媒体临沭行采访团记者来到这里，感受现代农业的魅力。</p><p><br/></p>', '6', '0', '0', null, '2018-02-05 14:54:05', '2018-02-05 14:54:05', null);
INSERT INTO `articles` VALUES ('21', '轮播图', null, null, null, '1', '0', '0', null, '2018-02-05 15:41:07', '2018-02-05 15:41:07', null);
INSERT INTO `articles` VALUES ('22', '轮播图1', '/images/1517816644744.jpg', null, null, '21', '0', '0', null, '2018-02-05 15:44:04', '2018-02-05 15:44:04', null);
INSERT INTO `articles` VALUES ('23', '轮播图2', '/images/1517816658848.jpg', null, null, '21', '0', '0', null, '2018-02-05 15:44:18', '2018-02-05 15:44:18', null);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES ('1', '王小飞', '15882162621', null, null, '年级：5年级<br>课程：英语<br>留言详情：测试', '127.0.0.1', '2018-02-05 15:33:38', '2018-02-05 15:33:38', null);

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
  `good_at` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design_concept` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_age` int(11) DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduce` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `production` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `honor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of teams
-- ----------------------------
INSERT INTO `teams` VALUES ('1', '金政务', '高三', null, '王志权教练，为人幽默健谈，常把微笑挂在嘴边，在他眼里没有笨学员，只有没有耐心的教练。他认为，科目三训练讲究“胆大心细”，对学员要采取“鼓励式教学法”，将驾驶要点教授给学员的同时。2', null, null, '/images/1517813452215.jpg', '王志权教练，为人幽默健谈，常把微笑挂在嘴边，在他眼里没有笨学员，只有没有耐心的教练。他认为，科目三训练讲究“胆大心细”，对学员要采取“鼓励式教学法”，将驾驶要点教授给学员的同时，多鼓励他们，在轻松融洽的教与学环境中，学习效果会更好。同时，面对性格迥异的学员，教学要“因人而异”，因材施教才可事半功倍。他常与学员说，练车是件很快乐的事情，这与新安“轻松学车，快乐驾驶”的教学理念不谋而合。', null, '英语', '2018-02-05 14:50:52', '2018-02-05 15:16:08', null);

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
INSERT INTO `users` VALUES ('1', 'admin', 'hupp@vip.qq.com', '$2y$10$yql7iy/qD5nNd3hR3cB7PeE69A33Am7YGiERhQ.GdgXlLRjiJetKO', null, null, null, null);
