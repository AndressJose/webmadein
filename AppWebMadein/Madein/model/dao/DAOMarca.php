<?php
class DAOMarca implements ICrud{
    private $_producto;
    private $_marca;
    private  $_db;
    
    function __construct() {
        $this->_db = DataBase::Conexion();
    }
    
    public function agregar() {
        
    }

    public function buscar() {
        
    }

    public function eliminar() {
        
    }

    public function listar() {
        $query = 'select * from tbl_marcaproductos';
        $resulset = $this->_db->Query($query);
        return $resulset->fetchAll();        
    }

    public function modificar() {
        
    }

    
    public function get_producto() {
        return $this->_producto;
    }

    public function set_producto($_producto) {
        $this->_producto = $_producto;
    }

    public function get_marca() {
        return $this->_marca;
    }

    public function set_marca($_marca) {
        $this->_marca = $_marca;
    }



}
?>
