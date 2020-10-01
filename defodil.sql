/*
SQLyog Ultimate v9.02 
MySQL - 5.0.24-community-nt : Database - defodil
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`defodil` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `defodil`;

/*Table structure for table `downloads` */

DROP TABLE IF EXISTS `downloads`;

CREATE TABLE `downloads` (
  `id` int(14) NOT NULL,
  `name` varchar(40) default NULL,
  `link` tinytext,
  `rank` int(14) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `downloads` */

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `ID` int(14) NOT NULL auto_increment,
  `FName` varchar(40) default NULL,
  `LName` varchar(40) default NULL,
  `Email` tinytext,
  `Location` varchar(40) default NULL,
  `Grade` varchar(40) default NULL,
  `Password` varchar(50) default NULL,
  `Gender` varchar(40) default NULL,
  `Image` tinytext,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`ID`,`FName`,`LName`,`Email`,`Location`,`Grade`,`Password`,`Gender`,`Image`) values (3,'Darsh','Jain','darsh@gmail.com','Indore','10','D@123','MALE','lamborghini_centenario_hyper_car-3840x2160.jpg');

/*Table structure for table `videos` */

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(14) NOT NULL,
  `topic` varchar(40) default NULL,
  `subject` varchar(40) default NULL,
  `lectureNo` varchar(40) default NULL,
  `description` tinytext,
  `rank` int(14) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `videos` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
