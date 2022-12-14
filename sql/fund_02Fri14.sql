-- MariaDB dump 10.17  Distrib 10.4.10-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: fund
-- ------------------------------------------------------
-- Server version	10.4.10-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mn_applicationfunctiongroups`
--

DROP TABLE IF EXISTS `mn_applicationfunctiongroups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mn_applicationfunctiongroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicationmoduleid` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `displayorder` int(3) NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `applicationresourceid` int(11) unsigned DEFAULT NULL,
  `created_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `insertpointoftime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `insertpointoftime` (`insertpointoftime`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mn_applicationfunctiongroups`
--

LOCK TABLES `mn_applicationfunctiongroups` WRITE;
/*!40000 ALTER TABLE `mn_applicationfunctiongroups` DISABLE KEYS */;
INSERT INTO `mn_applicationfunctiongroups` VALUES (1,1,'T???ng quan',1,'fa fa-pie-chart',0,'1','2020-02-03 07:02:27','1','2020-02-03 07:02:27',NULL,'2020-02-03 07:02:27'),(2,1,'Qu???n l?? d??ng ti???n c?? nh??n',2,'fas fa-calculator',NULL,'1','2020-02-03 07:02:51','1','2020-02-11 01:45:56',NULL,'2020-02-03 07:02:51'),(3,1,'D??? b??o ch??? s???',3,'fa fa-search',0,'1','2020-02-03 07:07:25','1','2020-02-03 07:07:25',NULL,'2020-02-03 07:07:25'),(4,1,'Ti???t ki???m',4,'fas fa-piggy-bank',NULL,'1','2020-02-03 07:07:39','1','2020-02-11 01:45:11',NULL,'2020-02-03 07:07:39'),(5,1,'?????u t??',5,'fas fa-exchange-alt',NULL,'1','2020-02-03 07:07:52','1','2020-02-11 01:44:21',NULL,'2020-02-03 07:07:52'),(6,1,'D???ch v??? t?? v???n',6,'fa fa-volume-control-phone',0,'1','2020-02-03 07:08:03','1','2020-02-03 07:08:03',NULL,'2020-02-03 07:08:03'),(7,2,'Th??ng tin c?? nh??n',1,'fas fa-user',NULL,'1','2020-02-03 07:08:41','1','2020-02-14 03:25:39',NULL,'2020-02-03 07:08:41'),(8,2,'H???p ?????ng',2,'fas fa-star',NULL,'1','2020-02-03 07:08:48','1','2020-02-14 03:16:39',NULL,'2020-02-03 07:08:48'),(10,4,'Theo ?????i t?????ng kh??ch h??ng',1,'fas fa-user',NULL,'1','2020-02-06 07:33:50','1','2020-02-14 03:57:17',NULL,'2020-02-06 07:33:50'),(11,4,'Theo s???n ph???m',2,'fas fa-star',NULL,'1','2020-02-06 07:34:08','1','2020-02-14 03:57:39',NULL,'2020-02-06 07:34:08'),(19,3,'H??? tr???',3,'fas fa-piggy-bank',NULL,'1','2020-02-11 03:34:15','1','2020-02-14 03:18:36',NULL,'2020-02-11 03:34:15'),(22,6,'Th??ng tin',1,'fa fa-bars',NULL,'1','2020-02-11 08:18:10','1','2020-02-14 03:54:07',NULL,'2020-02-11 08:18:10'),(23,6,'C??i ?????t t??i kho???n',2,'fa fa-bars',NULL,'1','2020-02-11 08:18:32','1','2020-02-11 09:27:37',NULL,'2020-02-11 08:18:32'),(24,7,'Danh s??ch User',1,'fa fa-bars',7,'1','2020-02-11 09:22:20','1','2020-02-11 09:22:20',NULL,'2020-02-11 09:22:20'),(25,7,'Qu???n l?? menu',2,'fa fa-bars',NULL,'1','2020-02-11 09:22:37','1','2020-02-11 09:22:37',NULL,'2020-02-11 09:22:37'),(26,8,'T???ng quan',1,'fa fa-pie-chart',NULL,'1','2020-02-14 03:31:32','1','2020-02-14 03:31:32',NULL,'2020-02-14 03:31:32'),(27,8,'Qu???n l?? d??ng ti???n c?? nh??n',2,'fas fa-calculator',NULL,'1','2020-02-14 03:32:25','1','2020-02-14 03:32:25',NULL,'2020-02-14 03:32:25'),(28,8,'D??? b??o ch??? s???',3,'fa fa-search',NULL,'1','2020-02-14 03:32:47','1','2020-02-14 03:32:47',NULL,'2020-02-14 03:32:47'),(29,8,'Ti???t ki???m',4,'fas fa-piggy-bank',NULL,'1','2020-02-14 03:33:05','1','2020-02-14 03:33:05',NULL,'2020-02-14 03:33:05'),(30,8,'?????u t??',5,'fas fa-exchange-alt',NULL,'1','2020-02-14 03:33:24','1','2020-02-14 03:33:24',NULL,'2020-02-14 03:33:24'),(31,8,'D???ch v??? t?? v???n',6,'fa fa-volume-control-phone',NULL,'1','2020-02-14 03:33:40','1','2020-02-14 03:33:40',NULL,'2020-02-14 03:33:40'),(32,8,'Th??ng tin t??i kho???n KH',7,'fas fa-address-card',NULL,'1','2020-02-14 03:35:33','1','2020-02-14 03:52:04',NULL,'2020-02-14 03:35:33'),(33,8,'H??? tr??? t?? v???n kh??ch h??ng',8,'fas fa-users',NULL,'1','2020-02-14 03:35:57','1','2020-02-14 03:37:48',NULL,'2020-02-14 03:35:57');
/*!40000 ALTER TABLE `mn_applicationfunctiongroups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mn_applicationmodules`
--

DROP TABLE IF EXISTS `mn_applicationmodules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mn_applicationmodules` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `applicationmodulename` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `displayorder` int(3) NOT NULL,
  `sys` int(1) NOT NULL DEFAULT 0,
  `hidden` int(3) unsigned NOT NULL DEFAULT 0,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `insertpointoftime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `insertpointoftime` (`insertpointoftime`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mn_applicationmodules`
--

LOCK TABLES `mn_applicationmodules` WRITE;
/*!40000 ALTER TABLE `mn_applicationmodules` DISABLE KEYS */;
INSERT INTO `mn_applicationmodules` VALUES (1,'HETHONGQUANLY-KH','H??? TH???NG QU???N L??',1,0,0,NULL,'','2019-11-14 03:29:14','1','2020-02-14 03:27:59',NULL,'2019-11-14 03:29:14'),(2,'THONGTINTAIKHOAN','TH??NG TIN T??I KHO???N',2,0,0,NULL,'','2019-11-14 03:29:14','1','2020-02-14 03:10:09',NULL,'2019-11-14 03:29:14'),(3,'DICHVUKHACHHANG247','D???CH V??? KH??CH H??NG 24/7',3,0,0,NULL,'130','2019-11-25 08:22:59','1','2020-02-14 03:15:15',NULL,'2019-11-25 08:22:59'),(4,'QUANLYTHONGKE','QU???N L?? TH???NG K??',4,0,0,NULL,'1','2020-02-06 07:24:18','1','2020-02-14 03:11:42',NULL,'2020-02-06 07:24:18'),(5,'TAICHINH','T??I CH??NH',5,0,1,NULL,'1','2020-02-06 07:26:11','1','2020-02-14 03:54:27',NULL,'2020-02-06 07:26:11'),(6,'QUANLYUSER','QU???N L?? USER',6,0,0,NULL,'1','2020-02-11 03:52:53','1','2020-02-14 03:13:34',NULL,'2020-02-11 03:52:53'),(7,'QUANTRIHETHONG','QU???N TR??? H??? TH???NG',7,0,0,NULL,'1','2020-02-11 09:20:24','1','2020-02-11 09:20:24',NULL,'2020-02-11 09:20:24'),(8,'HETHONGQUANLY-QL','QU???N L?? H??? TH???NG QU???N L??',1,0,0,NULL,'1','2020-02-14 03:30:14','1','2020-02-14 03:39:48',NULL,'2020-02-14 03:30:14');
/*!40000 ALTER TABLE `mn_applicationmodules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mn_applicationresources`
--

DROP TABLE IF EXISTS `mn_applicationresources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mn_applicationresources` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagesecurity` tinyint(3) unsigned DEFAULT 0,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `insertpointoftime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `insertpointoftime` (`insertpointoftime`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mn_applicationresources`
--

LOCK TABLES `mn_applicationresources` WRITE;
/*!40000 ALTER TABLE `mn_applicationresources` DISABLE KEYS */;
INSERT INTO `mn_applicationresources` VALUES (1,'0001','Ch??? s??? danh m???c c???p 1','dashboard',0,'fa fa-bars','1','2020-02-03 07:10:44','1','2020-02-11 01:38:44',NULL,'2020-02-03 07:10:44'),(2,'0002','Ch??? s??? danh m???c c???p 2','dashboard',0,'fa fa-bars','1','2020-02-03 07:10:55','1','2020-02-11 01:39:09',NULL,'2020-02-03 07:10:55'),(3,'0003','Ch??? s??? danh m???c c???p 3','dashboard',0,'fa fa-bars','1','2020-02-03 07:11:03','1','2020-02-11 01:39:35',NULL,'2020-02-03 07:11:03'),(4,'0004','Role','applicationroles-index',0,'fa fa-bars','1','2020-02-06 08:01:19','1','2020-02-06 09:06:50',NULL,'2020-02-06 08:01:19'),(5,'0005','Module','applicationmodules-index',0,'fa fa-bars','1','2020-02-06 08:01:52','1','2020-02-06 09:07:11',NULL,'2020-02-06 08:01:52'),(6,'0006','Page (route) truy c???p','applicationresources-index',0,'fa fa-bars','1','2020-02-06 08:02:07','1','2020-02-06 09:07:56',NULL,'2020-02-06 08:02:07'),(7,'0007','Qu???n l?? user truy c???p','users-index',0,'fa fa-bars','1','2020-02-06 08:02:45','1','2020-02-06 09:03:03',NULL,'2020-02-06 08:02:45'),(8,'0008','C?? nh??n','dashboard',0,'fa fa-bars','1','2020-02-11 02:04:29','1','2020-02-11 02:04:29',NULL,'2020-02-11 02:04:29'),(9,'0009','H???p ?????ng','dashboard',0,'fa fa-bars','1','2020-02-11 02:04:59','1','2020-02-11 02:04:59',NULL,'2020-02-11 02:04:59');
/*!40000 ALTER TABLE `mn_applicationresources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mn_applicationroles`
--

DROP TABLE IF EXISTS `mn_applicationroles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mn_applicationroles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT '',
  `modulesallowed` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `code_cp` varchar(20) COLLATE utf8_unicode_ci DEFAULT ' ',
  `created_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `insertpointoftime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `insertpointoftime` (`insertpointoftime`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mn_applicationroles`
--

LOCK TABLES `mn_applicationroles` WRITE;
/*!40000 ALTER TABLE `mn_applicationroles` DISABLE KEYS */;
INSERT INTO `mn_applicationroles` VALUES (1,'HT','H??? th???ng','Qu???n tr???','2,3,4,5,6,7,8',NULL,'','2019-11-20 04:06:47','1','2020-02-14 03:38:10',NULL,'2019-11-20 04:06:47'),(2,'KH','Kh??ch h??ng',NULL,'1,2,3',NULL,'','2019-11-20 04:06:47','1','2020-02-14 03:21:20',NULL,'2019-11-20 04:06:47'),(3,'GD','Gi??m ?????c',NULL,'1,2,3,4,5,6',NULL,'','2019-11-20 04:06:47','1','2020-02-14 03:21:55',NULL,'2019-11-20 04:06:47'),(4,'BH','B??n h??ng',NULL,'1,2,3,4,5,6',NULL,'130','2019-11-20 09:21:29','1','2020-02-14 03:22:26',NULL,'2019-11-20 09:21:29');
/*!40000 ALTER TABLE `mn_applicationroles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mn_functionassignment`
--

DROP TABLE IF EXISTS `mn_functionassignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mn_functionassignment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `applicationfunctiongroupid` int(11) unsigned NOT NULL,
  `applicationresourceid` int(11) unsigned NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL,
  `created_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `insertpointoftime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `insertpointoftime` (`insertpointoftime`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mn_functionassignment`
--

LOCK TABLES `mn_functionassignment` WRITE;
/*!40000 ALTER TABLE `mn_functionassignment` DISABLE KEYS */;
INSERT INTO `mn_functionassignment` VALUES (1,5,1,1,'1','2020-02-03 07:11:24','1','2020-02-03 07:11:24',NULL,'2020-02-03 07:11:24'),(2,5,2,2,'1','2020-02-03 07:11:28','1','2020-02-03 07:11:28',NULL,'2020-02-03 07:11:28'),(3,5,3,3,'1','2020-02-03 07:11:33','1','2020-02-03 07:11:33',NULL,'2020-02-03 07:11:33'),(4,13,4,1,'1','2020-02-06 09:00:27','1','2020-02-06 09:00:27',NULL,'2020-02-06 09:00:27'),(5,13,5,2,'1','2020-02-06 09:00:33','1','2020-02-06 09:00:33',NULL,'2020-02-06 09:00:33'),(6,13,6,3,'1','2020-02-06 09:00:38','1','2020-02-06 09:00:38',NULL,'2020-02-06 09:00:38'),(7,16,8,1,'1','2020-02-11 02:05:32','1','2020-02-11 02:05:32',NULL,'2020-02-11 02:05:32'),(8,16,9,2,'1','2020-02-11 02:05:45','1','2020-02-11 02:05:45',NULL,'2020-02-11 02:05:45'),(9,21,4,1,'1','2020-02-11 07:59:16','1','2020-02-11 07:59:16',NULL,'2020-02-11 07:59:16'),(10,21,5,2,'1','2020-02-11 07:59:26','1','2020-02-11 07:59:26',NULL,'2020-02-11 07:59:26'),(11,21,6,3,'1','2020-02-11 07:59:35','1','2020-02-11 07:59:35',NULL,'2020-02-11 07:59:35'),(12,25,4,1,'1','2020-02-11 09:25:24','1','2020-02-11 09:25:24',NULL,'2020-02-11 09:25:24'),(13,25,5,2,'1','2020-02-11 09:25:34','1','2020-02-11 09:25:34',NULL,'2020-02-11 09:25:34'),(14,25,6,3,'1','2020-02-11 09:25:42','1','2020-02-11 09:25:42',NULL,'2020-02-11 09:25:42'),(15,30,1,1,'1','2020-02-14 03:34:17','1','2020-02-14 03:34:17',NULL,'2020-02-14 03:34:17'),(16,30,2,2,'1','2020-02-14 03:34:22','1','2020-02-14 03:34:22',NULL,'2020-02-14 03:34:22'),(17,30,3,3,'1','2020-02-14 03:34:30','1','2020-02-14 03:34:30',NULL,'2020-02-14 03:34:30'),(18,32,8,1,'1','2020-02-14 03:57:42','1','2020-02-14 03:57:42',NULL,'2020-02-14 03:57:42'),(19,32,9,2,'1','2020-02-14 03:57:51','1','2020-02-14 03:57:51',NULL,'2020-02-14 03:57:51');
/*!40000 ALTER TABLE `mn_functionassignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mn_securityresources`
--

DROP TABLE IF EXISTS `mn_securityresources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mn_securityresources` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rolecode` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `resourcecode` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `cview` varchar(5) COLLATE utf8_unicode_ci DEFAULT '0',
  `cadd` varchar(5) COLLATE utf8_unicode_ci DEFAULT '0',
  `cdelete` varchar(5) COLLATE utf8_unicode_ci DEFAULT '0',
  `cupdate` varchar(5) COLLATE utf8_unicode_ci DEFAULT '0',
  `capprove` varchar(5) COLLATE utf8_unicode_ci DEFAULT '0',
  `cuserview` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT '',
  `created_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_user_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `insertpointoftime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `insertpointoftime` (`insertpointoftime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mn_securityresources`
--

LOCK TABLES `mn_securityresources` WRITE;
/*!40000 ALTER TABLE `mn_securityresources` DISABLE KEYS */;
/*!40000 ALTER TABLE `mn_securityresources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,2),(2,2),(3,2),(4,2),(5,2);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (0,'customer','customer','kh??ch h??ng',NULL,NULL),(1,'owner','owner','s???p',NULL,NULL),(2,'admin','admin','nh??n vi??n - qu???n tr??? vi??n',NULL,NULL),(3,'admin_hr','admin_hr','Nh??n s???',NULL,NULL),(4,'nv','nv','nh??n vi??n',NULL,NULL),(5,'account','account','Nh??n vi??n k??? to??n',NULL,NULL),(6,'sales','sales','Nh??n vi??n b??n h??ng',NULL,NULL),(7,'data','data','Nh??n vi??n data',NULL,NULL),(8,'marketing','makerting','Nh??n vi??n marketing',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_user_id` int(10) unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_updated_user_id_foreign` (`updated_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_admin`
--

DROP TABLE IF EXISTS `users_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_user_id` int(10) unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_admin`
--

LOCK TABLES `users_admin` WRITE;
/*!40000 ALTER TABLE `users_admin` DISABLE KEYS */;
INSERT INTO `users_admin` VALUES (1,'admin','admin@rbooks.vn','$2y$10$Rl/jbWF.bLWjO60Bx3I0GuhIV5UEQzs4ttLulXmJk57MhBHlITnky','a4gTabLevAwpm4rcFq13NUHmxkycPhloKwX436Sxrtj6SHJpkusb9GTknhzr','HT',NULL,NULL,NULL,'2019-11-26 19:08:29'),(2,'Ph???m Th??? Ng???c Ch??u','chaupham@lamians.com','$2y$10$PCBU0CGF6AxxDG4aMmgZyecZunRIRlAJsPJ7kbJ4AXoGUIAFnSW7G',NULL,'GD',NULL,NULL,'2019-09-12 12:06:41','2020-02-03 08:10:44'),(3,'Di???p Ho??ng Linh','it7@lamians.com','$2y$10$XA4yPSSf0tJP2A.WsWstA.byC.9uCRfphNj56xVzyeYnO1ETLKkWS','5qQshnvSvFh9vwhhc6jMUN8qF04OIMqLNhhtsRKhB9jtUNVx91Ly1KzMlTbD','KH',NULL,NULL,'2019-10-18 18:36:21','2020-02-03 10:39:02'),(4,'Phan V??n C??ng','it6@lamians.com','$2y$10$4irBc/KZV7PYGY8RA.GtkO6aYG8RIHt20iCz7iYoRxyT3X7FpdBxa','0YwSYbufBLuMSgqJ7Ywj0HFYyoV6KYtbhcU12mBtZrZhAUxVJqyaygj8QG0J','HT',NULL,NULL,'2019-10-19 17:45:02','2020-02-11 11:10:12'),(5,'????? Tr??ng D????ng','it3@lamians.com','$2y$10$JxwcDcr7yb0HKhjIIQHX3.PXAusrQR4VjLOo0bQsz4ecnb3qsEx/u',NULL,'HT',NULL,NULL,'2019-11-26 14:02:52','2020-02-11 11:10:57');
/*!40000 ALTER TABLE `users_admin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-14 11:04:01
