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


if(isset($_POST['btn_registrar'])!=''){
    if($_POST['txt_nom_pro']!='' && $_POST['txt_fecha']!='' && $_POST['txt_nom_cliente']!='' && $_POST['txt_descripcion']!=''){
        $objdevo->setNom_producto($_POST['txt_nom_pro']);
        $objdevo->setFecha($_POST['txt_fecha']);
        $objdevo->setNom_cleinte($_POST['txt_nom_cliente']);
        $objdevo->setDescrip($_POST['txt_descripcion']);

        $v=$objdevo->agregar();

        if($v==1){

            $msn='Se registro';
        }else{
            $msn='Error';
        }  
    }else{
        $msn='Llene los campos correspondientes';
    }
}
if(isset($_POST['btn_listar'])!=''){
    $l=$objdevo->listar();
    $table="<table border=2><tr bgcolor=#FBCFFE><td>Nombre del producto</td><td>Fecha</td><td>Nombre del Cliente</td><td>Descripcion</td><td>Modificar</td><td>Eliminar</td></tr>";
    
    while ($o=$l->fetch(PDO::FETCH_ASSOC)){
        
        $table.='<tr><td>'.$o['nombre_producto']."</td><td>".$o['fecha']."</td><td>".$o['nombre_cliente']."</td><td>".$o['descripcion_devolucion'].'</td>
            <td><input type="image" src="../../view/img/modificar.gif" name="btn_modifi" value="' . $o['codigo_producto'] . '"<td><td><input type="image" 
                src="../../view/img/eliminar.gif" name="btn_eliminar" value="' . $o['codigo_producto'] . '"<td></tr>';
    }
    $table.="</table>";
    $msn=$table;
    
}
if(isset($_POST['btn_modifi'])!=''){
      $codigo=$_POST['btn_modifi'];
      $objdevo->setCod($_POST['btn_modifi']);
      
      
      $lle="select codigo_producto,nombre_producto, fecha, nombre_cliente, descripcion_devolucion from tbl_devoluciones where codigo_producto={$objdevo->getCod()}";
      $el=$objdevo->EjecutarConsulta($lle);
      foreach ($el as $value);
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
 if(isset($_POST['btn_eliminar'])!=''){
     $objdevo->setCod($_POST['btn_eliminar']);
     
     $e=$objdevo->eliminar();
     if($e==1){
         
         $msn='Eliminado con exito';
     }
     
 }

 include '../../view/Devolucion/vw_devoluciones.php';

?>
