<?php
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOProducto.php';
include '../../model/bussines/cls_producto.php';
include '../../model/dao/DAOTipo_productos.php';
include '../../model/bussines/cls_tipoproducto.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);


$objproducto= new cls_producto();
$objtipo = new cls_tipoproducto();
$tipo = $objtipo->ListarTipoProductos();
$mensaje='';

if(isset($_POST['btn_guardar'])!=''){
    if($_POST['txt_nombre']!='' && $_POST['txt_cantidad']!='' && $_POST['txt_precioentrada']!='' &&$_POST['txt_preventa']!='' && $_POST['cbo_tipo']!=''){
    $objproducto->set_nombre_productos($_POST['txt_nombre']);
    $objproducto->set_cantidad($_POST['txt_cantidad']);
    $objproducto->set_precio_productos($_POST['txt_precioentrada']);
    $objproducto->set_precio_salida($_POST['txt_preventa']);
    $objproducto->set_tipo_productos($_POST['cbo_tipo']);
    
    $objproducto->agregar();    
    }
    else{
        echo 'llene los campos obligatorios';
    }
}

include '../../view/Producto/vw_regispro.php';
?>
