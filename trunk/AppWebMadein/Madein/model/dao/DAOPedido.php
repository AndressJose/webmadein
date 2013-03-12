<?php
class DAOPedido implements ICrud{
    
    private $db,$codPedido,$nomPedido,$cantPedido,$fechaPedido;

    function __construct() {
        $this->db = DataBase::Conexion();      
    }
    
    public function agregar() {
        $registrar="INSERT INTO tbl_pedidos(CodPedido,NombrePedido,Cantidad,Fecha)VALUES (null,'$this->nomPedido',$this->cantPedido,'$this->fechaPedido')";
        return $this->db->Exec($registrar);
    }
    
    public function buscar() {
        $consultar="SELECT * FROM tbl_pedidos WHERE CodPedido=".$this->codPedido.";";
        return $this->db->Query($consultar);
    }
    
    public function listar() {
        $listar="SELECT * FROM tbl_pedidos";
        return $this->db->Query($listar);
    }
    
    public function eliminar() {
        $Eliminar="DELETE FROM tbl_pedidos WHERE CodPedido=$this->codPedido";
        return $this->db->Exec($Eliminar);
    }
    
    public function modificar() {
        $Modificar="UPDATE tbl_pedidos SET NombrePedido='$this->nomPedido',Cantidad=$this->cantPedido,Fecha='$this->fechaPedido' WHERE CodPedido=$this->codPedido";
        return $this->db->Exec($Modificar);
    }

    public function getCodPedido() {
        return $this->codPedido;
    }

    public function setCodPedido($codPedido) {
        $this->codPedido = $codPedido;
    }

    public function getNomPedido() {
        return $this->nomPedido;
    }

    public function setNomPedido($nomPedido) {
        $this->nomPedido = $nomPedido;
    }

    public function getCantPedido() {
        return $this->cantPedido;
    }

    public function setCantPedido($cantPedido) {
        $this->cantPedido = $cantPedido;
    }

    public function getFechaPedido() {
        return $this->fechaPedido;
    }

    public function setFechaPedido($fechaPedido) {
        $this->fechaPedido = $fechaPedido;
    }


    
    
    
    
    
    
    
}
?>
