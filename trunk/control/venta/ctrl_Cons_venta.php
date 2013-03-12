<?php

include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOVenta.php';
include '../../model/bussines/cls_venta.php';

$objcom = new cls_venta();
$codigo='';
$marca='';
$cantidad='';
$fecha='';
$total='';
$id='';

 
if (isset($_POST['btn_consultar'])!=''){
  $objcom->setcodcomp($_POST['txt_con_pro']);
  foreach($objcom->Consultar() as $r){    
    //$r['codigo_compra'];
    $codigo = $r['codigo_productos'];
    $marca=$r['marca_productos'];
    $cantidad=$r['cantidad'];
    $fecha=$r['fecha'];
    $total=$r['total'];
    $id =$_POST['txt_con_pro'];
    
  }
  
}



include '../../view/venta/Vw_Cons_venta.php';


?>
