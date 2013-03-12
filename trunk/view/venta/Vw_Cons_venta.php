<section>
  <h1><a href="../control/ctrl_inicio.php">Inicio</a>►Venta</h1> 
</section>
<section><center>
    <form id="form" method="POST" action="">
        <fieldset>
             <legend>Consultar Venta</legend>
             <p>
            <label>Codigo Producto</label>
            <input type="text" name="txt_cod_pro" class="required number" value="<?php echo $codigo; ?>"  />*
            <br>
            <label>Marca Producto</label>
            <input type="text" name="txt_mar_pro" value="<?php echo $marca; ?>" class="required "/>*
             <br>
            <label>Cantidad</label>
            <input type="text" name="txt_cant" value="<?php echo $cantidad; ?>" class="required number"/>*
             <br>
            <label>Fecha Venta</label>
            <label><?php echo date("Y-m-d"); ?></label>
             <br>
            <label>Valor venta</label>
            <input type="text" name="txt_vlr_compra" value="<?php echo $total; ?>" class="required number"/>*
            <br>      
             <br>
              <label>Ingrese Codigo a Consultar</label>
            <input type="text" name="txt_con_pro" value=""  />
            <br>  
            <br>
            <input type="submit"  name="btn_consultar" value="Consultar" />       
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                  
                <?php echo $msj; ?>
              </form>
                </p>             
           </fieldset> 
  </center></section>