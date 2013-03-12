<?php
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAODevoluciones.php';
include '../../model/bussines/cls_devoluciones.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);


$objdevo = new cls_devoluciones();
$msn='';
$value[1]='';
$value[2]='';
$value[3]='';
$value[4]='';

if(isset($_GET['cl'])!=''){
    $objdevo->setCod($_GET['cl']);
    $objdevo->buscardevolucion();
    $value[1]=$objdevo->getNom_producto();
    $value[2]=$objdevo->getFecha();
    $value[3]=$objdevo->getNom_cleinte();
    $value[4]=$objdevo->getDescrip();
}

 if(isset($_POST['btn_modificar'])!=''){
    $objdevo->setCod($_POST['txt_id']);
    $objdevo->setNom_producto($_POST['txt_nom_pro']);
    $objdevo->setFecha($_POST['txt_fecha']);
    $objdevo->setNom_cleinte($_POST['txt_nom_cliente']);
    $objdevo->setDescrip($_POST['txt_descripcion']);
    
    $t=$objdevo->modificar();
    
    if($t==1){
        
        $msn='Se modifico';
    }else{
        
        $msn='error';
    }
     
     
 } 
 include '../../view/Devolucion/vw_modificar_devolucion.php';
?>
