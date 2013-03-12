<?php
class cls_devoluciones extends DAODevoluciones{
    public function buscardevolucion(){
        foreach ($this->buscar() as $value){
            $this->setDescrip($value['descripcion_devolucion']);
            $this->setFecha($value['fecha']);
            $this->setNom_cleinte($value['nombre_cliente']);
            $this->setNom_producto($value['nombre_producto']);
        }
    }
}
?>
