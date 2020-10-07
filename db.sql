-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.37-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema ci
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ ci;
USE ci;

--
-- Table structure for table `ci`.`test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) NOT NULL,
  `note` text,
  `datepicker` date DEFAULT NULL,
  `tags` varchar(200) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `ref_id` (`ref_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci`.`test`
--

/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` (`id`,`ref_id`,`note`,`datepicker`,`tags`,`create_time`) VALUES 
 (1,2,'',NULL,NULL,NULL),
 (2,3,'<p><b>ทดสอบตัวหนา</b></p><p>ทดสอบขึ้นบรรทัดใหม่<br>ขึ้นบรรทัดใหม่+กด Shift</p>',NULL,NULL,NULL),
 (3,4,'<h2 class=\"text-danger\">ทดสอบเพิ่ม Content</h2>\r\n<ul>\r\n<li>ตัวเลือก 1</li>\r\n<li>ตัวเลือก 2</li>\r\n<li>ตัวเลือก 3</li>\r\n</ul>\r\n<table class=\"table table-bordered table-striped\">\r\n<thead>\r\n<tr>\r\n<th class=\"text-center\" width=\"80\">No</th>\r\n<th class=\"text-center\" width=\"120\">วันที่\r\n</th><td class=\"text-center\" width=\"200\">รายละเอียด\r\n</td><th class=\"text-center\">รายละเอียดเพิ่มเติม</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr><td class=\"text-center\">1</td><td class=\"text-center\">2020-10-01</td><td>รายละเอียด 3<br></td><td>รายละเอียด 4<br></td></tr>\r\n<tr><td class=\"text-center\">2</td><td class=\"text-center\">2020-10-02</td><td>รายละเอียด 3<br></td><td>รายละเอียด 4<br></td></tr>\r\n<tr><td class=\"text-center\">3</td><td class=\"text-center\">2020-10-03</td><td>รายละเอียด 3<br></td><td>รายละเอียด 4<br></td></tr>\r\n</tbody>\r\n</table><p>คลิกดูตามรายละเอียด<a href=\"https://pantip.com/topic/40212127\" target=\"_blank\"><br>ประสบการณ์รีไฟแนนซ์บ้าน</a><br></p>',NULL,NULL,NULL),
 (4,5,'<p><img data-filename=\"1_AgHm9UrzEftj6Fsb4ql-FQ.jpeg\" xss=removed></p><p><br></p><p><img data-filename=\"1_uk4YJIKLd3UZI68jphIDXw.png\" xss=removed><br></p>',NULL,NULL,NULL);
INSERT INTO `test` (`id`,`ref_id`,`note`,`datepicker`,`tags`,`create_time`) VALUES 
 (5,7,'<h1>Upload รูปภาพ</h1><hr><img src=\"../uploads/images/01-3-45-600x450.jpg\" class=\"img-rounded responsive img-thumbnail\">\r\n<p><b>ทดสอบUpload รูปภาพและเพิ่ม Attribute</b></p>','0000-00-00','John,Smith','2020-10-07 10:51:00');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
