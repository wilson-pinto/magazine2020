-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: myblog
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `article` (
  `article_rid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `body` text,
  `cat_rid` int(11) DEFAULT NULL,
  `author_rid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`article_rid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'The Wise Man','<p><img alt=\"Short Moral Stories - An Old Man\" src=\"https://cdn.wealthygorilla.com/wp-content/uploads/2016/10/Short-Moral-Stories-An-Old-Man.jpg\" style=\"height:350px; width:700px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>An old man lived in the village. He was one of the most unfortunate people in the world. The whole village was tired of him; he was always gloomy, he constantly complained and was always&nbsp;in a bad mood.</p>\r\n\r\n<p>The longer he lived, the more bile he was becoming and the more poisonous were his words. People avoided him, because his misfortune became contagious. It was even unnatural and insulting to be happy next to him.</p>\r\n\r\n<p>He created the feeling of unhappiness in others.</p>\r\n\r\n<p>But one day, when he turned&nbsp;<a href=\"https://wealthygorilla.com/50-real-life-lessons-from-old-man/\">eighty years old</a>, an incredible thing happened. Instantly everyone started hearing&nbsp;the rumour:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><strong><em>&ldquo;An Old Man is happy today, he doesn&rsquo;t complain about anything, smiles, and even his face is freshened up.&rdquo;</em></strong></p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The whole village gathered together. The old man was asked:</p>\r\n\r\n<p><strong>Villager:</strong>&nbsp;What happened to you?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><strong>&ldquo;Nothing special. Eighty years I&rsquo;ve been chasing happiness, and it was useless. And then I decided to live without happiness and just enjoy life. That&rsquo;s why I&rsquo;m happy now.&rdquo; &ndash; An Old Man</strong></p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Moral of the story:</strong></h3>\r\n\r\n<p>Don&rsquo;t chase happiness. Enjoy your life.</p>',3,2,'2020-01-30 07:47:47','2020-02-02 06:44:10',NULL,1),(2,'An Old Man Lived in the Village','<p>An old man lived in the village. He was one of the most unfortunate people in the world. The whole village was tired of him; he was always gloomy, he constantly complained and was always&nbsp;in a bad mood.</p>\r\n\r\n<p>The longer he lived, the more bile he was becoming and the more poisonous were his words. People avoided him, because his misfortune became contagious. It was even unnatural and insulting to be happy next to him.</p>\r\n\r\n<p>He created the feeling of unhappiness in others.</p>\r\n\r\n<p>But one day, when he turned&nbsp;<a href=\"https://wealthygorilla.com/50-real-life-lessons-from-old-man/\">eighty years old</a>, an incredible thing happened. Instantly everyone started hearing&nbsp;the rumour:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><strong><em>&ldquo;An Old Man is happy today, he doesn&rsquo;t complain about anything, smiles, and even his face is freshened up.&rdquo;</em></strong></p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The whole village gathered together. The old man was asked:</p>\r\n\r\n<p><strong>Villager:</strong>&nbsp;What happened to you?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><strong>&ldquo;Nothing special. Eighty years I&rsquo;ve been chasing happiness, and it was useless. And then I decided to live without happiness and just enjoy life. That&rsquo;s why I&rsquo;m happy now.&rdquo; &ndash; An Old Man</strong></p>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Moral of the story:</strong></h3>\r\n\r\n<p>Don&rsquo;t chase happiness. Enjoy your life.</p>',3,1,'2020-02-02 05:30:59','2020-02-02 05:30:59',NULL,1),(3,'The Foolish Donkey','<p>A salt seller used to carry the salt bag on his donkey to the market every day.</p>\r\n\r\n<p>On the way they had to cross a stream. One day the donkey suddenly tumbled down the stream and the salt bag also fell into the water. The salt dissolved in the water and hence the bag became very light to carry. The donkey was happy.</p>\r\n\r\n<p>Then the donkey started to play the same trick every day.</p>\r\n\r\n<p>The salt seller came to understand the trick and decided to teach a lesson to it. The next day he loaded a cotton bag on the donkey.</p>\r\n\r\n<p>Again it played the same trick hoping that the cotton bag would be still become lighter.</p>\r\n\r\n<p>But the dampened cotton became very heavy to carry and the donkey suffered. It learnt a lesson. It didn&rsquo;t play the trick anymore after that day, and the seller was happy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Moral of the story:</strong></h3>\r\n\r\n<p>Luck won&rsquo;t favor always.</p>',3,3,'2020-02-02 05:34:15','2020-02-02 05:34:15',NULL,1),(4,'Laravel','<p><strong>What is Laravel ?</strong></p>\r\n\r\n<p><a href=\"https://laravel.com/\"><strong>Laravel</strong></a>&nbsp;is a web application framework created by&nbsp;<a href=\"https://github.com/taylorotwell\">Taylor Otwell</a>&nbsp;in 2011 and like all other modern frameworks, it also follows the Model-View-Controller (MVC) architectural pattern. Laravel values Elegance, Simplicity, and Readability and if one talks of building applications with PHP frameworks, Laravel is second to none.</p>\r\n\r\n<p>Since Laravel is open-source, one can find the source code in its Github repository&nbsp;<a href=\"https://github.com/laravel\">here</a>. Also, the documentation for the framework can be found on the&nbsp;<a href=\"http://laravel.com/docs\">here</a>.</p>\r\n\r\n<p><strong>What are Laracasts?</strong></p>\r\n\r\n<p>If you need help getting started with Laravel, you can right away start learning and developing using&nbsp;<a href=\"https://laracasts.com/\">Laracasts</a>&nbsp;which has hundreds of video tutorials on it. Skim the basics or start your journey to Laravel mastery, all from Laracasts!</p>\r\n\r\n<p>Want to start now? Laravel 5.7 from Scratch Laracast&nbsp;<a href=\"https://laracasts.com/series/laravel-from-scratch-2018\">link</a>.<br />\r\n<br />\r\n<strong>What makes Laravel so special ?</strong></p>\r\n\r\n<p>Laravel is power-packed with its own ready-to-use first-party packages some of which are :</p>\r\n\r\n<ul>\r\n	<li><strong>Scheduler</strong>: It includes support for scheduling periodically executed tasks.</li>\r\n	<li><strong>Cashier</strong>: for managing subscription billing services.</li>\r\n	<li><strong>Flysystem</strong>: allows remote storage to be used as in the same way as local file systems.</li>\r\n	<li><strong>Socialite</strong>: simplified mechanism for OAuth authentication with providers like Facebook, Github, Google,&nbsp; etc.</li>\r\n</ul>\r\n\r\n<p><strong>How good is Laravel ?</strong></p>\r\n\r\n<p>Let us now have a reality check on how good Laravel is as a web application framework based on a few key points :</p>\r\n\r\n<ul>\r\n	<li>&nbsp;<strong>Language Support</strong>: PHP Version &gt;= 5.5.9</li>\r\n	<li>&nbsp;<strong>MVC Framework</strong>: Yes (from Laravel 2 onwards)</li>\r\n	<li>&nbsp;<strong>Object Relational Mapping</strong>: Yes. Needed to enforce constraints on the relationship between database objects.</li>\r\n	<li><strong>Testing</strong>: Yes. Unit Testing is provided as an integral part of Laravel that prevents regressions in the framework.&nbsp;<a href=\"https://en.wikipedia.org/wiki/PHPUnit\">PHPUnit</a></li>\r\n	<li><strong>DataBase Migration</strong>: Yes. It helps in simplifying the deployment and updating of applications.</li>\r\n	<li><strong>Security</strong>: Yes. SSH(Secure Shell )is used as an encrypted network protocol for execution of CLI(command-line interface) commands.</li>\r\n	<li>&nbsp;<strong>Caching</strong>: Yes.</li>\r\n	<li>&nbsp;<strong>Form Validation</strong>: Yes . Event listeners are bind internally which invokes the form validation methods and thus the actual form is generated.</li>\r\n	<li>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Scaffold_(programming)\"><strong>Scaffolding</strong></a>: Yes. In Laravel, the programmer can specify how the application database may be used.</li>\r\n	<li>&nbsp;<strong>Rapid Application Development</strong>: Yes.</li>\r\n	<li>&nbsp;<strong>Mobility</strong>: No.</li>\r\n</ul>',5,4,'2020-02-02 06:55:20','2020-02-02 06:55:20',NULL,1);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `author` (
  `author_rid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `profile_img` varchar(45) DEFAULT NULL,
  `branch_rid` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`author_rid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author`
--

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES (1,'Geetha Gowda','1580370419_2017-10-19-18-50-53-740.jpg',1,1,1,'2020-01-30 07:46:59',NULL,'2020-02-03 15:53:25'),(2,'Sanjatha Shetty','1580494852_pexels-photo-1376042.jpeg',1,1,1,'2020-01-31 18:20:52',NULL,'2020-02-02 06:00:32'),(3,'Prajna Naik','1580621559_DTvvgNpXUAEjB_q.jpg',1,1,1,'2020-02-02 05:32:39',NULL,'2020-02-02 05:32:39'),(4,'Wilson Pinto','1580626322_LRM_EXPORT_20170915_103410low.jpg',1,1,1,'2020-02-02 06:52:02',NULL,'2020-02-02 06:52:02');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `branch` (
  `branch_rid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`branch_rid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (1,'Computer Science & Engg'),(2,'ec');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `category` (
  `cat_rid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `img_url` varchar(100) DEFAULT NULL,
  `text` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`cat_rid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Drawings',1,'tools.svg','Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum'),(2,'Photographs',1,'photography.svg','Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum'),(3,'Story',2,'script.svg','Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum'),(4,'Poem\'s',2,'poem.svg','Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum'),(5,'Technical Articles',2,'hacker.svg','Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_dictionary`
--

DROP TABLE IF EXISTS `data_dictionary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `data_dictionary` (
  `dd_index` int(11) NOT NULL AUTO_INCREMENT,
  `dd_value` varchar(45) DEFAULT NULL,
  `dd_type` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`dd_index`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dictionary`
--

LOCK TABLES `data_dictionary` WRITE;
/*!40000 ALTER TABLE `data_dictionary` DISABLE KEYS */;
INSERT INTO `data_dictionary` VALUES (1,'Videos',1,NULL),(2,'Achievements',1,NULL),(3,'Events',1,NULL),(4,'Photos',1,NULL);
/*!40000 ALTER TABLE `data_dictionary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `gallery` (
  `gal_rid` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `desc` varchar(300) DEFAULT NULL,
  `url` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`gal_rid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,1,'Laravel Tutorial','https://www.youtube.com/embed/EU7PRmCpx-0','2020-02-02 08:34:47',NULL,'2020-02-03 16:33:03',1),(2,3,'Womens\" Day','1580635733_2017-10-19-18-50-53-740.jpg','2020-02-02 09:28:53',NULL,'2020-02-03 16:14:30',1),(3,3,'College Day','1580635806_let.jpg','2020-02-02 09:30:06',NULL,'2020-02-03 16:14:42',1),(4,1,'UI/UX Design','https://www.youtube.com/embed/tRpoI6vkqLs','2020-02-02 11:04:11',NULL,'2020-02-03 16:34:09',1);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
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
INSERT INTO `password_resets` VALUES ('wilson@willsstudio.com','$2y$10$jn5tp0/0r2O7A4a3vW1zgOl7TFhJdF2Q5CpNZhUtje3Uai9TwZEFq','2020-01-09 02:28:09');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `post` (
  `post_rid` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(45) DEFAULT NULL,
  `cat_rid` int(11) DEFAULT NULL,
  `author_rid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_rid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'1580370571_2017-12-01-12-02-57-944.jpg',2,2,'2020-01-30 07:49:31','2020-01-31 18:21:11',NULL,1),(2,'1580370631_PicsArt_07-25-09.40.21.jpg',2,1,'2020-01-30 07:50:31','2020-01-30 07:50:31',NULL,1),(3,'1580492538_w640.jpeg',2,4,'2020-01-31 17:42:18','2020-02-02 06:53:15',NULL,1),(4,'1580492634_sffddfs.jpg',2,1,'2020-01-31 17:43:54','2020-01-31 17:43:54',NULL,1),(5,'1580492679_pexels-photo-1376042.jpeg',2,4,'2020-01-31 17:44:39','2020-02-02 06:53:31',NULL,1),(6,'1580493079_pexels-photo-1362724.jpeg',2,4,'2020-01-31 17:51:19','2020-02-02 06:53:23',NULL,1),(7,'1580493185_sd.jpeg',2,1,'2020-01-31 17:53:05','2020-02-03 16:43:53',NULL,1),(8,'1580628192_download.jfif',1,4,'2020-02-02 07:23:12','2020-02-03 15:48:26',NULL,0),(9,'1580628238_download (1).jfif',1,4,'2020-02-02 07:23:58','2020-02-02 07:26:20',NULL,0),(10,'1580748265_LRM_EXPORT_20170915_103410low.jpg',2,4,'2020-02-03 16:44:25','2020-02-03 16:44:25',NULL,1),(11,'1580749710_images (15).jpeg',2,3,'2020-02-03 17:05:45','2020-02-03 17:08:30',NULL,1),(12,'1580749862_2017-10-19-18-50-53-740.jpg',2,4,'2020-02-03 17:11:02','2020-02-03 17:11:02',NULL,1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Wilson Pinto','wilson@willsstudio.in',NULL,'$2y$10$IYp5vz7bp5eKk2s/Y8RoF.sP38/5EqprV2gmgR6iNJ4w6IclLrC3K','QQIih4oUzTUoOPVXBI4n1vKxadIhHaHde84vrx5ZL6w3Th2Zp4Y80XpVXS52','2020-01-09 02:25:13','2020-01-09 02:25:13');
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

-- Dump completed on 2020-02-03  9:40:14
