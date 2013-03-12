<?php


class DAODevoluciones implements ICrud{
 
    private $db,$cod,$nom_producto,$fecha,$nom_cleinte,$descrip;
    
    function __construct() {
    
    $this->db = DataBase::Conexion();
    
    }
    
     public function agregar() {
        $regis="insert into tbl_devoluciones (nombre_producto, fecha, nombre_cliente, descripcion_devolucion) values ('$this->nom_producto',
                '$this->fecha','$this->nom_cleinte','$this->descrip')";
        return $this->db->Exec($regis);
    }
    public function listar (){
        
        $lis="select * from tbl_devoluciones";
        return $this->db->Query($lis);
    }
    public function modificar(){
        
        $modi="update tbl_devoluciones set nombre_producto='$this->nom_producto',fecha='$this->fecha',nombre_cliente='$this->nom_cleinte',descripcion_devolucion='$this->descrip' where 
                codigo_producto='$this->cod'";
        return $this->db->Exec($modi);
    }
    public function eliminar(){
        $eli="delete from tbl_devoluciones where codigo_producto=$this->cod ";
        return $this->db->Exec($eli);
        
    }
    
    public function buscar() {
      $query='select * from tbl_devoluciones where codigo_producto='.$this->cod;
      $resulset = $this->db->Query($query);
      return $resulset->fetchAll();
    }
    
    public function getNom_producto() {
        return $this->nom_producto;
    }

    public function setNom_producto($nom_producto) {
        $this->nom_producto = $nom_producto;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getNom_cleinte() {
        return $this->nom_cleinte;
    }

    public function setNom_cleinte($nom_cleinte) {
        $this->nom_cleinte = $nom_cleinte;
    }

    public function getDescrip() {
        return $this->descrip;
    }

    public function setDescrip($descrip) {
        $this->descrip = $descrip;
    }  

    public function setCod($cod) {
        $this->cod = $cod;
    }
}





?>
