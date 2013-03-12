<?php

class DAOProveedores implements ICrud{
    private $cod_prove,$marca,$Nom_empre,$nom_prod,$tele,$email,$db;
    
    function __construct() {
        
        $this->db = DataBase::Conexion();
    }
    
    public function agregar() {              
        $regis="insert into tbl_proveedor (codigo_proveedor, marca_productos, nombre_empresa, nombre_contacto, telefono, e_mail) values
            (null, $this->marca, '$this->Nom_empre', '$this->nom_prod', '$this->tele', '$this->email')";
        return $this->db->Exec($regis);
    }
    public function consultar (){
        $con="select * from tbl_proveedor where codigo_proveedor= $this->cod_prove";
        $resulset = $this->db->Query($con);
        return $resulset->fetchAll();
    }
     public function modificar(){
        
        $mod="update tbl_proveedor set  marca_productos=$this->marca, nombre_empresa='$this->Nom_empre', nombre_contacto='$this->nom_prod', 
            telefono='$this->tele', e_mail='$this->email' Where codigo_proveedor='$this->cod_prove'";
        return $this->db->Exec($mod);
    }
    public function eliminar(){
        
        $eli="update tbl_proveedor set estado=0 Where codigo_proveedor='$this->cod_prove'";
        return $this->db->Exec($eli);
    }
    
    Public function listar(){
        
        $list="select * from tbl_proveedor where estado = 1";
        return $this->db->Query($list);
        
    }
    public function buscar() {      
    }
  
    public function EjecutarConsulta($Query = "") {
        return $this->db->Query($Query);
    }

    public function getCod_prove() {
        return $this->cod_prove;
    }

    public function setCod_prove($cod_prove) {
        $this->cod_prove = $cod_prove;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getNom_empre() {
        return $this->Nom_empre;
    }

    public function setNom_empre($Nom_empre) {
        $this->Nom_empre = $Nom_empre;
    }

    public function getNom_prod() {
        return $this->nom_prod;
    }

    public function setNom_prod($nom_prod) {
        $this->nom_prod = $nom_prod;
    }

    public function getTele() {
        return $this->tele;
    }

    public function setTele($tele) {
        $this->tele = $tele;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    } 
}

?>
