-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-06-2014 a las 17:04:10
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_sp_borde_costero`
--
CREATE DATABASE IF NOT EXISTS `db_sp_borde_costero` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `db_sp_borde_costero`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `userid` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `bizrule` text COLLATE utf8_spanish_ci,
  `data` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci,
  `bizrule` text COLLATE utf8_spanish_ci,
  `data` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficio_social`
--

CREATE TABLE IF NOT EXISTS `beneficio_social` (
  `BEN_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PER_CORREL` int(10) unsigned NOT NULL,
  `INT_CORREL` int(10) unsigned NOT NULL,
  `BEN_FECHA` date NOT NULL,
  `BEN_TIPO` enum('Definido','Por Definir') COLLATE utf8_spanish_ci DEFAULT NULL,
  `BEN_NOMBRE` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `BEN_DESCRIPCION` text COLLATE utf8_spanish_ci,
  `BEN_MONTO` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`BEN_CORREL`),
  KEY `fk_BENEFICIO_SOCIAL_PERSONA1_idx` (`PER_CORREL`),
  KEY `fk_BENEFICIO_SOCIAL_INSTITUCION1_idx` (`INT_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `beneficio_social`
--

INSERT IGNORE INTO `beneficio_social` (`BEN_CORREL`, `PER_CORREL`, `INT_CORREL`, `BEN_FECHA`, `BEN_TIPO`, `BEN_NOMBRE`, `BEN_DESCRIPCION`, `BEN_MONTO`) VALUES
(1, 1, 1, '2014-06-06', '', 'dfg', 'dfg', '1234.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE IF NOT EXISTS `comuna` (
  `COM_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `REG_CORREL` int(11) NOT NULL,
  `COM_NOMBRE` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`COM_CORREL`),
  KEY `fk_COMUNA_REGION1_idx` (`REG_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=412 ;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT IGNORE INTO `comuna` (`COM_CORREL`, `REG_CORREL`, `COM_NOMBRE`) VALUES
(1, 10, 'ACHAO'),
(2, 5, 'ALGARROBO'),
(3, 13, 'ALHUE'),
(4, 8, 'ALTO BIOBIO'),
(5, 3, 'ALTO DEL CARMEN'),
(6, 1, 'ALTO HOSPICIO'),
(7, 10, 'ANCUD'),
(8, 4, 'ANDACOLLO'),
(9, 9, 'ANGOL'),
(10, 10, 'ANIHUE'),
(11, 12, 'ANTARTICA'),
(12, 2, 'ANTOFAGASTA'),
(13, 8, 'ANTUCO'),
(14, 8, 'ARAUCO'),
(15, 15, 'ARICA'),
(16, 10, 'AUCAR'),
(17, 11, 'BALMACEDA'),
(18, 10, 'BRAUMAN'),
(19, 13, 'BUIN'),
(20, 8, 'BULNES'),
(21, 10, 'BUTACHAUQUES'),
(22, 11, 'C MANCILLA'),
(23, 5, 'CABILDO'),
(24, 8, 'CABRERO'),
(25, 9, 'CAJON'),
(26, 2, 'CALAMA'),
(27, 10, 'CALBUCO'),
(28, 3, 'CALDERA'),
(29, 5, 'CALERA'),
(30, 13, 'CALERA DE TANGO'),
(31, 5, 'CALLE LARGA'),
(32, 15, 'CAMARONES'),
(33, 1, 'CAMINA'),
(34, 8, 'CAMPANARIO'),
(35, 4, 'CANELA'),
(36, 8, 'CANETE'),
(37, 9, 'CARAHUE'),
(38, 5, 'CARTAGENA'),
(39, 5, 'CASABLANCA'),
(40, 10, 'CASTRO'),
(41, 5, 'CATEMU'),
(42, 7, 'CAUQUENES'),
(43, 13, 'CERRILLOS'),
(44, 13, 'CERRO NAVIA'),
(45, 12, 'CERRO SOMBRERO'),
(46, 10, 'CHACAO'),
(47, 10, 'CHAITEN'),
(48, 10, 'CHALLAGUE'),
(49, 3, 'CHANARAL'),
(50, 7, 'CHANCO'),
(51, 10, 'CHENIAO'),
(52, 6, 'CHEPICA'),
(53, 9, 'CHERQUENCO'),
(54, 8, 'CHIGUAYANTE'),
(55, 11, 'CHILE CHICO'),
(56, 8, 'CHILLAN'),
(57, 8, 'CHILLAN VIEJO'),
(58, 6, 'CHIMBARONGO'),
(59, 9, 'CHOLCHOL'),
(60, 10, 'CHONCHI'),
(61, 2, 'CHUQUICAMATA'),
(62, 11, 'CISNES'),
(63, 8, 'COBQUECURA'),
(64, 10, 'COCHAMO'),
(65, 11, 'COCHRANE'),
(66, 6, 'CODEGUA'),
(67, 8, 'COELEMU'),
(68, 8, 'COIHUE'),
(69, 8, 'COIHUECO'),
(70, 6, 'COINCO'),
(71, 7, 'COLBUN'),
(72, 1, 'COLCHANE'),
(73, 13, 'COLINA'),
(74, 9, 'COLLIPULLI'),
(75, 6, 'COLTAUCO'),
(76, 4, 'COMBARBALA'),
(77, 8, 'CONCEPCION'),
(78, 13, 'CONCHALI'),
(79, 5, 'CONCON'),
(80, 7, 'CONSTITUCION'),
(81, 10, 'CONTAO'),
(82, 8, 'CONTULMO'),
(83, 3, 'COPIAPO'),
(84, 4, 'COQUIMBO'),
(85, 8, 'CORONEL'),
(86, 14, 'CORRAL'),
(87, 11, 'COYHAIQUE'),
(88, 9, 'CUNCO'),
(89, 9, 'CURACAUTIN'),
(90, 13, 'CURACAVI'),
(91, 10, 'CURACO DE VELEZ'),
(92, 8, 'CURANILAHUE'),
(93, 9, 'CURARREHUE'),
(94, 7, 'CUREPTO'),
(95, 7, 'CURICO'),
(96, 10, 'DALCAHUE'),
(97, 3, 'DIEGO DE ALMAGRO'),
(98, 6, 'DONIHUE'),
(99, 13, 'EL BOSQUE'),
(100, 8, 'EL CARMEN'),
(101, 13, 'EL MONTE'),
(102, 5, 'EL QUISCO'),
(103, 5, 'EL TABO'),
(104, 7, 'EMPEDRADO'),
(105, 10, 'ENTRELAGOS'),
(106, 9, 'ERCILLA'),
(107, 13, 'ESTACION CENTRAL'),
(108, 8, 'FLORIDA'),
(109, 9, 'FREIRE'),
(110, 3, 'FREIRINA'),
(111, 10, 'FRESIA'),
(112, 10, 'FRUTILLAR'),
(113, 10, 'FUTALEUFU'),
(114, 14, 'FUTRONO'),
(115, 9, 'GALVARINO'),
(116, 15, 'GENERAL LAGOS'),
(117, 9, 'GORBEA'),
(118, 6, 'GRANEROS'),
(119, 11, 'GUAITECAS'),
(120, 5, 'HIJUELAS'),
(121, 5, 'HORCON'),
(122, 10, 'HUALAIHUE'),
(123, 7, 'HUALANE'),
(124, 8, 'HUALPEN'),
(125, 8, 'HUALQUI'),
(126, 1, 'HUARA'),
(127, 3, 'HUASCO'),
(128, 13, 'HUECHURABA'),
(129, 8, 'HUEPIL'),
(130, 10, 'HUILLINCO'),
(131, 4, 'ILLAPEL'),
(132, 13, 'INDEPENDENCIA'),
(133, 1, 'IQUIQUE'),
(134, 10, 'ISLA CHAULINEC'),
(135, 13, 'ISLA DE MAIPO'),
(136, 5, 'ISLA DE PASCUA'),
(137, 10, 'ISLA QUENAC'),
(138, 5, 'JUAN FERNANDEZ'),
(139, 13, 'LA CISTERNA'),
(140, 5, 'LA CRUZ'),
(141, 6, 'LA ESTRELLA'),
(142, 13, 'LA FLORIDA'),
(143, 13, 'LA GRANJA'),
(144, 4, 'LA HIGUERA'),
(145, 5, 'LA LIGUA'),
(146, 13, 'LA PINTANA'),
(147, 13, 'LA REINA'),
(148, 4, 'LA SERENA'),
(149, 14, 'LA UNION'),
(150, 14, 'LAGO RANCO'),
(151, 11, 'LAGO VERDE'),
(152, 12, 'LAGUNA BLANCA'),
(153, 8, 'LAJA'),
(154, 13, 'LAMPA'),
(155, 14, 'LANCO'),
(156, 6, 'LAS CABRAS'),
(157, 13, 'LAS CONDES'),
(158, 10, 'LAS QUEMAS'),
(159, 10, 'LASTARRIA'),
(160, 9, 'LAUTARO'),
(161, 8, 'LEBU'),
(162, 9, 'LICANRAY'),
(163, 7, 'LICANTEN'),
(164, 5, 'LIMACHE'),
(165, 7, 'LINARES'),
(166, 8, 'LIRQUEN'),
(167, 6, 'LITUECHE'),
(168, 10, 'LIUCURA'),
(169, 5, 'LLAILLAY'),
(170, 10, 'LLANQUIHUE'),
(171, 10, 'LLIFEN'),
(172, 13, 'LO BARNECHEA'),
(173, 13, 'LO ESPEJO'),
(174, 13, 'LO PRADO'),
(175, 6, 'LOLOL'),
(176, 9, 'LONCOCHE'),
(177, 7, 'LONGAVI'),
(178, 9, 'LONQUIMAY'),
(179, 8, 'LOS ALAMOS'),
(180, 5, 'LOS ANDES'),
(181, 8, 'LOS ANGELES'),
(182, 14, 'LOS LAGOS'),
(183, 9, 'LOS LAURELES'),
(184, 10, 'LOS MUERMOS'),
(185, 9, 'LOS SAUCES'),
(186, 4, 'LOS VILOS'),
(187, 8, 'LOTA'),
(188, 9, 'LUMACO'),
(189, 6, 'MACHALI'),
(190, 13, 'MACUL'),
(191, 14, 'MAFIL'),
(192, 13, 'MAIPU'),
(193, 11, 'MALLIN GRANDE'),
(194, 6, 'MALLOA'),
(195, 6, 'MARCHIHUE'),
(196, 2, 'MARIA ELENA'),
(197, 13, 'MARIA PINTO'),
(198, 7, 'MAULE'),
(199, 10, 'MAULLIN'),
(200, 10, 'MECHUQUE'),
(201, 2, 'MEJILLONES'),
(202, 10, 'MELINKA'),
(203, 9, 'MELIPEUCO'),
(204, 13, 'MELIPILLA'),
(205, 10, 'MILLANTU'),
(206, 7, 'MOLINA'),
(207, 8, 'MONTE AGUILA'),
(208, 4, 'MONTE PATRIA'),
(209, 6, 'MOSTAZAL'),
(210, 8, 'MULCHEN'),
(211, 8, 'NACIMIENTO'),
(212, 6, 'NANCAGUA'),
(213, 12, 'NAVARINO'),
(214, 6, 'NAVIDAD'),
(215, 8, 'NEGRETE'),
(216, 10, 'NELTUME'),
(217, 8, 'NINHUE'),
(218, 8, 'NIPAS'),
(219, 8, 'NIQUEN'),
(221, 5, 'NOGALES'),
(222, 10, 'NUEVA BRAUNAU'),
(223, 9, 'NUEVA IMPERIAL'),
(224, 9, 'NUEVA TOLTEN'),
(225, 13, 'NUNOA'),
(226, 6, 'OLIVAR'),
(227, 2, 'OLLAGUE'),
(228, 5, 'OLMUE'),
(229, 10, 'OSORNO'),
(230, 4, 'OVALLE'),
(231, 13, 'P.AGUIRRE CERDA'),
(232, 13, 'PADRE HURTADO'),
(233, 9, 'PADRE LAS CASAS'),
(234, 4, 'PAIGUANO'),
(235, 14, 'PAILLACO'),
(236, 13, 'PAINE'),
(237, 10, 'PALENA'),
(238, 6, 'PALMILLA'),
(239, 14, 'PANGUIPULLI'),
(240, 5, 'PANQUEHUE'),
(241, 5, 'PAPUDO'),
(242, 6, 'PAREDONES'),
(243, 10, 'PARGUA'),
(244, 7, 'PARRAL'),
(245, 7, 'PELARCO'),
(246, 10, 'PELCHUQUIN'),
(247, 7, 'PELLUHUE'),
(248, 8, 'PEMUCO'),
(249, 5, 'PENABLANCA'),
(250, 13, 'PENAFLOR'),
(251, 13, 'PENALOLEN'),
(252, 7, 'PENCAHUE'),
(253, 8, 'PENCO'),
(254, 6, 'PERALILLO'),
(255, 9, 'PERQUENCO'),
(256, 5, 'PETORCA'),
(257, 6, 'PEUMO'),
(258, 1, 'PICA'),
(259, 6, 'PICHIDEGUA'),
(260, 6, 'PICHILEMU'),
(261, 9, 'PILLANLELBUN'),
(262, 8, 'PINTO'),
(263, 13, 'PIRQUE'),
(264, 9, 'PITRUFQUEN'),
(265, 6, 'PLACILLA'),
(266, 8, 'PORTEZUELO'),
(267, 12, 'PORVENIR'),
(268, 1, 'POZO ALMONTE'),
(269, 12, 'PRIMAVERA'),
(270, 13, 'PROVIDENCIA'),
(271, 11, 'PTO CHACABUCO'),
(272, 9, 'PTO DOMINGUEZ'),
(273, 9, 'PTO SAAVEDRA'),
(274, 5, 'PUCHUNCAVI'),
(275, 9, 'PUCON'),
(276, 13, 'PUDAHUEL'),
(277, 13, 'PUENTE ALTO'),
(278, 11, 'PUERTO AYSEN'),
(279, 10, 'PUERTO CHICO'),
(280, 11, 'PUERTO GUADAL'),
(281, 11, 'PUERTO IBANEZ'),
(282, 10, 'PUERTO MONTT'),
(283, 12, 'PUERTO NATALES'),
(284, 10, 'PUERTO OCTAY'),
(285, 11, 'PUERTO SANCHEZ'),
(286, 10, 'PUERTO VARAS'),
(287, 12, 'PUERTO WILLIAMS'),
(288, 6, 'PUMANQUE'),
(289, 4, 'PUNITAQUI'),
(290, 12, 'PUNTA ARENAS'),
(291, 10, 'PUQUELDON'),
(292, 9, 'PUREN'),
(293, 10, 'PURRANQUE'),
(294, 5, 'PUTAENDO'),
(295, 15, 'PUTRE'),
(296, 10, 'PUYEHUE'),
(297, 10, 'QUEILEN'),
(298, 10, 'QUELDON'),
(299, 10, 'QUELLON'),
(300, 10, 'QUEMCHI'),
(301, 9, 'QUEPE'),
(302, 8, 'QUILACO'),
(303, 13, 'QUILICURA'),
(304, 8, 'QUILLECO'),
(305, 8, 'QUILLON'),
(306, 5, 'QUILLOTA'),
(307, 5, 'QUILPUE'),
(308, 10, 'QUINCHAO'),
(309, 6, 'QUINTA DE TILCOCO'),
(310, 13, 'QUINTA NORMAL'),
(311, 5, 'QUINTERO'),
(312, 8, 'QUIRIHUE'),
(313, 8, 'RAMADILLAS'),
(314, 6, 'RANCAGUA'),
(315, 8, 'RANQUIL'),
(316, 7, 'RAUCO'),
(317, 8, 'RECINTO'),
(318, 13, 'RECOLETA'),
(319, 9, 'RENAICO'),
(320, 13, 'RENCA'),
(321, 6, 'RENGO'),
(322, 6, 'REQUINOA'),
(323, 7, 'RETIRO'),
(324, 10, 'REUMEN'),
(325, 5, 'RINCONADA'),
(326, 14, 'RIO BUENO'),
(327, 7, 'RIO CLARO'),
(328, 10, 'RIO FRIO'),
(329, 4, 'RIO HURTADO'),
(330, 11, 'RIO IBANEZ'),
(331, 10, 'RIO NEGRO'),
(332, 10, 'RIO PUELO'),
(333, 11, 'RIO TRANQUILO'),
(334, 12, 'RIO VERDE'),
(335, 7, 'ROMERAL'),
(336, 13, 'S.JOSE DE MAIPO'),
(337, 10, 'S.JUAN DE LA COSTA'),
(338, 7, 'SAGRADA FAMILIA'),
(339, 4, 'SALAMANCA'),
(340, 5, 'SAN ANTONIO'),
(341, 13, 'SAN BERNARDO'),
(342, 8, 'SAN CARLOS'),
(343, 7, 'SAN CLEMENTE'),
(344, 5, 'SAN ESTEBAN'),
(345, 8, 'SAN FABIAN'),
(346, 5, 'SAN FELIPE'),
(347, 6, 'SAN FERNANDO'),
(348, 12, 'SAN GREGORIO'),
(349, 8, 'SAN IGNACIO'),
(350, 7, 'SAN JAVIER'),
(351, 13, 'SAN JOAQUIN'),
(352, 14, 'SAN JOSE DE LA MARIQUINA'),
(353, 13, 'SAN MIGUEL'),
(354, 8, 'SAN NICOLAS'),
(355, 10, 'SAN PABLO'),
(356, 13, 'SAN PEDRO'),
(357, 2, 'SAN PEDRO DE ATACAMA'),
(358, 8, 'SAN PEDRO DE LA PAZ'),
(359, 7, 'SAN RAFAEL'),
(360, 13, 'SAN RAMON'),
(361, 8, 'SAN ROSENDO'),
(362, 6, 'SAN VICENTE'),
(363, 8, 'SANTA BARBARA'),
(364, 6, 'SANTA CRUZ'),
(365, 8, 'SANTA FE'),
(366, 8, 'SANTA JUANA'),
(367, 5, 'SANTA MARIA'),
(368, 13, 'SANTIAGO'),
(369, 5, 'SANTO DOMINGO'),
(370, 9, 'SELVA OSCURA'),
(371, 2, 'SIERRA GORDA'),
(372, 13, 'TALAGANTE'),
(373, 7, 'TALCA'),
(374, 8, 'TALCAHUANO'),
(375, 8, 'TALCAMAVIDA'),
(376, 2, 'TALTAL'),
(377, 9, 'TEMUCO'),
(378, 10, 'TENAUN'),
(379, 7, 'TENO'),
(380, 9, 'TEODORO SCHMIDT'),
(381, 3, 'TIERRA AMARILLA'),
(382, 13, 'TILTIL'),
(383, 12, 'TIMAUKEL'),
(384, 8, 'TIRUA'),
(385, 2, 'TOCOPILLA'),
(386, 9, 'TOLTEN'),
(387, 8, 'TOME'),
(388, 12, 'TORRES DE PAINE'),
(389, 11, 'TORTEL'),
(390, 9, 'TRAIGUEN'),
(391, 8, 'TREGUACO'),
(392, 8, 'TRUPAN'),
(393, 8, 'TUCAPEL'),
(394, 14, 'VALDIVIA'),
(395, 3, 'VALLENAR'),
(396, 5, 'VALPARAISO'),
(397, 7, 'VICHUQUEN'),
(398, 9, 'VICTORIA'),
(399, 4, 'VICUNA'),
(400, 9, 'VILCUN'),
(401, 7, 'VILLA ALEGRE'),
(402, 5, 'VILLA ALEMANA'),
(403, 11, 'VILLA OHIGGINS'),
(404, 9, 'VILLARRICA'),
(405, 5, 'VINA DEL MAR'),
(406, 13, 'VITACURA'),
(407, 10, 'VOIGUE'),
(408, 7, 'YERBAS BUENAS'),
(409, 8, 'YUMBEL'),
(410, 8, 'YUNGAY'),
(411, 5, 'ZAPALLAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_proyecto`
--

CREATE TABLE IF NOT EXISTS `control_proyecto` (
  `CON_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PRO_CORREL` int(10) unsigned NOT NULL,
  `CON_DESCRIPCION` text COLLATE utf8_spanish_ci,
  `CON_RECOMENDACION` text COLLATE utf8_spanish_ci,
  `CON_ESTADO` enum('EN PROCESO','VIGENTE','FRACASO') COLLATE utf8_spanish_ci NOT NULL,
  `CON_FECHA_CONTROL` date NOT NULL,
  PRIMARY KEY (`CON_CORREL`),
  KEY `fk_CONTROL_PROYECTO_PROYECTO1_idx` (`PRO_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE IF NOT EXISTS `institucion` (
  `INT_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `INT_NOMBRE` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `INT_DESCRIPCION` tinytext COLLATE utf8_spanish_ci,
  PRIMARY KEY (`INT_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT IGNORE INTO `institucion` (`INT_CORREL`, `INT_NOMBRE`, `INT_DESCRIPCION`) VALUES
(1, 'Juantito', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `ITE_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ITE_NOMBRE` tinytext COLLATE utf8_spanish_ci,
  PRIMARY KEY (`ITE_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `item`
--

INSERT IGNORE INTO `item` (`ITE_CORREL`, `ITE_NOMBRE`) VALUES
(1, 'capa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo_de_negocios`
--

CREATE TABLE IF NOT EXISTS `modelo_de_negocios` (
  `MOD_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PRO_CORREL` int(10) unsigned NOT NULL,
  `MOD_SOCIO_CLAVE` text COLLATE utf8_spanish_ci,
  `MOD_ACTIVIDAD` text COLLATE utf8_spanish_ci,
  `MOD_RECURSOS` text COLLATE utf8_spanish_ci,
  `MOD_PROPUESTA` text COLLATE utf8_spanish_ci,
  `MOD_REL_CLIENTE` text COLLATE utf8_spanish_ci,
  `MOD_CANALES` text COLLATE utf8_spanish_ci,
  `MOD_SEGMENTO_CLIENTE` text COLLATE utf8_spanish_ci,
  `MOD_COSTOS` text COLLATE utf8_spanish_ci,
  `MOD_INGRESO` text COLLATE utf8_spanish_ci,
  `MOD_VIGENCIA` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`MOD_CORREL`),
  KEY `fk_MODELO_DE_NEGOCIOS_PROYECTO1_idx` (`PRO_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `modelo_de_negocios`
--

INSERT IGNORE INTO `modelo_de_negocios` (`MOD_CORREL`, `PRO_CORREL`, `MOD_SOCIO_CLAVE`, `MOD_ACTIVIDAD`, `MOD_RECURSOS`, `MOD_PROPUESTA`, `MOD_REL_CLIENTE`, `MOD_CANALES`, `MOD_SEGMENTO_CLIENTE`, `MOD_COSTOS`, `MOD_INGRESO`, `MOD_VIGENCIA`) VALUES
(1, 5, 'adsf', 'asdf', 'asdf', 'afd', 'adsf', 'asfd', 'asdf', '124536', '12536456', '2014-05-26 04:02:12'),
(2, 2, 'xfn', 'SDV', 'DSF', 'GSDV', 'GVDS', 'DSFA', 'GSS', 'GSD', 'GSD', '2014-05-26 04:11:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `MUN_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `COM_CORREL` int(10) unsigned NOT NULL,
  `MUN_NOMBRE` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `MUN_RUT` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `MUN_CONTACTO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `MUN_VIGENCIA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`MUN_CORREL`),
  KEY `fk_Municipio_Comuna1_idx` (`COM_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT IGNORE INTO `municipio` (`MUN_CORREL`, `COM_CORREL`, `MUN_NOMBRE`, `MUN_RUT`, `MUN_CONTACTO`, `MUN_VIGENCIA`) VALUES
(1, 124, 'Gran Municipio de Hualpen', '11.111.111-1', 'Alejandro Meneses', '2014-05-25 20:55:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `PER_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PER_RUT` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `PER_NACIMIENTO` date DEFAULT NULL,
  PRIMARY KEY (`PER_CORREL`),
  UNIQUE KEY `PER_RUT_UNIQUE` (`PER_RUT`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT IGNORE INTO `persona` (`PER_CORREL`, `PER_RUT`, `PER_NACIMIENTO`) VALUES
(1, '18.108.559-2', '1992-04-11'),
(2, '18.068.631-2', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_info`
--

CREATE TABLE IF NOT EXISTS `persona_info` (
  `PER_INFO_CORREL` int(10) NOT NULL AUTO_INCREMENT,
  `PER_CORREL` int(10) unsigned NOT NULL,
  `COM_CORREL` int(10) unsigned NOT NULL,
  `PER_NOMBRES` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_PATERNO` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_MATERNO` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_DIRECCION` tinytext COLLATE utf8_spanish_ci,
  `PER_LATITUD` decimal(10,6) DEFAULT NULL,
  `PER_LONGITUD` decimal(10,6) DEFAULT NULL,
  `PER_TELEFONO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_VIGENCIA` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`PER_INFO_CORREL`),
  KEY `fk_PERSONA_INFO_Comuna1_idx` (`COM_CORREL`),
  KEY `fk_PERSONA_INFO_PERSONA1` (`PER_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `persona_info`
--

INSERT IGNORE INTO `persona_info` (`PER_INFO_CORREL`, `PER_CORREL`, `COM_CORREL`, `PER_NOMBRES`, `PER_PATERNO`, `PER_MATERNO`, `PER_DIRECCION`, `PER_LATITUD`, `PER_LONGITUD`, `PER_TELEFONO`, `PER_VIGENCIA`) VALUES
(1, 1, 124, 'Ruben Eduardo', 'Tejeda', 'Roa', 'qwe', '-36.793091', '-73.114265', '+569 91223304', '2014-05-26 03:04:44'),
(4, 2, 85, 'Juan Esteban', 'Veliz', 'Viveres', '146546', '-36.979183', '-73.154026', '123456', '2014-05-26 07:15:02'),
(5, 2, 85, 'Juan Esteban', 'Veliz', 'Viveres', '146546', '-36.793091', '-73.114265', '123456', '2014-05-26 03:28:37'),
(6, 2, 85, 'Juan Esteban', 'Veliz', 'Viveres', '146546', '-36.793091', '-73.114265', '123456', '2014-05-26 03:29:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE IF NOT EXISTS `presupuesto` (
  `PRE_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ITE_CORREL` int(10) unsigned NOT NULL,
  `PRO_CORREL` int(10) unsigned NOT NULL,
  `PRE_DESCRIPCION` text COLLATE utf8_spanish_ci,
  `PRE_MONTO` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`PRE_CORREL`),
  KEY `fk_PRESUPUESTO_ITEM1_idx` (`ITE_CORREL`),
  KEY `fk_PRESUPUESTO_PROYECTO1_idx` (`PRO_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `presupuesto`
--

INSERT IGNORE INTO `presupuesto` (`PRE_CORREL`, `ITE_CORREL`, `PRO_CORREL`, `PRE_DESCRIPCION`, `PRE_MONTO`) VALUES
(2, 1, 1, '01231', '321.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `PRO_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PER_CORREL` int(10) unsigned NOT NULL,
  `INT_CORREL` int(10) unsigned NOT NULL,
  `PRO_FECHA` date NOT NULL,
  `PRO_NOMBRE` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `PRO_DESCRIPCION` text COLLATE utf8_spanish_ci,
  `PRO_MONTO` decimal(12,2) NOT NULL,
  PRIMARY KEY (`PRO_CORREL`),
  KEY `fk_PROYECTO_PERSONA1_idx` (`PER_CORREL`),
  KEY `fk_PROYECTO_INSTITUCION1_idx` (`INT_CORREL`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT IGNORE INTO `proyecto` (`PRO_CORREL`, `PER_CORREL`, `INT_CORREL`, `PRO_FECHA`, `PRO_NOMBRE`, `PRO_DESCRIPCION`, `PRO_MONTO`) VALUES
(1, 1, 1, '2014-05-21', 'Proyecto 1', '', '10000000.00'),
(2, 1, 1, '2014-05-20', 'asd', 'asd2', '1.00'),
(5, 1, 1, '2014-05-24', 'asd', 'asd', '1000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `REG_CORREL` int(11) NOT NULL,
  `REG_NOMBRE` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `REG_SIMBOLO` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`REG_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT IGNORE INTO `region` (`REG_CORREL`, `REG_NOMBRE`, `REG_SIMBOLO`) VALUES
(1, 'TARAPACA', 'I'),
(2, 'ANTOFAGASTA', 'II'),
(3, 'ATACAMA', 'III'),
(4, 'COQUIMBO', 'IV'),
(5, 'VALPARAISO', 'V'),
(6, 'LIBERTADOR GENERAL B. OHIGGINS', 'VI'),
(7, 'MAULE', 'VII'),
(8, 'BIO-BIO', 'VII'),
(9, 'LA ARAUCANIA', 'IX'),
(10, 'LOS LAGOS', 'X'),
(11, 'AYSEN', 'XI'),
(12, 'MAGALLANES Y ANTARTICA', 'XII'),
(13, 'METROPOLITANA DE SANTIAGO', 'RM'),
(14, 'LOS RIOS', 'XIV'),
(15, 'ARICA Y PARINACOTA', 'XV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `PER_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `USU_ROLE` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `USU_PASSWORD` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `USU_ESTADO` enum('HABILITADO','NO HABILITADO') COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`PER_CORREL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `beneficio_social`
--
ALTER TABLE `beneficio_social`
  ADD CONSTRAINT `fk_BENEFICIO_SOCIAL_INSTITUCION1` FOREIGN KEY (`INT_CORREL`) REFERENCES `institucion` (`INT_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_BENEFICIO_SOCIAL_PERSONA1` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `fk_COMUNA_REGION1` FOREIGN KEY (`REG_CORREL`) REFERENCES `region` (`REG_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `control_proyecto`
--
ALTER TABLE `control_proyecto`
  ADD CONSTRAINT `fk_CONTROL_PROYECTO_PROYECTO1` FOREIGN KEY (`PRO_CORREL`) REFERENCES `proyecto` (`PRO_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `modelo_de_negocios`
--
ALTER TABLE `modelo_de_negocios`
  ADD CONSTRAINT `fk_MODELO_DE_NEGOCIOS_PROYECTO1` FOREIGN KEY (`PRO_CORREL`) REFERENCES `proyecto` (`PRO_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fk_Municipio_Comuna1` FOREIGN KEY (`COM_CORREL`) REFERENCES `comuna` (`COM_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona_info`
--
ALTER TABLE `persona_info`
  ADD CONSTRAINT `fk_PERSONA_INFO_Comuna1` FOREIGN KEY (`COM_CORREL`) REFERENCES `comuna` (`COM_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PERSONA_INFO_PERSONA1` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD CONSTRAINT `fk_PRESUPUESTO_ITEM1` FOREIGN KEY (`ITE_CORREL`) REFERENCES `item` (`ITE_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PRESUPUESTO_PROYECTO1` FOREIGN KEY (`PRO_CORREL`) REFERENCES `proyecto` (`PRO_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `fk_PROYECTO_INSTITUCION1` FOREIGN KEY (`INT_CORREL`) REFERENCES `institucion` (`INT_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PROYECTO_PERSONA1` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_USUARIO_PERSONA` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
