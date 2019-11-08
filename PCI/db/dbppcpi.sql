-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2019 a las 23:46:59
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbppcpi`
--
CREATE DATABASE dbppcpi;
-- --------------------------------------------------------
USE dbppcpi;
--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idAdministrador` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `idInvestigadorArticulo` int(11) NOT NULL,
  `issn` varchar(45) DEFAULT NULL,
  `tituloArticulo` varchar(70) DEFAULT NULL,
  `nombreRevista` varchar(70) DEFAULT NULL,
  `numeroRevista` int(11) DEFAULT NULL,
  `volumenRevista` int(11) DEFAULT NULL,
  `anioPublicacion` int(11) DEFAULT NULL,
  `paginaInicio` int(11) DEFAULT NULL,
  `paginaFin` int(11) DEFAULT NULL,
  `palabraClave1` varchar(45) DEFAULT NULL,
  `palabraClave2` varchar(45) DEFAULT NULL,
  `palabraClave3` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `subArea` varchar(45) DEFAULT NULL,
  `apoyoConacyt` varchar(2) DEFAULT NULL,
  `autores` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `idCapitulo` int(11) NOT NULL,
  `idLibrosCapitulo` int(11) NOT NULL,
  `tituloCapitulo` varchar(45) DEFAULT NULL,
  `numCapitulo` int(11) DEFAULT NULL,
  `paginaInicio` int(11) DEFAULT NULL,
  `paginaFin` int(11) DEFAULT NULL,
  `descripcion` varchar(4000) DEFAULT NULL,
  `autores` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `congresos`
--

CREATE TABLE `congresos` (
  `idCongreso` int(11) NOT NULL,
  `idInvestigadorCongreso` int(11) NOT NULL,
  `nombreCongreso` varchar(50) DEFAULT NULL,
  `trabajoPresentado` varchar(45) DEFAULT NULL,
  `nombreDocente` varchar(100) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `financiamiento` varchar(2) DEFAULT NULL,
  `importeFinanciado` int(7) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `tipoParticipacion` varchar(45) DEFAULT NULL,
  `palabraClave1` varchar(45) DEFAULT NULL,
  `palabraClave2` varchar(45) DEFAULT NULL,
  `palabraClave3` varchar(45) DEFAULT NULL,
  `colaboradores` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigadores`
--

CREATE TABLE `investigadores` (
  `idInvestigador` int(11) NOT NULL,
  `curp` varchar(18) DEFAULT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `paterno` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `materno` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `genero` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `paisNacimiento` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `domicilio` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `entidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pais` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pass` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `carAcademico` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `gradoAcademico` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipoPadron` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `investigadores`
--

INSERT INTO `investigadores` (`idInvestigador`, `curp`, `nombre`, `paterno`, `materno`, `genero`, `paisNacimiento`, `domicilio`, `entidad`, `pais`, `correo`, `pass`, `carAcademico`, `gradoAcademico`, `tipoPadron`) VALUES
(4, '12345', 'Oscar', 'Tapia', 'Carbajal', 'Masculino', 'MÃ©xico', '143 F poniente', 'Puebla', 'MÃ©xico', 'oscarsk69@gmail.com', '1234', 'Secretario', 'Especialidad', 'Tipo 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` ( 
  `idLibro` int(11) NOT NULL,
  `idInvestigadorLibro` int(11) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `titulo` varchar(70) DEFAULT NULL,
  `anioCreacion` int(11) DEFAULT NULL,
  `volumen` int(11) DEFAULT NULL,
  `tomo` int(11) DEFAULT NULL,
  `edicion` int(11) DEFAULT NULL,
  `editorial` varchar(45) DEFAULT NULL,
  `numPaginas` int(11) DEFAULT NULL,
  `financiamiento` varchar(2) DEFAULT NULL,
  `importeFinanciado` int(11) DEFAULT NULL,
  `estatus` varchar(10) DEFAULT NULL,
  `idioma` varchar(15) DEFAULT NULL,
  `palabraClave1` varchar(45) DEFAULT NULL,
  `palabraClave2` varchar(45) DEFAULT NULL,
  `palabraClave3` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `subArea` varchar(45) DEFAULT NULL,
  `apoyoConacyt` varchar(2) DEFAULT NULL,
  `Autores` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idProyecto` int(11) NOT NULL,
  `idInvestigadorProyecto` int(11) NOT NULL,
  `nombreProyecto` varchar(45) DEFAULT NULL,
  `lineaInvestigacion` varchar(45) DEFAULT NULL,
  `instanciaRegistro` varchar(45) DEFAULT NULL,
  `financiamiento` varchar(2) DEFAULT NULL,
  `importeFinanciado` int(11) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  `porcentajeAvance` int(11) DEFAULT NULL,
  `reconocimineto` varchar(2) DEFAULT NULL,
  `nomReconocimiento` varchar(45) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `subArea` varchar(45) DEFAULT NULL,
  `apoyoConacyt` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` ( 
  `idPublicacion` int(11) NOT NULL,
  `idInvestigadorPublicacion` int(11) NOT NULL,
  `isnn` varchar(45) DEFAULT NULL,
  `nombrePublicacion` varchar(45) DEFAULT NULL,
  `nombreRevista` varchar(45) DEFAULT NULL,
  `correoRevista` varchar(30) DEFAULT NULL,
  `paginaInicio` int(11) DEFAULT NULL,
  `paginaFin` int(11) DEFAULT NULL,
  `financiamiento` varchar(2) DEFAULT NULL,
  `importeFinanciado` int(11) DEFAULT NULL,
  `reconocimiento` varchar(2) DEFAULT NULL,
  `nombreReconocimiento` varchar(40) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `subArea` varchar(45) DEFAULT NULL,
  `apoyoConacyt` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `autores` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesis`
--

CREATE TABLE `tesis` (
  `idTesis` int(11) NOT NULL,
  `idInvestigadorTesis` int(11) NOT NULL,
  `nombreAutor` varchar(45) DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `gradoAcademico` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `subArea` varchar(45) DEFAULT NULL,
  `apoyoConacyt` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `fk_Articulo_Investigador1` (`idInvestigadorArticulo`);

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`idCapitulo`),
  ADD KEY `fk_Capitulos_Libros1` (`idLibrosCapitulo`);

--
-- Indices de la tabla `congresos`
--
ALTER TABLE `congresos`
  ADD PRIMARY KEY (`idCongreso`),
  ADD KEY `fk_Congreso_Investigador` (`idInvestigadorCongreso`);

--
-- Indices de la tabla `investigadores`
--
ALTER TABLE `investigadores`
  ADD PRIMARY KEY (`idInvestigador`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`),
  ADD KEY `fk_Libros_Investigadores1` (`idInvestigadorLibro`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idProyecto`),
  ADD KEY `fk_Proyectos_Investigadores1` (`idInvestigadorProyecto`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`idPublicacion`),
  ADD KEY `fk_Publicaciones_Investigadores1` (`idInvestigadorPublicacion`);

--
-- Indices de la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`idTesis`),
  ADD KEY `fk_Tesis_Investigadores1` (`idInvestigadorTesis`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  MODIFY `idCapitulo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `congresos`
--
ALTER TABLE `congresos`
  MODIFY `idCongreso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `investigadores`
--
ALTER TABLE `investigadores`
  MODIFY `idInvestigador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `idPublicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tesis`
--
ALTER TABLE `tesis`
  MODIFY `idTesis` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `fk_Articulo_Investigador1` FOREIGN KEY (`idInvestigadorArticulo`) REFERENCES `investigadores` (`idInvestigador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD CONSTRAINT `fk_Capitulos_Libros1` FOREIGN KEY (`idLibrosCapitulo`) REFERENCES `libros` (`idLibro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `congresos`
--
ALTER TABLE `congresos`
  ADD CONSTRAINT `fk_Congreso_Investigador` FOREIGN KEY (`idInvestigadorCongreso`) REFERENCES `investigadores` (`idInvestigador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_Libros_Investigadores1` FOREIGN KEY (`idInvestigadorLibro`) REFERENCES `investigadores` (`idInvestigador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `fk_Proyectos_Investigadores1` FOREIGN KEY (`idInvestigadorProyecto`) REFERENCES `investigadores` (`idInvestigador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `fk_Publicaciones_Investigadores1` FOREIGN KEY (`idInvestigadorPublicacion`) REFERENCES `investigadores` (`idInvestigador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD CONSTRAINT `fk_Tesis_Investigadores1` FOREIGN KEY (`idInvestigadorTesis`) REFERENCES `investigadores` (`idInvestigador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
mexilabc_fisicasysteminvestigadores