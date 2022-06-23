-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2022 a las 02:49:54
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Descripcion` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID`, `Nombre`, `Descripcion`) VALUES
(1, 'Ciencia Ficción', 'BLA BLA BLA'),
(2, 'Fantasia', 'BLA BLA BLA'),
(3, 'Romance', 'BLA BLA BLA'),
(4, 'Comedia', 'BLA BLA BLA'),
(5, 'Policial', 'BLA BLA BLA'),
(6, 'Horror', 'BLA BLA BLA'),
(7, 'Musica', 'BLA BLA BLA'),
(8, 'Misterio', 'BLA BLA BLA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria/libro`
--

CREATE TABLE `categoria/libro` (
  `ID` int(11) NOT NULL,
  `IDCategoria` int(11) NOT NULL,
  `IDLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria/libro`
--

INSERT INTO `categoria/libro` (`ID`, `IDCategoria`, `IDLibro`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriausuario`
--

CREATE TABLE `categoriausuario` (
  `ID` int(11) NOT NULL,
  `IDCategoria` int(11) NOT NULL,
  `IDUsuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoriausuario`
--

INSERT INTO `categoriausuario` (`ID`, `IDCategoria`, `IDUsuario`) VALUES
(33, 1, '7'),
(34, 2, '7'),
(35, 1, '8'),
(36, 2, '8'),
(37, 2, '9'),
(38, 7, '9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Descripcion` varchar(700) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`ID`, `Titulo`, `Autor`, `Descripcion`, `img`) VALUES
(1, 'Prueba', 'ASDASD', 'asdsadasdasdasdasdsadsa', '1.jpg'),
(2, 'HOLA', 'ssda', 'dsadasdsadsa', '2.jpg'),
(3, 'ASDSADSADAS', 'ASDSADSADSADASDSADAS', '1DWQWQDWDWQDWQDWQ', 'DQWDQWDQDQWDQWDQW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Email` varchar(50) NOT NULL,
  `Contraseña` varchar(70) NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Email`, `Contraseña`, `verification_key`, `is_email_verified`, `Nombre`, `ID`) VALUES
('simonvillalon10@gmail.com', 'U24=', 'ebf90d9845375a70e27fdf134bea9aa8', 'yes', 'Simon122adasd1', 1),
('simonvilln10@gmail.com', 'AD0=', 'd89f1a7452f29aeb3ed6a9b02617b82d', 'no', 'aadsadsa@gmail.com', 6),
('simonvil32323lalon10@gmail.com', 'DTA=', '703d033e53e8405790f0d405853740b9', 'no', 'SIMDASIDMAS12', 7),
('simonvil213123123lalon10@gmail.com', 'DTA=', '6cafa9e71720dd300fae12c57f384f10', 'yes', 'adasdsadasdasad@gmail.com', 8),
('oliveralautaro767@gmail.com', 'DGxTN1YjACEONVMwVTRSMg==', '4f24fedc57ad721cf4a1c8ebac8361af', 'yes', 'laucha', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `categoria/libro`
--
ALTER TABLE `categoria/libro`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDCategoria` (`IDCategoria`),
  ADD KEY `IDLibro` (`IDLibro`);

--
-- Indices de la tabla `categoriausuario`
--
ALTER TABLE `categoriausuario`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `categoria/libro`
--
ALTER TABLE `categoria/libro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoriausuario`
--
ALTER TABLE `categoriausuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria/libro`
--
ALTER TABLE `categoria/libro`
  ADD CONSTRAINT `categoria/libro_ibfk_1` FOREIGN KEY (`IDLibro`) REFERENCES `libro` (`ID`),
  ADD CONSTRAINT `categoria/libro_ibfk_2` FOREIGN KEY (`IDCategoria`) REFERENCES `categoria` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
