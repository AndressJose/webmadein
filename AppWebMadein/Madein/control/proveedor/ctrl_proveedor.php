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
$value[0]='';
$value[1]='';
$value[2]='';
$value[3]='';
$value[4]='';
$value[5]='';


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
if(isset($_POST['btn_consultar'])!=''){
    $cod=$_POST['txt_cod_cons'];
    
    if($cod==null){
        
        $res='Por favor ingrese un codigo para consultar';
    }else{
    $busp->setCod_prove($cod);
    $resu=$busp->consular();
    
    
    
    $table="<table method='post' border=1 align='center'><tr bgcolor=#FBCFFE><th>Codigo Provedor</th><th>Marca</th><th>Nombre Empresa</th><th>Nombre Contacto</th><th>Telefono</th><th>Email</th><th>Modificar</th><th>Eliminar</th></tr>";
    while($p=$resu->fetch(PDO::FETCH_ASSOC)){
        
        $table.='<tr><td>'.$p['codigo_proveedor'].'</td><td>'.$p['marca_productos'].'</td><td>'.$p['nombre_empresa'].'</td><td>'.
                $p['nombre_contacto'].'</td><td>'.$p['telefono'].'</td><td>'.$p['e_mail'].'</td><td><input type="image" src="../../view/img/modificar.gif" value="' . $p['codigo_proveedor'] . '" name="btn_Modif" id="boton"></td>
                    <td><input type="image" name="btn_elim" src="../../view/img/eliminar.gif" value="' . $p['codigo_proveedor'] . '"</td></tr>';
        
    }
    $table.='</table>';
    $res=$table;
    }
}
  if(isset($_POST['btn_elim'])!=''){
      $busp->setCod_prove($_POST['btn_elim']);
      $e=$busp->eliminar();
      
      if($e==1){
          $res='Eliminado Proveedor con exito';
          
      }
      
  }
  if(isset($_POST['btn_listar'])!=''){
    $resu=$busp->listar();
    $table="<table method='post' border=1 align='center'><tr bgcolor=#FBCFFE><th>Codigo Provedor</th><th>Marca</th><th>Nombre Empresa</th><th>Nombre Contacto</th><th>Telefono</th><th>Email</th></tr>";
    while($p=$resu->fetch(PDO::FETCH_ASSOC)){
        
        $table.='<tr><td>'.$p['codigo_proveedor'].'</td><td>'.$p['marca_productos'].'</td><td>'.$p['nombre_empresa'].'</td><td>'.
                $p['nombre_contacto'].'</td><td>'.$p['telefono'].'</td><td>'.$p['e_mail'].'</td></tr>';
        
    }
    $table.='</table>';
    $res=$table;
    
      
  }
  if(isset($_POST['btn_Modif'])!=''){
      $busp->setCod_prove($_POST['btn_Modif']);
      
      $lle="select codigo_proveedor, marca_productos, nombre_empresa, nombre_contacto, telefono, e_mail from tbl_proveedor where codigo_proveedor={$busp->getCod_prove()}";
      $el=$busp->EjecutarConsulta($lle);
      foreach ($el as $value);
  }
  if(isset($_POST['btn_modificar'])!=''){
      
    $busp->setCod_prove($_POST['txt_cod_prove']);
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

include '../../view/proveedor/vw_Provedores.php';
?>
