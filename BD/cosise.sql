-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2016 a las 05:03:43
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cosise`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE `album` (
  `cod_al` varchar(8) NOT NULL DEFAULT '',
  `name` varchar(30) DEFAULT NULL,
  `name_en` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`cod_al`, `name`, `name_en`) VALUES
('img00001', 'operaciones de campo', 'operation de campo'),
('img00002', 'nosotros', 'nosotros_en'),
('img00003', 'digitacion', 'digition'),
('img00004', 'varios operativos', 'varios_operation');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `ID_AR` int(11) NOT NULL,
  `COD_AR` varchar(8) DEFAULT NULL,
  `TITLE` varchar(30) DEFAULT NULL,
  `TITLE_EN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`ID_AR`, `COD_AR`, `TITLE`, `TITLE_EN`) VALUES
(3, 'AA000001', 'ECONOMIA COMERCIO Y MERCADO', 'TRADE AND MARKET ECONOMY'),
(4, 'AA000002', 'EDUCACION', 'EDUCATION'),
(5, 'AA000003', 'EMPLEO', 'JOB'),
(6, 'AA000004', 'POBREZA Y EQUIDAD', 'POVERTY AND EQUITY'),
(7, 'AA000005', 'DESARROLLO INSTITUCIONAL', 'INSTITUTIONAL DEVELOPMENT'),
(8, 'AA000006', 'MEDIO AMBIENTE Y RECURSOS HUMA', 'ENVIRONMENT AND HUMAN RESOURCE'),
(9, 'AA000007', 'PROGRAMAS SOCIALES Y EVALUACIO', 'SOCIAL PROGRAMS AND PROJECT EV'),
(10, 'AA000008', 'MINERIA', 'MINING'),
(11, 'AA000009', 'AGRICULTURA', 'FARMING'),
(12, 'AA000010', 'SALUD', 'HEALTH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `ID_C` int(11) NOT NULL,
  `COD_CLI` varchar(15) NOT NULL,
  `NOMBRE` varchar(1000) DEFAULT NULL,
  `IMAGE` varchar(50) DEFAULT '00001.jpeg',
  `LNK` varchar(300) DEFAULT NULL,
  `LNK_EN` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`ID_C`, `COD_CLI`, `NOMBRE`, `IMAGE`, `LNK`, `LNK_EN`) VALUES
(3, 'CC000003', 'cencosud', 'CC000003.jpg', 'www.cencosud.com', 'www.cencosud_en.com'),
(7, 'CC000006', 'walsh', 'CC000006.jpg', 'www.walsh.com', 'www.walsh_en.com'),
(6, 'CC000005', 'sase', 'CC000005.jpg', 'www.sase.com', 'www.sase_en.com'),
(9, 'CC000008', 'seven', 'CC000008.jpg', 'www.seven.com', 'www.seven_en.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers_opinion`
--

CREATE TABLE `customers_opinion` (
  `ID_CO` int(11) NOT NULL,
  `COD_CLI` varchar(15) NOT NULL,
  `DESCRIPTION` varchar(2500) DEFAULT NULL,
  `DESCRIPTION_EN` varchar(2500) DEFAULT NULL,
  `REPRESENTATIVE` varchar(200) DEFAULT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `cargo_e` varchar(30) DEFAULT NULL,
  `empresa` varchar(30) DEFAULT NULL,
  `PRIORITY` int(11) DEFAULT '2',
  `PRIORITY_EN` int(11) DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `customers_opinion`
--

INSERT INTO `customers_opinion` (`ID_CO`, `COD_CLI`, `DESCRIPTION`, `DESCRIPTION_EN`, `REPRESENTATIVE`, `cargo`, `cargo_e`, `empresa`, `PRIORITY`, `PRIORITY_EN`) VALUES
(25, 'CC000008', 'we', 'we', 'we', 'we', 'we', 'seven', 2, 2),
(24, 'CC000006', 'rw||', 'wrwrwe', 'ew|', 'rw|', 'wew', 'walsh', 2, 2),
(23, 'CC000005', 'er', 'er', 'er', 'er', 'er', 'sase', 2, 2),
(21, 'CC000003', 'opino que es una buena empresa', 'ok ok ok', 'juan lipiani', 'administrador', 'administrator', 'cencosud', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments`
--

CREATE TABLE `departments` (
  `ID_DP` int(11) NOT NULL,
  `COD_DE` varchar(15) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `ZIP` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departments_list`
--

CREATE TABLE `departments_list` (
  `ID_DL` int(11) NOT NULL,
  `COD_DE` varchar(15) NOT NULL,
  `COD_PRO` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `links`
--

CREATE TABLE `links` (
  `ID_L` int(11) NOT NULL,
  `COD_LN` varchar(15) NOT NULL,
  `PICTURE` varchar(50) DEFAULT NULL,
  `LINK` varchar(200) DEFAULT NULL,
  `DESCRIPTION` varchar(2000) DEFAULT NULL,
  `DESCRIPTION_EN` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `links`
--

INSERT INTO `links` (`ID_L`, `COD_LN`, `PICTURE`, `LINK`, `DESCRIPTION`, `DESCRIPTION_EN`) VALUES
(3, 'LL000002', 'LL000002.jpg', 'https://www.inei.gob.pe/', 'INEI', 'INE'),
(2, 'LL000001', 'LL000001.jpg', 'http://www.juntos.gob.pe/', 'Juntos', 'Juntos'),
(4, 'LL000003', 'LL000003.jpg', 'https://www.indecopi.gob.pe/inicio', 'Indecopi', 'Indecopi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `ID_N` int(11) NOT NULL,
  `COD_N` varchar(15) NOT NULL,
  `TITLE` varchar(150) DEFAULT NULL,
  `TITLE_EN` varchar(150) DEFAULT NULL,
  `DESCRIPTION` varchar(2500) DEFAULT NULL,
  `DESCRIPTION_EN` varchar(2500) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`ID_N`, `COD_N`, `TITLE`, `TITLE_EN`, `DESCRIPTION`, `DESCRIPTION_EN`, `fecha`) VALUES
(1, 'N000001', 'nobel para bob dylan ', 'nobel for bob dylan', 'El cantante y compositor estadounidense Robert Allen Zimmerman, mejor conocido como Bob Dylan, fue galardonado con el Premio Nobel de Literatura el jueves por “haber creado nuevas expresiones poéticas dentro de la gran tradición de la canción estadounidense”, en palabras de la Academia Sueca.', 'The singer and composer American Robert Allen Zimmerman, better known as Bob Dylan, was awarded the Nobel Prize for Literature on Thursday for "having created new poetic expressions within the great tradition of American song" in the words of the Swedish Academy.', '2016-12-05'),
(2, 'N000002', 'primer cohete del peru', 'first rocket peru', 'Si el científico arequipeño Pedro Paulet viviera, se sorprendería de saber que recién en su propio país, más de un siglo después, se concretó el sueño de su vida. El martes, al sur de Lima, se lanzó el primer cohete-sonda, fabricado en su totalidad con tecnología peruana , que es capaz de alcanzar la estratósfera, aquella capa atmosférica entre los 20 y 50 kilómetros de altura.', 'If the arequipeño scientist Pedro Paulet lived, you are surprised to know that only in their own country, more than a century later, the dream of his life took shape. On Tuesday, south of Lima, the first sounding rocket, made entirely with Peruvian technology, which is capable of reaching the stratosphere, this atmospheric layer between 20 and 50 kilometers high was launched.', '2016-12-20'),
(3, 'N000003', 'Silvio Rodríguez le dedica una canción', 'Silvio Rodriguez dedicates a song', 'En el CD "hay un tema que parece un cuento del poeta ruso, Alexander Pushkin, dedicado a García Márquez", quien "una vez me regaló un argumento parecido para una canción. Era sobre una novia abandonada. Nunca lo usé y años después lo vi infiltrado en una de sus novelas", señaló Silvio en la carta que difundida en la web, a través del sitio Cubadebate.', 'In the CD "there is a theme that seems a story of Russian poet, Alexander Pushkin, dedicated to García Márquez" who "once gave me a similar argument for a song. It was about an abandoned bride. I never used it and years later it vi infiltrated one of his novels, "Silvio said in the letter that circulated on the web, through the site Cubadebate.', '2016-12-25'),
(4, 'N000004', 'transfuguismo', 'against turncoat', 'Con 70 votos a favor y 36 en contra, el Pleno del Congreso aprobó la llamada ley contra el transfuguismo. Esta norma determina que los parlamentarios que renuncien, sean separados o expulsados de sus bancadas no podrán pertenecer a otro grupo parlamentario o formar uno nuevo. Sin embargo, si los partidos o alianzas con los que llegaron al Legislativo se disuelven, sí podrán unirse a otra bancada o formar un nuevo grupo.', 'With 70 votes in favor and 36 against, the House of Congress approved the so-called law against turncoat. This standard determines that MPs who resign, are separated or expelled from their parties may not belong to another parliamentary group or form a new one. However, if the parties or alliances with those who came to the Legislative dissolve itself may join another bench or form a new group.', '2016-11-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyects`
--

CREATE TABLE `proyects` (
  `ID_PY` int(11) NOT NULL,
  `COD_PRO` varchar(15) NOT NULL,
  `COD_AR` varchar(15) NOT NULL,
  `COD_CLI` varchar(15) NOT NULL,
  `DATE` varchar(150) DEFAULT NULL,
  `TITLE` varchar(1000) DEFAULT NULL,
  `TITLE_EN` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyects`
--

INSERT INTO `proyects` (`ID_PY`, `COD_PRO`, `COD_AR`, `COD_CLI`, `DATE`, `TITLE`, `TITLE_EN`) VALUES
(1, 'PP000001', 'AA000001', 'CC000003', '05/12/2015', '“Línea de Base para el Fortalecimiento de las Capacidades Productivas de las Mujeres Beneficiarias de Títulos de Propiedad I, II y III etapas”. Realizada en el Cono Norte y Cono Sur del Departamento de Lima.\r\n“Línea de Base para el Fortalecimiento de las Capacidades Productivas de las Mujeres Beneficiarias de Títulos de Propiedad I, II y III etapas”. Realizada en el Cono Norte y Cono Sur del Departamento de Lima.\r\n“Línea de Base para el Fortalecimiento de las Capacidades Productivas de las Mujeres Beneficiarias de Títulos de Propiedad I, II y III etapas”. Realizada en el Cono Norte y Cono Sur del Departamento de Lima.\r\n“Línea de Base para el Fortalecimiento de las Capacidades Productivas de las Mujeres Beneficiarias de Títulos de Propiedad I, II y III etapas”. Realizada en el Cono Norte y Cono Sur del Departamento de Lima.', '"Baseline for Strengthening Production Capacities of women beneficiaries Land Title I, II and III stages." Cone made in Northern and Southern Cone Department of Lima.\r\n"Baseline for Strengthening Production Capacities of women beneficiaries Land Title I, II and III stages." Cone made in Northern and Southern Cone Department of Lima.\r\n"Baseline for Strengthening Production Capacities of women beneficiaries Land Title I, II and III stages." Cone made in Northern and Southern Cone Department of Lima.\r\n"Baseline for Strengthening Production Capacities of women beneficiaries Land Title I, II and III stages." Cone made in Northern and Southern Cone Department of Lima.\r\n\r\n\r\n'),
(2, 'PP000002', 'AA000001', 'CC000005', '12/20/2016', '	\r\n“Teoría de Juegos, Experimento de Aversión al Riesgo”. Realizado en el Departamento de Lima.', '"Game Theory, Experiment Risk Aversion". Made in the Department of Lima.'),
(3, 'PP000003', 'AA000002', 'CC000006', '05/05/2015', 'En gramática tradicional, una palabra (del latín parab&#335;la)1 es cada uno de los segmentos limitados por delimitadores en la cadena hablada o escrita, que puede aparecer en otras posiciones y que está dotado de una función.\r\n\r\nLingüísticamente, el concepto de palabra es mucho más problemático de lo que la definición anterior sugiere. En efecto, determinar qué constituye fonéticamente o morfosintácticamente una palabra es un problema abierto; así, por ejemplo, junto a los morfemas ligados y las palabras léxicas existen los clíticos cuyo estatus de palabra es discutido. En la cadena hablada ordinariamente no existen pausas y la segmentación de palabras depende de factores prosódicos difíciles de precisar. La rama de la lingüística que estudia la composición y estructura interna de las palabras es la morfología.', 'En gramática tradicional, una palabra (del latín parab&#335;la)1 es cada uno de los segmentos limitados por delimitadores en la cadena hablada o escrita, que puede aparecer en otras posiciones y que está dotado de una función.\r\n\r\nLingüísticamente, el concepto de palabra es mucho más problemático de lo que la definición anterior sugiere. En efecto, determinar qué constituye fonéticamente o morfosintácticamente una palabra es un problema abierto; así, por ejemplo, junto a los morfemas ligados y las palabras léxicas existen los clíticos cuyo estatus de palabra es discutido. En la cadena hablada ordinariamente no existen pausas y la segmentación de palabras depende de factores prosódicos difíciles de precisar. La rama de la lingüística que estudia la composición y estructura interna de las palabras es la morfología.'),
(4, 'PP000004', 'AA000001', 'CC000008', '01/01/2016', '“Línea de Base para el Fortalecimiento de las Capacidades Productivas de las Mujeres Beneficiarias de Títulos de Propiedad I, II y III etapas”. Realizada en el Cono Norte y Cono Sur del Departamento de Lima.\r\n“Línea de Base para el Fortalecimiento de ', '“Línea de Base para el Fortalecimiento de las Capacidades Productivas de las Mujeres Beneficiarias de Títulos de Propiedad I, II y III etapas”. Realizada en el Cono Norte y Cono Sur del Departamento de Lima.\r\n“Línea de Base para el Fortalecimiento de ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_usuario` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `nick` varchar(30) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cod_usuario`, `nombre`, `nick`, `password`, `email`) VALUES
(1, 'Raul', 'rhuauya', 'Junio581', 'raul.huauya@scc.com.pe'),
(3, 'chira', 'chiraa', 'chiraa', 'chiraa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`cod_al`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`ID_AR`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID_C`);

--
-- Indices de la tabla `customers_opinion`
--
ALTER TABLE `customers_opinion`
  ADD PRIMARY KEY (`ID_CO`);

--
-- Indices de la tabla `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`ID_DP`);

--
-- Indices de la tabla `departments_list`
--
ALTER TABLE `departments_list`
  ADD PRIMARY KEY (`ID_DL`);

--
-- Indices de la tabla `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`ID_L`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID_N`);

--
-- Indices de la tabla `proyects`
--
ALTER TABLE `proyects`
  ADD PRIMARY KEY (`ID_PY`),
  ADD UNIQUE KEY `COD_CLI` (`COD_CLI`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `ID_AR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `ID_C` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `customers_opinion`
--
ALTER TABLE `customers_opinion`
  MODIFY `ID_CO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `departments`
--
ALTER TABLE `departments`
  MODIFY `ID_DP` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departments_list`
--
ALTER TABLE `departments_list`
  MODIFY `ID_DL` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `links`
--
ALTER TABLE `links`
  MODIFY `ID_L` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `ID_N` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `proyects`
--
ALTER TABLE `proyects`
  MODIFY `ID_PY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
