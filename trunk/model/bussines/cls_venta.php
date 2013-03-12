<?php

class cls_venta extends DAOVenta {
  public function buscarventa(){
      foreach ($this->buscar() as $value){
          $this->setCantida($value['cantidad']);
          $this->setFecCompra($value['fecha']);
          $this->setMarproduc($value['marca_productos']);
          $this->setVlrCompra($value['total']);
          $this->setCodproduc($value['codigo_productos']);
      }
  }
}
?>
