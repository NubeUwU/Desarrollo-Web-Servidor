DROP DATABASE IF EXISTS JUEGOUSUARIOS;
CREATE DATABASE JUEGOUSUARIOS;
USE JUEGOUSUARIOS;

CREATE TABLE `usuarios` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Commentary` varchar(120) NOT NULL,
  `Gender` varchar (10) NOT NULL,
  PRIMARY KEY (`Email`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuarios` (`Name`, `Email`, `Password`, `Website`, `Commentary`, `Gender`) VALUES
('ana', 'ana@gmail.com', 'ana', 'www.ana.com', "Hola", "Female"),
('maria', 'maria@gmail.com', 'maria', 'www.maria.com', "Hola", "Female"),
('paco', 'paco@gmail.com', 'paco', 'www.paco.com', "Hola", "Male"),
('gerbasio', 'gerbasio@gmail.com', 'gerbasio', 'www.gerbasio.com', "Hola", "Male");