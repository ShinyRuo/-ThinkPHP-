-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: dnf
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `pwd` char(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auction`
--

DROP TABLE IF EXISTS `auction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '买家id',
  `eqid` int(11) NOT NULL COMMENT '装备id',
  `aumoney` float(8,2) NOT NULL COMMENT '竞拍价格',
  `autime` int(11) NOT NULL COMMENT '竞拍时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COMMENT='竞拍记录表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auction`
--

LOCK TABLES `auction` WRITE;
/*!40000 ALTER TABLE `auction` DISABLE KEYS */;
INSERT INTO `auction` VALUES (1,14,24,80.00,1366796457),(2,16,23,80.00,1366806078),(3,16,22,140.00,1366806120),(4,16,23,98.00,1366806187),(5,17,52,55.00,1366806908),(6,17,53,40.00,1366806928),(7,16,53,45.00,1366806960),(8,17,53,50.00,1366807003),(9,16,53,60.00,1366807056),(10,17,53,70.00,1366807084),(11,17,55,88.00,1366807182),(12,17,23,100.00,1366807196),(13,17,13,80.00,1366807259),(14,17,19,88.00,1366807291),(15,17,6,100.00,1366807401),(16,16,23,110.00,1366807460),(17,14,52,66.00,1366807632),(18,14,54,40.00,1366807659),(19,14,55,90.00,1366807670),(20,14,24,85.00,1366807708),(21,14,18,90.00,1366807889),(22,14,55,95.00,1366807911),(23,16,24,90.00,1366807975),(24,14,22,150.00,1366808430),(25,14,70,88.00,1366820737),(26,14,54,45.00,1366824093),(27,16,21,80.00,1366824332),(28,15,43,100.00,1366869066),(29,15,44,200.00,1366869179),(30,14,30,232.00,1366895652),(31,14,30,240.00,1366895685),(32,14,32,259.00,1366902684),(33,14,28,255.00,1366903791),(34,16,28,260.00,1366903817),(35,14,39,100.00,1366903862),(36,16,40,340.00,1366903873),(37,17,25,65.00,1366903905),(38,17,29,333.00,1366903917),(39,14,44,220.00,1366903963),(40,16,28,280.00,1366903994),(41,16,28,300.00,1366904023),(42,17,30,250.00,1366904109),(43,14,63,90.00,1366907366),(44,14,62,80.00,1366907386),(45,14,39,110.00,1366907414),(46,16,30,260.00,1366907524),(47,16,27,140.00,1366907536),(48,16,61,75.00,1366907551),(49,17,63,97.00,1366907600),(50,17,28,320.00,1366907623),(51,17,61,80.00,1366907709),(52,17,34,340.00,1366907745),(53,17,0,800.00,1555237034),(54,1,0,800.00,1555237236),(55,1,0,600.00,1555237255),(56,1,0,600.00,1555248487),(57,1,0,600.00,1555248563),(58,1,0,600.00,1555248760),(59,1,0,600.00,1555248931),(60,1,0,800.00,1555248984),(61,1,0,800.00,1555249308),(62,1,0,800.00,1555249458),(63,1,0,800.00,1555249616),(64,1,0,800.00,1555249618),(65,1,102,800.00,1555249717),(66,1,102,800.00,1555249750),(67,1,102,800.00,1555249767),(68,1,102,1.00,1555249837),(69,1,102,1.00,1555249852),(70,1,102,1.00,1555249877),(71,1,102,800.00,1555249908);
/*!40000 ALTER TABLE `auction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equip`
--

DROP TABLE IF EXISTS `equip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equip` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `uid` int(11) NOT NULL COMMENT '用户id',
  `quid` int(11) NOT NULL COMMENT '分类id',
  `zyid` int(11) NOT NULL COMMENT '废弃',
  `bjid` int(11) NOT NULL COMMENT '废弃',
  `qiang` int(11) NOT NULL DEFAULT '0' COMMENT '废弃',
  `eqname` varchar(30) NOT NULL COMMENT '商品名称',
  `vender` varchar(30) DEFAULT NULL COMMENT '生产厂家',
  `eqdes` text NOT NULL COMMENT '商品简介',
  `price` float(8,2) NOT NULL COMMENT '商品价格',
  `starttime` int(11) NOT NULL COMMENT '开拍时间戳',
  `endtime` int(11) NOT NULL COMMENT '结束竞拍时间戳',
  `pic` varchar(50) NOT NULL COMMENT '商品图片路径',
  `ispush` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  `auresult` tinyint(1) NOT NULL DEFAULT '0' COMMENT '竞拍结果 1为交易成功',
  `autimes` int(11) NOT NULL COMMENT '被竞拍的次数',
  `isorder` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否生成过订单',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=utf8 COMMENT='装备表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equip`
--

LOCK TABLES `equip` WRITE;
/*!40000 ALTER TABLE `equip` DISABLE KEYS */;
INSERT INTO `equip` VALUES (1,14,50,17,60,1,'商品a1',NULL,'商品a1',12.00,1366788780,1366875180,'51778a7390484.jpg',0,0,0,0),(2,14,52,35,63,2,'商品a2',NULL,'商品a2',23.00,1366788960,1366875360,'51778abf19db6.jpg',0,0,0,0),(3,14,52,34,63,4,'商品a3',NULL,'商品asaadf',54.00,1366789560,1366875960,'51778aea0fc2b.png',0,0,0,0),(4,14,52,34,63,6,'商品a4',NULL,'商品aergqqwer',64.00,1366789500,1366875900,'51778b410a0e1.jpg',0,0,0,0),(5,14,52,32,64,2,'商品a5',NULL,'商品argtue',85.00,1366789260,1366875660,'51778b5c7e3d6.jpg',0,0,0,0),(6,14,52,34,65,6,'商品a6',NULL,'商品akaer',98.00,1366789140,1366875540,'51778b85c5d85.jpg',0,0,1,1),(7,14,52,34,64,2,'商品a7',NULL,'商品atyjwswa',63.00,1366789440,1366875840,'51778b9d2b558.jpg',0,0,0,0),(8,14,55,36,67,76,'商品a7',NULL,'',99.00,1366789260,1366875660,'51778bba2a842.png',0,0,0,0),(9,14,51,34,63,5,'商品a8',NULL,'商品aykeww',36.00,1366789380,1366875780,'51778bd6ef62a.jpg',0,0,0,0),(10,14,52,34,61,2,'商品a9',NULL,'商品aerhqq4t',75.00,1366789560,1366875960,'51778bf55f0b4.jpg',0,0,0,0),(11,14,54,35,63,2,'商品a10',NULL,'商品arjwew',73.00,1366789500,1366875900,'51778c111f0f9.jpg',0,0,0,0),(12,14,54,35,64,5,'商品a11',NULL,'商品aerhyawert',84.00,1366789500,1366875900,'51778c347bf94.jpg',0,0,0,0),(13,14,51,35,67,4,'商品a12',NULL,'商品arehqaerg',74.00,1366789920,1366876320,'51778c55abfff.jpg',0,0,1,1),(14,14,53,36,63,6,'商品a13',NULL,'商品atyjhaewrf',78.00,1366789860,1366876260,'51778c9c7a054.jpg',0,0,0,0),(15,14,52,33,67,2,'商品a14',NULL,'商品arthqe',87.00,1366789560,1366875960,'51778cbceb644.jpg',0,0,0,0),(16,14,51,36,62,43,'商品a15',NULL,'商品agedg',76.00,1366789980,1366833180,'51778d20540d9.jpg',0,0,0,0),(17,14,56,36,64,6,'商品a16',NULL,'商品arjhwr',73.00,1366789860,1366833060,'51778d391f560.png',0,0,0,0),(18,14,52,37,63,6,'商品a17',NULL,'商品atywqwrtf',84.00,1366789800,1366833000,'51778d59334c9.jpg',0,0,1,1),(19,14,54,33,64,5,'商品a18',NULL,'',72.00,1366789920,1366876320,'51778d6f5c620.jpg',0,0,1,1),(20,14,52,36,64,6,'商品a19',NULL,'商品atrjhqaergt',94.00,1366790280,1366833480,'51778d9eb54c9.png',0,0,0,0),(21,14,51,17,60,2,'商品a21',NULL,'商品aerwgfsg',63.00,1366794660,1366837860,'5177a0c4b255e.jpg',0,0,1,1),(22,14,53,35,63,5,'商品a22',NULL,'商品aregag',132.00,1366794840,1366881240,'5177a0f24bab1.png',0,0,2,1),(23,14,53,34,66,43,'商品a23',NULL,'',76.00,1366795260,1366838460,'5177a1111ef41.jpg',0,0,4,1),(24,14,52,36,64,6,'商品a23',NULL,'商品ajwstre',74.00,1366794960,1366838160,'5177a12e8c66d.png',0,0,3,1),(25,14,53,34,62,5,'商品a24',NULL,'商品adfgwr',63.00,1366881300,1366967700,'5177a23554b38.png',0,0,1,1),(26,14,52,34,63,7,'商品a25',NULL,'商品ajear',74.00,1366856160,1366942560,'5177a25a7d363.png',0,0,0,0),(27,14,54,34,61,8,'商品a26',NULL,'商品akrytyrwef',132.00,1366882200,1366968600,'5177a27eaa249.jpg',0,0,1,1),(28,14,51,35,62,9,'商品a27',NULL,'商品afjtqertf',244.00,1366890240,1366976640,'5177a29bc17f3.jpg',0,0,5,1),(29,14,51,36,64,14,'商品a28',NULL,'商品atrhsfrg',322.00,1366881840,1366925040,'5177a2c108e1d.jpg',0,0,1,1),(30,14,54,37,68,99,'商品a29',NULL,'商品artuasfwe',212.00,1366894140,1366937340,'5177a2ee144e6.png',0,0,4,1),(31,14,50,33,64,65,'商品a30',NULL,'商品arhrehryj',324.00,1366856940,1366900140,'5177a33685e3a.jpg',0,0,0,0),(32,14,54,35,64,87,'商品a31',NULL,'商品aksfdsf',246.00,1366868100,1366954500,'5177a360f0fdc.jpg',0,0,1,1),(33,14,52,17,60,854,'商品a32',NULL,'商品adsheg',334.00,1366860600,1366947000,'5177a381c5140.jpg',0,0,0,0),(34,14,54,34,64,73,'商品a33',NULL,'商品aedgerrg',323.00,1366875660,1366918860,'5177a3a48574d.jpg',0,0,1,1),(35,14,54,35,62,83,'商品a34',NULL,'商品aergerg',345.00,1366932960,1367019360,'5177a3c7e8ebc.jpg',0,0,0,0),(36,14,52,34,64,63,'商品a35',NULL,'商品atrheargaewf',351.00,1366960680,1367003880,'5177a3ee8c60a.jpg',0,0,0,0),(37,14,53,35,64,62,'商品a36',NULL,'商品aergheargr',234.00,1366971540,1367057940,'5177a40df26c6.jpg',0,0,0,0),(38,14,52,34,63,63,'商品a35',NULL,'商品ahergv',63.00,1366946220,1366989420,'5177a4317fcc5.jpg',0,0,0,0),(39,14,51,17,65,72,'商品a36',NULL,'商品aryhjerg',94.00,1366882440,1366968840,'5177a4533cff1.jpg',0,0,2,1),(40,14,54,35,63,72,'商品a37',NULL,'商品ateheargfwer',321.00,1366883460,1366969860,'5177a47b1c314.jpg',0,0,1,1),(41,14,53,35,65,63,'商品a37',NULL,'商品aethewar',70.00,1366889400,1366975800,'5177a4a28765e.jpg',0,0,0,0),(42,14,51,36,69,76,'商品a38',NULL,'商品ayjhergt',90.00,1366939680,1367026080,'5177a4d0aa350.jpg',0,0,0,0),(43,14,54,33,64,95,'商品a38',NULL,'商品arthaerf',89.00,1366864200,1366950600,'5177a53670822.jpg',0,0,1,1),(44,14,53,34,62,8,'商品a40',NULL,'商品aerherf',190.00,1366856220,1366942620,'5177a55b9ba20.jpg',0,0,2,1),(45,14,54,35,64,52,'商品a41',NULL,'商品aerher',96.00,1366866960,1366953360,'5177a577bb506.jpg',0,0,0,0),(46,14,52,35,66,72,'商品41',NULL,'商品aeherf',36.00,1366993980,1367080380,'5177a59c97c91.jpg',0,0,0,0),(47,14,56,32,60,73,'商品a42',NULL,'商品aryjetg',74.00,1367032500,1367118900,'5177a5bc5c94b.jpg',0,0,0,0),(48,14,52,34,62,73,'商品a43',NULL,'商品aergewr',98.00,1367025120,1367111520,'5177a5deb6f7b.jpg',0,0,0,0),(49,14,53,34,65,65,'商品a44',NULL,'sdg商品a',254.00,1366929000,1366972200,'5177a60813e9f.jpg',0,0,0,0),(50,16,51,35,64,3,'装备b',NULL,'装备brehger',54.00,1366807800,1366894200,'5177cafebac04.JPG',0,0,0,0),(51,16,53,35,62,45,'装备b2',NULL,'装备bregr',63.00,1366806120,1366892520,'5177cb15d7d09.JPG',0,0,0,0),(52,16,51,35,62,52,'装备b3',NULL,'装备bergew',53.00,1366806720,1366849920,'5177cb301b28e.JPG',0,0,2,1),(53,16,53,34,60,65,'装备b3',NULL,'装备berger',37.00,1366806600,1366849800,'5177cb479d3fe.JPG',0,0,5,1),(54,16,56,34,63,76,'装备b5',NULL,'装备btjrtgres',37.00,1366806480,1366892880,'5177cb60939cb.JPG',0,0,2,1),(55,16,54,17,60,9,'装备b6',NULL,'装备bryjrtr',84.00,1366806480,1366849680,'5177cb7d01d1b.jpg',0,0,3,1),(56,16,52,34,64,8,'装备b7',NULL,'装备btrher',46.00,1366806000,1366892400,'5177cb93132cb.jpg',0,0,0,0),(57,16,52,34,60,65,'装备b8',NULL,'',321.00,1366805940,1366849140,'5177cbaccfc39.jpg',0,0,0,0),(58,16,55,17,60,33,'装备b9',NULL,'装备bkjrtg',77.00,1366806300,1366892700,'5177cbcc231e9.jpg',0,0,0,0),(59,16,54,34,63,43,'装备b10',NULL,'装备brtjersf',84.00,1366806480,1366892880,'5177cbeeb16d6.JPG',0,0,0,0),(60,16,55,35,65,8,'装备b11',NULL,'装备berher',99.00,1366860300,1366903500,'5177cc118e790.JPG',0,0,0,0),(61,16,53,34,63,6,'装备b12',NULL,'装备bether',73.00,1366879140,1366922340,'5177cc3305ad7.jpg',0,0,2,1),(62,16,52,36,66,72,'装备b13',NULL,'装备betherwre',74.00,1366888920,1366975320,'5177cc55ed1e6.jpg',0,0,1,1),(63,16,52,34,63,53,'装备b14',NULL,'装备btrher',84.00,1366903800,1366990200,'5177cc792d913.JPG',0,0,2,1),(64,16,52,34,60,84,'装备b15',NULL,'装备brgrewf',322.00,1366979520,1367022720,'5177cc9d0f53c.jpg',0,0,0,0),(65,16,54,35,60,76,'装备b16',NULL,'装备btrhuerfw',93.00,1366946160,1366989360,'5177ccbea90f2.jpg',0,0,0,0),(66,16,53,35,62,84,'装备b17',NULL,'装备berhwr',69.00,1366870860,1366957260,'5177cce39b61a.jpg',0,0,0,0),(67,16,52,35,62,73,'装备b18',NULL,'装备btherew',231.00,1366840800,1366884000,'5177cd04c9b03.jpg',0,0,0,0),(68,16,54,32,64,74,'装备b19',NULL,'装备bsagw',189.00,1366838340,1366881540,'5177cd2470cfb.jpg',0,0,0,0),(69,16,54,36,64,23,'装备b20',NULL,'s装备brth',57.00,1366838640,1366881840,'5177cd4655574.jpg',0,0,0,0),(70,16,52,36,60,63,'装备b21',NULL,'装备bregwe',84.00,1366806300,1366849500,'5177cdb0a73ab.JPG',0,0,1,1),(71,14,53,35,63,3,'测试1',NULL,'测试dfwefwef',64.00,1366968960,1367055360,'5179504a394fd.jpg',0,0,0,0),(72,14,54,17,64,4,'测试2',NULL,'测试rthwerg',87.00,1366968000,1367054400,'517950620229a.jpg',0,0,0,0),(73,14,55,35,63,75,'测试3',NULL,'测试rehertgf',77.00,1366936380,1367022780,'5179507e28171.png',0,0,0,0),(74,14,52,35,63,84,'测试4',NULL,'测试ertgewrf',64.00,1366946580,1367032980,'5179509a946ec.jpg',0,0,0,0),(75,14,55,35,63,74,'测试5',NULL,'测试rherf',85.00,1366967700,1367010900,'517950b2ee811.jpg',0,0,0,0),(76,14,53,36,62,74,'测试6',NULL,'测试dthearg',99.00,1367026680,1367113080,'517950d1979a1.jpg',0,0,0,0),(77,14,52,35,60,35,'测试7',NULL,'测试yjerfwef',85.00,1367058240,1367144640,'517950ebe859d.png',0,0,0,0),(78,14,52,35,60,35,'测试7',NULL,'测试yjerfwef',85.00,1367058240,1367144640,'517950edc33d6.png',0,0,0,0),(79,14,51,34,65,57,'测试8',NULL,'',93.00,1367051220,1367094420,'51795108dff9c.jpg',0,0,0,0),(80,14,53,35,65,64,'测试9',NULL,'测试ryhearsf',98.00,1367047140,1367090340,'517951223ab3d.jpg',0,0,0,0),(81,14,53,34,63,76,'测试10',NULL,'测试ethqearf',55.00,1367032620,1367119020,'5179513f3e18a.jpg',0,0,0,0),(82,14,56,35,65,64,'测试11',NULL,'测试erygef',86.00,1367148840,1367192040,'5179516444a21.jpg',0,0,0,0),(83,14,53,35,65,64,'测试12',NULL,'测试ethgearf',124.00,1367136780,1367223180,'51795181c49ed.jpg',0,0,0,0),(84,14,52,36,63,63,'测试13',NULL,'测试regrewgfrw',78.00,1367145540,1367231940,'517951a0a59f6.jpg',0,0,0,0),(85,14,53,34,64,64,'测试14',NULL,'测试regsfadf',93.00,1367144880,1367188080,'517951c2b3684.jpg',0,0,0,0),(86,14,53,35,60,74,'测试15',NULL,'测试ethgearwf',86.00,1367138280,1367224680,'517951e55eef1.jpg',0,0,0,0),(87,14,52,34,63,734,'测试16',NULL,'测试ergeargf',34.00,1367149500,1367235900,'5179520895c04.jpg',0,0,0,0),(88,14,51,34,63,72,'测试17',NULL,'测试rgasfwef',45.00,1367227560,1367270760,'5179522f982b1.jpg',0,0,0,0),(89,14,53,36,64,74,'测试18',NULL,'测试edtherf',36.00,1367234940,1367278140,'5179525306fa1.jpg',0,0,0,0),(90,14,53,35,66,78,'测试19',NULL,'测试rthreaf',23.00,1367235420,1367278620,'5179527a1200b.jpg',0,0,0,0),(91,14,53,34,63,63,'测试20',NULL,'测试ergasf',65.00,1367234640,1367321040,'5179529f4111d.jpg',0,0,0,0),(92,14,54,33,65,641,'测试22',NULL,'测试teherfasfsdf',3.00,1367236080,1367322480,'517952cfde2f1.jpg',0,0,0,0),(93,14,53,35,65,45,'测试23',NULL,'测试regwrgwr',55.00,1367306760,1367349960,'517952f84ec38.jpg',0,0,0,0),(94,14,52,35,64,64,'测试24',NULL,'测试etheraf',67.00,1367280840,1367324040,'517953161cb3f.jpg',0,0,0,0),(95,14,54,35,64,74,'测试25',NULL,'测试reheatgws',34.00,1367314200,1367400600,'5179533257b4d.jpg',0,0,0,0),(96,14,55,36,63,74,'测试26',NULL,'测试wergrewf',33.00,1367306520,1367392920,'5179534db0e9e.jpg',0,0,0,0),(97,14,53,34,60,64,'测试27',NULL,'vrthrwf测试',74.00,1367310840,1367397240,'51795369dadec.jpg',0,0,0,0),(98,14,51,35,64,43,'测试28',NULL,'测试ethaergtf',74.00,1367271960,1367358360,'51795393be824.jpg',0,0,0,0),(99,14,52,35,60,64,'测试rasg',NULL,'测试eherf',84.00,1367310240,1367396640,'517953b443ff6.jpg',0,0,0,0),(100,17,50,17,60,1,'dsadsa',NULL,'ddwdwqdwqdwq',122.00,1554963780,1555006980,'5caedcdf986e1.jpg',0,0,0,0),(101,17,52,0,0,0,'考拉','白给','挺热闹挺热闹',1888.00,1554990540,1555033740,'5caf458de7881.jpg',0,0,0,0),(102,17,50,0,0,0,'商品A143','厂家A','简介A143',499.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,7,1),(103,17,50,0,0,0,'商品A144','厂家B','简介A144',566.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0),(104,17,51,0,0,0,'商品A145','厂家C','简介A144',554.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0),(105,17,52,0,0,0,'商品A146','厂家D','简介A144',563.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0),(106,17,53,0,0,0,'商品A147','厂家E','简介A144',523.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0),(107,17,54,0,0,0,'商品A148','厂家F','简介A144',567.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0),(108,17,55,0,0,0,'商品A149','厂家G','简介A144',588.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0),(109,17,56,0,0,0,'商品A150','厂家H','简介A144',595.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0),(110,17,52,0,0,0,'商品A151','厂家I','简介A144',545.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0),(111,17,53,0,0,0,'商品A152','厂家J','简介A144',504.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0),(112,17,50,0,0,0,'商品A144','厂家B','简介A144',566.00,1555228020,1555271220,'5cb2e54ef0054.jpg',0,0,0,0);
/*!40000 ALTER TABLE `equip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `link`
--

DROP TABLE IF EXISTS `link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(20) NOT NULL DEFAULT '',
  `linkurl` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `link`
--

LOCK TABLES `link` WRITE;
/*!40000 ALTER TABLE `link` DISABLE KEYS */;
/*!40000 ALTER TABLE `link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `eqid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `time` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice`
--

LOCK TABLES `notice` WRITE;
/*!40000 ALTER TABLE `notice` DISABLE KEYS */;
INSERT INTO `notice` VALUES (1,'今天放假','今天放假明天不上课了',1366208578);
/*!40000 ALTER TABLE `notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eqid` int(11) NOT NULL COMMENT '装备id',
  `onum` varchar(50) NOT NULL COMMENT '订单号',
  `total` float(8,2) NOT NULL COMMENT '总计费用',
  `buyerid` int(11) NOT NULL COMMENT '买家id',
  `sellerid` int(11) NOT NULL COMMENT '卖家id',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `otime` int(11) NOT NULL COMMENT '生成订单时间',
  `ostatus` tinyint(1) NOT NULL DEFAULT '0' COMMENT '处理状态 1 为处理完',
  `paystatus` tinyint(1) NOT NULL DEFAULT '0' COMMENT '支付状态 1 为已支付',
  `dealtime` int(11) NOT NULL COMMENT '成交时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,6,'20130425232148937',100.00,17,14,'',1366903308,1,0,1366904209),(2,13,'20130425232148113',80.00,17,14,'',1366903308,1,0,1366904235),(3,18,'20130425232148409',90.00,14,14,'',1366903308,1,0,1366904363),(4,19,'20130425232148764',88.00,17,14,'',1366903308,1,0,1366904324),(5,21,'20130425232148894',80.00,16,14,'',1366903308,1,0,1366904359),(6,22,'20130425232148375',150.00,14,14,'',1366903308,1,0,1366904336),(7,23,'20130425232148862',110.00,16,14,'',1366903308,1,0,1366904332),(8,24,'20130425232148237',90.00,16,14,'',1366903308,1,0,1366904368),(9,52,'20130425232148575',66.00,14,16,'',1366903308,1,0,1366904243),(10,53,'20130425232148343',70.00,17,16,'',1366903308,1,0,1366904248),(11,54,'20130425232148179',45.00,14,16,'',1366903308,1,0,1366904284),(12,55,'20130425232148730',95.00,14,16,'',1366903308,1,0,1366904351),(13,70,'20130425232148841',88.00,14,16,'',1366903308,1,0,1366904319),(14,25,'20190415233703652',65.00,17,14,'',1555342623,0,0,0),(15,27,'20190415233703553',140.00,16,14,'',1555342623,0,0,0),(16,28,'20190415233703166',320.00,17,14,'',1555342623,0,0,0),(17,29,'20190415233703619',333.00,17,14,'',1555342623,0,0,0),(18,30,'20190415233703270',260.00,16,14,'',1555342623,0,0,0),(19,32,'20190415233703931',259.00,14,14,'',1555342623,0,0,0),(20,34,'20190415233703273',340.00,17,14,'',1555342623,0,0,0),(21,39,'20190415233703658',110.00,14,14,'',1555342623,0,0,0),(22,40,'20190415233703374',340.00,16,14,'',1555342623,0,0,0),(23,43,'20190415233703329',100.00,15,14,'',1555342623,0,0,0),(24,44,'2019041523370352',220.00,14,14,'',1555342623,0,0,0),(25,61,'20190415233703293',80.00,17,16,'',1555342623,0,0,0),(26,62,'20190415233703837',80.00,14,16,'',1555342623,0,0,0),(27,63,'20190415233703620',97.00,17,16,'',1555342623,0,0,0),(28,102,'20190415233703403',800.00,1,17,'',1555342623,1,0,1555342802);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suorder`
--

DROP TABLE IF EXISTS `suorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `eqid` int(11) NOT NULL COMMENT '装备id',
  `price` float(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suorder`
--

LOCK TABLES `suorder` WRITE;
/*!40000 ALTER TABLE `suorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `suorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typebj`
--

DROP TABLE IF EXISTS `typebj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typebj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COMMENT='分类表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typebj`
--

LOCK TABLES `typebj` WRITE;
/*!40000 ALTER TABLE `typebj` DISABLE KEYS */;
INSERT INTO `typebj` VALUES (59,'装备部件',0,'0'),(60,'上衣',59,'0-59'),(61,'下装',59,'0-59'),(62,'头肩',59,'0-59'),(63,'腰带',59,'0-59'),(64,'鞋',59,'0-59'),(65,'手镯',59,'0-59'),(66,'项链',59,'0-59'),(67,'戒指',59,'0-59'),(68,'武器',59,'0-59'),(69,'称号',59,'0-59'),(70,'辅助装备',59,'0-59'),(71,'魔法石',59,'0-59');
/*!40000 ALTER TABLE `typebj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typedq`
--

DROP TABLE IF EXISTS `typedq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typedq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COMMENT='分类表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typedq`
--

LOCK TABLES `typedq` WRITE;
/*!40000 ALTER TABLE `typedq` DISABLE KEYS */;
INSERT INTO `typedq` VALUES (49,'商品类别',0,'0'),(50,'服装',49,'0-49'),(51,'日用品',50,'0-49-50'),(52,'电子产品',50,'0-49-50'),(53,'古董',50,'0-49-50'),(54,'化妆品',50,'0-49-50'),(55,'艺术品',49,'0-49'),(56,'虚拟产品',55,'0-49-55'),(57,'食品',55,'0-49-55'),(58,'玩具',55,'0-49-55');
/*!40000 ALTER TABLE `typedq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typezy`
--

DROP TABLE IF EXISTS `typezy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typezy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COMMENT='分类表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typezy`
--

LOCK TABLES `typezy` WRITE;
/*!40000 ALTER TABLE `typezy` DISABLE KEYS */;
INSERT INTO `typezy` VALUES (18,'剑魂-剑圣',17,'0-15-17'),(19,'鬼泣-弑魂',17,'0-15-17'),(20,'狂战士-狱血魔神',17,'0-15-17'),(17,'鬼剑士',15,'0-15'),(15,'职业',0,'0'),(21,'阿修罗-大暗黑天',17,'0-15-17'),(22,'女格斗',15,'0-15'),(23,'气功师-百花缭乱',22,'0-15-22'),(24,'散打-武神',22,'0-15-22'),(25,'街霸-毒王',22,'0-15-22'),(26,'柔道-暴风眼',22,'0-15-22'),(27,'男格斗',15,'0-15'),(28,'气功师-(男)狂虎帝',27,'0-15-27'),(29,'散打-(男)武极',27,'0-15-27'),(30,'街霸-(男)千手罗汉',27,'0-15-27'),(72,'',0,'0'),(32,'女神枪手',15,'0-15'),(33,'沾血蔷薇',32,'0-15-32'),(34,'重炮掌控着',32,'0-15-32'),(35,'机械之心',32,'0-15-32'),(36,'战争女神',32,'0-15-32'),(37,'男神枪手',15,'0-15'),(38,'漫游枪手-枪神',37,'0-15-37'),(39,'枪炮师-狂暴者',37,'0-15-37'),(40,'机械师-机械战神',37,'0-15-37'),(41,'弹药专家-大将军',37,'0-15-37'),(42,'魔法师',15,'0-15'),(43,'元素师-大魔导师',42,'0-15-42'),(44,'战斗法师-贝亚娜斗神',42,'0-15-42'),(45,'召唤师-月之女皇',42,'0-15-42'),(46,'魔道学者-魔术师',42,'0-15-42'),(47,'元素爆破师',42,'0-15-42'),(48,'冰洁师',42,'0-15-42');
/*!40000 ALTER TABLE `typezy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `usertype` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否管理员 1是',
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '1',
  `qq` varchar(11) NOT NULL,
  `pic` varchar(50) NOT NULL COMMENT '头像',
  `money` float(8,2) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `nickname` varchar(50) NOT NULL COMMENT '昵称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin',1,'21232f297a57a5a743894a0e4a801fc3','623381906@qq.com',1,'','',99200.00,'','','dys'),(17,'test',0,'098f6bcd4621d373cade4e832627b4f6','',1,'','',5036.00,'','','test'),(16,'dys',1,'a851e45c1daa1d762f2500f9d0ab0700','',1,'','5177ca694563b.jpg',4841.00,'','','dys'),(14,'hjz',1,'9886067e6afc86c315a37d73057113c2','418832673@qq.com',1,'418832673','517788333052c.jpg',3943.00,'9','唔知','huangjiezhen'),(15,'luxu',1,'81dc9bdb52d04dc20036dbd8313ed055','',1,'','',61500.00,'9','你妹妹的','卢旭');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'dnf'
--

--
-- Dumping routines for database 'dnf'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-18 13:25:19
