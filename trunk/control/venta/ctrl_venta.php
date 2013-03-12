<?php

include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOVenta.php';
include '../../model/bussines/cls_venta.php';
include '../../model/dao/DAOProducto.php';
include '../../model/bussines/cls_producto.php';
include '../../model/dao/DAOMarca.php';
include '../../model/bussines/cls_marca.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmarca = new cls_marca();
$objproducto = new cls_producto();
$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);

$producto = $objproducto->ListarCombo();

$marcaprod = $objmarca->llenarcombo();

$objcom = new cls_venta();
$msj='';
$codigo='';
$marca='';
$cantidad='';
$fecha='';
$total='';
$eliminado='';

if (isset($_POST['btn_registrar'])!=''){
  
  
  $e=$_POST['txt_vlr_compra'];
  if($e=='' && $_POST['txt_fec_com']>=date('Y-m-d')){
    $msj='Ingrese todos los campos correspondientes';
    
  }else{
   $objcom->setCodproduc($_POST['txt_cod_pro']);
  $objcom->setMarproduc($_POST['txt_mar_pro']);
  $objcom->setCantida($_POST['txt_cant']);
  $objcom->setFecCompra($_POST['txt_fec_com']);
   $objcom->setVlrCompra($_POST['txt_vlr_compra']);

  
  
  $o=$objcom->agregar();
  
  if($o==1){
    $msj='Registro completo';
    
  }else{
    $msj='error';
  }

  }
}
if (isset($_POST['btn_listar'])!=''){
  $m=$objcom->Listar();
  $table="<table border=1><tr bgcolor=red ><td>Codigo Compra</td><td>Codigo Producto</td><td>Marca Producto</td><td>Cantidad</td><td>Fecha</td><td>Total</td><td>Modificar</td><td>Eliminar</td></tr>";
  
  while ($r=$m->fetch(PDO::FETCH_ASSOC)){
    if($r['estado']==null){
      $table.="<tr><td>".$r['codigo_compra']."</td><td>".$r['codigo_productos']."</td><td>".$r['marca_productos']."</td><td>".$r['cantidad']."</td><td>".$r['fecha']."</td><td>".$r['total']."</td><td><input type='submit' src='../View/img/icono_modificar.gif' value='".$r['codigo_compra']."'  name='btn_modi' </td><td><input type='submit' value='".$r['codigo_compra']."' name='btn_eli' </td></tr>";
    }else{
      $eliminado .="<table border=1><tr bgcolor=red ><td>Codigo Compra</td><td>Codigo Producto</td><td>Marca Producto</td><td>Cantidad</td><td>Fecha</td><td>Total</td><td>Modificar</td><td>Eliminar</td></tr>";
      $eliminado .="<tr><td>".$r['codigo_compra']."</td><td>".$r['codigo_productos']."</td><td>".$r['marca_productos']."</td><td>".$r['cantidad']."</td><td>".$r['fecha']."</td><td>".$r['total']."</td>
                    <td><input type='submit' src='../View/img/icono_modificar.gif' value='".$r['codigo_compra']."'  name='btn_modi' </td></td>
                    <td><input type='submit' src='../View/img/eliminar.gif' value='".$r['codigo_compra']."' name='btn_eli' </td></tr>";
      $eliminado .= "</table>";
    }
    
  }
  $table.="</table>";
  $msj=$table;

}  
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

if (isset($_POST['btn_modi'])!=''){
  $objcom->setcodcomp($_POST['btn_modi']);
  foreach($objcom->Consultar() as $r){    
    //$r['codigo_compra'];
    $codigo = $r['codigo_productos'];
    $marca=$r['marca_productos'];
    $cantidad=$r['cantidad'];
    $fecha=$r['fecha'];
    $total=$r['total'];
    $id =$_POST['btn_modi'];
    
  }
  
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
   
   
    if(isset($_POST['btn_eliminar'])!=''){
      $objcom->setcodcomp($_POST['id']);
      $e=$objcom->eliminar();
      
      if($e==1){
          $msj='compra eliminada';
          
      } 
      
    else{
    $msj='error';
    }

      
  }
  
   if(isset($_POST['btn_eli'])!=''){
      $objcom->setcodcomp($_POST['btn_eli']);
      $e=$objcom->eliminar();
      
      if($e==1){
          $msj='compra eliminada';
          
      } 
      
    else{
    $msj='error';
    }

      
  }


include '../../view/venta/vw_venta.php';


?>
