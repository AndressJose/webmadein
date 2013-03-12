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
    <h1><a href="../../control/inicio/ctrl_inicio.php">Inicio</a>►Ayuda</h1>
</section>        
<section><center> 
    <p>
    <h1>Ayuda</h1> 
En este apartado, podrás consultar las dudas más frecuentes.
Colabora con nosotros
</p>
<p>
Si te gustaría colaborar con nosotros, tienes nuevas ideas que aportar, o simplemente quieres hablar con nosotros, envianos un e-mail a madein@gmail.com y te contestaremos lo antes posible.
Te estamos esperando.
</p>
<p>
Comentar / Opinar sobre Tiendas Online

Si estamos mirando una ficha de una tienda online, en la parte inferior nos aparece un recuadro grande y uno pequeño. En el recuadro grande podemos introducir nuestra valoracion u opinion sobre dicha tienda, tienes que tener en cuenta que tu opinión será vista por el resto de usuarios, procura ser lo más objetivo posible e intenta no cometer fallos de ortografía.
</p>
    <table border="0">
            <tr>
                <td>Nombre:</td>
                <td>admin</td>
            </tr>
            <tr>
                <td>Comentario:</td>
                <td><textarea rows="10" cols="40"></textarea></td>
            </tr>
            <tr>
                <td>Codigo:</td>
                <td><input type="text" name="txt_ayu" value="" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar" /></td>
                <td></td>
            </tr>
    </table>

 <p>
Para comunicarnos tu estado de animo con dicha tienda, puedes hacer click en uno de los emoticonos de la izquierda, y automaticamente su código será introducido en el recuadro grande.
 </p>
 
 <p>
Una vez hayamos terminado nuestra opinión, tan solo tenemos que introducir en el recuadro pequeño el codigo de 5 cifras que nos aparece a su derecha.
  </p> <p>
Después de introducir el código de confirmación, podemos pulsar "Enviar", y nuestro comentario será agregado a la ficha de la tienda.
  </p> <p>
*Solo los usuarios registrados en www.tiendas-online.org pueden opinar sobre las tiendas.
  </p> <p>
**Si usted como usuario de www.tiendas-online.com detecta que en las opiniones hay usuarios que insultan, no hablan de algo relacionado con la tienda o cree que un comentario no es adecuado, puede comunicarnoslo haciendo click al final de la opinion / comentario, donde aparece la palabra Reportar,
  </p> <p>
Filtrar Tiendas Online

Cuando estamos en el directorio de tiendas online y estamos dentro de una sección / categoría, podemos filtrar las tiendas online que nos interesen segun una palabra clave o frase. Por ejemplo, estamos en la sección coches y categoría tuning, si queremos ver solo las tiendas online de coches y tuning que vendan paragolpes, tan solo debemos escribir "paragolpes" en la casilla donde pone "Filtrar por...".
  </p> <p>
Imagen de ejemplo: 
 
Después podemos elegir si buscar "paragolpes" en el título de la tienda online o en su descripción, por defecto se busca en título y descripción , recomendamos mantener esta opción. A continuación tenemos el botón "Filtrar", si pulsamos en el nos mostraría el resultado de la búsqueda "paragolpes", pero aún debemos ver otras opciones complementarias como el orden:
  </p> <p>
Posible orden de los resultados del filtrado:
Título A - Z
Título Z - A
Fecha de creación descendente
Fecha de creación ascendente
Fecha de modificación descendente
Fecha de modificación ascendente
Visitas descendente
Visitas ascendente
Votos descendente
Votos ascendente
Default
 
Como última opcion, podemos elegir el número de resultados a mostrar por página, por defecto se mostrarán 20 resultados. Una vez elegida las opciones, podemos pulsar en "Filtrar" para mostrar los resultados de tiendas online que nos interesen.
  </p> <p>
Métodos de pago

 
Las tiendas online, normalmente, ofrecen varios tipos de metodos de pago, los más frecuentes son:
  </p> <p>
Contra Reembolso: Pagamos cuando recibimos el producto en casa. Es la que da mayor confianza al comprador, por aquello de que si no me llega no pago. La pega es que normalmente si elegimos esta opcion las tiendas nos hacen un regargo del pedido entre un 2% y un 5%.
  </p> <p>
Pago online con tarjeta de crédito / débito: Pagamos en el acto al hacer el pedido. Suelen cargar la factura en tu cuenta bancaria al instante. El usuario normal desconfía ya que existen formas de duplicar tarjetas y conseguir los numeros y claves. No suele haber regarcos en el pedido.
  </p> <p>
Paypal: Pagamos al instante. Suelen cargar la factura 1 dia después de hacer el pago. Ofrecen garantías economicas en casos de fraude. No suele haber regarcos en el pedido. Creado por los creadores de Ebay. Es el sistema que mayor seguridad da al comprador.
  </p> <p>
Transferencia bancaria: El comprador puede pagar online si dispone de gestión de cuenta bancaria online, sino tendrá que desplazarse a su banco. Si las cuetnas de comprador y vendedor son de bancos diferentes y paises diferentes pagaremos recargos. Entre el mismo pais unos 3 euros. Entre diferentes paises unos 12 - 24 euros.
  </p> <p>
Desde Tiendas-Online.org, recomendamos el uso de Paypal, ya que aseguran la mercancía en caso de problemas, y además no tenemos que pagar pluses.
  </p> <p>
Seguridad

En cuanto a seguridad, debemos seguir unas pautas para que no tengamos problemas con las compras online.
Lo primero y más obvio es observar si la tienda tiene algun método de contacto directo con el cliente, ya sea email, teléfono o formulario de contacto (aunque de este ultimo debemos desconfiar). 
 </p> <p>
Después si no estamos seguros de la tienda si es fiable o no, podemos ver si posee una tienda física, normalmenten debería aparecer en alguna sección o en el pie de página. 
 </p> <p>
Las tiendas online suelen tener estás categorias: Quienes somos , Envíos , Devoluciones, Métodos de pago, Garantía, Condiciones de venta . En ellas podemos encontrar mucha información de interés acerca de la empresa, sus tiempos de envios, y todo lo necesarío para saber quien nos vende, como y qué.
 </p> <p>
A la hora de pagar con tarjeta cuando estamos en una tienda online, si nos fijamos, a la hora de comprar, nos aparece un candado pequeño en nuestro navegador, ya sea Internet Explorer o Mozilla Firefox u otros. 
 </p> <p>
Esto quiere decir que entre la tienda online y usted hay una conexión segura, también puede obsevar en la barra de dirección del navegador como la direccion empieza con https:// en vez de http:// , si la tienda online donde vamos a comprar nos muestra el candado y https:// en la dirección url, podremos comprar seguros con una tarjeta de crédito o débito ya que nadie podrá interceptar la conexión entre usted y la tienda y poder ver sus datos de la tarjeta y otros. 
 </p> <p>
En cambio, si a la hora de pagar online con la tarjeta de credito no vemos el candado o https debemos desconfiar de esa tienda. Otras tiendas justo en el momento de pagar, redireccionan a una pagina web de su banco donde les pedirá sus datos de tarjeta de crédito o débito.
 </p> <p>
.Otra posibilidad es comprobar si otras personas han comprado en esa tienda, y es leyendo opiniones de otros compradores. Si queremos ver las opiniones de una tienda en concreto, tan solo debemos escribir el nombre de la tienda en el buscador de Tiendas-Online.Org y comprobar si alguien ha opinado sobre la misma tienda, si nadie ha escrito sobre esa tienda, usted puede ser el primero! 
 </p> <p>
Votar Tiendas Online

Para votar a una tienda online, tan solo debemos dirigirnos a su ficha y pasar el ratón por las estrellas que hay debajo del título, podemos votar de 1 a 5 estrellas en función de la calidad que demuestre la página o en función de como nos haya ido la compra, opcionalmente si hemos echo una compra en una tienda podemos escribir una opinión en la ficha de esa tienda para compartir nuestras sensaciones con el resto de los usuarios.
  </p> <p>
Alta Tienda Online

Para dar de alta una tienda online antes debe ser un usuario registrado. Una vez registrado deberá rellenar el formulario que ponemos a su disposición y enviarla. 
 </p> <p>
Antes de publicar la tienda los administradores de el site darán el visto bueno, por lo que solicitamos que no se introduzca spam en los articulos, contenidos ilegales o pornograficos, publicidad u otros contenidos que no sean estrictamente los solicitados.
  </p> <p>
 
Comprar Productos

En tiendas-online.org no podrás comprar productos. Los productos que se muestran en la web pertenecen a algunas de las tiendas listadas que han permitido que su catálogo se muestre. 
 </p> <p>
Para adquirir dichos productos tienen que ir a la tienda de origen siguiendo los pasos que indicamos para facilitar su compra.
 
    </p>
  </center></section>
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