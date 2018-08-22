-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: clinic
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.17.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `days`
--

DROP TABLE IF EXISTS `days`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `days` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `days`
--

LOCK TABLES `days` WRITE;
/*!40000 ALTER TABLE `days` DISABLE KEYS */;
INSERT INTO `days` VALUES (1,'Saturday'),(2,'Sunday'),(3,'Monday'),(4,'Tuesday'),(5,'Wednesday'),(6,'Thursday'),(7,'Friday');
/*!40000 ALTER TABLE `days` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(10) unsigned NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors`
--

LOCK TABLES `doctors` WRITE;
/*!40000 ALTER TABLE `doctors` DISABLE KEYS */;
INSERT INTO `doctors` VALUES (1,'miaababikir','Mosab Ibrahim Ahmed','$2y$10$MpIGQE1xGZhQ/orZprVtwuisCyh8t/rNVBrjkYJ.su.nmhArlanVG',1,'images/Ir3Up2RJOGxDqqTItTETT8FCWfHdwzsrmRUezX0f.jpeg','Dentist','\"Far far away, behind the word mountains, far from the countries Vokalia and\n                                                Consonantia, there live the blind texts.','2018-04-15 20:00:43','2018-04-15 20:00:43','X9hGfkwmk9loBZuZhTMKC0SnnKKPXSHQXweKsn3pNFP25hAUX8Frr4m0IqMR'),(2,'omir','Omir Gebreel','$2y$10$FeE4s97.o7matx6t8vDJ5OrlvCA/yN.ZlccmHXiIMhp4rhf5HYkfa',1,'images/lwcdcleo4uKHe5CeuWwkt4jsByXGDDRc42iiAwq3.jpeg','Dentist','\"Far far away, behind the word mountains, far from the countries Vokalia and\n                                                Consonantia, there live the blind texts.','2018-04-15 20:02:31','2018-04-15 20:02:31',NULL),(3,'omir','Omar Gafar','$2y$10$9gF9NkR7VO7ws6s.HA1l8uDo4T0Bjoexq.HvLXoa2dQ807fWPaXPO',1,'images/ImPBcQyUy5jVBsBunfmq9fw5cn3K96UynJuquqI0.jpeg','Dentist','\"Far far away, behind the word mountains, far from the countries Vokalia and\n                                                Consonantia, there live the blind texts.','2018-04-16 03:54:27','2018-04-16 03:54:27',NULL);
/*!40000 ALTER TABLE `doctors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctors_days`
--

DROP TABLE IF EXISTS `doctors_days`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctors_days` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `day_id` int(10) unsigned NOT NULL,
  `doctor_id` int(10) unsigned NOT NULL,
  `seats` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `doctors_days_day_id_foreign` (`day_id`),
  KEY `doctors_days_doctor_id_foreign` (`doctor_id`),
  CONSTRAINT `doctors_days_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`),
  CONSTRAINT `doctors_days_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctors_days`
--

LOCK TABLES `doctors_days` WRITE;
/*!40000 ALTER TABLE `doctors_days` DISABLE KEYS */;
INSERT INTO `doctors_days` VALUES (1,1,1,5,5),(2,2,1,3,2);
/*!40000 ALTER TABLE `doctors_days` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end_date` date NOT NULL,
  `doctor_id` int(10) unsigned NOT NULL,
  `patient_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `events_doctor_id_foreign` (`doctor_id`),
  KEY `events_patient_id_foreign` (`patient_id`),
  CONSTRAINT `events_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  CONSTRAINT `events_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'Moahammed Ahmed','2018-05-07','2018-05-07',1,1,'2018-04-22 07:58:36','2018-04-22 07:58:36','5adc5ccc9dffd'),(2,'Mosab Ibrahim','2018-05-14','2018-05-14',1,2,'2018-04-22 08:00:19','2018-04-22 08:00:19','5adc5d339f323'),(3,'Ali Ahmed','2018-04-30','2018-04-30',1,3,'2018-04-22 08:03:30','2018-04-22 08:03:30','5adc5df25e60e'),(4,'Misaa Abdalslam','2018-04-30','2018-04-30',1,4,'2018-04-22 09:34:49','2018-04-22 09:34:49','5adc73597f273'),(5,'Munzir Mukhtar','2018-04-08','2018-04-08',1,5,'2018-04-22 11:26:32','2018-04-22 11:26:32','5adc8d884d87c'),(6,'Ahmed Waleed','2018-04-22','2018-04-22',1,6,'2018-04-22 16:22:59','2018-04-22 16:22:59','5adcd3034ee25'),(7,'Mosab Ibrahim','2018-04-01','2018-04-01',1,10,'2018-04-22 17:47:18','2018-04-22 17:47:18','5adce6c6a54d1'),(8,'Ahmed Waleed','2018-04-07','2018-04-07',1,11,'2018-04-22 17:48:50','2018-04-22 17:48:50','5adce7227a34d'),(9,'عمير جبريل','2018-04-21','2018-04-21',1,12,'2018-04-30 03:54:09','2018-04-30 03:54:09','5ae6af81c3074'),(10,'omer albashir','2018-04-01','2018-04-01',1,13,'2018-04-30 03:59:00','2018-04-30 03:59:00','5ae6b0a492e0b');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (8,'2014_10_12_000000_create_users_table',1),(9,'2014_10_12_100000_create_password_resets_table',1),(10,'2018_04_15_200447_create_doctors_table',1),(11,'2018_04_15_200611_create_patients_table',1),(12,'2018_04_15_202126_create_days_table',1),(13,'2018_04_15_202218_create_events_table',1),(14,'2018_04_15_203931_create_doctors_days_table',1),(15,'2018_04_21_152244_add_token_feild_to_event_table',2),(16,'2018_04_22_065404_add_seats_feild_to_doctor_days_table',3),(17,'2018_04_22_120449_create_seats_table',4),(18,'2018_04_22_181824_add_remmeber_token_to_doctor_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(10) unsigned NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (1,'Moahammed Ahmed',1,'+123456789','miaababikir@gmail.com','Lorem ipsom','2018-04-22 07:58:36','2018-04-22 07:58:36'),(2,'عمير جبريل',1,'+123456789','miaababikir@gmail.com','lorem','2018-04-22 08:00:19','2018-04-22 08:00:19'),(3,'عمير جبريل',1,'+123456789','miaababikir@gmail.com','lorem','2018-04-22 08:03:30','2018-04-22 08:03:30'),(4,'عمير جبريل',1,'+123456789','miaababikir@gmail.com','lorem','2018-04-22 09:34:49','2018-04-22 09:34:49'),(5,'عمير جبريل',1,'+123456789','miaababikir@gmail.com','lorem','2018-04-22 11:26:32','2018-04-22 11:26:32'),(6,'عمير جبريل',0,'+123456789','miaababikir@gmail.com','lorem','2018-04-22 16:22:59','2018-04-22 16:22:59'),(7,'Mosab Ibrahim',1,'+123456789','miaababikir@gmail.com','lorem','2018-04-22 17:44:04','2018-04-22 17:44:04'),(8,'Mosab Ibrahim',1,'+123456789','miaababikir@gmail.com','lorem','2018-04-22 17:44:30','2018-04-22 17:44:30'),(9,'Mosab Ibrahim',1,'+123456789','miaababikir@gmail.com','lorem','2018-04-22 17:44:51','2018-04-22 17:44:51'),(10,'Mosab Ibrahim',1,'+123456789','miaababikir@gmail.com','lorem','2018-04-22 17:47:18','2018-04-22 17:47:18'),(11,'Ahmed Waleed',1,'+5963676367452','miaababikir@gmail.com','Lorem','2018-04-22 17:48:50','2018-04-22 17:48:50'),(12,'عمير جبريل',1,'+5963676367452','miaababikir@gmail.com','Lorem klfnf','2018-04-30 03:54:09','2018-04-30 03:54:09'),(13,'omer albashir',1,'09999','omer@hill.com','general check','2018-04-30 03:59:00','2018-04-30 03:59:00');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seats` (
  `doctor_id` int(10) unsigned NOT NULL,
  `date` date NOT NULL,
  `available_seats` int(11) NOT NULL,
  KEY `seats_doctor_id_foreign` (`doctor_id`),
  CONSTRAINT `seats_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seats`
--

LOCK TABLES `seats` WRITE;
/*!40000 ALTER TABLE `seats` DISABLE KEYS */;
INSERT INTO `seats` VALUES (1,'2018-04-30',5);
/*!40000 ALTER TABLE `seats` ENABLE KEYS */;
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-07  9:51:04
