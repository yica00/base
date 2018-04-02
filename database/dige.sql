/*
 Navicat Premium Data Transfer

 Source Server         : wamp本机
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : dige

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 02/04/2018 14:52:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `introduce` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `comtent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `pid` int(11) NOT NULL,
  `is_nav` tinyint(4) NOT NULL DEFAULT 1,
  `serial_number` int(11) NOT NULL DEFAULT 0,
  `link` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 58 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES (1, '网站首页', NULL, NULL, NULL, 0, 1, 0, '/', '2018-03-30 16:43:52', '2018-03-30 16:43:52', NULL);
INSERT INTO `articles` VALUES (2, '走进迪歌', NULL, NULL, NULL, 0, 1, 0, '/about', '2018-03-30 16:44:26', '2018-03-30 16:44:26', NULL);
INSERT INTO `articles` VALUES (3, '业务中心', NULL, NULL, NULL, 0, 1, 0, '/business', '2018-03-30 16:45:30', '2018-03-30 16:45:30', NULL);
INSERT INTO `articles` VALUES (4, '产品中心', NULL, NULL, NULL, 0, 1, 0, '/product', '2018-03-30 16:46:06', '2018-03-30 16:46:06', NULL);
INSERT INTO `articles` VALUES (5, '工程案例', NULL, NULL, NULL, 0, 1, 0, '/cases', '2018-03-30 16:46:42', '2018-03-30 16:46:42', NULL);
INSERT INTO `articles` VALUES (6, '新闻中心', NULL, NULL, NULL, 0, 1, 0, '/news', '2018-03-30 16:47:13', '2018-03-30 16:47:13', NULL);
INSERT INTO `articles` VALUES (7, '服务中心', NULL, NULL, NULL, 0, 1, 0, '/service', '2018-03-30 16:47:52', '2018-03-30 16:47:52', NULL);
INSERT INTO `articles` VALUES (8, '联系我们', NULL, NULL, NULL, 0, 1, 0, '/contact', '2018-03-30 16:48:16', '2018-03-30 16:48:16', NULL);
INSERT INTO `articles` VALUES (9, '企业简介', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">创立于1993年，是国内利用清洁能源为客户提供能源综合服务的领先企业。经过20余年的创新发展，迪歌已成长为国家创新型企业、国家高新技术企业、广东省循环经济试点单位和广东省知识产权示范企业。迪歌于2012年7月在深圳证券交易所创业板上市（股票简称：迪歌股份，股票代码300335）。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">经过持续的战略调整升级和业务发展，迪歌已发展成为一家拥有清洁能源综合服务、工业锅炉制造、家用壁挂炉制造三大业务板块的集团公司，打造了“迪歌锅炉”和“小松鼠”2个行业知名品牌。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">迪歌致力于打造“事业合伙人平台”，与志同道合的合伙人共创、共担、共享！20余年来，迪歌的事业平台不断发展壮大。目前，集团拥有员工1000余人，总资产超过30亿元人民币，旗下30余家全资、控股子公司分布于全国20余个省份。迪歌构建的“两院一站两中心”研发平台形成了迪歌独有的企业技术创新体系，拥有博士（后）十多名，硕士及工程师近百名，获得200多项国家专利。</p><p><br/></p>', 2, 1, 0, '/about', '2018-03-30 16:51:07', '2018-03-30 16:51:07', NULL);
INSERT INTO `articles` VALUES (10, '企业文化', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">创立于1993年，是国内利用清洁能源为客户提供能源综合服务的领先企业。经过20余年的创新发展，迪歌已成长为国家创新型企业、国家高新技术企业、广东省循环经济试点单位和广东省知识产权示范企业。迪歌于2012年7月在深圳证券交易所创业板上市（股票简称：迪歌股份，股票代码300335）。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">经过持续的战略调整升级和业务发展，迪歌已发展成为一家拥有清洁能源综合服务、工业锅炉制造、家用壁挂炉制造三大业务板块的集团公司，打造了“迪歌锅炉”和“小松鼠”2个行业知名品牌。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">迪歌致力于打造“事业合伙人平台”，与志同道合的合伙人共创、共担、共享！20余年来，迪歌的事业平台不断发展壮大。目前，集团拥有员工1000余人，总资产超过30亿元人民币，旗下30余家全资、控股子公司分布于全国20余个省份。迪歌构建的“两院一站两中心”研发平台形成了迪歌独有的企业技术创新体系，拥有博士（后）十多名，硕士及工程师近百名，获得200多项国家专利。</p><p><br/></p>', 2, 1, 0, '/about/culture', '2018-03-30 16:52:20', '2018-03-30 17:38:35', NULL);
INSERT INTO `articles` VALUES (11, '发展历程', NULL, NULL, NULL, 2, 1, 0, '/about/history', '2018-03-30 16:52:53', '2018-03-30 16:52:53', NULL);
INSERT INTO `articles` VALUES (12, '经营理念', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">创立于1993年，是国内利用清洁能源为客户提供能源综合服务的领先企业。经过20余年的创新发展，迪歌已成长为国家创新型企业、国家高新技术企业、广东省循环经济试点单位和广东省知识产权示范企业。迪歌于2012年7月在深圳证券交易所创业板上市（股票简称：迪歌股份，股票代码300335）。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">经过持续的战略调整升级和业务发展，迪歌已发展成为一家拥有清洁能源综合服务、工业锅炉制造、家用壁挂炉制造三大业务板块的集团公司，打造了“迪歌锅炉”和“小松鼠”2个行业知名品牌。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">迪歌致力于打造“事业合伙人平台”，与志同道合的合伙人共创、共担、共享！20余年来，迪歌的事业平台不断发展壮大。目前，集团拥有员工1000余人，总资产超过30亿元人民币，旗下30余家全资、控股子公司分布于全国20余个省份。迪歌构建的“两院一站两中心”研发平台形成了迪歌独有的企业技术创新体系，拥有博士（后）十多名，硕士及工程师近百名，获得200多项国家专利。</p><p><br/></p>', 2, 1, 0, '/about/maind', '2018-03-30 16:53:39', '2018-03-30 16:53:39', NULL);
INSERT INTO `articles` VALUES (13, '团队展示', NULL, NULL, NULL, 2, 1, 0, '/about/team', '2018-03-30 16:54:15', '2018-03-30 16:54:15', NULL);
INSERT INTO `articles` VALUES (14, '仓区环境', NULL, NULL, NULL, 2, 1, 0, '/about/env', '2018-03-30 16:54:49', '2018-03-30 16:54:49', NULL);
INSERT INTO `articles` VALUES (15, '业务类型', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">创立于1993年，是国内利用清洁能源为客户提供能源综合服务的领先企业。经过20余年的创新发展，迪歌已成长为国家创新型企业、国家高新技术企业、广东省循环经济试点单位和广东省知识产权示范企业。迪歌于2012年7月在深圳证券交易所创业板上市（股票简称：迪歌股份，股票代码300335）。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">经过持续的战略调整升级和业务发展，迪歌已发展成为一家拥有清洁能源综合服务、工业锅炉制造、家用壁挂炉制造三大业务板块的集团公司，打造了“迪歌锅炉”和“小松鼠”2个行业知名品牌。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">迪歌致力于打造“事业合伙人平台”，与志同道合的合伙人共创、共担、共享！20余年来，迪歌的事业平台不断发展壮大。目前，集团拥有员工1000余人，总资产超过30亿元人民币，旗下30余家全资、控股子公司分布于全国20余个省份。迪歌构建的“两院一站两中心”研发平台形成了迪歌独有的企业技术创新体系，拥有博士（后）十多名，硕士及工程师近百名，获得200多项国家专利。</p><p><br/></p>', 3, 1, 0, NULL, '2018-03-30 16:55:57', '2018-03-30 16:55:57', NULL);
INSERT INTO `articles` VALUES (16, '业务范围', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">创立于1993年，是国内利用清洁能源为客户提供能源综合服务的领先企业。经过20余年的创新发展，迪歌已成长为国家创新型企业、国家高新技术企业、广东省循环经济试点单位和广东省知识产权示范企业。迪歌于2012年7月在深圳证券交易所创业板上市（股票简称：迪歌股份，股票代码300335）。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">经过持续的战略调整升级和业务发展，迪歌已发展成为一家拥有清洁能源综合服务、工业锅炉制造、家用壁挂炉制造三大业务板块的集团公司，打造了“迪歌锅炉”和“小松鼠”2个行业知名品牌。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">迪歌致力于打造“事业合伙人平台”，与志同道合的合伙人共创、共担、共享！20余年来，迪歌的事业平台不断发展壮大。目前，集团拥有员工1000余人，总资产超过30亿元人民币，旗下30余家全资、控股子公司分布于全国20余个省份。迪歌构建的“两院一站两中心”研发平台形成了迪歌独有的企业技术创新体系，拥有博士（后）十多名，硕士及工程师近百名，获得200多项国家专利。</p><p><br/></p>', 3, 1, 0, NULL, '2018-03-30 16:56:05', '2018-03-30 16:56:05', NULL);
INSERT INTO `articles` VALUES (18, '壁挂炉', '', 'Wall Hanging Furnace', NULL, 4, 1, 0, NULL, '2018-03-30 17:00:11', '2018-04-02 14:47:34', NULL);
INSERT INTO `articles` VALUES (19, '容积式一体机', NULL, 'Wall Hanging Furnace', NULL, 4, 1, 0, NULL, '2018-03-30 17:00:20', '2018-04-02 14:47:44', NULL);
INSERT INTO `articles` VALUES (20, '公司新闻', NULL, NULL, NULL, 6, 1, 0, NULL, '2018-03-30 17:01:31', '2018-03-30 17:01:31', NULL);
INSERT INTO `articles` VALUES (21, '行业资讯', NULL, NULL, NULL, 6, 1, 0, NULL, '2018-03-30 17:01:38', '2018-03-30 17:01:38', NULL);
INSERT INTO `articles` VALUES (22, '售前服务', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">创立于1993年，是国内利用清洁能源为客户提供能源综合服务的领先企业。经过20余年的创新发展，迪歌已成长为国家创新型企业、国家高新技术企业、广东省循环经济试点单位和广东省知识产权示范企业。迪歌于2012年7月在深圳证券交易所创业板上市（股票简称：迪歌股份，股票代码300335）。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">经过持续的战略调整升级和业务发展，迪歌已发展成为一家拥有清洁能源综合服务、工业锅炉制造、家用壁挂炉制造三大业务板块的集团公司，打造了“迪歌锅炉”和“小松鼠”2个行业知名品牌。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">迪歌致力于打造“事业合伙人平台”，与志同道合的合伙人共创、共担、共享！20余年来，迪歌的事业平台不断发展壮大。目前，集团拥有员工1000余人，总资产超过30亿元人民币，旗下30余家全资、控股子公司分布于全国20余个省份。迪歌构建的“两院一站两中心”研发平台形成了迪歌独有的企业技术创新体系，拥有博士（后）十多名，硕士及工程师近百名，获得200多项国家专利。</p><p><br/></p>', 7, 1, 0, NULL, '2018-03-30 17:02:05', '2018-03-30 17:02:05', NULL);
INSERT INTO `articles` VALUES (23, '售后服务', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">创立于1993年，是国内利用清洁能源为客户提供能源综合服务的领先企业。经过20余年的创新发展，迪歌已成长为国家创新型企业、国家高新技术企业、广东省循环经济试点单位和广东省知识产权示范企业。迪歌于2012年7月在深圳证券交易所创业板上市（股票简称：迪歌股份，股票代码300335）。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">经过持续的战略调整升级和业务发展，迪歌已发展成为一家拥有清洁能源综合服务、工业锅炉制造、家用壁挂炉制造三大业务板块的集团公司，打造了“迪歌锅炉”和“小松鼠”2个行业知名品牌。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">迪歌致力于打造“事业合伙人平台”，与志同道合的合伙人共创、共担、共享！20余年来，迪歌的事业平台不断发展壮大。目前，集团拥有员工1000余人，总资产超过30亿元人民币，旗下30余家全资、控股子公司分布于全国20余个省份。迪歌构建的“两院一站两中心”研发平台形成了迪歌独有的企业技术创新体系，拥有博士（后）十多名，硕士及工程师近百名，获得200多项国家专利。</p><p><br/></p>', 7, 1, 0, NULL, '2018-03-30 17:02:14', '2018-03-30 17:02:14', NULL);
INSERT INTO `articles` VALUES (24, '在线留言', NULL, NULL, NULL, 8, 1, 0, '/contact', '2018-03-30 17:03:08', '2018-03-30 17:03:08', NULL);
INSERT INTO `articles` VALUES (25, '联系方式', NULL, NULL, NULL, 8, 1, 0, '/contact/way', '2018-03-30 17:03:28', '2018-04-02 11:46:51', NULL);
INSERT INTO `articles` VALUES (26, '2001年', NULL, NULL, '<p>迪歌新能源有限公司成立，成为国内太阳能行业中德合资企业&nbsp;</p><p>获得中国质量检验协会颁发的“质检合格好产品”证书&nbsp;</p><p>获得国家质量技术监督局信息中心颁发的“打假维权重点保护产品”荣誉证书</p>', 11, 0, 0, NULL, '2018-04-02 09:49:45', '2018-04-02 09:49:45', NULL);
INSERT INTO `articles` VALUES (27, '2008年', NULL, NULL, '<p style=\"white-space: normal;\">迪歌新能源有限公司成立，成为国内太阳能行业中德合资企业&nbsp;</p><p style=\"white-space: normal;\">获得中国质量检验协会颁发的“质检合格好产品”证书&nbsp;</p><p style=\"white-space: normal;\">获得国家质量技术监督局信息中心颁发的“打假维权重点保护产品”荣誉证书</p><p><br/></p>', 11, 0, 0, NULL, '2018-04-02 09:49:55', '2018-04-02 09:49:55', NULL);
INSERT INTO `articles` VALUES (28, '团队1', '/images/1522633983861.jpg', NULL, NULL, 13, 0, 0, NULL, '2018-04-02 09:53:03', '2018-04-02 09:53:03', NULL);
INSERT INTO `articles` VALUES (29, '团队2', '/images/1522633989571.jpg', NULL, NULL, 13, 0, 0, NULL, '2018-04-02 09:53:09', '2018-04-02 09:53:09', NULL);
INSERT INTO `articles` VALUES (30, '环境1', '/images/1522634244363.jpg', NULL, NULL, 14, 0, 0, NULL, '2018-04-02 09:57:24', '2018-04-02 09:57:24', NULL);
INSERT INTO `articles` VALUES (31, '环境2', '/images/1522634253410.jpg', NULL, NULL, 14, 0, 0, NULL, '2018-04-02 09:57:33', '2018-04-02 09:57:33', NULL);
INSERT INTO `articles` VALUES (38, '速腾非承压系列热水器（直接式）', '/images/1522635202102.jpg', NULL, '<p><img src=\"/Uploads/image/152263517531686401.jpg\" title=\"152263517531686401.jpg\"/></p><p><img src=\"/Uploads/image/152263517565682983.jpg\" title=\"152263517565682983.jpg\"/></p><p><img src=\"/Uploads/image/152263517576177978.jpg\" title=\"152263517576177978.jpg\"/></p><p><br/></p>', 18, 0, 0, NULL, '2018-04-02 10:25:35', '2018-04-02 10:25:35', NULL);
INSERT INTO `articles` VALUES (32, '产品简介', NULL, NULL, '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">倾动式熔铝炉采用浅熔池设计、高速烧嘴加热、炉膛温度、铝液温度全自动控制，控温精确，转注方便、安全，有较好的快速升温能力及良好的控温能力。</span></p>', 37, 0, 1, NULL, '2018-04-02 10:14:03', '2018-04-02 10:14:03', NULL);
INSERT INTO `articles` VALUES (33, '应用范围', NULL, NULL, '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</span></p>', 37, 0, 2, NULL, '2018-04-02 10:14:21', '2018-04-02 10:14:21', NULL);
INSERT INTO `articles` VALUES (34, '产品特点', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">简单的工艺过程：通过熔炼炉流槽转注到保温炉中的铝及铝合金熔体，进行扒渣、静置、调温等，熔体成分和温度符合工艺要求后，转送给铸造机进行铸造。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉的特点：</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">1.可倾动翻转 该炉型属于高端熔铝炉，适用于对铝液品质要求较高的用户企业，炉膛可翻转，因此提高了热利用率，大大节省了燃料。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">2.转注更方便 由于炉体可倾动，因此炉膛内铝液可通过炉体倾斜转注到浇注机，使这一过程更为方便。</p><p><br/></p>', 37, 0, 3, NULL, '2018-04-02 10:14:36', '2018-04-02 10:14:36', NULL);
INSERT INTO `articles` VALUES (35, '规格参数', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">简单的工艺过程：通过熔炼炉流槽转注到保温炉中的铝及铝合金熔体，进行扒渣、静置、调温等，熔体成分和温度符合工艺要求后，转送给铸造机进行铸造。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉的特点：</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">1.可倾动翻转 该炉型属于高端熔铝炉，适用于对铝液品质要求较高的用户企业，炉膛可翻转，因此提高了热利用率，大大节省了燃料。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">2.转注更方便 由于炉体可倾动，因此炉膛内铝液可通过炉体倾斜转注到浇注机，使这一过程更为方便。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">简单的工艺过程：通过熔炼炉流槽转注到保温炉中的铝及铝合金熔体，进行扒渣、静置、调温等，熔体成分和温度符合工艺要求后，转送给铸造机进行铸造。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉的特点：</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">1.可倾动翻转 该炉型属于高端熔铝炉，适用于对铝液品质要求较高的用户企业，炉膛可翻转，因此提高了热利用率，大大节省了燃料。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">2.转注更方便 由于炉体可倾动，因此炉膛内铝液可通过炉体倾斜转注到浇注机，使这一过程更为方便。</p><p><br/></p>', 37, 0, 4, NULL, '2018-04-02 10:14:53', '2018-04-02 10:14:53', NULL);
INSERT INTO `articles` VALUES (36, '售后支持', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">简单的工艺过程：通过熔炼炉流槽转注到保温炉中的铝及铝合金熔体，进行扒渣、静置、调温等，熔体成分和温度符合工艺要求后，转送给铸造机进行铸造。</p><p><br/></p>', 37, 0, 5, NULL, '2018-04-02 10:15:08', '2018-04-02 10:15:08', NULL);
INSERT INTO `articles` VALUES (37, '1速腾非承压系列热水器（直接式）', '/images/1522635202102.jpg', NULL, '<p><img src=\"/Uploads/image/152263517531686401.jpg\" title=\"152263517531686401.jpg\"/></p><p><img src=\"/Uploads/image/152263517565682983.jpg\" title=\"152263517565682983.jpg\"/></p><p><img src=\"/Uploads/image/152263517576177978.jpg\" title=\"152263517576177978.jpg\"/></p><p><br/></p>', 18, 0, 0, NULL, '2018-04-02 10:22:07', '2018-04-02 10:22:07', NULL);
INSERT INTO `articles` VALUES (39, '产品简介', NULL, NULL, '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">倾动式熔铝炉采用浅熔池设计、高速烧嘴加热、炉膛温度、铝液温度全自动控制，控温精确，转注方便、安全，有较好的快速升温能力及良好的控温能力。</span></p>', 38, 0, 1, NULL, '2018-04-02 10:14:03', '2018-04-02 10:14:03', NULL);
INSERT INTO `articles` VALUES (40, '应用范围', NULL, NULL, '<p><span style=\"color: rgb(153, 153, 153); font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</span></p>', 38, 0, 2, NULL, '2018-04-02 10:14:21', '2018-04-02 10:14:21', NULL);
INSERT INTO `articles` VALUES (41, '产品特点', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">简单的工艺过程：通过熔炼炉流槽转注到保温炉中的铝及铝合金熔体，进行扒渣、静置、调温等，熔体成分和温度符合工艺要求后，转送给铸造机进行铸造。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉的特点：</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">1.可倾动翻转 该炉型属于高端熔铝炉，适用于对铝液品质要求较高的用户企业，炉膛可翻转，因此提高了热利用率，大大节省了燃料。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">2.转注更方便 由于炉体可倾动，因此炉膛内铝液可通过炉体倾斜转注到浇注机，使这一过程更为方便。</p><p><br/></p>', 38, 0, 3, NULL, '2018-04-02 10:14:36', '2018-04-02 10:14:36', NULL);
INSERT INTO `articles` VALUES (42, '规格参数', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">简单的工艺过程：通过熔炼炉流槽转注到保温炉中的铝及铝合金熔体，进行扒渣、静置、调温等，熔体成分和温度符合工艺要求后，转送给铸造机进行铸造。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉的特点：</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">1.可倾动翻转 该炉型属于高端熔铝炉，适用于对铝液品质要求较高的用户企业，炉膛可翻转，因此提高了热利用率，大大节省了燃料。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">2.转注更方便 由于炉体可倾动，因此炉膛内铝液可通过炉体倾斜转注到浇注机，使这一过程更为方便。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">简单的工艺过程：通过熔炼炉流槽转注到保温炉中的铝及铝合金熔体，进行扒渣、静置、调温等，熔体成分和温度符合工艺要求后，转送给铸造机进行铸造。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉的特点：</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">1.可倾动翻转 该炉型属于高端熔铝炉，适用于对铝液品质要求较高的用户企业，炉膛可翻转，因此提高了热利用率，大大节省了燃料。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">2.转注更方便 由于炉体可倾动，因此炉膛内铝液可通过炉体倾斜转注到浇注机，使这一过程更为方便。</p><p><br/></p>', 38, 0, 4, NULL, '2018-04-02 10:14:53', '2018-04-02 10:14:53', NULL);
INSERT INTO `articles` VALUES (43, '售后支持', NULL, NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">倾动式熔铝炉又名倾翻炉、翻转炉，主要用于铝及铝合金液体的的静置和保温，可连续为铸造机提供温度及成分稳定的高品质铝液。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">简单的工艺过程：通过熔炼炉流槽转注到保温炉中的铝及铝合金熔体，进行扒渣、静置、调温等，熔体成分和温度符合工艺要求后，转送给铸造机进行铸造。</p><p><br/></p>', 38, 0, 5, NULL, '2018-04-02 10:15:08', '2018-04-02 10:15:08', NULL);
INSERT INTO `articles` VALUES (45, '珠江啤酒集团综合能源供热项目', '/images/1522637870611.jpg', NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">珠江啤酒是中国驰名商标、中国名牌产品和绿色食品。珠江啤酒是广州珠江啤酒控股公司，迪森与全国6家珠江啤酒厂合作，由迪森投资并承担工程的设计、建设、运行、维护等工作。利用生物质和天然气等清洁能源，为珠江啤酒生产提供蒸汽，实现节能减排。与迪森合作的珠江啤酒分公司包括湛江珠江啤酒、阳江珠江啤酒、海丰珠江啤酒以及新丰珠江啤酒。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">珠江啤酒是中国驰名商标、中国名牌产品和绿色食品。珠江啤酒是广州珠江啤酒控股公司，迪森与全国6家珠江啤酒厂合作，由迪森投资并承担工程的设计、建设、运行、维护等工作。利用生物质和天然气等清洁能源，为珠江啤酒生产提供蒸汽，实现节能减排。与迪森合作的珠江啤酒分公司包括湛江珠江啤酒、阳江珠江啤酒、海丰珠江啤酒以及新丰珠江啤酒。</p><p><img src=\"/Uploads/image/152263782810394287.jpg\" title=\"152263782810394287.jpg\"/></p><p><img src=\"/Uploads/image/152263782849331665.jpg\" title=\"152263782849331665.jpg\"/></p><p><img src=\"/Uploads/image/152263782893347167.jpg\" title=\"152263782893347167.jpg\"/></p><p><br/></p>', 5, 0, 0, NULL, '2018-04-02 10:57:50', '2018-04-02 10:57:50', NULL);
INSERT INTO `articles` VALUES (46, '珠江啤酒集团综合能源供热项目', '/images/1522637870611.jpg', NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">珠江啤酒是中国驰名商标、中国名牌产品和绿色食品。珠江啤酒是广州珠江啤酒控股公司，迪森与全国6家珠江啤酒厂合作，由迪森投资并承担工程的设计、建设、运行、维护等工作。利用生物质和天然气等清洁能源，为珠江啤酒生产提供蒸汽，实现节能减排。与迪森合作的珠江啤酒分公司包括湛江珠江啤酒、阳江珠江啤酒、海丰珠江啤酒以及新丰珠江啤酒。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">珠江啤酒是中国驰名商标、中国名牌产品和绿色食品。珠江啤酒是广州珠江啤酒控股公司，迪森与全国6家珠江啤酒厂合作，由迪森投资并承担工程的设计、建设、运行、维护等工作。利用生物质和天然气等清洁能源，为珠江啤酒生产提供蒸汽，实现节能减排。与迪森合作的珠江啤酒分公司包括湛江珠江啤酒、阳江珠江啤酒、海丰珠江啤酒以及新丰珠江啤酒。</p><p><img src=\"/Uploads/image/152263782810394287.jpg\" title=\"152263782810394287.jpg\"/></p><p><img src=\"/Uploads/image/152263782849331665.jpg\" title=\"152263782849331665.jpg\"/></p><p><img src=\"/Uploads/image/152263782893347167.jpg\" title=\"152263782893347167.jpg\"/></p><p><br/></p>', 5, 0, 0, NULL, '2018-04-02 10:57:50', '2018-04-02 10:57:50', NULL);
INSERT INTO `articles` VALUES (47, '珠江啤酒集团综合能源供热项目', '/images/1522637870611.jpg', NULL, '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; transition: all 320ms ease-out 0s; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">珠江啤酒是中国驰名商标、中国名牌产品和绿色食品。珠江啤酒是广州珠江啤酒控股公司，迪森与全国6家珠江啤酒厂合作，由迪森投资并承担工程的设计、建设、运行、维护等工作。利用生物质和天然气等清洁能源，为珠江啤酒生产提供蒸汽，实现节能减排。与迪森合作的珠江啤酒分公司包括湛江珠江啤酒、阳江珠江啤酒、海丰珠江啤酒以及新丰珠江啤酒。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">珠江啤酒是中国驰名商标、中国名牌产品和绿色食品。珠江啤酒是广州珠江啤酒控股公司，迪森与全国6家珠江啤酒厂合作，由迪森投资并承担工程的设计、建设、运行、维护等工作。利用生物质和天然气等清洁能源，为珠江啤酒生产提供蒸汽，实现节能减排。与迪森合作的珠江啤酒分公司包括湛江珠江啤酒、阳江珠江啤酒、海丰珠江啤酒以及新丰珠江啤酒。</p><p><img src=\"/Uploads/image/152263782810394287.jpg\" title=\"152263782810394287.jpg\"/></p><p><img src=\"/Uploads/image/152263782849331665.jpg\" title=\"152263782849331665.jpg\"/></p><p><img src=\"/Uploads/image/152263782893347167.jpg\" title=\"152263782893347167.jpg\"/></p><p><br/></p>', 5, 0, 0, NULL, '2018-04-02 10:57:50', '2018-04-02 10:57:50', NULL);
INSERT INTO `articles` VALUES (48, '液化气、天然气、生物醇油、柴油哪个更划算', NULL, '繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较。。。', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较:</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">柴油大家更熟悉，就是加油站常卖的0#柴油，但对于餐饮企业来讲，更多使用的是地沟油、废轮胎、废机油提炼出来的粗柴油。当然价格便宜一半，燃烧效率可能连正常柴油的一半都不到。</p><p><br/></p>', 20, 0, 0, NULL, '2018-04-02 11:25:01', '2018-04-02 11:25:01', NULL);
INSERT INTO `articles` VALUES (49, '液化气、天然气、生物醇油、柴油哪个更划算', NULL, '繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较。。。', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较:</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">柴油大家更熟悉，就是加油站常卖的0#柴油，但对于餐饮企业来讲，更多使用的是地沟油、废轮胎、废机油提炼出来的粗柴油。当然价格便宜一半，燃烧效率可能连正常柴油的一半都不到。</p><p><br/></p>', 20, 0, 0, NULL, '2018-04-02 11:25:01', '2018-04-02 11:25:01', NULL);
INSERT INTO `articles` VALUES (50, '液化气、天然气、生物醇油、柴油哪个更划算', NULL, '繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较。。。', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较:</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">柴油大家更熟悉，就是加油站常卖的0#柴油，但对于餐饮企业来讲，更多使用的是地沟油、废轮胎、废机油提炼出来的粗柴油。当然价格便宜一半，燃烧效率可能连正常柴油的一半都不到。</p><p><br/></p>', 20, 0, 0, NULL, '2018-04-02 11:25:01', '2018-04-02 11:25:01', NULL);
INSERT INTO `articles` VALUES (51, '液化气、天然气、生物醇油、柴油哪个更划算', NULL, '繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较。。。', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较:</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">柴油大家更熟悉，就是加油站常卖的0#柴油，但对于餐饮企业来讲，更多使用的是地沟油、废轮胎、废机油提炼出来的粗柴油。当然价格便宜一半，燃烧效率可能连正常柴油的一半都不到。</p><p><br/></p>', 20, 0, 0, NULL, '2018-04-02 11:25:01', '2018-04-02 11:25:01', NULL);
INSERT INTO `articles` VALUES (52, '轮播图', NULL, NULL, NULL, 1, 0, 0, NULL, '2018-04-02 11:57:52', '2018-04-02 11:57:52', NULL);
INSERT INTO `articles` VALUES (53, '轮播图1', '/images/1522641493836.jpg', NULL, NULL, 52, 0, 0, NULL, '2018-04-02 11:58:13', '2018-04-02 11:58:13', NULL);
INSERT INTO `articles` VALUES (54, '轮播图2', '/images/1522641499271.jpg', NULL, NULL, 52, 0, 0, NULL, '2018-04-02 11:58:19', '2018-04-02 11:58:19', NULL);
INSERT INTO `articles` VALUES (55, '首页走进迪歌', '/images/1522649668654.jpg', '广州敢达热能科技有限公司是一家专注于电供暖设备研发、生产、销售及安装于一体的高新技术企业，坐落在美丽的山城重庆。智酷公司是中国集成房屋材料与设备产业联盟副理事长单位、中国电供暖产业创新战略联盟副理事长单位、中国建筑材料流通协会电供暖专业...', NULL, 1, 0, 0, NULL, '2018-04-02 14:11:46', '2018-04-02 14:14:28', NULL);
INSERT INTO `articles` VALUES (56, '液化气、天然气、生物醇油、柴油哪个更划算', NULL, '繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较。。。', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较:</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">柴油大家更熟悉，就是加油站常卖的0#柴油，但对于餐饮企业来讲，更多使用的是地沟油、废轮胎、废机油提炼出来的粗柴油。当然价格便宜一半，燃烧效率可能连正常柴油的一半都不到。</p><p><br/></p>', 20, 0, 0, NULL, '2018-04-02 11:25:01', '2018-04-02 11:25:01', NULL);
INSERT INTO `articles` VALUES (57, '液化气、天然气、生物醇油、柴油哪个更划算', NULL, '繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较。。。', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">繁多的燃料品种，让企业老板彻底迷惑了。到底什么燃料才是最合适的呢？本次就为大家做一个简单的科普和比较:</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">液化气，使用历史最悠久的燃料，因为火力猛、清洁、价格便宜、方便运输配送所以得到了广泛的应用。液化气使用钢瓶来盛装，也就是大家所说的煤气坛子。钢瓶里装的实际不是煤气（煤气是煤化工的产物，使用管道输送）而是丙烷、丁烷这两种成分按照一定比例进行混合而成。瓶内装的是液态，烧的时候是气态。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); line-height: 28px; font-family: 微软雅黑, Verdana, Arial, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">柴油大家更熟悉，就是加油站常卖的0#柴油，但对于餐饮企业来讲，更多使用的是地沟油、废轮胎、废机油提炼出来的粗柴油。当然价格便宜一半，燃烧效率可能连正常柴油的一半都不到。</p><p><br/></p>', 20, 0, 0, NULL, '2018-04-02 11:25:01', '2018-04-02 11:25:01', NULL);

-- ----------------------------
-- Table structure for cars
-- ----------------------------
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `displacement` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `photo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `amount` int(11) NULL DEFAULT NULL,
  `category` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `price` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NULL DEFAULT NULL,
  `product` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `message` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ip` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES (1, '陈生', '15882626026', NULL, NULL, '测试', '127.0.0.1', '2018-04-02 11:51:53', '2018-04-02 11:51:53', NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2017_06_24_170051_create_article_table', 1);
INSERT INTO `migrations` VALUES (4, '2017_06_26_154310_create_teams_table', 1);
INSERT INTO `migrations` VALUES (5, '2017_06_28_144157_create_messages_table', 1);
INSERT INTO `migrations` VALUES (6, '2017_07_01_115424_create_car_table', 1);
INSERT INTO `migrations` VALUES (7, '2017_07_18_144831_create_order_lists_table', 1);

-- ----------------------------
-- Table structure for order_lists
-- ----------------------------
DROP TABLE IF EXISTS `order_lists`;
CREATE TABLE `order_lists`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `order_data` timestamp(0) NULL DEFAULT NULL,
  `category` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parameter` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `amount` int(11) NULL DEFAULT NULL,
  `organization` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `article_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `education` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `good_at` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `design_concept` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `work_age` int(11) NULL DEFAULT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `introduce` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `production` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_name_unique`(`name`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'hupp@vip.qq.com', '$2y$10$6LheP4Zvo6xjoUV79B9.Ku7YJmDUbsNtpgIWMDwHBKD6g5A7H3MKu', NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
