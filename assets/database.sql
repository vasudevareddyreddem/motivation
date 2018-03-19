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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`email`,`mobile`,`password`,`orgpassword`,`name`,`status`,`create_at`) values (1,'admin@gmail.com',NULL,'e10adc3949ba59abbe56e057f20f883e',NULL,'admin',1,NULL),(2,'vasu@gmail.com','8500050944','e10adc3949ba59abbe56e057f20f883e','123456','vasu',1,'2018-03-16 16:16:15'),(3,'reddy@gmail.com','8019345212','e10adc3949ba59abbe56e057f20f883e',NULL,'vasudevareddy',1,'2018-03-16 16:43:59'),(4,'pushkar@gmail.com','1234567890','e10adc3949ba59abbe56e057f20f883e','123456','pusjkar',1,'2018-03-16 17:36:07');

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
  `post_id` int(11) DEFAULT NULL,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`c_id`,`post_id`,`comment`,`create_at`) values (1,7,'testing','2018-03-16 12:49:00'),(2,7,'testinghgh','2018-03-16 12:49:24'),(3,8,'like this','2018-03-16 12:49:45'),(4,8,'fgdfgdf','2018-03-16 12:49:51'),(5,8,'fgdsfgdfg','2018-03-16 12:49:58'),(6,8,'vbxcvbxvb','2018-03-16 12:50:06'),(7,19,'test','2018-03-16 18:38:55'),(8,25,'fgdfgdfg','2018-03-16 18:39:14'),(9,25,'fgsdfgdf','2018-03-16 18:39:22'),(10,12,'ghgh','2018-03-16 18:48:13'),(11,12,'ghfdghfg','2018-03-16 18:48:19'),(12,7,'ghdfghfg','2018-03-16 18:48:25'),(13,7,'ghdfghfdgh','2018-03-16 18:48:31');

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
  `like` text,
  `comment_count` varchar(45) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `like_count` */

insert  into `like_count`(`l_id`,`post_id`,`like`,`comment_count`,`create_at`) values (1,1,NULL,NULL,'2018-03-15 13:46:48'),(2,2,NULL,NULL,'2018-03-15 13:47:00'),(3,3,NULL,NULL,'2018-03-15 13:50:39'),(4,4,NULL,NULL,'2018-03-15 14:17:03'),(5,5,NULL,NULL,'2018-03-15 14:17:10'),(6,6,NULL,NULL,'2018-03-15 14:17:26'),(7,7,'13','4','2018-03-15 14:19:06'),(8,8,'18','4','2018-03-15 14:19:15'),(9,9,NULL,NULL,'2018-03-15 14:19:33'),(10,10,NULL,NULL,'2018-03-15 14:50:42'),(11,11,'4',NULL,'2018-03-15 19:10:43'),(12,12,'20','2','2018-03-16 10:51:45'),(13,13,NULL,NULL,'2018-03-16 12:37:05'),(14,14,NULL,NULL,'2018-03-16 13:16:41'),(15,15,NULL,NULL,'2018-03-16 14:05:36'),(16,16,NULL,NULL,'2018-03-16 15:40:52'),(17,17,NULL,NULL,'2018-03-16 15:52:58'),(18,18,NULL,NULL,'2018-03-16 15:53:14'),(19,19,'17','1','2018-03-16 16:11:25'),(20,20,NULL,NULL,'2018-03-16 16:16:26'),(21,21,NULL,NULL,'2018-03-16 16:30:38'),(22,22,NULL,NULL,'2018-03-16 16:44:13'),(23,23,NULL,NULL,'2018-03-16 17:31:02'),(24,24,NULL,NULL,'2018-03-16 17:31:49'),(25,25,'15','2','2018-03-16 17:34:18'),(26,26,NULL,NULL,'2018-03-16 17:36:34');

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `post_count` */

insert  into `post_count`(`p_id`,`user_id`,`title`,`text`,`image_count`,`create_at`,`pstatus`) values (1,1,'tile','text','1','2018-03-15 13:46:48',0),(2,1,'fgdf','gfdg','1','2018-03-15 13:47:00',0),(3,1,'gfg','hdfghdfg','1','2018-03-15 13:50:39',0),(7,1,'kgj','hkgjk','1','2018-03-15 14:19:05',1),(8,1,'yuty','uyturtyu','2','2018-03-16 12:31:21',1),(9,1,'yurt','yuytuty','1','2018-03-15 14:19:33',0),(10,1,'tile','testing','0','2018-03-15 14:50:42',0),(11,1,'fgf','gfdgdfgfd','7','2018-03-16 12:25:29',1),(12,1,'testing','testing','0','2018-03-16 10:51:45',1),(13,1,'test','testing','1','2018-03-16 12:37:05',1),(14,1,'vaasu','https://www.youtube.com/embed/hQyeNBDCrsA','0','2018-03-16 13:16:41',1),(16,1,'fgdfg','fgdfg','1','2018-03-16 15:40:52',1),(17,1,'cvxcv','cvxc','1','2018-03-16 15:52:58',1),(18,1,'fdf','cvxvcxc','1','2018-03-16 15:53:14',1),(19,1,'video','https://www.youtube.com/embed/hQyeNBDCrsA','0','2018-03-16 16:11:25',1),(20,2,'testing','nb','0','2018-03-16 16:16:26',1),(21,2,'link','https://www.youtube.com/embed/hQyeNBDCrsA','0','2018-03-16 16:30:38',0),(22,3,'hello','Hello  Hi every one ','0','2018-03-16 16:44:13',1),(23,1,'something','upload_max_filesize','1','2018-03-16 17:31:02',1),(24,1,'mca','mac file upoading','1','2018-03-16 17:31:49',1),(25,1,'ggg','http://localhost/motivation/motivation/lists','0','2018-03-16 17:34:17',1),(26,4,'demo','demo one purpose','1','2018-03-16 17:36:34',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `posts` */

insert  into `posts`(`img_id`,`user_id`,`post_id`,`name`,`org_name`,`create_at`,`status`) values (1,1,1,'0.152162001521101800vasuimage.jpg','vasuimage.jpg','2018-03-15 13:46:48',1),(2,1,2,'0.450524001521101817pancard.jpg','pan card.jpg','2018-03-15 13:47:00',1),(3,1,3,'0.801737001521102035videoplayback(1).3gpp','videoplayback (1).3gpp','2018-03-15 13:50:39',1),(4,1,4,'video.mp4','video.mp4','2018-03-15 14:17:03',1),(5,1,5,'video.mp4','video.mp4','2018-03-15 14:17:10',1),(6,1,6,'0.612104001521103643p1.jpg','p1.jpg','2018-03-15 14:17:26',1),(7,1,7,'0.481648001521103743p2.jpg','p2.jpg','2018-03-15 14:19:06',1),(9,1,9,'0.441507001521103765p1.jpg','p1.jpg','2018-03-15 14:19:33',1),(10,1,11,'0.589913001521121234p2.jpg','p2.jpg','2018-03-15 19:10:43',1),(13,1,11,'0.400658001521181177p1.jpg','p1.jpg','2018-03-16 12:11:30',1),(14,1,11,'0.522592001521182498p3.jpg','p3.jpg','2018-03-16 12:11:44',1),(15,1,11,'0.453629001521182502p1.jpg','p1.jpg','2018-03-16 12:11:44',1),(16,1,11,'0.498196001521183071pancard.jpg','pan card.jpg','2018-03-16 12:25:29',1),(17,1,11,'0.172008001521183086vasuimage.jpg','vasuimage.jpg','2018-03-16 12:25:29',1),(18,1,11,'0.584651001521183120pancard.jpg','pan card.jpg','2018-03-16 12:25:29',1),(19,1,8,'0.522538001521183627vasuimage.jpg','vasuimage.jpg','2018-03-16 12:31:21',1),(20,1,8,'0.073480001521183640pancard.jpg','pan card.jpg','2018-03-16 12:31:21',1),(21,1,13,'video.mp4','image.png','2018-03-16 12:37:05',1),(22,1,16,'video.mp4','video.mp4','2018-03-16 15:40:52',1),(23,1,17,'0.759471001521195775pancard.jpg','pan card.jpg','2018-03-16 15:52:58',1),(24,1,18,'0.075804001521195786image.png','image.png','2018-03-16 15:53:14',1),(25,1,23,'0.138534001521201646video.mp4','video.mp4','2018-03-16 17:31:02',1),(26,1,24,'0.003723001521201690MCAVideoSongs-YevandoiNaniGaruFullVideoSong-Nani,SaiPallavi.mp4','MCA Video Songs - Yevandoi Nani Garu Full Video Song - Nani, Sai Pallavi.mp4','2018-03-16 17:31:49',1),(27,4,26,'0.436010001521201977MCAVideoSongs-YevandoiNaniGaruFullVideoSong-Nani,SaiPallavi.mp4','MCA Video Songs - Yevandoi Nani Garu Full Video Song - Nani, Sai Pallavi.mp4','2018-03-16 17:36:34',1);

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
  `user_id` int(11) DEFAULT '1',
  `name` varchar(250) DEFAULT NULL,
  `org_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `temp` */

insert  into `temp`(`id`,`user_id`,`name`,`org_name`,`create_at`) values (28,1,'0.944125001521436115pancard.jpg','pan card.jpg','2018-03-19 10:38:35');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
