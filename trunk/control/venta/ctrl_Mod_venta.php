<?php

include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOVenta.php';
include '../../model/bussines/cls_venta.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);
$objcom = new cls_venta();
$msj='';
$codigo='';
$marca='';
$cantidad='';
$total='';
$fecha='';

if(isset($_GET['cl'])!=''){
    $objcom->setcodcomp($_GET['cl']);
    $objcom->buscarventa();  
    $codigo=$objcom->getCodproduc();
    $marca=$objcom->getMarproduc();
    $cantidad=$objcom->getCantida();
    $total=$objcom->getVlrCompra();
    $fecha=$objcom->getFecCompra();
}
if (isset($_POST['btn_modificar'])!=''){
  $objcom->setcodcomp($_POST['id']);
  $objcom->setCodproduc($_POST['txt_cod_pro']);
  $objcom->setMarproduc($_POST['txt_mar_pro']);
  $objcom->setCantida($_POST['txt_cant']);
  $objcom->setFecCompra($_POST['txt_fec_com']);
  $objcom->setVlrCompra($_POST['txt_vlr_compra']);
   
  $m=$objcom->Modificar();
  
  if($m==1){
    $msj='Exito al modificar';
  }else{
    $msj='No modifico';
  }
   
   }
   


include '../../view/venta/Vw_Mod_venta.php';


?>
