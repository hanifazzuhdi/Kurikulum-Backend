-- MySQL dump 10.13  Distrib 8.0.21, for Linux (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	8.0.21-0ubuntu0.20.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artikel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `isiArtikel` text NOT NULL,
  `id_artikel` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_artikel` (`id_artikel`),
  CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `tag` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (6,'Apa itu HTML ? Fungsi dan Cara Kerja HTML','1.HTML','img/html.png','Berbicara soal <b> HTML </b> tidak hanya terbatas pada pengertiannya saja. Anda harus tahu seluk-beluknya jika ingin mahir bahasa markup yang satu ini. HTML adalah singkatan dari Hypertext Markup Language. HTML memungkinkan seorang user untuk membuat dan menyusun bagian paragraf, heading, link atau tautan, dan blockquote untuk halaman web dan aplikasi.\r\n\r\nHTML bukanlah bahasa pemrograman, dan itu berarti HTML tidak punya kemampuan untuk membuat fungsionalitas yang dinamis. Sebagai gantinya, HTML memungkinkan user untuk mengorganisir dan memformat dokumen, sama seperti Microsoft Word.\r\n\r\nKetika bekerja dengan HTML, Anda menggunakan struktur kode yang sederhana (tag dan attribute) untuk mark up halaman website. Misalnya, Anda membuat sebuah paragraf dengan menempatkan enclosed text di antara tag pembuka dan tag penutup .   ',1),(7,'Pengertian CSS dan Cara Kerjanya','2.CSS','img/css.png','   Pengembangan website menggunakan bahasa pemrograman HTML atau PHP saja belum cukup. Anda membutuhkan CSS, bahasa pemrograman yang bisa mengatur seluruh tampilan website sehingga terlihat lebih menarik dan sesuai dengan kebutuhan user. Itulah kenapa Anda perlu tahu pengertian CSS.\r\n\r\nAnda wajib mengetahui mengenai CSS karena bahasa pemrograman ini akan sangat berguna  dalam proses pengembangan website. Apalagi saat ini hampir setiap website menggunakan CSS sebagai tools untuk mengatur berbagai tampilan di dalamnya. Nah! Pada artikel kali ini kami akan membahas selengkap mungkin pengertian CSS dan fungsinya.    ',2),(8,'Pengertian PHP dan Fungsinya','3.PHP','img/php.png','   Bahasa pemrograman PHP biasanya tidak digunakan pada keseluruhan pengembangan website, melainkan dikombinasikan dengan beberapa bahasa pemrograman lain. Misalnya saja untuk mengatur tampilan, layout, dan berbagai macam menu menggunakan CSS.\r\n\r\nSelain itu, terdapat juga beberapa framework PHP; Laravel, Phalcon, Codigniter, Symfoni yang saat ini banyak tersedia di internet untuk memudahkan proses pengembangan website menggunakan bahasa pemrograman tersebut.   ',3),(9,'Mengenal Pseudo Class Selector di CSS','2.CSS','img/css.png',' Pseudo class selector adalah selector CSS yang diikuti oleh titik dua. Pembaca mungkin sudah sangat familiar dengan beebrapa perintahnya seperti hover.\r\n<br>\r\nOpsi ini sangat berguna di beberapa situasi. Beberapa merupakan CSS3, ada juga yang CSS2. Mayoritas browser selain IE (terutama sebelum IE9) sudah sangat mendukung pseudo class. Mari kita bahas satu persatu. Tenang, tidak banyak kok.    ',2),(14,'Apa Itu JavaScript? Pemahaman Dasar','4.JavaScript','img/js.jpg','     Bagi yang masih awam, tentu akan bertanya-tanya, apa itu JavaScript? JavaScript adalah salah satu bahasa pemrograman yang paling banyak digunakan dalam kurun waktu dua puluh tahun ini. Bahkan JavaScript juga dikenal sebagai salah satu dari tiga bahasa pemrograman utama bagi web developer:\r\n<br>\r\n<br>\r\n\r\n1. HTML: Memungkinkan Anda untuk menambahkan konten ke halaman web.\r\n<br>\r\n2. CSS: Menentukan layout, style, serta keselarasan halaman website.\r\n<br>\r\n3. JavaScript: Menyempurnakan tampilan dan sistem halaman web.    \r\n<br> ',4),(15,'Combinator Selectors pada CSS','2.CSS','img/css.png',' <p>CSS Combinators Selectors adalah jenis kode CSS yang menjelaskan hubungan antara dua selector atau sering disebut dengan relasi antara selector.</p>\r\n\r\n<p>Ada 4 tipe kombinator yang dapat kita terapkan pada CSS yaitu : </p>\r\n<ol>\r\n<li>Selector descendant / turunan (spasi)</li>\r\n<li>Selector child (>)</li>\r\n<li> Selector adjacent siblings (+) </li>\r\n<li> General sibling selector (~) </li>\r\n</ol>\r\n\r\n<p>Di bawah ini akan diuraikan satu per satu dari 4 tipe kombinator di atas.</p>    ',2);
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tagName` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'HTML'),(2,'CSS'),(3,'PHP'),(4,'JavaScript');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Hanif Azzuhdi','hnfhanif52@gmail.com','$2y$10$KlyomSazTDHd9iApwCjSTud/LDvtWbqZvVpQH78qn7VLdHgjuV8iq'),(5,'Ihsan','hnfhanif53@gmail.com','$2y$10$6HJex5sC2NsUu93fsAGoMOLt8bHZ9r3smPj4Tak6wN093BZc0C0JC');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-07 13:22:46
