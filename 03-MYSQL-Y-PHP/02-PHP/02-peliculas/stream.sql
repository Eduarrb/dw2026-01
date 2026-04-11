CREATE DATABASE  IF NOT EXISTS `stream` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `stream`;
-- MySQL dump 10.13  Distrib 8.0.43, for Win64 (x86_64)
--
-- Host: localhost    Database: stream
-- ------------------------------------------------------
-- Server version	8.0.43

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
-- Table structure for table `actores`
--

DROP TABLE IF EXISTS `actores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actores` (
  `act_id` int unsigned NOT NULL AUTO_INCREMENT,
  `act_nombre` varchar(50) NOT NULL,
  `act_apellido` varchar(50) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actores`
--

LOCK TABLES `actores` WRITE;
/*!40000 ALTER TABLE `actores` DISABLE KEYS */;
INSERT INTO `actores` VALUES (1,'Leonardo','DiCaprio'),(2,'Joseph','Gordon-Levitt'),(3,'Ellen','Page'),(4,'Tom','Hardy'),(5,'Christian','Bale'),(6,'Heath','Ledger'),(7,'Aaron','Eckhart'),(8,'Maggie','Gyllenhaal'),(9,'Matthew','McConaughey'),(10,'Anne','Hathaway'),(11,'Jessica','Chastain'),(12,'Michael','Caine'),(13,'Keanu','Reeves'),(14,'Laurence','Fishburne'),(15,'Carrie-Anne','Moss'),(16,'Hugo','Weaving'),(17,'John','Travolta'),(18,'Samuel L.','Jackson'),(19,'Uma','Thurman'),(20,'Bruce','Willis');
/*!40000 ALTER TABLE `actores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directores`
--

DROP TABLE IF EXISTS `directores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directores` (
  `dire_id` int unsigned NOT NULL AUTO_INCREMENT,
  `dire_nombres` varchar(50) NOT NULL,
  `dire_apellidos` varchar(50) NOT NULL,
  PRIMARY KEY (`dire_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directores`
--

LOCK TABLES `directores` WRITE;
/*!40000 ALTER TABLE `directores` DISABLE KEYS */;
INSERT INTO `directores` VALUES (1,'Anthony','Russo'),(2,'Joe','Russo'),(3,'Christopher','Nolan'),(4,'Lana','Wachowski'),(5,'Steven','Spielberg'),(6,'James','Cameron'),(7,'Peter','Jackson'),(8,'Quentin','Tarantino'),(9,'Martin','Scorsese');
/*!40000 ALTER TABLE `directores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peliculas` (
  `peli_id` int unsigned NOT NULL AUTO_INCREMENT,
  `peli_dire_id` int unsigned DEFAULT NULL,
  `peli_nombre` varchar(50) NOT NULL,
  `peli_imagen` text,
  `peli_genero` varchar(20) NOT NULL,
  `peli_anio` date NOT NULL,
  `peli_restricciones` varchar(10) NOT NULL,
  PRIMARY KEY (`peli_id`),
  KEY `fk_direId` (`peli_dire_id`),
  CONSTRAINT `fk_direId` FOREIGN KEY (`peli_dire_id`) REFERENCES `directores` (`dire_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas`
--

LOCK TABLES `peliculas` WRITE;
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` VALUES (1,3,'Inception','https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg','Sci-Fi','2010-07-01','PG-13'),(2,3,'The Dark Knight','https://upload.wikimedia.org/wikipedia/en/thumb/1/1c/The_Dark_Knight_%282008_film%29.jpg/250px-The_Dark_Knight_%282008_film%29.jpg','Action','2008-07-18','PG-13'),(3,3,'Interstellar',NULL,'Sci-Fi','2014-11-07','PG-13'),(4,4,'The Matrix',NULL,'Sci-Fi','1999-03-31','R'),(5,8,'Pulp Fiction',NULL,'Crime','1994-10-14','R'),(6,NULL,'Forrest Gump',NULL,'Drama','1994-07-06','PG-13'),(7,NULL,'The Shawshank Redemption',NULL,'Drama','1994-09-23','R'),(8,NULL,'The Godfather',NULL,'Crime','1972-03-24','R'),(9,7,'The Lord of the Rings: The Return of the King',NULL,'Fantasy','2003-12-17','PG-13'),(10,NULL,'Gladiator',NULL,'Action','2000-05-05','R'),(11,1,'Avengers: Endgame','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS43HPFuiCqxqSB6kk36EoJWq6tZY1I0G6IBA&s','Acción','2019-04-26','PG-13'),(12,3,'The Dark Knight Rises',NULL,'Acción','2012-07-20','PG-13'),(13,4,'The Matrix Reloaded',NULL,'Ciencia Ficción','2003-05-15','R'),(14,5,'Indiana Jones','https://play-lh.googleusercontent.com/RwUZ3_91E2IYqNKlSaUOHfjg-wqIUYpNZkmV9pO5PmdoN7yQDiGyuDvZ7HnUp_YVrVDyPoLCn-WGfDjC-2W1','Aventura','2026-04-10','PG');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personajes`
--

DROP TABLE IF EXISTS `personajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personajes` (
  `per_peli_id` int unsigned NOT NULL,
  `per_act_id` int unsigned NOT NULL,
  `per_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personajes`
--

LOCK TABLES `personajes` WRITE;
/*!40000 ALTER TABLE `personajes` DISABLE KEYS */;
INSERT INTO `personajes` VALUES (1,1,'Dom Cobb'),(1,2,'Arthur'),(1,3,'Ariadne'),(1,4,'Eames'),(2,5,'Bruce Wayne / Batman'),(2,6,'Joker'),(2,7,'Harvey Dent / Two-Face'),(2,8,'Rachel Dawes'),(3,9,'Cooper'),(3,10,'Brand'),(3,11,'Murph'),(3,12,'Professor Brand'),(4,13,'Neo'),(4,14,'Morpheus'),(4,15,'Trinity'),(4,16,'Agent Smith'),(5,17,'Vincent Vega'),(5,18,'Jules Winnfield'),(5,19,'Mia Wallace'),(5,20,'Butch Coolidge');
/*!40000 ALTER TABLE `personajes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-04-10 21:47:56
