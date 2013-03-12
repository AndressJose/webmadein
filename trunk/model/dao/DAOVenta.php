<?php


class DAOVenta implements ICrud{
 
  
  private $db,$Codproduc,$marproduc,$cantida,$FecCompra,$VlrCompra,$codcomp;
  
  public function __construct() {
    $this->db = DataBase::Conexion();
  } 
  
  public function agregar() {
    $reg="insert into tbl_compra (codigo_productos,marca_productos,cantidad,fecha, total,estado) values ($this->Codproduc,'$this->marproduc',$this->cantida,'$this->FecCompra','$this->VlrCompra',1)";
    return $this->db->Exec($reg);
  }
  
    public function listar() {
        
    $lis="select * from tbl_compra";
    return $this->db->Query($lis);
    
  }
       
  public function modificar() {
   
    $mod="UPDATE tbl_compra set codigo_productos='$this->Codproduc',marca_productos='$this->marproduc',
      cantidad='$this->cantida',fecha='$this->FecCompra',total='$this->VlrCompra' where codigo_compra='$this->codcomp'";
    return $this->db->Exec($mod);
    
  }  
  
  public function buscar() {
        $consul="select * from tbl_compra where codigo_compra = $this->codcomp";
        $resulset = $this->db->Query($consul);
    return $resulset->fetchAll();
    
  }
  
  public function eliminar(){
        
        $eli="update tbl_compra set estado = 0 where codigo_compra=".$this->codcomp.";";
        return $this->db->Exec($eli);
  
  }
  public function getCodproduc() {
    return $this->Codproduc;
  }

  public function setCodproduc($Codproduc) {
    $this->Codproduc = $Codproduc;
  }

  public function getMarproduc() {
    return $this->marproduc;
  }

  public function setMarproduc($marproduc) {
    $this->marproduc = $marproduc;
  }

  public function getCantida() {
    return $this->cantida;
  }

  public function setCantida($cantida) {
    $this->cantida = $cantida;
  }

  public function getFecCompra() {
    return $this->FecCompra;
  }

  public function setFecCompra($FecCompra) {
    $this->FecCompra = $FecCompra;
  }

  public function getVlrCompra() {
    return $this->VlrCompra;
  }

  public function setVlrCompra($VlrCompra) {
    $this->VlrCompra = $VlrCompra;
  }

  public function setcodcomp($codcomp) {
    $this->codcomp = $codcomp;
    
  }

 }

?>
