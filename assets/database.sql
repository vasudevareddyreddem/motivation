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

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values ('08g19quma5fifo6ielkavtsbsqk1mem8','::1',1520845674,'__ci_last_regenerate|i:1520845486;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('0v7h87c06ga391k8k916voa0t36k4e7c','::1',1520853720,'__ci_last_regenerate|i:1520853687;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('19apirrfi2q7755nv8pslocgn2118uv2','::1',1520855051,'__ci_last_regenerate|i:1520854831;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('1vt3e4h3ut8bju2ov8nq4q83egve82lj','::1',1520847596,'__ci_last_regenerate|i:1520847399;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('2c329lejbvecs8irtplpfg5fjgqs00fs','::1',1520855576,'__ci_last_regenerate|i:1520855522;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('2fqr8m7pfsimggk11s65pdi247mo68sb','::1',1520856433,'__ci_last_regenerate|i:1520856135;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('2lnbp9t9np6775sivu7aqke31n9k8hu6','::1',1520844993,'__ci_last_regenerate|i:1520844734;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('31q60vjp6vq1cuf7hq74elm4eua0bem2','::1',1520839069,'__ci_last_regenerate|i:1520838861;'),('4h43b0ji87s4g6g010bh8t62ptipi27g','::1',1520850590,'__ci_last_regenerate|i:1520850347;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('4mo4c0hdsk9c2k0kslb4r2svbmqm94lt','::1',1520857490,'__ci_last_regenerate|i:1520857210;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('55nsi6201qt5ki78proelo4fjqvndukn','::1',1520854323,'__ci_last_regenerate|i:1520854087;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('57i9fop07prv8bpbo48djukklhb3hcfk','::1',1520851715,'__ci_last_regenerate|i:1520851649;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('5mm07trlif2rrdfmlhkm8fti31opgn3g','::1',1520834159,'__ci_last_regenerate|i:1520834149;'),('5q61uc05qsotdrsn7faldl3s8ilkfj6l','::1',1520852684,'__ci_last_regenerate|i:1520852520;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('5r77a73b5roqpt2b1i6l4ht9gdrutcdt','::1',1520857161,'__ci_last_regenerate|i:1520856891;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('6invb60dtqbk1609f0qd5364go4vt4d4','::1',1520839473,'__ci_last_regenerate|i:1520839212;'),('7kofbn9rsp6i4coa8c09gavm3qv1l9id','::1',1520840507,'__ci_last_regenerate|i:1520840268;userdetails|a:1:{i:0;a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}}'),('9gsith0pdjd1a0rvolhe84u9o7vdbuln','::1',1520846724,'__ci_last_regenerate|i:1520846454;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('9lg2p5l4svehmpe9km0nksoodg90n8h7','::1',1520859181,'__ci_last_regenerate|i:1520858890;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('9vvq1upo3latm00i0addmke1hmvrucpl','127.0.0.1',1520849921,'__ci_last_regenerate|i:1520849652;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('a5un9tp241qj2gouuum8j3kfth8oedb0','::1',1520845441,'__ci_last_regenerate|i:1520845147;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('a7h1tvpb7ncf4l4eqps455nu3ebco9q6','::1',1520833334,'__ci_last_regenerate|i:1520833058;'),('as47dsr05eja995msv69fs4nc2qvvmlj','::1',1520838842,'__ci_last_regenerate|i:1520838556;'),('asaaqfdc0tcqqf1eor063ihi4h08oe4k','::1',1520846975,'__ci_last_regenerate|i:1520846766;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('b98phf2mie57bmiprc20lul3egcdc4tt','::1',1520853164,'__ci_last_regenerate|i:1520853164;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('c3rd0vpntvhfil9pquld3q5ijbah1jno','::1',1520836927,'__ci_last_regenerate|i:1520836706;'),('cmqadlbfn13hvuh7tkp9659turapas8m','::1',1520832343,'__ci_last_regenerate|i:1520832059;'),('e0baem11kfmgnt8m1jfu8or8n9fs4dls','::1',1520851266,'__ci_last_regenerate|i:1520850968;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('e26semk39hd4f1vflrh4pckvs0lrcfmc','::1',1520847336,'__ci_last_regenerate|i:1520847079;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('e3n8ikjv5mb19fm6fooupjsnp76ti6fo','::1',1520838213,'__ci_last_regenerate|i:1520837915;'),('fg5l3tqqu61fgtrcqn1c343c79bsj8kt','::1',1520859404,'__ci_last_regenerate|i:1520859259;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('fogbc12k43m53sudvpq9q0tg8vj8m9d4','::1',1520857771,'__ci_last_regenerate|i:1520857523;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('g94qo470vmv9qp9r6931k28uhspe0lk7','::1',1520837530,'__ci_last_regenerate|i:1520837475;'),('gb192tq0ogde68v4579sd7ob1br35p8e','::1',1520846431,'__ci_last_regenerate|i:1520846153;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('i1qj9sls3ttcoqecronor2bfj9fsolio','::1',1520858564,'__ci_last_regenerate|i:1520858548;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('iio7op4q0k7a5ngvidljt61upmabp9o9','::1',1520853081,'__ci_last_regenerate|i:1520852855;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('ij0pn9tp5cn7j67l43asvghn5nibdm8t','::1',1520836663,'__ci_last_regenerate|i:1520836398;'),('iu36fihdbi3i0dn6j5co4bube8sb89dc','::1',1520838366,'__ci_last_regenerate|i:1520838226;'),('jaagtiq6b1brr99omv7f3bl0mu3kl2oi','::1',1520854782,'__ci_last_regenerate|i:1520854492;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('jih9ehbabmhagn02s9hvgbc6iu722hnc','::1',1520851539,'__ci_last_regenerate|i:1520851342;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}success|s:26:\"Comment successfully Added\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('jiib4nfd92viepnqk2euq1n6e9aulm84','::1',1520858175,'__ci_last_regenerate|i:1520857883;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('jmrb2l5ba84cta25ihr1fftdvd81fd4f','::1',1520833833,'__ci_last_regenerate|i:1520833700;'),('jsb3ldsophevjau5f4cglift49amga87','::1',1520855945,'__ci_last_regenerate|i:1520855829;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('k67a53a1d534ktnnrnc94g7d55n9dmq2','127.0.0.1',1520849434,'__ci_last_regenerate|i:1520849162;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('k6msc76nrc6n49ackbode9puj4vsa3vm','127.0.0.1',1520848984,'__ci_last_regenerate|i:1520848752;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('kop05m9b4g30l422qodpumd9ebjskaak','::1',1520850890,'__ci_last_regenerate|i:1520850662;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('ldqs78022grmm8jkv2ru9gehm3facjm4','::1',1520843816,'__ci_last_regenerate|i:1520843599;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}error|s:50:\"technical problem will occurred. Please try again.\";__ci_vars|a:1:{s:5:\"error\";s:3:\"old\";}'),('m5ppqpsqori8j2m4sjti79o4kn5tuq1m','::1',1520858487,'__ci_last_regenerate|i:1520858196;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('mbv28clnvumfvpr1lhq8g750esji6s8i','::1',1520840058,'__ci_last_regenerate|i:1520839874;'),('mdumjcrbijrjvev141713vmlhk489gra','::1',1520852397,'__ci_last_regenerate|i:1520852166;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('o4sq3e04rk0fbic2sq084jlmelgvi7ai','::1',1520833666,'__ci_last_regenerate|i:1520833368;'),('onv6nsqi52v8ap7dmvceoel95fm5ai6b','::1',1520844558,'__ci_last_regenerate|i:1520844288;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('p1srq25krrn9d165sbv6h1mvvps6e911','::1',1520840942,'__ci_last_regenerate|i:1520840813;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}success|s:24:\"File successfully Select\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('r75p52hv130lgqg01lpa42b1vehj6iqj','::1',1520837403,'__ci_last_regenerate|i:1520837109;'),('s3227s9mhc8s4pd8bnoe1dt7vkls7i1l','::1',1520839842,'__ci_last_regenerate|i:1520839532;'),('sdd0ka1lqv0u4s6h5v77v6ts6unmg87r','::1',1520856676,'__ci_last_regenerate|i:1520856533;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('sh2enps8h14h1d6029711rst89ks0ch6','::1',1520846047,'__ci_last_regenerate|i:1520845790;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('tc14s5uq7a7bmh8hpj5ks22nmjdm9m3r','::1',1520855477,'__ci_last_regenerate|i:1520855211;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}'),('ti110v5dkn9ai27o66g1fale6v6t36fc','::1',1520835121,'__ci_last_regenerate|i:1520835032;'),('tlkb6hqn1rjngipdt3sne58488ftp94o','::1',1520836077,'__ci_last_regenerate|i:1520835786;success|s:24:\"File successfully Select\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('tuv2bpkf8p8knj4o07e9uvhok4nlr26o','::1',1520832647,'__ci_last_regenerate|i:1520832368;'),('uit9jncml4id3ilrpg44lnt0e1a3lhu9','::1',1520836391,'__ci_last_regenerate|i:1520836097;success|s:24:\"File successfully Select\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),('v2v9v4e3cn6kuf8dvtcjjm1frrac6pvr','127.0.0.1',1520850019,'__ci_last_regenerate|i:1520850019;userdetails|a:6:{s:2:\"id\";s:1:\"1\";s:5:\"email\";s:15:\"admin@gmail.com\";s:8:\"password\";s:32:\"e10adc3949ba59abbe56e057f20f883e\";s:4:\"name\";s:5:\"admin\";s:6:\"status\";s:1:\"1\";s:9:\"create_at\";s:19:\"2018-03-12 13:05:57\";}');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `comment` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`c_id`,`post_id`,`comment`,`create_at`) values (6,10,'jhhjgh','2018-03-12 17:12:14'),(7,11,'testing\r\n','2018-03-12 17:33:09'),(8,12,'hi every one','2018-03-12 17:33:28'),(9,12,'yuytuityui','2018-03-12 17:56:47'),(10,12,'fghfghfdgh','2018-03-12 17:56:51'),(11,12,'jhhgjg','2018-03-12 18:10:05'),(12,12,'hellohfghfg','2018-03-12 18:10:14'),(13,10,'jkhjkghjk','2018-03-12 18:20:33'),(14,10,'hgjgh','2018-03-12 18:26:43');

/*Table structure for table `like_count` */

DROP TABLE IF EXISTS `like_count`;

CREATE TABLE `like_count` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `like` text,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `like_count` */

insert  into `like_count`(`l_id`,`post_id`,`like`,`create_at`) values (11,10,'7','2018-03-12 17:10:52'),(12,11,'5','2018-03-12 17:11:18'),(13,12,'18','2018-03-12 17:11:29');

/*Table structure for table `post_count` */

DROP TABLE IF EXISTS `post_count`;

CREATE TABLE `post_count` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `text` text,
  `image_count` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `pstatus` int(11) DEFAULT '1',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `post_count` */

insert  into `post_count`(`p_id`,`user_id`,`text`,`image_count`,`create_at`,`pstatus`) values (10,1,'testing purpose','2','2018-03-12 17:10:52',1),(11,1,' hello every on  how  are you','0','2018-03-12 17:11:18',1),(12,1,'hello','0','2018-03-12 17:11:29',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `posts` */

insert  into `posts`(`img_id`,`user_id`,`post_id`,`name`,`org_name`,`create_at`,`status`) values (23,1,10,'0.263329001520854842p2.jpg','p2.jpg','2018-03-12 17:10:52',1),(24,1,10,'0.733953001520854844p3.jpg','p3.jpg','2018-03-12 17:10:52',1);

/*Table structure for table `temp` */

DROP TABLE IF EXISTS `temp`;

CREATE TABLE `temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT '1',
  `name` varchar(250) DEFAULT NULL,
  `org_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `temp` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
