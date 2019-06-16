-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2019 a las 21:51:12
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skysound2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `idcancion` int(11) NOT NULL,
  `artista` varchar(50) DEFAULT NULL,
  `ncancion` varchar(255) DEFAULT NULL,
  `reproduccion` int(50) DEFAULT '0',
  `cancion` varchar(255) DEFAULT NULL,
  `idGen` int(11) DEFAULT NULL,
  `album` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`idcancion`, `artista`, `ncancion`, `reproduccion`, `cancion`, `idGen`, `album`) VALUES
(64, 'RadioXTrack', 'heavy-metal-02-nicolas-ullmann', 1110, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2FRadioXTrack%2Fheavy-metal-02-nicolas-ullmann%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n', NULL, NULL),
(65, 'thÃ nh-kÃ²i', 'deep-house-2017-thÃ nh-kÃ²i-deejay-on-the-mix', 156592, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fth%25C3%25A0nh-k%25C3%25B2i%2Fdeep-house-2017-th%25C3%25A0nh-k%25C3%25B2i-deejay-on-the-mix%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"', NULL, NULL),
(66, 'djsesion', 'reggaeton-2018-reggaeton-mix-2018-lo-mas-nuevo-ozuna-bad-bunny-maluma-j-balvin-becky-g', 19544, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fdjsesion%2Freggaeton-2018-reggaeton-mix-2018-lo-mas-nuevo-ozuna-bad-bunny-maluma-j-balvin-becky-g%2F&amp;hide_cover=1&amp;light=1\" framebo', NULL, NULL),
(67, 'WorksOfMart', 'heavy-d-tribute-mix', 3078, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2FWorksOfMart%2Fheavy-d-tribute-mix%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n', NULL, NULL),
(68, 'djrusske', 'djrusske-30minutesof-uk-rap', 74996, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fdjrusske%2Fdjrusske-30minutesof-uk-rap%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n', NULL, NULL),
(69, 'trapjaw', 'dark-industrial-cafe-vol-2-dirtydaela', 7967, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Ftrapjaw%2Fdark-industrial-cafe-vol-2-dirtydaela%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n', NULL, NULL),
(70, 'brooklynradio', '100-funk', 55358, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fbrooklynradio%2F100-funk%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n', NULL, NULL),
(71, 'lowlight', 'alternative-blade-runner-2049-soundtrack', 9667, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Flowlight%2Falternative-blade-runner-2049-soundtrack%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n', NULL, NULL),
(72, 'djsaulivan', 'mix-pop-baladas-clasicas-en-espaÃ±ol-dj-saulivan', 2784, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fdjsaulivan%2Fmix-pop-baladas-clasicas-en-espa%25C3%25B1ol-dj-saulivan%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n', NULL, NULL),
(76, 'adrimelal', 'ha', 0, NULL, 0, 'loco'),
(77, 'Manolo Escobar', 'Bombfunk MC23sd', 0, NULL, 0, 'sdfsfsdfs'),
(78, 'artista', 'nombre', 0, NULL, 0, 'album'),
(79, 'Manolo Escobar', 'qweqweqwe', 0, NULL, 0, 'qweqweqe'),
(80, '0000', '00000', 0, NULL, 0, '00000'),
(81, 'Manolo Escobar', 'Bombfunk MC23', 0, NULL, 45, 'sdgsd'),
(82, 'Manolo Escobar', 'Bombfunk MC23', 0, NULL, 0, 'Bombfunk MC45646'),
(83, '89988989', '898989988989', 0, NULL, 0, '8989898989'),
(84, 'Artista', 'nombre', 0, NULL, 0, 'Album'),
(85, 'dsfsdf', 'fsdfsdf', 0, NULL, 0, 'sdfsfd'),
(86, 'Manolo Escobar', 'sdfsf', 0, NULL, 45, 'sdfsdfsdfs'),
(87, 'Manolo Escobar', 'werwer', 0, NULL, 0, 'werwer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `idcancion` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `comentario`, `idcancion`, `nombre`) VALUES
(199, '1234', 67, '1'),
(200, 'wqwdqwd', 62, 'qwe'),
(201, '', 64, ''),
(202, '', 64, ''),
(204, 'holalocaoocoscs', 64, ''),
(205, '1234', 64, ''),
(206, '1234', 64, ''),
(207, 'sadfghj', 64, ''),
(208, 'pruebadel12', 64, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencia`
--

CREATE TABLE `sugerencia` (
  `idcancion` int(11) NOT NULL,
  `artista` varchar(50) DEFAULT NULL,
  `ncancion` varchar(255) DEFAULT NULL,
  `album` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sugerencia`
--

INSERT INTO `sugerencia` (`idcancion`, `artista`, `ncancion`, `album`) VALUES
(5, 'asdasd', 'asdasd', 'sdasd'),
(6, 'hola', 'nombre', 'dusbtep'),
(7, '6969', '6969', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(33) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `correo`, `contrasena`, `nombreusuario`) VALUES
(29, 'admin@admin.com', 'admin', 'admin'),
(43, '5', '1', '1'),
(46, 'german@gmail.com', 'contrasena', 'german98'),
(47, '69', '69', '69');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`idcancion`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idcomentario`);

--
-- Indices de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  ADD PRIMARY KEY (`idcancion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `idusuario` (`idusuario`),
  ADD UNIQUE KEY `nombreusuario` (`nombreusuario`),
  ADD UNIQUE KEY `nombreusuario_2` (`nombreusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `idcancion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  MODIFY `idcancion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
