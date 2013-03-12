-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Dic 12, 2012 alle 18:01
-- Versione del server: 5.5.16
-- Versione PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_madein`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_agendaonline`
--

CREATE TABLE IF NOT EXISTS `tbl_agendaonline` (
  `codigo_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `codigo_servicio` int(11) NOT NULL,
  PRIMARY KEY (`codigo_agenda`),
  KEY `fk_agenda_servicio` (`codigo_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_compra`
--

CREATE TABLE IF NOT EXISTS `tbl_compra` (
  `codigo_compra` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_productos` int(11) NOT NULL,
  `marca_productos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `total` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`codigo_compra`),
  KEY `fk_compra_productos` (`codigo_productos`),
  KEY `fk_compra_marca` (`marca_productos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Dump dei dati per la tabella `tbl_compra`
--

INSERT INTO `tbl_compra` (`codigo_compra`, `codigo_productos`, `marca_productos`, `cantidad`, `fecha`, `total`, `estado`) VALUES
(1, 2, 3, 100, '11/12/2012', 1000, 0),
(2, 1, 1, 100, '2012-12-12', 123, 0),
(3, 1, 2, 12, '2012-12-12', 1246, 0),
(4, 1, 1, 20, '2012-12-12', 500, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_detalleventa`
--

CREATE TABLE IF NOT EXISTS `tbl_detalleventa` (
  `codigo_venta` int(11) NOT NULL,
  `codigo_productos` int(11) NOT NULL,
  `precio_unitario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  KEY `fk_detalle_venta` (`codigo_venta`),
  KEY `fk_detalle_productos` (`codigo_productos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_devoluciones`
--

CREATE TABLE IF NOT EXISTS `tbl_devoluciones` (
  `codigo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_cliente` varchar(35) NOT NULL,
  `descripcion_devolucion` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_empleados`
--

CREATE TABLE IF NOT EXISTS `tbl_empleados` (
  `codigo_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empleado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_empleado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dirreccion_empleado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cargo_empleado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_facturacion`
--

CREATE TABLE IF NOT EXISTS `tbl_facturacion` (
  `codigo_factura` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_productos` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nit_empresa` int(11) NOT NULL,
  `iva` int(11) DEFAULT NULL,
  `precio_unitario` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_factura`),
  KEY `fk_factura_productos` (`codigo_productos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_marcaproductos`
--

CREATE TABLE IF NOT EXISTS `tbl_marcaproductos` (
  `productos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_marca` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`productos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `tbl_marcaproductos`
--

INSERT INTO `tbl_marcaproductos` (`productos`, `nombre_marca`) VALUES
(1, 'yambal'),
(2, 'Esika'),
(3, 'Tinturas el mono');

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_modulo`
--

CREATE TABLE IF NOT EXISTS `tbl_modulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id_padre` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=47 ;

--
-- Dump dei dati per la tabella `tbl_modulo`
--

INSERT INTO `tbl_modulo` (`id`, `nombre`, `url`, `id_padre`, `descripcion`, `estado`) VALUES
(1, 'Inicio', '../../control/inicio/ctrl_inicio.php', 1, 'Pagina principal', 1),
(2, 'Catálogo', '''../../control/Catalogo/crtl_Cataini.php''', 2, 'permite agregar nuevos modulos a la pagina web', 1),
(3, 'Productos', '../../control/Catalogo/ctrl_catalogo.php', 2, 'modifica un modulo', 1),
(4, 'Productos', '''../../control/Producto/ctrl_Product.php''', 11, '', 1),
(5, 'Agregar', '''../../control/Producto/ctrl_Regispro.php''\n', 4, '', 1),
(6, 'Modificar', '''../../control/Producto/ctrl_modificarproducto.php''', 4, '', 1),
(7, 'Devolución', '''../../control/Devolucion/ctrl_Devolucion.php''', 11, '', 1),
(8, 'Pedidos', '''../../control/pedido/ctrl_pedido.php''', 11, '', 1),
(9, 'Perdidas', '''../../control/perdida/ctrl_perdida.php''', 11, '', 1),
(10, 'Venta', '', 10, '', 1),
(11, 'Inventario', '', 11, '', 1),
(12, 'Servicios', '''../../control/Servicio/ctrl_Servicios.php'',''content'')', 2, '', 1),
(13, 'Agenda', '''../../control/Agenda/ctrl_Agenda.php''', 13, '', 1),
(14, 'Administrar', '', 14, '', 1),
(15, 'Usuarios', '''../../control/Usuario/crtl_Usuini.php''', 14, '', 1),
(16, 'Agregar ', '''../../control/Usuario/ctrl_Usuario.php''', 15, '', 1),
(17, 'Modificar', '''../../control/Usuario/ctrl_ModUsu.php''', 15, '', 1),
(18, 'Agregar Cita', '''../../control/cita/ctrl_cita.php''', 13, '', 1),
(19, 'Observaciones', '''../../control/proveedor/ctrl_proobserrva.php''', 25, '', 1),
(20, 'Contáctanos', '''../../control/inicio/ctrl_contacto.php''', 20, '', 1),
(22, 'Facturación', '''../../control/Factura/ctrl_Factura.php''', 22, '', 1),
(24, 'Listar', '''../../control/Producto/ctrl_listarproductos.php''', 4, '', 1),
(25, 'Proveedor', '', 14, '', 1),
(26, 'cancelar cita', '''../../control/cita/ctrl_cancelarcita.php''', 13, '', 1),
(27, 'Agregar ', '''../../control/proveedor/ctrl_registrar_proveedor.php''', 25, '', 1),
(28, 'Modificar', '''../../control/proveedor/ctrl_modificar_proveedor.php''', 25, '', 1),
(29, 'listar', '''../../control/proveedor/ctrl_listar_proveedor.php''', 25, '', 1),
(30, 'Agregar', '''../../control/Devolucion/ctrl_Devolucion.php''', 7, '', 1),
(31, 'Modificar', '''../../control/Devolucion/ctrl_modificar_devolucion.php''', 7, '', 1),
(32, 'Listar', '''../../control/Devolucion/ctrl_listar_devolucion.php''', 7, '', 1),
(33, 'Agregar', '''../../control/perdida/ctrl_perdida.php''', 9, '', 1),
(34, 'listar', '''../../control/perdida/ctrl_listar_perdida.php''', 9, '', 1),
(35, 'Agregar venta', '''../../control/venta/ctrl_venta.php''', 10, '', 1),
(36, 'modificar venta', '''../../control/venta/ctrl_Mod_venta.php''', 10, '', 1),
(37, 'Listar venta', '''../../control/venta/ctrl_Listar_venta.php''', 10, '', 1),
(38, '', '', 0, '', 0),
(39, 'a', 'a', 0, 'a', 1),
(40, '0', '0', 0, '0', 0),
(41, '0', '0', 0, '0', 0),
(42, '0', '0', 0, '0', 0),
(43, '0', '0', 0, '0', 0),
(44, '0', '0', 0, '0', 0),
(45, '0', '0', 0, '0', 0),
(46, 'a', 'a', 0, 'a', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_pedidos`
--

CREATE TABLE IF NOT EXISTS `tbl_pedidos` (
  `CodPedido` int(11) NOT NULL AUTO_INCREMENT,
  `NombrePedido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`CodPedido`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `tbl_pedidos`
--

INSERT INTO `tbl_pedidos` (`CodPedido`, `NombrePedido`, `Cantidad`, `Fecha`) VALUES
(2, 'doÃ±a teresa', 1000, '2012-12-09');

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_productos`
--

CREATE TABLE IF NOT EXISTS `tbl_productos` (
  `codigo_productos` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_productos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nombre_productos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio_productos` int(11) NOT NULL,
  `precio_salida` int(11) NOT NULL,
  `estado` smallint(6) NOT NULL,
  PRIMARY KEY (`codigo_productos`),
  KEY `fk_productoso_tipo` (`tipo_productos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `tbl_productos`
--

INSERT INTO `tbl_productos` (`codigo_productos`, `tipo_productos`, `cantidad`, `nombre_productos`, `precio_productos`, `precio_salida`, `estado`) VALUES
(1, 1, 123, '123', 13, 123, 1),
(2, 1, 1000000, 'vesua 123', 500, 550, 1),
(3, 1, 5, 'a', 100, 1500, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_productosperdidos`
--

CREATE TABLE IF NOT EXISTS `tbl_productosperdidos` (
  `codigo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`codigo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_proveedor`
--

CREATE TABLE IF NOT EXISTS `tbl_proveedor` (
  `codigo_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `marca_productos` int(11) NOT NULL,
  `nombre_empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `e_mail` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`codigo_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `tbl_proveedor`
--

INSERT INTO `tbl_proveedor` (`codigo_proveedor`, `marca_productos`, `nombre_empresa`, `nombre_contacto`, `telefono`, `e_mail`, `estado`) VALUES
(3, 1, 'asd', 'sdajjg', '21', '231', 0),
(4, 2, 'estefa LTDA', 'estefa', '5555555', 'jajajajajja', 0),
(5, 1, 'wee', 'sf', '45345', 'dfgdfbgdf', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_servicio`
--

CREATE TABLE IF NOT EXISTS `tbl_servicio` (
  `codigo_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_servicio` int(11) NOT NULL,
  `precio_servicio` int(11) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo_servicio`),
  KEY `fk_servicios_tipo` (`tipo_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_tipoproducto`
--

CREATE TABLE IF NOT EXISTS `tbl_tipoproducto` (
  `tipo_productos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_productos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `medida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`tipo_productos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Dump dei dati per la tabella `tbl_tipoproducto`
--

INSERT INTO `tbl_tipoproducto` (`tipo_productos`, `nombre_tipo_productos`, `medida`) VALUES
(1, 'tinturas', 'caja');

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_tiposervicio`
--

CREATE TABLE IF NOT EXISTS `tbl_tiposervicio` (
  `tipo_servicios` int(11) NOT NULL AUTO_INCREMENT,
  `tnombre_servicio` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`tipo_servicios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `codigo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_usuario` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `login_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password_usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `email_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `tbl_ventas`
--

CREATE TABLE IF NOT EXISTS `tbl_ventas` (
  `codigo_venta` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_empleado` int(11) NOT NULL,
  `nombre_empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `descuento` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  `retencion_fuente` int(11) NOT NULL,
  `tipo_pago` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`codigo_venta`),
  KEY `fk_venta_empleado` (`codigo_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `tbl_agendaonline`
--
ALTER TABLE `tbl_agendaonline`
  ADD CONSTRAINT `fk_agenda_servicio` FOREIGN KEY (`codigo_servicio`) REFERENCES `tbl_servicio` (`codigo_servicio`);

--
-- Limiti per la tabella `tbl_compra`
--
ALTER TABLE `tbl_compra`
  ADD CONSTRAINT `fk_compra_marca` FOREIGN KEY (`marca_productos`) REFERENCES `tbl_marcaproductos` (`productos`),
  ADD CONSTRAINT `fk_compra_productos` FOREIGN KEY (`codigo_productos`) REFERENCES `tbl_productos` (`codigo_productos`);

--
-- Limiti per la tabella `tbl_detalleventa`
--
ALTER TABLE `tbl_detalleventa`
  ADD CONSTRAINT `fk_detalle_productos` FOREIGN KEY (`codigo_productos`) REFERENCES `tbl_productos` (`codigo_productos`),
  ADD CONSTRAINT `fk_detalle_venta` FOREIGN KEY (`codigo_venta`) REFERENCES `tbl_ventas` (`codigo_venta`);

--
-- Limiti per la tabella `tbl_facturacion`
--
ALTER TABLE `tbl_facturacion`
  ADD CONSTRAINT `fk_factura_productos` FOREIGN KEY (`codigo_productos`) REFERENCES `tbl_productos` (`codigo_productos`);

--
-- Limiti per la tabella `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD CONSTRAINT `fk_productoso_tipo` FOREIGN KEY (`tipo_productos`) REFERENCES `tbl_tipoproducto` (`tipo_productos`);

--
-- Limiti per la tabella `tbl_servicio`
--
ALTER TABLE `tbl_servicio`
  ADD CONSTRAINT `fk_servicios_tipo` FOREIGN KEY (`tipo_servicio`) REFERENCES `tbl_tiposervicio` (`tipo_servicios`);

--
-- Limiti per la tabella `tbl_ventas`
--
ALTER TABLE `tbl_ventas`
  ADD CONSTRAINT `fk_venta_empleado` FOREIGN KEY (`codigo_empleado`) REFERENCES `tbl_empleados` (`codigo_empleado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
