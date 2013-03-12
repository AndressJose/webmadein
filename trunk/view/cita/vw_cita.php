<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
                <link rel="shorcut icon" href="../../view/img/favicon.ico"/>
		<link type="text/css" href="../../view/css/menu.css" rel="stylesheet" />
                <link type="text/css" href="../../view/css/style.css" rel="stylesheet" />
                <script type="text/javascript" src="../../view/js/menu.js"></script>                
                <script type="text/javascript" src="../../view/js/cargarseleccion.js"></script>
                <script type="text/javascript" src="../../view/js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="../../view/js/sexyalert.js"></script>
                <script src="../../view/js/jquery-1.6.1.js" type="text/javascript"></script>
                <script src="../../view/js/jquery.validate.js" type="text/javascript"></script>
                <script src="../../view/js/jquery.metadata.js" type="text/javascript"></script>  
                <script type="text/javascript" src="../../view/js/jquery.ui.core.js"></script>
                <script type="text/javascript" src="../../view/js/jquery.ui.widget.js"></script>
                <script type="text/javascript" src="../../view/js/jquery.ui.datepicker-es.js"></script>
                <script type="text/javascript" src="../../view/js/jquery.ui.datepicker.js"></script>
                
                <script type="text/javascript">
                        $(function() {
                                $("#datepicker").datepicker({
                                        showOn: 'both', //Parametro para que se vea el icono del calendario
                                        buttonImageOnly: true, //Indicamos si queremos que solo se vea el icono y no el botón
                                        buttonImage: 'calendar.gif', //Indicamos el icono del botón
                                        firstDay: 1, //El primer día será el 1
                                        changeMonth: true, //Si se pueden cambiar los meses
                                        changeYear: true //Si se pueden cambiar los años
                                });
                        });
                </script>
                <script languague="javascript">
                    $(document).ready(function(){
                    $("#form").validate();
                    });
                </script>
                
		<title>Madein</title>
	</head>
	<body>
          <section id="wrapper">
            <header>
              <section id="login">
                      <form>
                        <table>                                                
                          <tr>
                            <td><label>Iniciar Sección</label></td>
                            <td><input type="text" name="txt_login" placeholder="Login" id="txt_login"></td>
                            <td><input type="password" name="txt_pass" placeholder="Contraseña" id="txt_pass"></td>
                            <td><input type="submit" name="btn_entrar" value="Entrar"></td>
                          </tr>           
                        </table>
                      </form>
                    </section>
                    <section id="toolbar">
                            <section id="rigth">
                                    <section id="social">
                                        <a target="_blank" href="https://www.facebook.com/madeinbello"><img src="../../view/img/facebook1.png" width="35" height="35"></a>
                                            <a target="_blank" href="http://www.twitter.com"><img src="../../view/img/twitter1.png" width="35" height="35"></a>
                                            <a target="_blank" href="http://www.youtube.com"><img src="../../view/img/youtube1.png" width="50" height="35"></a>
                                    </section>
                                    <section id="help">
                                        <a  href="../../control/inicio/ctrl_ayuda.php">ayuda</a>
                                    </section>
                            </section>
                    </section>
                    <section id="cabeza">
                            <section id="logohead">
                              <a href="../../control/inicio/ctrl_inicio.php"><img src="../../view/img/logo.png" width="150" height="100"></a>
                            </section>
                            <section id="search">
                                    <form>
                                            <input type="text" id="buscar" name="txtbuscar">
                                            <input type="submit" value="buscar" name="btnbuscar">                                            
                                    </form>
                            </section>
                    </section>                    
                    <div id="menu">                        
                        <?php
                        echo $menu;
                        ?>                        
                    </div>
            </header>
<section>
  <h1><a href="../../control/inicio/ctrl_inicio.php">Inicio</a>►<a href="../../control/Agenda/ctrl_Agenda.php">Agenda Online</a>►Agregar Cita</h1> 
</section> 
<center>
<section align="center">
  <form action="" method="post">
  <fieldset>
    <legend>Agregar Cita</legend>
    <table align="center">
      <tr>
        <td><label>Hora de a Cita</label></td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td><label>Fecha</label></td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td><label>nombre</label></td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td><label>tipo de cita</label></td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Guardar"></td>
      </tr>
    </table>
  </fieldset>
  </form>
</section>
</center>
<footer>
                    <p>
                            <strong>Venta de productos de belleza y peluqueria <br> Tinturas - Gels - Shampoos - Esmaltes - Fragancias - Tratamientos - Crema de manos - Esfoliantes<br> Manicure - Pedicure - Corte y cepillado de cabello - Peinados</strong>
                            <br>
                            Telefono: 463 17 39 / 311 328 25 45 / 300 326 21 49 - Dirección: Calle 31 n. 43c - 40 La Gabriela - Bello.
                    </p>
                    <section id="logo">
                            <img src="../../view/img/logo.png" width="150" height="100">
                    </section>
                    <section id="marcas">
                            <strong>Marcas</strong>
                            <section id="logos_tinturas">
                                    <img class="logo"src="../../view/img/wella.png" width="50" height="30">
                                    <img class="logo"src="../../view/img/besuan.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/duvyclass.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/magicolor.gif" width="50" height="30">
                                    <img class="logo"src="../../view/img/loreal.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/schwarzkopf.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/igora.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/novell.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/salerm.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/maxybelt.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/alfaparf.jpg" width="50" height="30">
                            </section>
                            <section id="logos_otros">
                                    <img class="logo"src="../../view/img/spaison.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/recamier.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/lehit.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/manonne.jpg" width="100" height="30">
                                    <img class="logo"src="../../view/img/naprolab.jpg" width="50" height="30">
                                    <img class="logo"src="../../view/img/prokpil.jpg" width="50" height="30">
                            </section>
                    </section>
            </footer>
        </section>

    </body>
</html>