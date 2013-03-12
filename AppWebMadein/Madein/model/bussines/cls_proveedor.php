<?php

 class cls_proveedor extends DAOProveedores{
   
   public function llenarcombo(){
     $combo = '';
     foreach ($this->listar()->fetchAll() as $valor){
       if($valor!=null){
        $combo .='<option value="'.$valor['codigo_proveedor'].'">'.$valor['nombre_empresa'].'</option>';
       }
     }
     return $combo;
   }
   public function bucarProveedor(){
       foreach ($this->consultar() as $value){
           if($value['estado']==1){
               $this->setMarca($value['marca_productos']);
               $this->setNom_empre($value['nombre_empresa']);
               $this->setNom_prod($value['nombre_contacto']);
               $this->setTele($value['telefono']);
               $this->setEmail($value['e_mail']);
           }
       }
   }
}
?>

