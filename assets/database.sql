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
  `password` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`email`,`password`,`name`,`status`,`create_at`) values (1,'admin@gmail.com','e10adc3949ba59abbe56e057f20f883e','admin',1,'2018-03-12 13:05:57');

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

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values ('2m92bnjcjvkb682a6hu7ham25saaaa06','::1',1520860000,'__ci_last_regenerate|i:1520859929;'),('pr9kjvetbqkp1280q74shn86fgjb4rcs','::1',1520859979,'__ci_last_regenerate|i:1520859941;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`c_id`,`post_id`,`comment`,`create_at`) values (15,15,'uyiyuiytui','2018-03-12 19:29:58'),(16,15,'kl;ljkljk','2018-03-12 19:31:23'),(17,15,'yuyturtyu','2018-03-12 19:33:08'),(18,16,'uityuiyui','2018-03-13 10:21:18'),(19,17,'yttryrty','2018-03-14 13:34:28'),(20,25,'ghfghfg','2018-03-14 16:40:34');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`id`,`post_id`,`name`,`subject`,`email`,`message`,`create_at`) values (9,NULL,'test','subject','admin@gmail.com','mesage','2018-03-12 19:11:50'),(10,NULL,'uiyui','yurtyu','vasu@gmail.com','ryturtyu','2018-03-12 19:27:17'),(11,NULL,NULL,NULL,NULL,'hfghfg','2018-03-13 10:12:38');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option` varchar(250) DEFAULT NULL,
  `message` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`id`,`option`,`message`,`create_at`) values (1,'Mediocre','hgjfgjfghj','2018-03-13 10:17:18');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `leave_a_replay` */

insert  into `leave_a_replay`(`id`,`post_id`,`name`,`email`,`message`,`create_at`) values (1,15,'uiu','vasudevareddy@prachatech.com','uiytuiyui','2018-03-12 18:47:14'),(2,15,'yuy','utyuyutry','urtyurty','2018-03-12 18:55:32'),(3,15,'hjfjgj','fdgjfj','gjfghjgh','2018-03-12 18:57:41'),(4,15,'hjfjgj','fdgjfj','gjfghjgh','2018-03-12 18:57:52'),(5,15,'hjfjgj','fdgjfj','gjfghjgh','2018-03-12 18:58:02'),(6,15,'hjfjgj','fdgjfj','gjfghjgh','2018-03-12 18:59:07'),(7,15,'hjfjgj','fdgjfj','gjfghjgh','2018-03-12 18:59:16');

/*Table structure for table `like_count` */

DROP TABLE IF EXISTS `like_count`;

CREATE TABLE `like_count` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `like` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `like_count` */

insert  into `like_count`(`l_id`,`post_id`,`like`,`create_at`) values (14,13,NULL,'2018-03-12 18:35:59'),(15,14,NULL,'2018-03-12 18:40:12'),(16,15,'3','2018-03-12 18:40:53'),(17,16,'1','2018-03-13 10:19:44'),(18,17,'17','2018-03-14 11:04:48'),(19,18,NULL,'2018-03-14 14:11:10'),(20,19,NULL,'2018-03-14 14:11:16'),(21,20,NULL,'2018-03-14 14:24:19'),(22,21,NULL,'2018-03-14 14:25:56'),(23,22,NULL,'2018-03-14 14:28:55'),(24,23,NULL,'2018-03-14 14:30:04'),(25,24,NULL,'2018-03-14 16:13:46'),(26,25,'9','2018-03-14 16:19:26'),(27,26,NULL,'2018-03-14 18:31:09');

/*Table structure for table `newsletter` */

DROP TABLE IF EXISTS `newsletter`;

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `newsletter` */

insert  into `newsletter`(`id`,`email`,`create_at`) values (1,'admin@gmail.com','2018-03-12 19:21:35'),(2,'tyertyty@gmail.com','2018-03-12 19:26:41'),(3,'vasudevareddy@prachatech.com','2018-03-12 19:27:04');

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

insert  into `post_count`(`p_id`,`user_id`,`title`,`text`,`image_count`,`create_at`,`pstatus`) values (13,1,NULL,'yutyutyu','1','2018-03-12 18:35:59',1),(14,1,NULL,'uuituyyu','1','2018-03-12 18:40:12',1),(15,1,NULL,'uiyiytui','1','2018-03-12 18:40:53',1),(16,1,NULL,'bghfghfgh','3','2018-03-13 10:19:44',1),(17,1,NULL,'hello hi every one','2','2018-03-14 11:04:48',1),(18,1,NULL,'hello','0','2018-03-14 14:11:10',1),(19,1,NULL,'hello','0','2018-03-14 14:11:16',1),(20,1,NULL,'ytrtyrtyrt','0','2018-03-14 14:24:19',1),(21,1,NULL,'hello','1','2018-03-14 14:25:56',1),(22,1,NULL,'i  have text stored in the php variable $text. This text can be 100 or 1000 or 10000 words. As currently implemented, my page extends based on the text, but if the text is too long the page looks ugly.','0','2018-03-14 14:28:54',1),(23,1,NULL,'I have text stored in the php variable $text. This text can be 100 or 1000 or 10000 words. As currently implemented, my page extends based on the text, but if the text is too long the page looks ugly.','1','2018-03-14 14:30:04',1),(24,1,'gdfgd','fgdfgdfgdf','0','2018-03-14 16:13:46',1),(25,1,'hello  hi','gdgfdn   f,jgjgj  jjiog  fdjgjdfigjf,mfgjfjug','2','2018-03-14 16:19:25',1),(26,1,'ytyrtyrt','tytmfnghdfg  fdgkfdg  fdklgkldfg  fdgfdgihdg','1','2018-03-14 18:31:09',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `posts` */

insert  into `posts`(`img_id`,`user_id`,`post_id`,`name`,`org_name`,`create_at`,`status`) values (25,1,13,'0.808833001520859954vasuimage.jpg','vasuimage.jpg','2018-03-12 18:35:59',1),(26,1,14,'0.763745001520860210p3.jpg','p3.jpg','2018-03-12 18:40:12',1),(27,1,15,'0.597284001520860250pancard.jpg','pan card.jpg','2018-03-12 18:40:54',1),(28,1,16,'0.432488001520916576p3.jpg','p3.jpg','2018-03-13 10:19:44',1),(29,1,16,'0.300625001520916579p3.jpg','p3.jpg','2018-03-13 10:19:44',1),(30,1,16,'0.434985001520916581p1.jpg','p1.jpg','2018-03-13 10:19:44',1),(31,1,17,'0.966366001521005671vasuimage.jpg','vasuimage.jpg','2018-03-14 11:04:48',1),(32,1,17,'0.317965001521005676pancard.jpg','pan card.jpg','2018-03-14 11:04:48',1),(33,1,21,'0.050503001521017749p3.jpg','p3.jpg','2018-03-14 14:25:57',1),(34,1,23,'0.076487001521017998p1.jpg','p1.jpg','2018-03-14 14:30:04',1),(35,1,25,'0.099422001521024549p2.jpg','p2.jpg','2018-03-14 16:19:26',1),(36,1,25,'0.535380001521024552p1.jpg','p1.jpg','2018-03-14 16:19:26',1),(37,1,26,'0.885036001521032454p1.jpg','p1.jpg','2018-03-14 18:31:09',1);

/*Table structure for table `temp` */

DROP TABLE IF EXISTS `temp`;

CREATE TABLE `temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '1',
  `name` varchar(250) DEFAULT NULL,
  `org_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `temp` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
