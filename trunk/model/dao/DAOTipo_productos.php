<?php

class DAOTipo_productos implements ICrud{
    private $_tipo_productos;
    private $_nombre_tipo_productos;
    private $_medida;
    private $_db;
    
    function __construct() {
        $this->_db = DataBase::Conexion();
    }
    
    public function agregar() {
        $query ='INSERT INTO  db_madein.tbl_tipoproducto (
            
            nombre_tipo_productos ,
            medida
            )
            VALUES (
            '.$this->_nombre_tipo_productos.',  '.$this->_medida.');';
        
        $resulset = $this->_db->Query($query);
        return $resulset->fetchAll();
    }

    public function buscar() {        
    }

    public function eliminar() {      
    }

    public function listar() {
        $query = 'select * from tbl_tipoproducto;';
        
        $resulset = $this->_db->Query($query);
        return $resulset->fetchAll();
    }

    public function modificar() {
        $query ='UPDATE  db_madein.tbl_tipoproducto 
            SET  nombre_tipo_productos =  '.$this->_nombre_tipo_productos.', medida'.$this->_medida.' 
            WHERE  tbl_tipoproducto.tipo_productos ='.$this->_tipo_productos.';';
        $resulset = $this->_db->Query($query);
        return $resulset->fetchAll();
    }
}
?>
