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

$nombre = '';
$cantidad='';
$precioentrada='';
$preciosalida='';
$tipop='';

if(isset($_GET['cl'])!=''){
    $id = $_GET['cl'];
    $objproducto->set_codigo_productos($id);
    $objproducto->BuscarProductoID();
    $nombre = $objproducto->get_nombre_productos();
    $cantidad = $objproducto->get_cantidad();
    $precioentrada = $objproducto->get_precio_productos();
    $preciosalida = $objproducto->get_precio_salida();
    $tipop = $objproducto->get_tipo_productos();
}

if(isset($_POST['btn_buscar'])!=''){
    $objproducto->set_codigo_productos($_POST['txt_nombre']);
    $objproducto->BuscarProductoNom();
    $cantidad = $objproducto->get_cantidad();
    $precioentrada = $objproducto->get_precio_productos();
    $preciosalida = $objproducto->get_precio_salida();
    $tipop = $objproducto->get_tipo_productos();
}

if(isset($_POST['btn_modificar'])!=''){
    $objproducto->set_codigo_productos($id);
    $objproducto->set_nombre_productos($_POST['nombre']);
    $objproducto->set_cantidad($_POST['txt_cantidad']);
    $objproducto->set_precio_productos($_POST['precioentrada']);
    $objproducto->set_precio_salida($_POST['preciosalida']);
    $objproducto->set_tipo_productos($_POST['cbo_tipo']);
    
    $objproducto->modificar();
}
include '../../view/Producto/vw_modificarproducto.php';

?>
