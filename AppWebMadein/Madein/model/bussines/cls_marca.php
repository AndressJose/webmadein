<?php
class cls_marca extends DAOMarca{
    public function llenarcombo(){
        $listar = '';
        foreach ($this->listar() as $value){
            $listar .='<option value="'.$value['productos'].'">'.$value['nombre_marca'].'</option>';
        }
    return $listar;
    }
}
?>
