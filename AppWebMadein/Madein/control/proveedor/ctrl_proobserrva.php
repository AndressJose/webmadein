<?php 
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOProveedores.php';
include '../../model/bussines/cls_proveedor.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objpro = new cls_proveedor();
$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);

$proveedor = $objpro->llenarcombo();

include '../../view/proveedor/vw_proobserva.php';
?>
