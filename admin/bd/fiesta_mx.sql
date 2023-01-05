-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 01:47:10
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fiesta_mx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ajustes`
--

CREATE TABLE `ajustes` (
  `id_ajustes` int(11) NOT NULL,
  `Producto` varchar(40) DEFAULT NULL,
  `Motivo_ajuste` varchar(30) DEFAULT NULL,
  `Entrada` int(11) DEFAULT NULL,
  `Salida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ajustes`
--

INSERT INTO `ajustes` (`id_ajustes`, `Producto`, `Motivo_ajuste`, `Entrada`, `Salida`) VALUES
(1, 'Puerco c/chile Rojo', 'Faltante/Sobrante', 0, 0),
(2, 'Puerco c/chile Verde', 'Cambio de sabor', 0, 1),
(3, 'Pollo c/chile Rojo', 'Cambio de sabor', 0, 1),
(4, 'Pollo c/chile Verde', 'Cambio de sabor', 2, 0),
(5, 'Dulce c/piña', 'Faltante/Sobrante', 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancelar_venta`
--

CREATE TABLE `cancelar_venta` (
  `id_cventa` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` varchar(5) DEFAULT NULL,
  `Ticket` int(11) DEFAULT NULL,
  `Cancelar` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cancelar_venta`
--

INSERT INTO `cancelar_venta` (`id_cventa`, `Fecha`, `Hora`, `Ticket`, `Cancelar`) VALUES
(1, '2022-10-20', '08:00', 19, 'Cancelar'),
(2, '2022-10-20', '08:02', 20, 'Cancelar'),
(3, '2022-10-20', '08:03', 21, 'Cancelar'),
(4, '2022-10-20', '08:15', 22, 'Cancelar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_proveedor`
--

CREATE TABLE `compra_proveedor` (
  `Nombre` int(1) NOT NULL,
  `Referencia` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Compra` varchar(7) DEFAULT NULL,
  `Numero` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte_dia`
--

CREATE TABLE `corte_dia` (
  `id_corte` int(11) NOT NULL,
  `Concepto` varchar(5) DEFAULT NULL,
  `Producto` varchar(30) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Importe` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `corte_dia`
--

INSERT INTO `corte_dia` (`id_corte`, `Concepto`, `Producto`, `Cantidad`, `Importe`) VALUES
(1, 'RCP', 'Puerco c/chile Rojo', 51, 612),
(2, 'VCP', 'Puerco c/chile Verde', 19, 228),
(3, 'Q', 'Rajas c/queso', 24, 288),
(4, 'RPL', 'Pollo c/chile Rojo', 4, 48),
(5, 'VPL', 'Pollo c/chile Verde', 6, 72),
(6, 'PN', 'Dulce c/pasas y Nuez', 17, 204),
(7, 'PI', 'Dulce c/piña', 11, 132),
(8, 'PR', 'Cereza c/almendra', 3, 39),
(9, 'VCH', 'Vaso Champurrado', 2, 18),
(10, '1/2CH', 'Medio litro champurrado', 2, 36),
(11, 'AP', 'Litro atole piña', 35, 80),
(12, 'BU', 'Buñuelos de viento', 2, 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modificaciones_productos`
--

CREATE TABLE `modificaciones_productos` (
  `id_mp` int(11) NOT NULL,
  `Clave_producto` varchar(5) DEFAULT NULL,
  `Descripcion` varchar(30) DEFAULT NULL,
  `Orden_deseado` int(20) DEFAULT NULL,
  `Tipo_producto` varchar(5) DEFAULT NULL,
  `Precio_llevar` float DEFAULT NULL,
  `Precio_mesas` float DEFAULT NULL,
  `Costo` float DEFAULT NULL,
  `Baja_temporal` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modificaciones_productos`
--

INSERT INTO `modificaciones_productos` (`id_mp`, `Clave_producto`, `Descripcion`, `Orden_deseado`, `Tipo_producto`, `Precio_llevar`, `Precio_mesas`, `Costo`, `Baja_temporal`) VALUES
(1, 'RCP', 'PUERCO c/chile ROJO', 1, 'T', 12, 12, 6, 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modificaciones_proveedores`
--

CREATE TABLE `modificaciones_proveedores` (
  `id_mproveedor` int(11) NOT NULL,
  `Identificacion` int(5) DEFAULT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Tipo_producto` varchar(5) DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `Ciudad` varchar(30) DEFAULT NULL,
  `Telefono` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modificaciones_proveedores`
--

INSERT INTO `modificaciones_proveedores` (`id_mproveedor`, `Identificacion`, `Nombre`, `Tipo_producto`, `Domicilio`, `Ciudad`, `Telefono`) VALUES
(1, 1, 'MARGARITA GONZALEZ SANCHEZ C.', 'T', 'FCO. I. MADERO 624 NTE', 'Durango, Dgo.', '8-11-50-93');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nueva_venta`
--

CREATE TABLE `nueva_venta` (
  `Producto` varchar(40) DEFAULT NULL,
  `Existencia` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Descuento` varchar(10) DEFAULT NULL,
  `Piezas_Litros` int(11) DEFAULT NULL,
  `Precio_Unitario` varchar(20) DEFAULT NULL,
  `Precio` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nueva_venta`
--

INSERT INTO `nueva_venta` (`Producto`, `Existencia`, `Cantidad`, `Descuento`, `Piezas_Litros`, `Precio_Unitario`, `Precio`) VALUES
('Puerco c/chile Rojo', 81, 2, '0', 2, '$12', '$24'),
('Puerco c/chile Verde', 19, 0, '0', 0, '$12', '$0'),
('Rajas c/queso', 32, 0, '0', 0, '$12', '$0'),
('Pollo c/aceitunas', 14, 0, '0', 0, '$12', '$0'),
('Pollo c/chile Rojo', 36, 0, '0', 0, '$12', '$0'),
('Pollo c/chile Verde', 44, 0, '0', 0, '$12', '$0'),
('Dulce c/pasas y Nuez', 14, 0, '0', 0, '$12', '$0'),
('Dulce c/piña', 19, 0, '0', 0, '$12', '$0'),
('Cereza c/almendra', 15, 0, '0', 0, '$13', '$0'),
('Vaso Champurrado', 1992, 0, '0', 0, '$9', '$0'),
('Medio litro champurrado', 4035, 0, '0', 0, '$18', '$0'),
('Litro champurrado', 8543, 0, '0', 0, '$35', '$0'),
('Vaso atole piña', 19, 0, '0', 0, '$10', '$0'),
('Medio litro atole piña', 4295, 0, '0', 0, '$20', '$0'),
('Litro atole piña', 19, 0, '0', 0, '$40', '$0'),
('Vaso', 19, 0, '0', 0, '$12', '$0'),
('Nuez 150gr', 19, 0, '0', 0, '$12', '$0'),
('Nuez 500gr', 19, 0, '0', 0, '$45', '$0'),
('Buñuelos', 19, 0, '0', 0, '$12', '$0'),
('Buñuelos al viento', 19, 0, '0', 0, '$12', '$0'),
('Miel', 19, 0, '0', 0, '$12', '$0'),
('Miel grande', 19, 0, '0', 0, '$24', '$0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `Clave` varchar(5) DEFAULT NULL,
  `Descripcion` varchar(30) DEFAULT NULL,
  `Precio_llevar` float DEFAULT NULL,
  `Precio_mesas` float DEFAULT NULL,
  `Costo` float DEFAULT NULL,
  `Status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `Clave`, `Descripcion`, `Precio_llevar`, `Precio_mesas`, `Costo`, `Status`) VALUES
(1, 'RPC', 'PUERCO c/chile ROJO', 12, 12, 6, ''),
(2, 'VPC', 'PUERCO c/chile VERDE', 12, 12, 6, ''),
(3, 'Q', 'Rajas c/queso', 12, 12, 6, ''),
(4, 'AC', 'Pollo c/aceitunas', 12, 12, 6, ''),
(5, 'RPL', 'Pollo c/chile rojo', 12, 12, 6, ''),
(6, 'VPL', 'Pollo c/chile verde', 12, 12, 6, ''),
(7, 'PN', 'Dulce c/pasas y NUEZ', 12, 12, 6, ''),
(8, 'PI', 'Dulce c/PIÑA', 12, 12, 6, ''),
(9, 'PR', 'CEREZA CON ALM.', 13, 13, 7, ''),
(10, 'VCH', 'Vaso de champurrado', 9, 9, 7, ''),
(11, '1/2CH', 'MEDIO litro champurrado', 18, 18, 0, ''),
(12, 'CH', 'LTO CHAMPURRADO------->>', 35, 35, 25, ''),
(13, 'VAT', 'Vaso de ATOLE', 10, 10, 8, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL,
  `Tipo` varchar(10) DEFAULT NULL,
  `Ciudad` varchar(20) DEFAULT NULL,
  `Telefono` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `Nombre`, `Tipo`, `Ciudad`, `Telefono`) VALUES
(1, 'Atoles y Champurrados de F.M.', 'Bebidas', 'Durango, Dgo.', '13-34-52'),
(2, 'Buñueleros', 'Otros', 'Durango, Dgo.', '8279355'),
(3, 'MARGARITA GONZALEZ SANCHEZ C.', 'Tamales', 'Durango, Dgo.', '8-11-50-93');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_existencias`
--

CREATE TABLE `reporte_existencias` (
  `id_re` int(11) NOT NULL,
  `Clave` varchar(5) DEFAULT NULL,
  `Producto` varchar(30) DEFAULT NULL,
  `Existencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reporte_existencias`
--

INSERT INTO `reporte_existencias` (`id_re`, `Clave`, `Producto`, `Existencia`) VALUES
(1, 'RPC', 'Puerco c/chile Rojo', 71),
(2, 'VPC', 'Puerco c/chile Verde', 27),
(3, 'Q', 'Rajas c/queso', 14),
(4, 'AC', 'Pollo c/aceitunas', 14),
(5, 'RPL', 'Pollo c/chile Rojo', 20),
(6, 'VPL', 'Pollo c/chile Verde', 19),
(7, 'PN', 'Dulce c/pasas y Nuez', 4),
(8, 'PI', 'Dulce c/piña', 14),
(9, 'PR', 'Cereza c/almendra', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `report_venta_corte`
--

CREATE TABLE `report_venta_corte` (
  `id_rvc` int(11) NOT NULL,
  `Concepto` varchar(5) DEFAULT NULL,
  `Producto` varchar(30) DEFAULT NULL,
  `Cantidad` int(2) DEFAULT NULL,
  `Importe` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `report_venta_corte`
--

INSERT INTO `report_venta_corte` (`id_rvc`, `Concepto`, `Producto`, `Cantidad`, `Importe`) VALUES
(1, 'RPC', 'Puerco c/chile Rojo', 51, 612),
(2, 'VPC', 'Puerco c/chile Verde', 19, 228),
(3, 'Q', 'Rajas c/queso', 24, 288),
(4, 'RPL', 'Pollo c/chile Rojo', 4, 48),
(5, 'VPL', 'Pollo c/chile Verde', 6, 72),
(6, 'PN', 'Dulce c/pasas y Nuez', 17, 204),
(7, 'PI', 'Dulce c/piña', 11, 132),
(8, 'PR', 'Cereza c/almendra', 3, 39),
(9, 'VCH', 'Vaso Champurrado', 2, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Nombre` varchar(10) DEFAULT NULL,
  `Contraseña` varchar(8) DEFAULT NULL,
  `Tipo_usuario` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Nombre`, `Contraseña`, `Tipo_usuario`) VALUES
(1, 'Don tamal', '12345678', 'Super Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ajustes`
--
ALTER TABLE `ajustes`
  ADD PRIMARY KEY (`id_ajustes`);

--
-- Indices de la tabla `cancelar_venta`
--
ALTER TABLE `cancelar_venta`
  ADD PRIMARY KEY (`id_cventa`);

--
-- Indices de la tabla `compra_proveedor`
--
ALTER TABLE `compra_proveedor`
  ADD PRIMARY KEY (`Nombre`);

--
-- Indices de la tabla `corte_dia`
--
ALTER TABLE `corte_dia`
  ADD PRIMARY KEY (`id_corte`);

--
-- Indices de la tabla `modificaciones_productos`
--
ALTER TABLE `modificaciones_productos`
  ADD PRIMARY KEY (`id_mp`);

--
-- Indices de la tabla `modificaciones_proveedores`
--
ALTER TABLE `modificaciones_proveedores`
  ADD PRIMARY KEY (`id_mproveedor`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `reporte_existencias`
--
ALTER TABLE `reporte_existencias`
  ADD PRIMARY KEY (`id_re`);

--
-- Indices de la tabla `report_venta_corte`
--
ALTER TABLE `report_venta_corte`
  ADD PRIMARY KEY (`id_rvc`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ajustes`
--
ALTER TABLE `ajustes`
  MODIFY `id_ajustes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cancelar_venta`
--
ALTER TABLE `cancelar_venta`
  MODIFY `id_cventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `corte_dia`
--
ALTER TABLE `corte_dia`
  MODIFY `id_corte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `modificaciones_productos`
--
ALTER TABLE `modificaciones_productos`
  MODIFY `id_mp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `modificaciones_proveedores`
--
ALTER TABLE `modificaciones_proveedores`
  MODIFY `id_mproveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reporte_existencias`
--
ALTER TABLE `reporte_existencias`
  MODIFY `id_re` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `report_venta_corte`
--
ALTER TABLE `report_venta_corte`
  MODIFY `id_rvc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
