<?php
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/abstract/ICrud.php';
include '../../model/dao/DAOPedido.php';
include '../../model/bussines/cls_pedido.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);


$objPedido=new cls_pedido();
$msj='';
$value[0]='';
$value[1]='';
$value[2]='';
$value[3]='';

if(isset($_POST['BtnRegistrar'])!= ''){    
    if($_POST['NombrePedido']!='' && $_POST['CantidadPedido']!='' && $_POST['FechaPedido']!=''){
        $objPedido->setNomPedido($_POST['NombrePedido']);
        $objPedido->setCantPedido($_POST['CantidadPedido']);
        $objPedido->setFechaPedido($_POST['FechaPedido']);

        $almacenarPedido=$objPedido->agregar();
        if($almacenarPedido==1){
            $msj='Registrado con exito';
        }else{
            $msj='fallo';
        }
    }else{
        $msj='Llene los campos correspondiente';
    }
}

if(isset($_POST['BtnConsultar'])!=''){
    $codConsultar=$_POST['CodigoConsultar'];
    $objPedido->setCodPedido($codConsultar);
    $Consultar=$objPedido->buscar();
    
    $tabla='<table border=1 ><tr bgcolor=#FBCFFE><td>Codigo</td><td>Nombre</td><td>Cantidad</td><td>Fecha</td><td>Eliminar</td><td>Modificar</td></tr>';
    
    while($Recorrer=$Consultar->fetch(PDO::FETCH_ASSOC)){
        $tabla.='<tr><td>'.$Recorrer['CodPedido'].'</td><td>'.$Recorrer['NombrePedido'].'</td><td>'.$Recorrer['Cantidad'].'</td><td>'.$Recorrer['Fecha'].'</td><td><input type="image" src="../../view/img/eliminar.gif" value="'.$Recorrer['CodPedido'].'" name="BtnEliminar" /></td><td><input type="image" src="../../view/img/modificar.gif" value="'.$Recorrer['CodPedido'].'" name="BtnModificar" /></td></tr>';
    }
    $tabla.='</table>';
    $msj=$tabla;

}

if(isset($_POST['BtnListar'])!=''){

    $listar=$objPedido->Listar();
    $tabla='<table border=1 ><tr bgcolor=#FBCFFE><td>Codigo</td><td>Nombre</td><td>Cantidad</td><td>Fecha</td></tr>';
    
    while($Recorrer=$listar->fetch(PDO::FETCH_ASSOC)){
        $tabla.='<tr><td>'.$Recorrer['CodPedido'].'</td><td>'.$Recorrer['NombrePedido'].'</td><td>'.$Recorrer['Cantidad'].'</td><td>'.$Recorrer['Fecha'].'</td></tr>';
    }
    $tabla.='</table>';
    $msj=$tabla;
    
}

if(isset($_POST['BtnEliminar'])!=''){

    $objPedido->setCodPedido($_POST['BtnEliminar']);
    $Eliminar=$objPedido->Eliminar();
    
    if($Eliminar==1){
        $msj='Eliminado';        
        
        }
    
    }
    
    if(isset($_POST['BtnModificar'])!=''){
        $codConsultar= $_POST['id'];
        $objPedido->setCodPedido($_POST['BtnModificar']);        
        $Acarga=$objPedido->buscar();
        
        foreach($Acarga as $value);
        
        }


if(isset($_POST['BtnActualizar'])!= ''){
    
    $objPedido->setCodPedido($_POST['id']);
    $objPedido->setNomPedido($_POST['NombrePedido']);
    $objPedido->setCantPedido($_POST['CantidadPedido']);
    $objPedido->setFechaPedido($_POST['FechaPedido']);
    
    $almacenarPedido=$objPedido->Modificar();
    if($almacenarPedido==1){
        $msj='Registrado con exito';
    }else{
        $msj='fallo';
    }
}



include '../../view/pedido/vw_pedido.php';
?>
