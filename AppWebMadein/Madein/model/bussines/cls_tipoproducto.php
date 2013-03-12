<?php
class cls_tipoproducto extends DAOTipo_productos{
    
    public function ListarTipoProductos(){
        $combo='';
        foreach ($this->listar() as $Valor){
            $combo .='<option value="'.$Valor['tipo_productos'].'">'.$Valor['nombre_tipo_productos'].'</option>';
        }
        return $combo;
    }
}
?>
