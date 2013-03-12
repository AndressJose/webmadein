<?php
class DAOProducto implements ICrud{
    protected $_codigo_productos;
    protected $_tipo_productos;
    protected $_cantidad;
    protected $_nombre_productos;
    protected $_precio_productos;
    protected $_precio_salida;
    protected $_db;
    
    function __construct() {
        $this->_db = DataBase::Conexion();
    }
    
    public function set_codigo_productos($_codigo_productos) {
        $this->_codigo_productos = $_codigo_productos;
    }

    public function get_tipo_productos() {
        return $this->_tipo_productos;
    }

    public function set_tipo_productos($_tipo_productos) {
        $this->_tipo_productos = $_tipo_productos;
    }

    public function get_cantidad() {
        return $this->_cantidad;
    }

    public function set_cantidad($_cantidad) {
        $this->_cantidad = $_cantidad;
    }

    public function get_nombre_productos() {
        return $this->_nombre_productos;
    }

    public function set_nombre_productos($_nombre_productos) {
        $this->_nombre_productos = $_nombre_productos;
    }

    public function get_precio_productos() {
        return $this->_precio_productos;
    }

    public function set_precio_productos($_precio_productos) {
        $this->_precio_productos = $_precio_productos;
    }

    public function get_precio_salida() {
        return $this->_precio_salida;
    }

    public function set_precio_salida($_precio_salida) {
        $this->_precio_salida = $_precio_salida;
    }
    
    public function agregar(){
        $query = 'INSERT INTO  db_madein.tbl_productos (
            codigo_productos,
            tipo_productos ,
            cantidad ,
            nombre_productos ,
            precio_productos ,
            precio_salida,
            estado
            )
            VALUES (
            null, '.$this->_tipo_productos.',  '.$this->_cantidad.',  "'.$this->_nombre_productos.'",  '
            .$this->_precio_productos.',  '.$this->_precio_salida.', 1);';  
        
        if($this->_db->Query($query)){
          return true;
        }else{
          return false;
        }
    }
    
    public function modificar(){
        $query='UPDATE  db_madein.tbl_productos 
            SET  tipo_productos =  '.$this->_tipo_productos.',
            cantidad =  '.$this->_cantidad.',
            nombre_productos =  '.$this->_nombre_productos.',
            precio_productos =  '.$this->_precio_productos.',
            precio_salida =  '.$this->_precio_salida.' 
            WHERE  tbl_productos.codigo_productos ='.$this->_codigo_productos.';';
        if($this->_db->Query($query)){
          return true;
        }else{
          return false;
        }
    }
    
    public function eliminar() {
        $query='UPDATE  db_madein.tbl_productos 
            SET  estado =  0           
            WHERE  tbl_productos.codigo_productos ='.$this->_codigo_productos.';';
        if($this->_db->Query($query)){
          return true;
        }else{
          return false;
        }
    }
    
    public function buscar(){
        $query = 'select * from tbl_productos 
            where codigo_productos = '.$this->_codigo_productos.' and estado = 1;';
        $resulset = $this->_db->Query($query);
        return $resulset->fetchAll();
    }
    
    public function buscarxnombre(){
        $query = 'select * from tbl_productos 
            where nombre_productos = '.$this->_nombre_productos.' and estado = 1;';
        $resulset = $this->_db->Query($query);
        return $resulset->fetchAll();
    }

    public function listar(){
        $query = 'select * from tbl_productos;';
        $resultset = $this->_db->Query($query);
        
        return $resultset->fetchAll();
    }
}
?>
