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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dirección`
--

LOCK TABLES `dirección` WRITE;
/*!40000 ALTER TABLE `dirección` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `especificación` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id_Pedido` int(8) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo`
--

LOCK TABLES `tipo` WRITE;
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` VALUES (1,'Administrador',NULL),(2,'Supervisor',NULL);
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
  `Contrasena` varchar(20) DEFAULT NULL,
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
INSERT INTO `usuario` VALUES (318023155,1,'Luis','4dm1n15tr4d0r.');
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

-- Dump completed on 2020-05-28 20:38:29
