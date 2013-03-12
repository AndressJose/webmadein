    <?php 
include '../../config/config.php';
include '../../generic/DataBase.php';
include '../../model/dao/DAOModulo.php';
include '../../model/bussines/Modulo.php';

$objmenu = new Modelo();
$menu = $objmenu->ListarMenu(false);

$inicio = '<section>
<center>            
  <h1 style=" font-family: serif ,cursive,fantasy; font-size:40px;font-weight:bold;">¡Bienvenidos a  Manantial De Innovaciones!</h1>
  <p style=" font-family: serif ,cursive,fantasy; font-size:20px;font-weight:bold; text-align: center;">

</center>
</section>';

include '../../view/principal/vw_principal.php';

 ?>