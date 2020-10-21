-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_tienda
-- ------------------------------------------------------
-- Server version	5.7.31-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `maestro_producto`
--

DROP TABLE IF EXISTS `maestro_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maestro_producto` (
  `id_codigo` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` char(120) DEFAULT NULL,
  `precio_base` double(12,2) DEFAULT '0.00',
  `costo` double(12,2) DEFAULT '0.00',
  `disponible_website` int(11) DEFAULT '0',
  PRIMARY KEY (`id_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestro_producto`
--

LOCK TABLES `maestro_producto` WRITE;
/*!40000 ALTER TABLE `maestro_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestro_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestro_proveedor`
--

DROP TABLE IF EXISTS `maestro_proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maestro_proveedor` (
  `idproveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) NOT NULL DEFAULT '',
  `direccion` varchar(300) NOT NULL DEFAULT '',
  `telefono` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`idproveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestro_proveedor`
--

LOCK TABLES `maestro_proveedor` WRITE;
/*!40000 ALTER TABLE `maestro_proveedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestro_proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestro_tienda`
--

DROP TABLE IF EXISTS `maestro_tienda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maestro_tienda` (
  `idtienda` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `ubicacion` varchar(256) NOT NULL DEFAULT '',
  `bodega` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idtienda`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestro_tienda`
--

LOCK TABLES `maestro_tienda` WRITE;
/*!40000 ALTER TABLE `maestro_tienda` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestro_tienda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestro_tipo_pago`
--

DROP TABLE IF EXISTS `maestro_tipo_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maestro_tipo_pago` (
  `idtipopago` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL,
  PRIMARY KEY (`idtipopago`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestro_tipo_pago`
--

LOCK TABLES `maestro_tipo_pago` WRITE;
/*!40000 ALTER TABLE `maestro_tipo_pago` DISABLE KEYS */;
/*!40000 ALTER TABLE `maestro_tipo_pago` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-21  7:57:36
