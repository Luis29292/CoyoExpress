-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: CoyoExpress
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dirección`
--

DROP TABLE IF EXISTS `dirección`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dirección` (
  `id_Dirección` int(2) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) DEFAULT NULL,
  `Sección` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_Dirección`),
  KEY `Sección` (`Sección`),
  CONSTRAINT `dirección_ibfk_1` FOREIGN KEY (`Sección`) REFERENCES `sección` (`id_Sección`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dirección`
--

LOCK TABLES `dirección` WRITE;
/*!40000 ALTER TABLE `dirección` DISABLE KEYS */;
INSERT INTO `dirección` VALUES (1,'C-3',4),(2,'C-4',4),(3,'C-5',4),(4,'C-6',4),(5,'C-7',4),(6,'C-8',4),(7,'C-101',4),(8,'C-102',4),(9,'C-103',4),(10,'C-104',4),(11,'C-105',4),(12,'C-106',4),(13,'C-107',4),(14,'C-108',4),(15,'B-3',5),(16,'B-4',5),(17,'B-5',5),(18,'B-6',5),(19,'B-7',5),(20,'B-8',5),(21,'B-101',5),(22,'B-102',5),(23,'B-103',5),(24,'B-104',5),(25,'B-105',5),(26,'B-106',5),(27,'B-107',5),(28,'B-108',5),(29,'D-3',6),(30,'D-4',6),(31,'D-5',6),(32,'D-6',6),(33,'D-7',6),(34,'D-8',6),(35,'D-101',6),(36,'D-102',6),(37,'D-103',6),(38,'D-104',6),(39,'D-105',6),(40,'D-106',6),(41,'D-107',6),(42,'D-108',6),(43,'Cafeteria',1),(44,'H-4',2),(45,'H-5',2),(46,'H-6',2),(47,'H-7',2),(48,'H-8',2),(49,'H-9',2),(50,'Direccion',3),(51,'Sala de Maestros',3);
/*!40000 ALTER TABLE `dirección` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especificación`
--

DROP TABLE IF EXISTS `especificación`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especificación` (
  `id_Especificación` int(1) NOT NULL,
  `Nombre` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_Especificación`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especificación`
--

LOCK TABLES `especificación` WRITE;
/*!40000 ALTER TABLE `especificación` DISABLE KEYS */;
INSERT INTO `especificación` VALUES (1,'Alumno\r'),(2,'Maestro\r'),(3,'Funcionario\r');
/*!40000 ALTER TABLE `especificación` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id_Pedido` int(8) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(13) DEFAULT NULL,
  `id_Producto` int(2) DEFAULT NULL,
  `id_Direccion` int(2) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id_Pedido`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_Producto` (`id_Producto`),
  KEY `id_Direccion` (`id_Direccion`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_Usuario`),
  CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_Producto`) REFERENCES `producto` (`id_Producto`),
  CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`id_Direccion`) REFERENCES `dirección` (`id_Dirección`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (4,318012345,32,47,NULL),(5,318012345,31,43,NULL),(6,318012345,31,1,NULL),(7,318012345,31,18,NULL),(8,318012345,33,17,NULL),(9,318012345,32,17,NULL),(10,318012345,39,12,NULL),(11,319456789,32,1,NULL),(12,318382650,40,1,NULL);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `Nombre` varchar(20) DEFAULT NULL,
  `Precio` int(3) DEFAULT NULL,
  `Imagen` varchar(400) DEFAULT NULL,
  `Cantidad` int(2) DEFAULT NULL,
  `id_Producto` int(2) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_Producto`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES ('Agua',20,'https://static.diariofemenino.com/pictures/articulos/215000/215301-4.jpg',50,31),('Cafe',25,'https://www.ecestaticos.com/imagestatic/clipping/1b2/113/1b21131793b5003905419eb329e1692f/el-cafe-no-es-malo-pero-hasta-que-cantidad-se-puede-tomar.jpg?mtime=1531916182',50,32),('Sandwich',30,'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2018/04/club-sandwich.jpg',50,33),('Papas',15,'https://danzadefogones.com/wp-content/uploads/2020/04/Patatas-Fritas-al-Horno-3.jpg',50,34),('Galletas',18,'https://elgourmet.s3.amazonaws.com/recetas/cover/galle_ipRG4rtdhqbv9V7l1PkHSauUnmf8oD.png',50,35),('Dulces',15,'https://image.freepik.com/foto-gratis/manojo-caramelos-coloridos_23-2147689700.jpg',50,36),('Chilaquiles',35,'https://i.pinimg.com/originals/d2/c9/56/d2c956f20be73e9f70de9b9870c70445.jpg',50,37),('Elote',24,'https://cocinarrecetasdepostres.net/wp-content/uploads/2019/12/Receta-Elote-Autentico-maiz-mexicano-en-la-mazorca.jpg',50,38),('Esquite',22,'https://dam.cocinafacil.com.mx/wp-content/uploads/2018/12/esquite-tradicional.jpg',50,39),('Helado',10,'https://t1.rg.ltmcdn.com/es/images/5/4/0/helado_de_vainilla_casero_74045_orig.jpg',50,40);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sección`
--

DROP TABLE IF EXISTS `sección`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sección` (
  `id_Sección` int(2) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_Sección`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sección`
--

LOCK TABLES `sección` WRITE;
/*!40000 ALTER TABLE `sección` DISABLE KEYS */;
INSERT INTO `sección` VALUES (1,'Canchas\r'),(2,'Pimponeras\r'),(3,'Direccion\r'),(4,'Cuartos\r'),(5,'Quintos\r'),(6,'Sextos\r');
/*!40000 ALTER TABLE `sección` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo`
--

DROP TABLE IF EXISTS `tipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo` (
  `id_Tipo` int(1) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(13) DEFAULT NULL,
  `id_Especificación` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_Tipo`),
  KEY `nomEsp` (`id_Especificación`),
  CONSTRAINT `tipo_ibfk_1` FOREIGN KEY (`id_Especificación`) REFERENCES `especificación` (`id_Especificación`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` VALUES (1,'Administrador',NULL),(2,'Supervisor',NULL),(4,'Cliente',1),(5,'Cliente',2),(6,'Cliente',3);
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_Usuario` int(13) NOT NULL,
  `id_tipo` int(1) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Contrasena` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id_Usuario`),
  KEY `id_tipo` (`id_tipo`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (318012345,6,'Laura','cl13nt3.'),(318023155,1,'Luis','4dm1n15tr4d0r.'),(318023156,1,'Luis','986ee3c5d1b3b47c7f7e2661e7ff819769e9070edd9ec45c47dc48c9bf47369c'),(318102938,4,'Luis Dávila Jacinto','31e9c01130e2093f7066'),(318382650,4,'Luis Dávila Jacinto','31e9c01130e2093f70669d05cebcaf633652bedd36e845799a28c3c7afb6eac9'),(318654321,4,'Francisco Badabún Tuntún','9483a27df36b7424aee7'),(319456789,4,'Sam Vázquez Martínez','L1ndur4558.'),(1029384756,2,'Supervisor','12d8215741b535ee635be5c84a93da4172b6d66174b810a027dfa8441140a5e8');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-30 19:57:40
