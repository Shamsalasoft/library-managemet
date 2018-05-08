/*
SQLyog Ultimate v9.20 
MySQL - 5.5.5-10.1.30-MariaDB : Database - library_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`library_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `library_db`;

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(100) DEFAULT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `shelf_id` int(11) DEFAULT NULL,
  `author_name` varchar(100) DEFAULT NULL,
  `book_category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`book_id`),
  KEY `FK_book` (`shelf_id`),
  KEY `FK_book_staff` (`staff_id`),
  CONSTRAINT `FK_book` FOREIGN KEY (`shelf_id`) REFERENCES `shelf` (`shelf_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_book_staff` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `book` */

insert  into `book`(`book_id`,`isbn`,`book_name`,`quantity`,`staff_id`,`shelf_id`,`author_name`,`book_category`) values (1,'123sw','Software System',237,1,1,'jack','Software\r'),(2,'123cs','computer systems',40,2,2,'benjuman','computer engineering\r'),(3,'123es','electronic systems',30,3,3,'robart','electronic engineering\r'),(4,'123tl','telecom systems',105,3,3,'ramiz','telecom engineering\r'),(5,'123el','electrical systems',107,3,5,'belth','electrical engineering');

/*Table structure for table `shelf` */

DROP TABLE IF EXISTS `shelf`;

CREATE TABLE `shelf` (
  `shelf_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_type` varchar(100) DEFAULT NULL,
  `shelf_place` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`shelf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `shelf` */

insert  into `shelf`(`shelf_id`,`book_type`,`shelf_place`) values (1,'software','top-right'),(2,'computer','top-left'),(3,'electronic','left-bottom'),(4,'telecom','right-bottom'),(5,'electrical','centre');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `pswd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`staff_id`,`name`,`designation`,`pswd`) values (1,'asad','admin','202cb962ac59075b964b07152d234b70'),(2,'amjad','librarian','f6b07b6c1340e947b861def5f8b092d8ee710826dc56bd175bdc8f3a16b0b8acf853c64786a710dedf9d1524d61e32504e27'),(3,'anwer','admin','d404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8d'),(4,'aaa','admin',NULL);

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `std_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `batch` varchar(100) DEFAULT NULL,
  `date_of_admission` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`std_id`,`name`,`department`,`batch`,`date_of_admission`,`age`,`gender`) values (1,'ali','Software','11sw','2018-03-06',11,'male'),(2,'faraz','Compuetr Science','11cs','2018-04-05',11,'Male'),(3,'rashid','Electronics','11es','2018-04-14',34,'Male'),(4,'nasir','Telecom','11tl','2018-04-10',34,'Male'),(5,'ada','Software','11sw','2018-04-17',22,'Male'),(6,'shahrukh','UBIT','2014','2018-04-17',24,'male'),(7,'ahmed','Software','15sw','2018-05-15',22,'Male'),(8,'Ali waqas','Compuetr Science','17cs','2018-05-16',43,'Male'),(9,'Ali waqas','Compuetr Science','dfd','2018-05-16',43,'Male'),(15,'sdfas','asfasf','safsa','2018-05-24',11,'ee');

/*Table structure for table `student_book` */

DROP TABLE IF EXISTS `student_book`;

CREATE TABLE `student_book` (
  `std_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `status` tinyint(11) NOT NULL,
  `bookpickdate` date DEFAULT NULL,
  `bookbackdate` date DEFAULT NULL,
  KEY `FK_student_id` (`std_id`),
  KEY `FK_student_book_id` (`book_id`),
  CONSTRAINT `FK_student_book_id` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_student_id` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student_book` */

insert  into `student_book`(`std_id`,`book_id`,`status`,`bookpickdate`,`bookbackdate`) values (1,2,0,'2018-04-26','2018-04-27'),(1,4,0,'2018-04-26','2018-04-27'),(1,3,0,'2018-04-25','2018-04-27'),(1,5,0,'0000-00-00','0000-00-00'),(1,1,0,'0000-00-00','0000-00-00'),(4,1,1,'2018-04-27','2018-04-27'),(4,5,1,'2018-04-26','2018-04-28'),(6,1,1,'2018-04-16','2018-04-30'),(6,2,1,'2018-04-26','2018-04-30'),(6,3,1,'2018-04-24','2018-04-30'),(6,4,1,'2018-04-29','2018-04-30'),(6,5,1,'2018-04-29','2018-04-30'),(9,5,1,'2018-05-22','2018-05-18'),(9,4,1,'2018-05-16','2018-05-30'),(2,5,1,'2018-05-14','2018-05-23'),(2,4,1,'2018-05-23','2018-05-30'),(5,2,1,'2018-05-08','2018-05-10'),(5,4,1,'2018-05-09','2018-05-21'),(5,3,1,'2018-05-02','2018-05-10'),(5,1,1,'2018-05-07','2018-05-15'),(5,5,1,'2018-05-08','2018-05-28'),(3,1,1,'2018-05-09','2018-05-20'),(3,5,1,'2018-05-09','2018-05-24'),(3,3,1,'2018-05-10','2018-05-22'),(3,4,1,'2018-05-16','2018-05-23'),(1,1,0,'0000-00-00','0000-00-00'),(1,1,1,'2018-05-01','2018-05-04'),(1,4,0,'2018-05-01','2018-05-04'),(1,4,0,'2018-05-15','2018-05-30'),(1,3,0,'2018-05-03','2018-05-03'),(1,2,0,'2018-05-10','2018-05-30'),(1,2,0,'2018-05-02','2018-05-10'),(1,2,0,'2018-05-01','2018-05-12'),(1,2,1,'2018-05-01','2018-05-12'),(1,4,1,'2018-05-01','2018-05-31'),(1,3,1,'2018-05-01','2018-05-31');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
