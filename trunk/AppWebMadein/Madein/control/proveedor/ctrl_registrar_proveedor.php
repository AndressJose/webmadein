<?php
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOProveedores.php';
include '../../model/bussines/cls_proveedor.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);

$busp = new cls_proveedor();
$res='';

if(isset($_POST['btn_resgistrar'])!=''){    
    $co1=$_POST['txt_nom_cont'];
    if($co1==null){
        
        
        $res='Por favor ingrese todos los datos correspodientes';
    }else{
    
    $busp->setMarca($_POST['txt_mar_prove']);
    $busp->setNom_empre($_POST['txt_nom_empre']);
    $busp->setNom_prod($_POST['txt_nom_cont']);
    $busp->setTele($_POST['txt_tel_prove']);
    $busp->setEmail($_POST['txt_email_prove']);
    
    $e=$busp->agregar();
    
    if($e==1){
        
        $res="Registro";
    }else{
        
        $res="No Registro";
            }        
    }
}


include '../../view/proveedor/vw_Provedores.php';
?>
