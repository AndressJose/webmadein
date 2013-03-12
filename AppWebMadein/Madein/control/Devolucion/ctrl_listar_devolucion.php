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

    $l=$objdevo->listar();
    $table="<table border=2><tr bgcolor=#FBCFFE><td>Nombre del producto</td><td>Fecha</td><td>Nombre del Cliente</td><td>Descripcion</td><td>Modificar</td><td>Eliminar</td></tr>";
    
    while ($o=$l->fetch(PDO::FETCH_ASSOC)){
        
        $table.='<tr><td>'.$o['nombre_producto']."</td><td>".$o['fecha']."</td><td>".$o['nombre_cliente']."</td><td>".$o['descripcion_devolucion'].'</td>
            <td><a href="../../control/Devolucion/ctrl_modificar_devolucion.php?cl='.$o['codigo_producto'].'"><img src="../../view/img/modificar.gif"></img></a></td><td><input type="image" 
                src="../../view/img/eliminar.gif" name="btn_eliminar" value="' . $o['codigo_producto'] . '"<td></tr>';
    }
    $table.="</table>";
    $msn=$table;
    
 if(isset($_POST['btn_eliminar'])!=''){
     $objdevo->setCod($_POST['btn_eliminar']);
     
     $e=$objdevo->eliminar();
     if($e==1){
         
         $msn='Eliminado con exito';
     }
     
 }
 include '../../view/Devolucion/vw_listar_devolucion.php'; 
?>
