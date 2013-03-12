<?php
class cls_producto extends DAOProducto{
    public function BuscarProductoID(){
        foreach ($this->buscar() as $valor){
            $this->_nombre_productos = $valor['nombre_productos'];
            $this->_cantidad = $valor['cantidad'];
            $this->_precio_productos = $valor['precio_productos'];
            $this->_precio_salida = $valor['precio_salida'];
            $this->_tipo_productos = 'selected="'.$valor['tipo_productos'].'"';
        }
    }
    
    public function BuscarProductoNombre(){
        foreach ($this->buscarxnombre() as $valor){
            $this->_cantidad = $valor['cantidad'];
            $this->_precio_productos = $valor['precio_producto'];
            $this->_precio_salida = $valor['precio_salida'];
            $this->_tipo_productos = 'selected="'.$valor['tipo_producto'].'"';
        }
    }
    public function ListarProductosActivos(){
      $lista ='';
      foreach ($this->listar() as $value){
        if($value['estado']==1){
          $lista .= '<tr>';
          $lista .= '<td>'.$value['codigo_productos'].'</td>';
          $lista .= '<td>'.$value['tipo_productos'].'</td>';
          $lista .= '<td>'.$value['cantidad'].'</td>';
          $lista .= '<td>'.$value['nombre_productos'].'</td>';
          $lista .= '<td>'.$value['precio_productos'].'</td>';
          $lista .= '<td>'.$value['precio_salida'].'</td>';
          $lista .= "<td><a href='../../control/Producto/ctrl_modificarproducto.php?cl=".$value['codigo_productos']."'><img src='../../view/img/modificar.gif' /></a></td>";
          $lista .= "<td><a hfer='../../control/Producto/ctrl_EliProduct.phpcl=".$value['codigo_productos']."'><img src='../../view/img/eliminar.gif'></img></a></td>";
          $lista .= '</tr>';
        }
      }
      return $lista;
    }
    
    public function ListarCombo(){
        $lista = "";
        foreach ($this->listar() as $value){
            $lista .='<option value="'.$value['codigo_productos'].'">'.$value['nombre_productos'].'</option>';
        }
        return $lista;
    }
}
?>
