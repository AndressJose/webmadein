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
$eliminado='';


  $m=$objcom->Listar();
  $table="<table border=1><tr  bgcolor=#FBCFFE ><td>Codigo Compra</td><td>Codigo Producto</td><td>Marca Producto</td><td>Cantidad</td><td>Fecha</td><td>Total</td><td>Modificar</td><td>Eliminar</td></tr>";
  
  while ($r=$m->fetch(PDO::FETCH_ASSOC)){
      if($r['estado']==1){
        $table.="<tr><td>".$r['codigo_compra']."</td><td>".$r['codigo_productos']."</td><td>".$r['marca_productos']."</td><td>".$r['cantidad']."</td><td>".$r['fecha']."</td><td>".$r['total']."</td><td><a href='../../control/venta/ctrl_Mod_venta.php?cl=".$r['codigo_compra']."'><img src='../../view/img/modificar.gif'></img></a></td><td><input type='image' src='../../view/img/eliminar.gif' value='".$r['codigo_compra']."' name='btn_eli' </td></tr>";
      }
      $eliminado .="<table border=1><tr bgcolor=#FBCFFE ><td>Codigo Compra</td><td>Codigo Producto</td><td>Marca Producto</td><td>Cantidad</td><td>Fecha</td><td>Total</td><td>Modificar</td><td>Eliminar</td></tr>";
      $eliminado .="<tr><td>".$r['codigo_compra']."</td><td>".$r['codigo_productos']."</td><td>".$r['marca_productos']."</td><td>".$r['cantidad']."</td><td>".$r['fecha']."</td><td>".$r['total']."</td>
                    <td><a href='../../control/venta/ctrl_Mod_venta.php?cl=".$r['codigo_compra']."><img src='../../view/img/modificar.gif'></img></a></td></td>
                    <td><input type='image' src='../../view/img/eliminar.gif' value='".$r['codigo_compra']."' name='btn_eli' </td></tr>";
      $eliminado .= "</table>";
  
    
  }
  $table.="</table>";
  $msj=$table;

if(isset($_POST['btn_eli'])!=''){
    $objcom->setcodcomp($_POST['btn_eli']);
    $objcom->eliminar();
    $msj='eliminado';
    include '../../view/venta/Vw_Elim_venta.php';
    exit();
}


include '../../view/venta/Vw_Listar_venta.php';


?>
