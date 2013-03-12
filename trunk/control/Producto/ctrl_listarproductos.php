<?php
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOProducto.php';
include '../../model/bussines/cls_producto.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);


$objproducto = new cls_producto();

$lista = $objproducto->ListarProductosActivos();

include '../../view/Producto/vw_listarproductos.php';
?>
