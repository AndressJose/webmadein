<?php
 
class DAOperdidas implements ICrud {
    private $db,$nom,$fecha,$cant;


function __construct() {
    
    $this->db = DataBase::Conexion();
}
public function agregar() {
    $re="insert into tbl_productosperdidos (nombre_producto, fecha, cantidad) values ('$this->nom','$this->fecha',$this->cant)";
    return $this->db->Exec($re);
    
}
public function listar (){
    
    $lis="select * from tbl_productosperdidos";
    return $this->db->Query($lis);
}

public function buscar() {
  
}
public function eliminar() {
  
}
public function modificar() {
  
}

public function getNom() {
return $this->nom;

}
public function setNom($nom) {
$this->nom = $nom;
}

public function getFecha() {
return $this->fecha;
}

public function setFecha($fecha) {
$this->fecha = $fecha;
}

public function getCant() {
return $this->cant;
}

public function setCant($cant) {
$this->cant = $cant;
}


}


?>
