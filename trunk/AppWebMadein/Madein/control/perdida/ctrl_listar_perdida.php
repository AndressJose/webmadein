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


    $l=$objper->listar();
    $table='<table border=1 color=red><tr bgcolor=#FBCFFE><td>nombre</td><td>Fecha</td><td>Cantidad</td></tr>';
    
    while ($r=$l->fetch(PDO::FETCH_ASSOC)){
        
        $table.='<tr><td>'.$r['nombre_producto'].'</td><td>'.$r['fecha'].'</td><td>'.$r['cantidad'].'</td></tr>';
    }
    $table.='</table>';
    $msn=$table;

 include '../../view/perdida/vw_listar_perdida.php';   
?>
