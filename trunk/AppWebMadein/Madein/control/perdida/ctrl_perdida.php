<?php
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOPerdidas.php';
include '../../model/bussines/cls_perdida.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);

$objper = new cls_perdida();
$msn='';

if(isset($_POST['btn_registrar'])!=''){
    if($_POST['txt_nombre']!='' && $_POST['txt_fecha']!='' && $_POST['txt_cantidad']!=''){
        $objper->setNom($_POST['txt_nombre']);
        $objper->setFecha($_POST['txt_fecha']);
        $objper->setCant($_POST['txt_cantidad']);

        $v=$objper->registrar();
        if($v==1){
            $msn='Registro';
        }else{
            $msn='No se registro';
        }
    }else{
        $msn='Llene los campos correspondientes';
    }
}
if(isset($_POST['btn_listar'])!=''){
    $l=$objper->listar();
    $table='<table border=1 color=red><tr bgcolor=green><td>nombre</td><td>Fecha</td><td>Cantidad</td></tr>';
    
    while ($r=$l->fetch(PDO::FETCH_ASSOC)){
        
        $table.='<tr><td>'.$r['nombre_producto'].'</td><td>'.$r['fecha'].'</td><td>'.$r['cantidad'].'</td></tr>';
    }
    $table.='</table>';
    $msn=$table;
}

include '../../view/perdida/vw_perdida.php';
?>
