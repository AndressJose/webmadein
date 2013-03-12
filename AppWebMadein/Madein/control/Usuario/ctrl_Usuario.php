<?php
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);

include '../../view/Usuario/vw_Usuarios.php';
?>
