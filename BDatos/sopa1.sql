-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2022 a las 01:32:19
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sopa1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombreCliente` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(20) DEFAULT NULL,
  `apellidoMaterno` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefonoCliente` varchar(10) DEFAULT NULL,
  `correo` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombreCliente`, `apellidoPaterno`, `apellidoMaterno`, `direccion`, `telefonoCliente`, `correo`) VALUES
(1, 'Genaro', 'Jose', 'Martinez', 'Los Angeles S/N', '9514632661', 'josegmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_estudios`
--

CREATE TABLE `nivel_estudios` (
  `id_nivelEstudios` int(11) NOT NULL,
  `nivel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nivel_estudios`
--

INSERT INTO `nivel_estudios` (`id_nivelEstudios`, `nivel`) VALUES
(1, 'secundaria'),
(2, 'bachilerato'),
(3, 'licenciatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `RFC` varchar(13) NOT NULL,
  `id_nivelEstudios` int(11) NOT NULL,
  `area` varchar(30) NOT NULL,
  `nombreEmpleado` varchar(30) NOT NULL,
  `apellidoPaterno` varchar(20) DEFAULT NULL,
  `apellidoMaterno` varchar(20) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(70) DEFAULT NULL,
  `tipoSangre` varchar(10) DEFAULT NULL,
  `fechaIngreso` date NOT NULL,
  `estatusPersonal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`RFC`, `id_nivelEstudios`, `area`, `nombreEmpleado`, `apellidoPaterno`, `apellidoMaterno`, `telefono`, `correo`, `tipoSangre`, `fechaIngreso`, `estatusPersonal`) VALUES
('ELI2015L', 2, 'VENTAS', 'Elianet', 'Aragon', 'Aragon', '564684', 'eli@gmail.com', 'O+', '2022-12-01', 'activo'),
('JOMG000510', 2, 'Recursos Humanos', 'Genaro', 'Jose', 'Martinez', '9514632618', 'l20920129@voaxaca.tecnm.mx', 'O+', '2022-12-01', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id_tipoUsuario` varchar(30) NOT NULL,
  `directorio` varchar(50) NOT NULL,
  `descripcion` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id_tipoUsuario`, `directorio`, `descripcion`) VALUES
('1', 'dsddss', 'RH'),
('2', 'wefrwef', 'Ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` varchar(50) NOT NULL,
  `RFC` varchar(13) NOT NULL,
  `id_tipoUsuario` varchar(30) NOT NULL,
  `contraseña` varchar(32) NOT NULL,
  `estatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `RFC`, `id_tipoUsuario`, `contraseña`, `estatus`) VALUES
('', 'JOMG000510', '2', 'd41d8cd98f00b204e9800998ecf8427e', ''),
('genaro', 'JOMG000510', '1', '202cb962ac59075b964b07152d234b70', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `nivel_estudios`
--
ALTER TABLE `nivel_estudios`
  ADD PRIMARY KEY (`id_nivelEstudios`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`RFC`),
  ADD KEY `id_nivelEstudios` (`id_nivelEstudios`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id_tipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `RFC` (`RFC`),
  ADD KEY `id_tipoUsuario` (`id_tipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `nivel_estudios`
--
ALTER TABLE `nivel_estudios`
  MODIFY `id_nivelEstudios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`id_nivelEstudios`) REFERENCES `nivel_estudios` (`id_nivelEstudios`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`RFC`) REFERENCES `personal` (`RFC`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_tipoUsuario`) REFERENCES `tipo_usuarios` (`id_tipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
