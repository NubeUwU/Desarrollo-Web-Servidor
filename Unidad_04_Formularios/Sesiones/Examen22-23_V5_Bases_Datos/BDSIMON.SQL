DROP DATABASE IF EXISTS bdsimon;
CREATE DATABASE bdsimon;
USE bdsimon;

CREATE TABLE `usuarios` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Clave` varchar(20) NOT NULL,
  `Rol` int(11) NOT NULL,
  PRIMARY KEY (`Codigo`),
  UNIQUE KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`Codigo`, `Nombre`, `Clave`, `Rol`) VALUES
(1, 'ana', 'ana', 0),
(2, 'maria', 'maria', 0),
(3, 'paco', 'paco', 0),
(4, 'pedro', 'pedro', 0);

CREATE TABLE `jugadas` (
  `codjugada` int(11) NOT NULL AUTO_INCREMENT,
  `codigousu` int(11) NOT NULL,
  `numcir` int(2) NOT NULL,
  `numcolor` int(2) NOT NULL,
  `acierto` tinyint(1) NOT NULL,
  PRIMARY KEY (`codjugada`),
  FOREIGN KEY (`codigousu`) REFERENCES `usuarios`(`Codigo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `jugadas` (`codjugada`, `codigousu`, `numcir`, `numcolor`, `acierto`) VALUES
(1, 1, 4, 4, 1),
(2, 1, 4, 4, 1),
(3, 2, 4, 4, 1),
(4, 2, 4, 4, 0),
(5, 2, 4, 4, 1),
(6, 3, 4, 4, 1),
(7, 4, 4, 4, 1),
(8, 4, 4, 4, 0),
(9, 4, 4, 4, 0),
(10, 4, 4, 4, 0),
(11, 4, 4, 4, 0),
(12, 4, 4, 4, 0),
(13, 4, 4, 4, 0),
(14, 2, 4, 4, 0),
(15, 4, 4, 4, 1),
(16, 4, 4, 4, 1),
(17, 4, 4, 4, 1),
(18, 4, 4, 4, 1),
(19, 4, 4, 4, 1),
(20, 4, 4, 4, 1),
(21, 4, 4, 4, 1),
(22, 4, 4, 4, 1),
(23, 4, 4, 4, 1),
(24, 4, 4, 4, 1),
(25, 4, 4, 4, 1),
(26, 4, 4, 4, 1),
(27, 4, 4, 4, 1),
(28, 4, 4, 4, 1),
(29, 4, 4, 4, 1),
(30, 4, 4, 4, 1),
(31, 4, 4, 4, 1),
(32, 4, 4, 4, 1),
(33, 4, 4, 4, 1),
(34, 4, 4, 4, 1),
(35, 4, 4, 4, 1),
(36, 4, 4, 4, 1),
(37, 4, 4, 4, 1),
(38, 4, 4, 4, 1),
(39, 3, 4, 4, 1),
(40, 2, 4, 4, 0);
