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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_dictionary`
--

LOCK TABLES `data_dictionary` WRITE;
/*!40000 ALTER TABLE `data_dictionary` DISABLE KEYS */;
INSERT INTO `data_dictionary` VALUES (1,'Videos',1,NULL),(2,'Achievements',1,NULL),(3,'Events',1,NULL),(4,'Photos',1,NULL),(5,'Messages',2,NULL),(6,'Principal\'s Note',2,NULL),(7,'Editors Note',2,NULL);
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
-- Table structure for table `message_note_report`
--

DROP TABLE IF EXISTS `message_note_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `message_note_report` (
  `mnr_rid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `img_url` varchar(100) DEFAULT NULL,
  `bio` text,
  `body` text,
  `display_order` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`mnr_rid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message_note_report`
--

LOCK TABLES `message_note_report` WRITE;
/*!40000 ALTER TABLE `message_note_report` DISABLE KEYS */;
INSERT INTO `message_note_report` VALUES (1,'Student Welfare Unit','Shri. Narasimha Bhat',NULL,'<p>&nbsp;Selection Grade Lecturer, Member</p>','<p>ಯುವ ಶಕ್ತಿಯೇ ದೇಶದ ಶಕ್ತಿ. ಒಂದು ದೇಶದ ಮುನ್ನಡೆಯ ವೇಗ ಆ ದೇಶದ ಯುವ ಶಕ್ತಿಯ ಗುಣಮಟ್ಟವನ್ನು ಆಧರಿಸಿದೆ. ಭಾರತ ಇಂದು ಯುವ ಶಕ್ತಿ ಸಮೃದ್ಧ ದೇಶವಾಗಿದ್ದು, ಇಡೀ ವಿಶ್ವಕ್ಕೆ ಯುವ ಶಕ್ತಿಯನ್ನು ಪೂರೈಸುತ್ತಿದೆ. ಸಮರ್ಪಕವಾದ ಕೌಶಲ್ಯವನ್ನು ಹೊಂದಿದವರಿಗೆ ಅವಕಾಶಗಳು ಸಾಗರದಷ್ಟಿರುತ್ತವೆ. ಇಂತಹ ವೈವಿಧ್ಯಮಯ ಕೌಶಲ್ಯಗಳನ್ನು ಹಲವು ದಶಕಗಳಿಂದ ಯುವಶಕ್ತಿಯಲ್ಲಿ ಮೈಗೂಡಿಸುತ್ತಿರುವ ಸಂಸ್ಥೆಯೇ ಕರ್ನಾಟಕ ಸರ್ಕಾರಿ ಪಾಲಿಟೆಕ್ನಿಕ್.&zwnj;ವಿದ್ಯಾರ್ಥಿಗಳಲ್ಲಿನ ಸುಪ್ತ ಪ್ರತಿಭೆಗಳನ್ನು ಅನಾವರಣಗೊಳಿಸಿ, ಬಹುಮುಖಿಯಾಗಿ ಬೆಳೆಸಿ ಪರಿಪೂರ್ಣತೆಯನ್ನು ಸಾಕಾರಗೊಳಿಸುವಲ್ಲಿ ಸಂಸ್ಥೆಯು ಕಂಕಣ ಬದ್ಧವಾಗಿದೆ. ವಿದ್ಯಾರ್ಥಿಗಳ ಪಠ್ಯ ಹಾಗೂ ಪಠ್ಯೇತರ ಚಟುವಟಿಕೆಗಳ ಸಾಧನೆಯಲ್ಲಿ ಸಂಸ್ಥೆಯ ಬೋಧಕ ಹಾಗೂ ಬೋಧಕೇತರ ಸಿಬ್ಬಂದಿಗಳ ಶ್ರಮ ಅನನ್ಯವಾದುದಾಗಿದೆ. ವಿದ್ಯಾರ್ಥಿಗಳನ್ನು ಸಂಘಟನೆಗೊಳಿಸಿ, ಸಾಮರ್ಥ್ಯಗಳನ್ನು ಒಗ್ಗೂಡಿಸಿ ಸಾಧನೆಗಳ ಉತ್ತುಂಗದ ಶಿಖರದಲ್ಲಿ ಸಂಸ್ಥೆಯ ಕೀರ್ತಿ ಪತಾಕೆಯನ್ನು ಹಾರಿಸುವುದು ಹರ್ಷದಾಯಕವಾಗಿದೆ.<br />\r\nಪ್ರತಿ ವರ್ಷದಂತೆ 2018-19ನೇ ಸಾಲಿನಲ್ಲೂ ವಿದ್ಯಾರ್ಥಿಸಂಘಕ್ಕೆ ತರಗತಿ ಪ್ರತಿನಿಧಿಗಳನ್ನು ಆಯ್ಕೆಮಾಡಲು 21.08.2018 ರಂದು ಚುನಾವಣೆ ನಡೆಸಲಾಯಿತು. ಆಯ್ಕೆಯಾದ ವಿದ್ಯಾರ್ಥಿ ಪ್ರತಿನಿಧಿಗಳಿಗೆ ಕರ್ತವ್ಯಪರತೆಯ ಪ್ರತಿಜ್ಞಾವಿಧಿಯನ್ನು ಅಂದೇ ಬೋಧಿಸಲಾಯಿತು. ಪಾಕಿಸ್ತಾನದ ಸೈನಿಕರನ್ನು ಹಿಮ್ಮೆಟ್ಟಿಸಿ, ಕಾರ್ಗಿಲ್&zwnj; ಶಿಖರದ ನೆತ್ತಿಯಲ್ಲಿ ವಿಜಯ ಧ್ವಜವನ್ನು ಹಾರಿಸಿದ ಭಾರತೀಯ ಸೈನಿಕರ ಕಾರ್ಯ-ಸಾಹಸಗಳನ್ನು ಮೆಚ್ಚಿ, ಗೌರವಿಸುವ &ldquo;ಕಾರ್ಗಿಲ್&zwnj; ವಿಜಯ ದಿವಸ್&rdquo; ನ್ನು ಜುಲೈ 26ರಂದು ಆಚರಿಸಲಾಯಿತು ಪ್ರಾಂಶುಪಾಲರ ಅಧ್ಯಕ್ಷತೆಯಲ್ಲಿ ನಡೆದ ಈ ಕಾರ್ಯಕ್ರಮದಲ್ಲಿ ಮಾಜಿ ಸೈನಿಕರೂ ಆಗಿರುವ ಸಂಸ್ಥೆಯ ವಿಜ್ಞಾನ ವಿಭಾಗದ ಉಪನ್ಯಾಸಕರಾಗಿರುವ ಶ್ರೀ.ಪೊನ್ನಪ್ಪ, ಇವರು ತಮ್ಮ ಅನುಭವಗಳನ್ನು ಹಂಚಿಕೊಂಡರು.<br />\r\nಸ್ವಸ್ಥ ಮತ್ತು ವ್ಯಸನ ಮುಕ್ತ ಸಮಾಜವನ್ನು ನಿರ್ಮಿಸುವ ನಿಟ್ಟಿನಲ್ಲಿ ದಕ್ಷಿಣಕನ್ನಡ ಜಿಲ್ಲಾ ಪೋಲೀಸ್&zwnj; ಹಾಗೂ ವಿಜಯ-ಕರ್ನಾಟಕ ದಿನಪತ್ರಿಕೆಯವರ ಸಹಭಾಗಿತ್ವದಲ್ಲಿ ಜುಲೈ31ರಂದು ಸಂಸ್ಥೆಯಲ್ಲಿ ಮಾದಕ ವಸ್ತುಗಳ ವಿರುದ್ಧ ಜಾಗೃತಿ ಕಾರ್ಯಕ್ರಮವನ್ನು ನಡೆಸಲಾಯಿತು.<br />\r\n72ನೇ ಸ್ವಾತಂತ್ರ್ಯ ದಿನಾಚರಣೆಯನ್ನು ಸಂಸ್ಥೆಯಲ್ಲಿ ದಿನಾಂಕ:15.08.2018 ರಂದು ಸಡಗರ-ಸಂಭ್ರಮದಿಂದ ಆಚರಿಸಲಾಯಿತು. ಸಂಸ್ಥೆಯ ಪ್ರಾಂಶುಪಾಲರಾದ ಮೇ|| ಬಿ.ವಿಜಯಕುಮಾರ್&zwnj;ರವರು ಧ್ವಜಾರೋಹಣ ನಡೆಸಿದರು.<br />\r\nಆರೋಗ್ಯವಂತ ಯುವಜನಾಂಗವನ್ನುನಿರ್ಮಿಸುವ ಉದ್ದೇಶದಿಂದ ಆಗಸ್ಟ್&zwnj; 19ರಂದು ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಜಂತುಹುಳ ನಿವಾರಣಾಮಾತ್ರೆಗಳನ್ನು ವಿತರಿಸಲಾಯಿತು.<br />\r\nಭವ್ಯಭಾರತದ ಕನಸುಗಾರ, ಭಾರತವನ್ನು ಅಣುಶಕ್ತಿ ಹೊಂದಿದ ರಾಷ್ಟ್ರವನ್ನಾಗಿಸಿದ ಮಾಜಿ ಪ್ರಧಾನಿ ಅಟಲ್&zwnj; ಬಿಹಾರಿ ವಾಜಪೇಯಿಯವರ ಅಗಲುವಿಕೆಯಿಂದ ದಿನಾಂಕ:18.08.2018ರಂದು ಅವರ ಕೊಡುಗೆಗಳನ್ನು ಸ್ಮರಿಸಿ, ಶ್ರದ್ಧಾಂಜಲಿ ಅರ್ಪಿಸಲಾಯಿತು.<br />\r\nಪ್ರಕೃತಿಯ ಕೋಪಕ್ಕೆ ತುತ್ತಾಗಿ ಆಶನ-ವಸನ ಹಾಗೂ ವಸತಿಗಳನ್ನು ಕಳೆದುಕೊಂಡ ಸಂತೃಪ್ತರಿಗೆ ಮಿಡಿದ ನಮ್ಮ ಸಂಸ್ಥೆಯ ಸಿಬ್ಬಂದಿವರ್ಗ ಮತ್ತು ವಿದ್ಯಾರ್ಥಿವೃಂದ ಸಲ್ಲಿಸಿದ ಸೇವೆ ಮೆಚ್ಚುವಂಥದ್ದು. 18.08.2018ರಿಂದ ಎರಡು ವಾರಗಳ ಕಾಲ ಕೊಡಗು ಮತ್ತು ಕೇರಳದ ನೆರೆ ಸಂತೃಪ್ತರಿಗಾಗಿ ವಿಪತ್ತು ನಿರ್ವಹಣಾ ಪ್ರಾಧಿಕಾರದ ಜಿಲ್ಲಾಕೇಂದ್ರವನ್ನು ನಮ್ಮ ಸಂಸ್ಥೆಯಲ್ಲಿ ತೆರೆಯಲಾಗಿತ್ತು. ಈ ಸಂದರ್ಭದಲ್ಲಿ ಸಾರ್ವಜನಿಕರಿಂದ ಸಂಗ್ರಹಿಸಲಾದ ವಸ್ತುಗಳ ನಿರ್ವಹಣೆ ಹಾಗೂ ವಿಲೇವಾರಿ ಮಾಡುವಲ್ಲಿ ವಿದ್ಯಾರ್ಥಿಗಳ ಶ್ರಮ ಅನನ್ಯವಾಗಿತ್ತು. ಅಲ್ಲದೇ ಸಂಸ್ಥೆಯ ಸಿಬ್ಬಂದಿಯವರು ಹಾಗೂ ವಿದ್ಯಾರ್ಥಿಗಳು ಸ್ವಯಂಪ್ರೇರಿತ ರಾಗಿ ಸಂಗ್ರಹಿಸಿದ ದೇಣಿಗೆಯನ್ನು ದಿ:31.08.2018ರಂದು ಜಿಲ್ಲಾಧಿಕಾರಿ ಶ್ರೀ. ಎಸ್.ಶಶಿಕಾಂತ ಸೆಂಥಿಲ್&zwnj;, ಐ.ಎ.ಎಸ್.&zwnj; ಇವರಿಗೆ ಹಸ್ತಾಂತರಿಸಿದರು.<br />\r\nಗುರುಸ್ಮರಣೆ ವಿದ್ಯಾರ್ಥಿಗಳ ಕರ್ತವ್ಯ, ಗುರುವನ್ನು ಗೌರವಿಸುವುದು ಭಾರತೀಯ ಸಂಸ್ಕೃತಿ, ಗುರಿಯ ಕಡೆಗೆ ಮಾರ್ಗದರ್ಶನ ಮಾಡುವ ಗುರುಗಳನ್ನು ಗೌರವಿಸುವ ಶಿಕ್ಷಕರ ದಿನಾಚರಣೆಯನ್ನು ಸೆಪ್ಟೆಂಬರ್&zwnj; 5ರಂದು ವೈವಿಧ್ಯಮಯವಾಗಿ ಆಚರಿಸಲಾಯಿತು. ಮಾಜಿ ರಾಷ್ಟ್ರಪತಿ ಡಾ|| ಎಸ್.ರಾಧಾಕೃಷ್ಣನ್&zwnj;ರವರಿಗೆ ಗೌರವ ಸಲ್ಲಿಸಲಾಯಿತು. ವಿವಿಧ ಪ್ರಯೋಗಾಲಯ ಗಳಲ್ಲಿ ವಸ್ತು-ಪ್ರದರ್ಶನ, ಪುಸ್ತಕ-ಪ್ರದರ್ಶನ, ವಿದ್ಯಾರ್ಥಿಗಳು ಹಾಗೂ ಸಿಬ್ಬಂದಿ ವರ್ಗದವರಿಗಾಗಿ ಕ್ರೀಡಾಸ್ಪರ್ಧೆಗಳನ್ನು ಆಯೋಜಿಸಲಾಗಿತ್ತು.<br />\r\nವಿಶ್ವಮಾನವ ಸ್ವಾಮಿ ವಿವೇಕಾನಂದರ ಚಿಕಾಗೋಭಾಷಣದ 125ನೇ ವರ್ಷಾಚರಣೆಯನ್ನು ನಮ್ಮ ಸಂಸ್ಥೆಯಲ್ಲಿ ಹಮ್ಮಿಕೊಳ್ಳಲಾಗಿತ್ತು. ದಿನಾಂಕ:12.09.2018ರಂದು ನಡೆದ ಈ ಕಾರ್ಯಕ್ರಮದಲ್ಲಿ ರಾಮಕೃಷ್ಣಮಠ, ರಾಮಕೃಷ್ಣಮಿಷನ್&zwnj; ಮಂಗಳೂರು ಇಲ್ಲಿನ ಶ್ರೀಕೃಷ್ಣ ಉಪಾಧ್ಯಾಯ ಇವರು ವಿದ್ಯಾರ್ಥಿಗಳನ್ನುದ್ದೇಶಿಸಿ ಭಾಷಣಮಾಡಿದರು.<br />\r\nರಕ್ತದಾನ ಶ್ರೇಷ್ಠದಾನ, ವಿದ್ಯಾರ್ಥಿಗಳಲ್ಲಿ ರಕ್ತದಾನದ ಮಹತ್ವದ ಬಗ್ಗೆ ಅರಿವು ಮೂಡಿಸಲು, ವೆನ್ಲಾಕ್&zwnj; ಆಸ್ಪತ್ರೆ, ಮಂಗಳೂರು ಇವರ ಸಹಯೋಗದಲ್ಲಿ ದಿನಾಂಕ:14.09.2018ರಂದು ನಮ್ಮ ಸಂಸ್ಥೆಯಲ್ಲಿ &ldquo;ರಕ್ತದಾನ ಶಿಬಿರ&rdquo;ವನ್ನು ಏರ್ಪಡಿಸಲಾಗಿತ್ತು. ಸುಮಾರು 100ಕ್ಕೂ ಹೆಚ್ಚು ವಿದ್ಯಾರ್ಥಿಗಳು ಸ್ವಯಂ ಪ್ರೇರಣೆಯಿಂದ ರಕ್ತದಾನ ಮಾಡಿ ತಮ್ಮ ಶ್ರೇಷ್ಠತೆಯನ್ನು ಮೆರೆದರು.<br />\r\nದಿನಾಂಕ:15.09.2018ರಂದು ಸಂಸ್ಥೆಯಲ್ಲಿ ಹಲವು ಕಾರ್ಯಕ್ರಮಗಳ ಗುಚ್ಚವೇ ಅರಳಿತ್ತು. ಅಂದು ವಿದ್ಯಾರ್ಥಿಸಂಘ, ಕ್ರೀಡಾಸಂಘ ಮತ್ತು ISTE ವಿದ್ಯಾರ್ಥಿ ಘಟಕದ ಉದ್ಛಾಟನಾ ಸಮಾರಂಭ, ಸರ್.ವಿಶ್ವೇಶ್ವರಯ್ಯನವರ ಜನ್ಮದಿನದ ಪ್ರಯುಕ್ತ ಇಂಜಿನಿಯರ್ ಡೇ ಹಾಗೂ ಶಿಕ್ಷಕರ ದಿನಾಚರಣೆಗಳನ್ನು ಬಹಳ ಅರ್ಥಪೂರ್ಣವಾಗಿ ಆಚರಿಸಲಾಯಿತು. ಮಂಗಳೂರು ಉತ್ತರ ವಿಧಾನಸಭಾಕ್ಷೇತ್ರದ ಶಾಸಕರಾದ ಮಾನ್ಯ ಶ್ರೀ. ವೈ.ಭರತ್&zwnj;ಶೆಟ್ಟಿಯವರು ವಿಶ್ವೇಶ್ವರಯ್ಯನವರ ಪ್ರತಿಮೆಗೆ ಮಾಲಾರ್ಪಣೆಗೈದರು. ಪ್ರಬಂಧ ರಚನೆ, ಚಿತ್ರಕಲೆ ಮುಂತಾದ ಸ್ಪರ್ಧೆಗಳನ್ನು ಹಮ್ಮಿಕೊಳ್ಳಲಾಗಿತ್ತು. ವಿಜೇತರಿಗೆ ಬಹುಮಾನ ನೀಡಲಾಯಿತು. ಜಿಲ್ಲಾ ಪೊಲೀಸ್&zwnj; ವರಿಷ್ಠಾಧಿಕಾರಿ ಡಾ|| ಬಿ.ಆರ್.ರವಿಕಾಂತೇಗೌಡ, ದ.ಕ. ಜಿಲ್ಲಾ ಹಾಲು ಉತ್ಪಾದಕರ ಸಂಘದ ವ್ಯವಸ್ಥಾಪಕ ನಿರ್ದೇಶಕರಾದ ಡಾ|| ಬಿ.ವಿ. ಸತ್ಯನಾರಾಯಣ, MSME ಅಭಿವೃದ್ಧಿ ಸಂಸ್ಥೆಯ ಉಪನಿರ್ದೇಶಕರಾದ ಇಂ|| ಕೆ.ಸಾಕ್ರಟಿಸ್&zwnj; ಕಾರ್ಯಕ್ರಮದಲ್ಲಿ ಭಾಗವಹಿಸಿ ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಮಾರ್ಗದರ್ಶನ ಮಾಡಿದರು.<br />\r\nದಿನಾಂಕ:15.09.2018ರಿಂದ ದಿ:29.09.2018ರ ವರೆಗೆ 2 ವಾರಗಳ ಕಾಲ ಸಂಸ್ಥೆಯ ವಿದ್ಯುತ್&zwnj; ವಿಭಾಗದ ವಿದ್ಯಾರ್ಥಿಗಳಿಂದ &ldquo;Technoತ್ಸವ&rdquo; ಎಂಬ ವಿಶಿಷ್ಟ ಕಾರ್ಯಕ್ರಮ ನಡೆಯಿತು. ಗಳಿಸಿದ ಜ್ಞಾನವನ್ನು ಅನ್ವಯಗೊಳಿಸುವ, ಸಮಾಜಮುಖಿ ಕಾರ್ಯ ಎಲ್ಲರ ಪ್ರಶಂಸೆಗೆ ಪಾತ್ರವಾಯಿತು. ವಿದ್ಯುತ್&zwnj; ಉಪಕರಣಗಳ ಉಚಿತ ದುರಸ್ಥಿಯ ಈ ಕಾರ್ಯಾಗಾರದ ಪ್ರಯೋಜನವನ್ನು ಸಂಸ್ಥೆಯ ಸಿಬ್ಬಂದಿ ವರ್ಗದವರು, ವಿದ್ಯಾರ್ಥಿಗಳು ಹಾಗೂ ಸಂಸ್ಥೆಯ ಪರಿಸರದವರು ಪಡೆದುಕೊಂಡರು.<br />\r\nದಿನಾಂಕ:21.09.2018ರಂದು ಮಂಗಳೂರಿನಲ್ಲಿ ನಡೆದ ಪ್ರಾದೇಶಿಕ ಭಾಷಾ ಚಲನಚಿತ್ರೋತ್ಸವದಲ್ಲಿ ಸಂಸ್ಥೆಯ ವಿದ್ಯಾರ್ಥಿಗಳು ಪಾಲ್ಗೊಂಡು ಚಲನಚಿತ್ರ ವೀಕ್ಷಣೆ ಮಾಡಿದರು.<br />\r\nಮಾನ್ಯ ಪ್ರಧಾನಮಂತ್ರಿಯವರ ಕನಸಿನಯೋಜನೆ&ldquo; ಸ್ವಚ್ಛತಾಹೀಸೇವಾ&rdquo; ರಾಷ್ಟ್ರೀಯ ಕಾರ್ಯಕ್ರಮವನ್ನು ನಮ್ಮ ಸಂಸ್ಥೆಯಲ್ಲಿಯೂ ನಡೆಸಲಾಯಿತು. ಸಂಸ್ಥೆಯ ಆವರಣವನ್ನು ಸ್ವಚ್ಛ ಮಾಡುವ ಕಾರ್ಯಕ್ರಮವನ್ನು ಮಂಗಳಾದೇವಿ-ಬೋಳಾರದಲ್ಲಿರುವ ರಾಮಕೃಷ್ಣಮಿಶನ್&zwnj;ನ ಸ್ವಾಮೀಜಿಯವರು ಉದ್ಘಾಟಿಸಿದರು.<br />\r\nವಿದ್ಯಾರ್ಥಿಗಳ ಸಮಗ್ರ ವಿಕಸನ ಸಂಸ್ಥೆಯ ಗುರಿ. ಪರಿಪೂರ್ಣತೆಯತ್ತ ಬೆಳೆಯಲು ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಸಂಸ್ಥೆಯಲ್ಲಿ ವಿಫುಲ ಅವಕಾಶಗಳಿವೆ. ಈ ನಿಟ್ಟಿನಲ್ಲಿ ದಿನಾಂಕ:27.09.2018ರಿಂದ 100 ಗಂಟೆಗಳ ಉಚಿತ ವ್ಯಕ್ತಿತ್ವ ವಿಕಸನ ಕಾರ್ಯಾಗಾರವನ್ನು ಅಂತಿಮ ವರ್ಷದ ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಹಮ್ಮಿಕೊಳ್ಳಲಾಗಿತ್ತು. &ldquo;ಉನ್ನತಿNEXT&ldquo; ಬೆಂಗಳೂರು ಸಂಸ್ಥೆಯ ಶ್ರೀ.ನವೀನ್&zwnj; ನಾಯಕ್&zwnj; ಇವರು ಈ ಕಾರ್ಯಕ್ರಮವನ್ನು ನಡೆಸಿಕೊಟ್ಟರು.<br />\r\nಬೌದ್ಧಿಕ ವಿಕಾಸಕದಷ್ಟೇ ದೈಹಿಕ ವಿಕಾಸಕ್ಕೂ ಮಹತ್ವವಿದೆ. ನಮ್ಮ ಸಂಸ್ಥೆ ಕ್ರೀಡಾಸಾಧನೆಗೆ ರಾಜ್ಯಮಟ್ಟದಲ್ಲಿ ಹೆಸರುವಾಸಿಯಾಗಿದ್ದು, ಈ ನಿಟ್ಟಿನಲ್ಲಿ ವಿದ್ಯಾರ್ಥಿಗಳ ಕ್ರೀಡಾ ಪ್ರತಿಭೆಯನ್ನು ಪ್ರೋತ್ಸಾಹಿಸಲು ದಿನಾಂಕ:03.10.2018ರಂದು ಸಂಸ್ಥೆಯಲ್ಲಿ ಕ್ರೀಡಾದಿನವನ್ನು ಆಚರಿಸಲಾಯಿತು. ಕರ್ನಾಟಕ ವಿದಾನಪರಿಷತ್&zwnj; ಸದಸ್ಯರಾದ ಮಾನ್ಯ ಶ್ರೀ.ಐವನ್&zwnj;ಡಿʼಸೋಜರವರು ಕ್ರೀಡೋತ್ಸವವನ್ನು ಉದ್ಘಾಟಿಸಿ, ವಿದ್ಯಾರ್ಥಿಗಳನ್ನು ಹುರಿದುಂಬಿಸಿದರು.<br />\r\nನಿತ್ಯೋಪಯೋಗಿ ಸಲಕರಣೆಗಳನ್ನು, ಯಂತ್ರಗಳನ್ನು, ಶರನ್ನವರಾತ್ರಿಯ ಆಯುಧಪೂಜೆಯ ಸಂದರ್ಭದಲ್ಲಿ ಪೂಜಿಸುವುದು ವಾಡಿಕೆ. ಅಂತೆಯೇ ದಿನಾಂಕ:17.10.2018ರಂದು ಸಂಸ್ಥೆಯಲ್ಲಿ ಶಾರದಾಪೂಜೆ ಮತ್ತು ಆಯುಧ ಪೂಜೆಗಳನ್ನು ಶೃದ್ಧಾಭಕ್ತಿಯಿಂದ ಆಚರಿಸಲಾಯಿತು. ಕಚೇರಿ ಹಾಗೂ ಎಲ್ಲಾ ವಿಭಾಗಗಳ ಪ್ರಯೋಗಾಲಯಗಳನ್ನು ಶುಚಿಗೊಳಿಸಿ, ಅಲಂಕರಿಸಿ ಸಂಸ್ಥೆಯ ಸಿಬ್ಬಂದಿವರ್ಗ ಹಾಗೂ ವಿದ್ಯಾರ್ಥಿಗಳೆಲ್ಲ ಸೇರಿ ಪೂಜೆ-ಪುನಸ್ಕಾರಗಳನ್ನು ನೆರವೇರಿಸಿದರು.<br />\r\nಕನ್ನಡವೇ ನಮ್ಮ ಉಸಿರು. ಮನ-ಮನೆಗಳನ್ನು ಬೆಳಗಿಸುವ ಭಾವದ ಭಾಷೆ ಕನ್ನಡವನ್ನು ಇನ್ನಷ್ಟು ಅರಳಿಸಲು ನವೆಂಬರ್&zwnj;-1 ರಂದು ಸಂಸ್ಥೆಯಲ್ಲಿ ಕನ್ನಡ ರಾಜ್ಯೋತ್ಸವವನ್ನು ಆಚರಿಸಲಾಯಿತು. ಸಂಸ್ಥೆಯ ಪ್ರಾಂಶುಪಾಲರಾದ ಮೇಜರ್||ಬಿ.ವಿಜಯಕುಮಾರ್&zwnj;ರವರ ಮಾರ್ಗದರ್ಶನದಲ್ಲಿ ವೈವಿಧ್ಯಮಯ ಕಾರ್ಯಕ್ರಮಗಳು ನಡೆದವು.<br />\r\nಉನ್ನತಿ ಸಂಸ್ಥೆಯವರ ವತಿಯಿಂದ ಅಂತಿಮವರ್ಷದ ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ನಡೆಸಲಾದ ವ್ಯಕ್ತಿತ್ವ ವಿಕಸನ ಶಿಬಿರದ ಸಮಾರೋಪ ಸಮಾರಂಭವನ್ನು ದಿನಾಂಕ:14.11.2018ರಂದು ನಡೆಸಲಾಯಿತು. ಈ ಶಿಬಿರ ವಿದ್ಯಾರ್ಥಿಗಳ ಮೇಲೆ ಧನಾತ್ಮಕ ಪರಿಣಾಮ ಬೀರಿದ್ದು, ವಿದ್ಯಾರ್ಥಿಗಳ ಮೆಚ್ಚುಗೆಗೂ ಪಾತ್ರವಾಗಿದೆ. ಈ ಕಾರ್ಯಕ್ರಮದಲ್ಲಿ ಸಂಪನ್ಮೂಲ ವ್ಯಕ್ತಿ ಶ್ರೀ.ನವೀನ್&zwnj;ನಾಯಕ್&zwnj; ರವನ್ನೂ ಸನ್ಮಾನಿಸಲಾಯಿತು.<br />\r\nದಿನಾಂಕ:12.01.2019ರಂದು ವೀರ ಸನ್ಯಾಸಿ, ಸ್ವಾಮಿ ವಿವೇಕಾನಂದರ 156ನೇ ಜನ್ಮ ದಿನಾಚರಣೆಯನ್ನು ಆಚರಿಸಲಾಯಿತು.</p>\r\n\r\n<p>ಕರ್ನಾಟಕ ಸರ್ಕಾರದಿಂದ ಕೊಡಮಾಡಲ್ಪಟ್ಟ ಉಚಿತ ಲ್ಯಾಪ್&zwnj;ಟಾಪನ್ನು ದ್ವಿತೀಯ ವರ್ಷದ ಇಬ್ಬರು ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ದಿನಾಂಕ:17.01.2019ರಂದು ವಿತರಿಸಲಾಯಿತು.<br />\r\nವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ ಕೌಶಲ್ಯಭರಿತ ಶಿಕ್ಷಣ ನೀಡುವುದಷ್ಟೇ ಅಲ್ಲದೇ, ಅವರಿಗೆ ಉತ್ತಮ ಉದ್ಯೋಗ ಒದಗಿಸುವಲ್ಲಿಯೂ ಸಂಸ್ಥೆ ಬಹಳ ಉತ್ಸುಕವಾಗಿದೆ. ಈ ದೃಷ್ಟಿಯಿಂದ ISTE ವಿದ್ಯಾರ್ಥಿ ಘಟಕದ ವತಿಯಿಂದ ದಿನಾಂಕ:19.01.2019ರಂದು ವಿದ್ಯಾರ್ಥಿಗಳಿಗೆ Carrier Opportunities ಎಂಬ ಕಾರ್ಯಕ್ರಮವನ್ನು ಹಮ್ಮಿಕೊಳ್ಳಲಾಗಿತ್ತು. ಈ ಕಾರ್ಯಕ್ರಮದಲ್ಲಿ ಬೆಂಗಳೂರಿನ &ldquo;Plant Supervision&rdquo; ಸಂಸ್ಥೆಯ ಆಡಳಿತ ನಿರ್ದೇಶಕರಾಗಿರುವ ಶ್ರೀ.ಪವನ್&zwnj; ಎಸ್.ಡಿ.ಯವರು ಉಪನ್ಯಾಸ ನೀಡಿದರು.<br />\r\nಜನವರಿ 26 ರಂದು 70ನೇ ಗಣರಾಜ್ಯೋತ್ಸವವನ್ನು ಸಂಸ್ಥೆಯಲ್ಲಿ ಗೌರವಪೂರ್ವಕವಾಗಿ ಆಚರಿಸಲಾಯಿತು. ಸಂಸ್ಥೆಯ ಪ್ರಾಂಶುಪಾಲರಾದ ಮೇಜರ್&zwnj; || ಬಿ.ವಿಜಯಕುಮಾರ್&zwnj;ರವರು ಧ್ವಜಾರೋಹಣ ನೆರವೇರಿಸಿದರು.<br />\r\n&ldquo;ದಾನಗಳಲ್ಲಿ ಅತ್ಯಂತ ಶ್ರೇಷ್ಠವಾದ ದಾನ ನೇತ್ರದಾನ&rdquo; ಎಂಬ ಮಾತು ಇತ್ತೀಚೆಗೆ ಹೆಚ್ಚು ಜನಜನಿತವಾಗುತ್ತಿದೆ. ಈ ನಿಟ್ಟಿನಲ್ಲಿ ನೇತ್ರದಾನದ ಬಗ್ಗೆ ಜಾಗೃತಿ ಮೂಡಿಸಲು ದಿನಾಂಕ:28.01.2019ರಂದು ಪ್ರಸಾದ ನೇತ್ರಾಲಯ ಹಾಗೂ ಸಂಸ್ಥೆಯ ರೆಡ್&zwnj;ಕ್ರಾಸ್&zwnj; ಘಟಕಗಳ ಜಂಟಿ ಸಹಯೋಗದಲ್ಲಿ ಕಾರ್ಯಕ್ರಮಗಳನ್ನು ಹಮ್ಮಿಕೊಳ್ಳಲಾಗಿತ್ತು. ಈ ಸಂದರ್ಭದಲ್ಲಿ ನಡೆದ ನೇತ್ರ ತಪಾಸಣೆಯ ಪ್ರಯೋಜನವನ್ನು ಸಂಸ್ಥೆಯ ವಿದ್ಯಾರ್ಥಿಗಳು ಹಾಗೂ ಸಿಬ್ಬಂದಿ ವರ್ಗದವರು ಪಡೆದುಕೊಡರು.<br />\r\nಯೋಗ ಹಾಗೂ ಧ್ಯಾನ ಆರೋಗ್ಯ ವೃದ್ಧಿಯ ಯಶೋಮಾರ್ಗಗಳಾಗಿವೆಯೆಂಬುದು ಭಾರತೀಯ ವೈದ್ಯ ಪದ್ಧತಿಯ ಸಾರಾಂಶ. ಅಂತೆಯೇ ವಿದ್ಯಾರ್ಥಿಗಳ ದೈಹಿಕ ಹಾಗೂ ಮಾನಸಿಕ ಆರೋಗ್ಯ ವೃದ್ಧಿಗಾಗಿ &ldquo;Heartfulness Meditation &ldquo;ಕಾರ್ಯಕ್ರಮವನ್ನು ಜನವರಿ-31 ರಿಂದ ಮೂರು ದಿನಗಳ ಕಾಲ ಸಂಸ್ಥೆಯಲ್ಲಿ ಆಯೋಜಿಸಲಾಗಿತ್ತು. ಎನ್.ಐ.ಟಿ.ಕೆ.ಸುರತ್ಕಲ್&zwnj;ಸಂಸ್ಥೆಯ ಪ್ರಾಚಾರ್ಯರಾದ ಶ್ರೀ.ಪ್ರಸಾದ್&zwnj; ಕೃಷ್ಣ ಹಾಗೂ ಸಂಗಡಿಗರು ಈ ಕಾರ್ಯಕ್ರಮವನ್ನು ನಡೆಸಿಕೊಟ್ಟರು.<br />\r\nದಿನಾಂಕ:31.01.2018ರಂದು ಮಂಗಳಾದೇವಿಯ ರಾಮಕೃಷ್ಣ ಮಿಷನ್&zwnj;ನ ಸಂಪನ್ಮೂಲ ವ್ಯಕ್ತಿಗಳಾದ ಶ್ರೀ.ರಂಜನ್&zwnj; ಬೆಲ್ಲರ್&zwnj;ಪಾಡಿ ಹಾಗೂ ಡಾ|| ಕೆ.ರಾಜಮೋಹನ್&zwnj; ರಾವ್&zwnj; ಇವರು &ldquo;SwacchSoch&ldquo; ಎಂಬ ವಿಷಯದ ಬಗ್ಗೆ ವಿದ್ಯಾರ್ಥಿಗಳಿಗಾಗಿ ಸೆಮಿನಾರ್&zwnj;ಗಳನ್ನು ನಡೆಸಿದರು. ಸ್ವಾಮಿ ವಿವೇಕಾನಂದರ ಜನ್ಮದಿನೋತ್ಸವದ ಅಂಗವಾಗಿ ನಡೆದ ವಿವಿಧ ಸ್ಪರ್ಧೆಗಳ ಬಹುಮಾನ ವಿಜೇತರನ್ನು ಅಂದೇ ಗೌರವಿಸಲಾಯಿತು.<br />\r\nಹಾಸನದಲ್ಲಿ ನಡೆದ 42ನೇ ಅಂತರ್&zwnj; ಪಾಲಿಟೆಕ್ನಿಕ್&zwnj; ಕ್ರೀಡಾಕೂಟದಲ್ಲಿ ಭಾಗವಹಿಸಿ, ವಿಜೇತರಾಗಿ ಬಂದ ನಮ್ಮ ಸಂಸ್ಥೆಯ &ldquo;ಕ್ರೀಡಾರತ್ನ&rdquo;ಗಳನ್ನು ದಿನಾಂಕ:05.02.2019ರಂದು ವಿದ್ಯಾರ್ಥಿಸಂಘದ ಪರವಾಗಿ ಆತ್ಮೀಯವಾಗಿ ಅಭಿನಂದಿಸಿ ಗೌರವಿಸಲಾಯಿತು.<br />\r\nವಿದ್ಯಾರ್ಥಿಗಳ ಸರ್ವತೋಮುಖ ಅಭಿವೃದ್ಧಿಗೆ ಸಂಸ್ಥೆಯು ಕಂಕಣ ಬದ್ಧವಾಗಿದೆ. ವಿದ್ಯಾರ್ಥಿಗಳ ಸಮಗ್ರ ವಿಕಾಸಕ್ಕಾಗಿ ವರ್ಷಪೂರ್ತಿ ವೈವಿಧ್ಯಮಯ ಕಾರ್ಯಕ್ರಮಗಳನ್ನು ಸಂಸ್ಥೆಯಲ್ಲಿ ನಡೆಸಲಾಗುತ್ತದೆ. ವಿದ್ಯಾರ್ಥಿಗಳ ಬಹುಮುಖ ಪ್ರತಿಭೆಗಳು ಸಂಸ್ಥೆಯ ನೆರಳಿನಲ್ಲಿ ಅನಾವರಣಗೊಳ್ಳುವುದರೊಂದಿಗೆ, ಸಾಮಾಜಿಕ ಜವಾಬ್ದಾರಿಗಳನ್ನೂ ಸಮರ್ಥವಾಗಿ ನಿರ್ವಹಿಸುವ ಕೌಶಲ್ಯಗಳನ್ನೂ ಮೈಗೂಡಿಸಿಕೊಳ್ಳಲು ಇಲ್ಲಿ ಅವಕಾಶವಿದೆ. ವಿದ್ಯಾರ್ಥಿಗಳ ಭವಿಷ್ಯವನ್ನು ರೂಪಿಸುವ ವೃತ್ತಿಶಿಕ್ಷಣ ನೀಡುತ್ತಿರುವ ನಮ್ಮ ಸಂಸ್ಥೆ, ಈವರೆಗೆ ಸಹಸ್ರಾರು ವಿದ್ಯಾರ್ಥಿಗಳ ಜೀವನದ ದಾರಿ ದೀಪವಾಗಿದೆ. ಹೀಗೆ ವಿದ್ಯಾರ್ಥಿಗಳ ಸಾಧನೆ, ಸಂಸ್ಥೆಯ ಎಲ್ಲಾ ಸಿಬ್ಬಂದಿವರ್ಗದವರ ಶ್ರಮದಿಂದ ಸಂಸ್ಥೆ ಸದಾಕಾಲ ಸಾಧನೆಯ ಸಂತೃಪ್ತಿಯಲ್ಲಿ ಅರಳುತ್ತಿರಲಿ, ಬೆಳೆಯುತ್ತಿರಲಿ.</p>',2,1,1,'2020-02-09 10:41:59','2020-02-09 11:14:18',NULL),(2,'sdfsfdsdf','sdfsdfsfdsdfsfsfsdf',NULL,'<p>sdfsdffsdf</p>','<p>this is test reportsdfsdfs</p>',2,1,1,'2020-02-09 10:42:23','2020-02-09 10:48:51',NULL),(3,'Prime Ministers Message','Wilson Pinto','1581469744_LRM_EXPORT_20170915_103410low.jpg','<p>Prime Minister</p>\r\n\r\n<p>India</p>','<p>In a country like India with limited support from the industry and market, initiating 100 years ago publishing magazines relating to Army, Navy and Aviation sectors without any interruption is a commendable job on the part of Abivyakta. By this, AbivyaktaPublications has established the fact that continuing quality work in any field would result in success.</p>\r\n\r\n<p>On this occasion, the Prime Minister conveys best wishes to publishers, associates and the readers.&nbsp;</p>',1,5,1,'2020-02-12 01:09:04','2020-02-12 01:10:11',NULL);
/*!40000 ALTER TABLE `message_note_report` ENABLE KEYS */;
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

-- Dump completed on 2020-02-15 22:51:50
