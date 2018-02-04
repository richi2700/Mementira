-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-02-2018 a las 01:05:45
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mementira`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmeme`
--

DROP TABLE IF EXISTS `tblmeme`;
CREATE TABLE IF NOT EXISTS `tblmeme` (
  `IdMeme` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Titulo` varchar(200) DEFAULT NULL,
  `Tipo` varchar(50) DEFAULT NULL,
  `Archivo` longblob,
  `Categoria` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IdMeme`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tabla de memes';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
