/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.21-MariaDB : Database - motivation
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`motivation` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `motivation`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `orgpassword` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`email`,`mobile`,`password`,`orgpassword`,`name`,`status`,`create_at`) values (1,'admin@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,'admin',1,NULL),(2,'vasu@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e','123456','vaasudevareddy',1,NULL);

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`c_id`,`user_id`,`post_id`,`comment`,`create_at`) values (16,1,28,'ghdfghdfg','2018-03-21 18:52:53'),(17,1,30,'testing','2018-03-21 19:00:50'),(18,1,43,'kyuiyuuyiyu','2018-03-22 15:28:35'),(19,1,43,'tyertrt','2018-03-22 15:29:07'),(20,1,43,'tyertrt','2018-03-22 15:29:40'),(21,1,43,'gfhjh','2018-03-22 15:35:34'),(22,1,42,'fgfdgdfgf','2018-03-22 15:45:14'),(23,1,47,'dfsdf','2018-03-23 17:02:23'),(24,1,47,'fgfdgfd','2018-03-23 17:02:51');

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `message` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(250) DEFAULT NULL,
  `message` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

/*Table structure for table `leave_a_replay` */

DROP TABLE IF EXISTS `leave_a_replay`;

CREATE TABLE `leave_a_replay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `message` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `leave_a_replay` */

/*Table structure for table `like_count` */

DROP TABLE IF EXISTS `like_count`;

CREATE TABLE `like_count` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

/*Data for the table `like_count` */

insert  into `like_count`(`l_id`,`post_id`,`user_id`,`create_at`) values (99,31,1,'2018-03-22 11:01:48'),(100,28,1,'2018-03-22 11:01:55'),(103,39,1,'2018-03-22 12:33:52'),(104,28,2,'2018-03-23 18:46:01');

/*Table structure for table `newsletter` */

DROP TABLE IF EXISTS `newsletter`;

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `newsletter` */

/*Table structure for table `post_count` */

DROP TABLE IF EXISTS `post_count`;

CREATE TABLE `post_count` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `text` text,
  `image_count` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `pstatus` int(11) DEFAULT '1',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

/*Data for the table `post_count` */

insert  into `post_count`(`p_id`,`user_id`,`title`,`text`,`image_count`,`create_at`,`pstatus`) values (28,1,'     strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)     stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)     strripos() - Finds the p','https://www.youtube.com/watch?v=u-YD1zpKXls','0','2018-03-23 12:51:09',1),(42,1,'op','\r\n    strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)\r\n    stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)\r\n    strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)\r\n','2','2018-03-23 12:40:49',1),(43,1,'testing','likethis   gfhdfgh     sdhghsdh bfghhhhhhhhhhh hhhhhhhhh fgfgg','0','2018-03-23 12:15:45',1),(44,1,'testingjhgjghj','I have a catch-all Apache virtual host in /var/www/. In it, I have a index.php that handles all the code for pages, and subfolders holding the resources for each site (images, css, etc).\r\n\r\nI want a rewrite that uses the images for the appropriate domain in their subfolder if they exists, and hands off to index.php if they don\'t. I also don\'t want to be able to access these subfolders directly','0','2018-03-23 11:51:35',1),(45,1,'uiyui','yuityui','0','2018-03-23 11:53:40',1),(46,1,'test','https://www.phpflow.com/php/create-a-dynamic-read-more-link-using-php/','0','2018-03-23 12:20:12',1),(47,2,'t','title','1','2018-03-23 13:35:12',1),(48,2,'yutyu','tyutryutyuyt','0','2018-03-23 17:52:53',0),(49,2,'oio','iouiouio','0','2018-03-26 15:47:18',1),(50,2,'title','share','1','2018-03-26 15:48:03',1),(51,2,'','https://www.youtube.com/watch?v=53smGgdkBcU',NULL,'2018-03-26 17:37:56',1),(52,2,'','https://www.youtube.com/watch?v=53smGgdkBcU',NULL,'2018-03-26 17:40:45',1),(53,2,'uty','yuytu','1','2018-03-26 18:48:52',1),(54,2,'yuty','ytutyu','1','2018-03-26 18:49:04',1),(55,2,'yutyu','yutyu','1','2018-03-26 18:49:16',1),(56,2,'ttt','dddd','1','2018-03-26 18:49:37',1);

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `org_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `posts` */

insert  into `posts`(`img_id`,`user_id`,`post_id`,`name`,`org_name`,`create_at`,`status`) values (31,1,42,'0.981224001521702364vasuimage.jpg','vasuimage.jpg','2018-03-22 12:36:17',1),(32,1,42,'0.915018001521702371pancard.jpg','pan card.jpg','2018-03-22 12:36:18',1),(35,2,53,'0.841048001522070328vasuimage.jpg','vasuimage.jpg','2018-03-26 18:48:52',1),(36,2,54,'0.290635001522070340vasuimage.jpg','vasuimage.jpg','2018-03-26 18:49:04',1),(37,2,55,'0.792294001522070351pancard.jpg','pan card.jpg','2018-03-26 18:49:16',1),(38,2,56,'0.350745001522070369vasuimage.jpg','vasuimage.jpg','2018-03-26 18:49:37',1);

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_text` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `status` */

insert  into `status`(`id`,`status_text`) values (0,'Deactive'),(1,'Active');

/*Table structure for table `temp` */

DROP TABLE IF EXISTS `temp`;

CREATE TABLE `temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `org_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `text` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `temp` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
