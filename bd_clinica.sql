-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_clinica
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
-- Table structure for table `gu_opcion`
--

DROP TABLE IF EXISTS `gu_opcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gu_opcion` (
  `id_opcion` int(10) NOT NULL AUTO_INCREMENT,
  `opcion` varchar(45) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `tipo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_opcion`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gu_opcion`
--

LOCK TABLES `gu_opcion` WRITE;
/*!40000 ALTER TABLE `gu_opcion` DISABLE KEYS */;
INSERT INTO `gu_opcion` VALUES (1,'Pacientes','crud_pacientes',1),(2,'Agenda','crud_agenda',1),(3,'Impresión Paciente','crud_pacientes/reporte',2),(4,'Reportes Agenda','crud_agenda/reporte',2),(5,'Ingreso Doctores ','crud_doctor',2),(6,'Impresión Doctores','crud_doctor/reporte',2),(7,'Ingreso Areas','crud_areas',3),(8,'Reporte','crud_areas/reporte',3),(9,'Perfiles Usuarios','usuarios',4);
/*!40000 ALTER TABLE `gu_opcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gu_rol`
--

DROP TABLE IF EXISTS `gu_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gu_rol` (
  `id_rol` int(10) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gu_rol`
--

LOCK TABLES `gu_rol` WRITE;
/*!40000 ALTER TABLE `gu_rol` DISABLE KEYS */;
INSERT INTO `gu_rol` VALUES (1,'Administrador'),(2,'Usuario');
/*!40000 ALTER TABLE `gu_rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gu_rol_menu`
--

DROP TABLE IF EXISTS `gu_rol_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gu_rol_menu` (
  `id_rol_menu` int(10) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL,
  PRIMARY KEY (`id_rol_menu`),
  KEY `fk12` (`id_opcion`),
  CONSTRAINT `fk12` FOREIGN KEY (`id_opcion`) REFERENCES `gu_opcion` (`id_opcion`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gu_rol_menu`
--

LOCK TABLES `gu_rol_menu` WRITE;
/*!40000 ALTER TABLE `gu_rol_menu` DISABLE KEYS */;
INSERT INTO `gu_rol_menu` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,1,7),(8,1,8),(13,1,9),(14,2,1),(15,2,2),(16,2,3),(17,2,4),(18,2,5),(19,2,6);
/*!40000 ALTER TABLE `gu_rol_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(10) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk17` (`id_rol`),
  CONSTRAINT `fk17` FOREIGN KEY (`id_rol`) REFERENCES `gu_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'@admi','eb5a790b34e06e2ce3346fa2ca5d6abb',1),(2,'otro','eb5a790b34e06e2ce3346fa2ca5d6abb',2);
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

-- Dump completed on 2020-10-14  7:22:52
