<?php
class modelo extends DAOModulo{
    
    public function ListarMenu($check=true){        
        if($check == false){
          $class = 'class="menu"';
        }else{
           $class = '';
        }
        $menu =' <UL '.$class.'>';
        foreach ($this->Listar() as $value) {
            if($value['id']==$value['id_padre']){
                 if($check){                                   
                      $campo ='<input type="checkbox" name="chk_modulo[] value="'.$value['id'].'">';                   
                      $campof = '';
                  }else{
                      if($value['url']=='#' ||  $value['url']==''){
                        $href='';
                      }else{
                        $href = "href=".$value['url'];
                      }
                      $campo = '<a '.$href.' class="parent"><span>';
                      $campof = '</span></a>';
                      
                  }
                  if($check == false){
                      $class = 'class="parent"';
                  }else{
                      $class = '';
                  }                 
                  $menu .='<li>';
                  $menu .= $campo.utf8_encode($value['nombre']).$campof;
                  $menu .= $this->ListarSubmenu($value['id'], $check);
                  $menu .= '</li>';    

            }
        }    
        $menu .= '</ul>';
        return $menu;
    }
    
    private function ListarSubmenu($padre=0,$check=true){
        $menu = '';
        if($this->ContarSubmenu($padre)>0){
          $menu .= '<div><ul>';
          foreach ($this->Listar() as $value) {
              if(($padre==$value['id_padre'])&&($value['id']!=$padre)){                  
                  if($check){                                   
                      $campo ='<input type="checkbox" name="chk_modulo[] value="'.$value['id'].'">';                   
                      $campof = '';
                  }else{
                      if($this->ContarSubmenu($value['id'])>0){
                        $class = 'class="parent"';
                      }else{
                        $class = '';
                      }
                      if($value['url']=='#' ||  $value['url']==''){
                        $href='';
                      }else{
                        $href = "href=".$value['url'];
                      }
                      $campo = '<a '.$href.' '.$class.'"><span>';
                      $campof = '</span></a>';                      
                  }
                  if($check == false){
                      $class = 'class="parent"';
                  }else{
                      $class = '';
                  }
                  $menu .='<li>';
                  $menu .= $campo.utf8_encode($value['nombre']).$campof;
                  $menu .= $this->ListarSubmenu($value['id'], $check);
                  $menu .= '</li>';       
              }
          }
          $menu .='</ul></div>';
          return $menu;
        }
    }
    
    public function ContarSubmenu($padre = 0){
    $cont = 0;  
    foreach ($this->Listar() as $key => $value) {
      if(($value['id']!=$value['id_padre']) && ($value['id_padre']==$padre)){
        $cont++;
      }
    }
    return $cont;
  }

}
?>
