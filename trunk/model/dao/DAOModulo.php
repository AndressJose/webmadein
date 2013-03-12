<?php
class DAOModulo{
    protected $_db;
    
    function __construct() {
        $this->_db = DataBase::Conexion();
    }

    public function Listar(){
        $query = 'select * from tbl_modulo where estado=1';
        $resulset = $this->_db->Query($query);
        return $resulset->fetchAll();
    }
}
?>
