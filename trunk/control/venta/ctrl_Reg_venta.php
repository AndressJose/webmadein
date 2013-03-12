<?php
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOVenta.php';
include '../../model/bussines/cls_venta.php';

$objcom = new cls_venta();
$msj='';


if (isset($_POST['btn_registrar'])!=''){
  
  
  $e=$_POST['txt_cod_pro'];
  
  if($e==''){
    $msj='Ingrese todos los campos correspondientes';
    
  }else{
   $objcom->setCodproduc($_POST['txt_cod_pro']);
  $objcom->setMarproduc($_POST['txt_mar_pro']);
  $objcom->setCantida($_POST['txt_cant']);
  $objcom->setFecCompra($_POST['txt_fec_com']);
   $objcom->setVlrCompra($_POST['txt_vlr_compra']);

  
  
  $o=$objcom->Registrar();
  
  if($o==1){
    $msj='Registro completo';
    
  }else{
    $msj='error';
  }

  }
}


include '../../view/venta/Wv_Registar_Venta.php';



?>
