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
$resu=$busp->listar();

$table="<table method='post' border=1 align='center'><tr bgcolor=#FBCFFE><th>Codigo Provedor</th><th>Marca</th><th>Nombre Empresa</th><th>Nombre Contacto</th><th>Telefono</th><th>Email</th><th>Modificar</th><th>Eliminar</th></tr>";
    while($p=$resu->fetch(PDO::FETCH_ASSOC)){
        
        $table.='<tr><td>'.$p['codigo_proveedor'].'</td><td>'.$p['marca_productos'].'</td><td>'.$p['nombre_empresa'].'</td><td>'.
                $p['nombre_contacto'].'</td><td>'.$p['telefono'].'</td><td>'.$p['e_mail'].'</td><td><a href="../../control/proveedor/ctrl_modificar_proveedor.php?cl='.$p['codigo_proveedor'].'"><img src="../../view/img/modificar.gif"></img></a></td>
                    <td><input type="image" name="btn_elim" src="../../view/img/eliminar.gif" value="' . $p['codigo_proveedor'] . '"</td></tr>';
        
    }
    $table.='</table>';
    $res=$table;
    
    if(isset($_POST['btn_elim'])!=''){
      $busp->setCod_prove($_POST['btn_elim']);
      $e=$busp->eliminar();
      
      if($e==1){
          $res='Eliminado Proveedor con exito';        
      }
  }
  include '../../view/proveedor/vw_listar_proveeedor.php';
?>
