<?php
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOProveedores.php';
include '../../model/bussines/cls_proveedor.php';
include '../../model/dao/DAOMarca.php';
include '../../model/bussines/cls_marca.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmarca= new cls_marca();
$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);
$combomar=$objmarca->llenarcombo();
$busp = new cls_proveedor();
$res='';
$value[0]='';
$value[1]='';
$value[2]='';
$value[3]='';
$value[4]='';
$value[5]='';
  
if(isset($_GET['cl'])!=''){    
    $busp->setCod_prove($_GET['cl']);
    $busp->bucarProveedor();
    $value[1]=$busp->getMarca();    
    $value[2]=$busp->getNom_empre();
    $value[3]=$busp->getNom_prod();
    $value[4]=$busp->getTele();   
    $value[5]=$busp->getEmail();
}
if(isset($_POST['btn_Modif'])!=''){
      $busp->setCod_prove($_POST['btn_Modif']);
      
      $lle="select codigo_proveedor, marca_productos, nombre_empresa, nombre_contacto, telefono, e_mail from tbl_proveedor where codigo_proveedor={$busp->getCod_prove()}";
      $el=$busp->EjecutarConsulta($lle);
      foreach ($el as $value);
  }
if(isset($_POST['btn_modificar'])!=''){
      
 
    $busp->setMarca($_POST['txt_mar_prove']);
    $busp->setNom_empre($_POST['txt_nom_empre']);
    $busp->setNom_prod($_POST['txt_nom_cont']);
    $busp->setTele($_POST['txt_tel_prove']);
    $busp->setEmail($_POST['txt_email_prove']);
    
    $mo=$busp->modificar();
    
    if($mo==1){
        
        $res='Se modifico con exito';
        
        }  else {
         
        $res='No se modifico';    
        }
  }
  include '../../view/proveedor/vw_modificar_proveeedor.php';
?>
