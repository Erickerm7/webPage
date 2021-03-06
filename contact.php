
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Aseguradora La Ceiba - A tu servicio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/flexslider.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
</head>

    <body>

        <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="index.php">Ceiba - A su servicio!</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li>
                                        <a href="index.php"><i class="icon-home"></i><br />Inicio</a>
                                    </li>
                                    <li>
                                        <a href="seguros.php"><i class="icon-bookmark"></i><br />Productos</a>
                                    </li>
                                    <!--<li>
                                        <a href="#"><i class="icon-comments"></i><br />Blog</a>
                                    </li>-->
                                    <li>
                                        <a href="services.php"><i class="icon-tasks"></i><br />Servicios</a>
                                    </li>
                                    <li>
                                        <a href="about.php"><i class="icon-user"></i><br />Nosotros</a>
                                    </li>
                                    <li class="current-page">
                                        <a href="contact.php"><i class="icon-envelope-alt"></i><br />
                                        Contactar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-envelope-alt page-title-icon"></i>
                        <h2>Contactanos</h2>
                        <p>Dejanos un mensaje o llama a nuestros tel&eacute;fonos, con gusto te atenderemos.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us container">
            <div class="row">
                <div class="contact-form span7">
                    <p>Si quieres dejarnos un mensaje sobre algo en general, puedes hacerlo en esta secci&oacute;n. Si necesitas poner una queja, por favor <a href="complaint.html"><strong>ingresa aqu&iacute;.</strong></a></p>
                    <form method="post" action="assets/sendmail.php">
                        <label for="name" class="nameLabel">Nombre</label>
                          <input id="name" type="text" name="name" placeholder="Escriba su nombre..." required>
                        <label for="phone" class="phoneLabel" required >N&uacute;mero</label>
                          <input id="phone" type="tel" name="phone" placeholder="Escriba su n&uacute;mero tel&eacute;fonico..." required> 
                        <label for="email" class="emailLabel">Email</label>
                          <input id="email" type="email" name="email" placeholder="Escriba su email..." required>
                        <label for="subject">Asunto</label>
                          <input id="subject" type="text" name="subject" placeholder="Escriba un asunto..." required>
                        <label for="message" class="messageLabel">Mensaje</label>
                          <textarea id="message" name="message" placeholder="Escriba su mensaje..." required></textarea>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
                <div class="contact-address span5">
                    <h4>Visitanos en nuestras oficinas</h4>
                    <div class="map"></div>
                    <h4>Direcci&oacute;n Agencia Central</h4>
                    <p>20 Calle 15-20 Zona 13 <br> Guatemala, 01013 C.A.<br>
                    Tel&eacute;fono: 2379-1800 / 2311-1200<br />
                        Fax: 2334-8167 / 2334-8168</p>
                  	<h4>Todas las Agencias</h4>
                <div id="Accordion1" class="Accordion" tabindex="0">
                      <div class="AccordionPanel">
                        <div class="AccordionPanelTab">Agencia Zona 1</div>
                        <div class="AccordionPanelContent">
                        <p>12 Avenida 14-73 <br> Guatemala, 01001 C.A. <br>
                    	Tel&eacute;fono: 2230-6834 / 5892-7459</p>
                        </div>
                      </div>
                      
                      <div class="AccordionPanel">
                        <div class="AccordionPanelTab">Agencia Zona 7</div>
                        <div class="AccordionPanelContent">
                        <p>Calzada San Juan 13-90<br /> Guatemala, 01007 C.A. <br />
                    	Tel&eacute;fono: 2474-1152</p>
                        </div>
                      </div>
                      
                      <div class="AccordionPanel">
                        <div class="AccordionPanelTab">Agencia Mazatenango</div>
                        <div class="AccordionPanelContent">
                        <p>Calzada Centenario Edificio 0-82<br />2 Niv. Local "E"<br />
                    	Tel&eacute;fono: 7872-1109 / 1110</p>
                        </div>
                      </div>
                      
                      <div class="AccordionPanel">
                        <div class="AccordionPanelTab">Agencia San Marcos</div>
                        <div class="AccordionPanelContent">
                        <p>5a. Calle 8-08 Zona 2<br /> C.C. Los Arcos del Milenium 2 Niv. Local 18<br />
                    	Tel&eacute;fono: 7760-5738</p>
                        </div>
                      </div>
                      
                      <div class="AccordionPanel">
                        <div class="AccordionPanelTab">Agencia Pet&eacute;n</div>
                        <div class="AccordionPanelContent">
                        <p>6a Ave. 3-30 Zona 2<br />Edificio Plaza Futura Local 10<br />
                    	Tel&eacute;fono: 7926-3857</p>
                        </div>
                      </div>
                      
                      
                      <div class="AccordionPanel">
                        <div class="AccordionPanelTab">Agencia Quiche</div>
                        <div class="AccordionPanelContent">
                        <p>Plaza San Felipe, 5 Calle 3-47 <br>Local No. 1 Zona 5 Santa Cruz del Quiche<br>
                    	Tel&eacute;fono: 7755-4884 </p>
                        </div>
                      </div>

                  </div>
                  
                  
              </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="widget span3">
                        <h4>Suscribete</h4>
                        <p>Para recibir informaci&oacute;n de nuestros productos y promociones.</p>
                        <div class="suscribir">
            			<form action="subscribe.php" method="post">
                		<label for="modelo" class="modeloLabel"><strong>Correo Electr&oacute;nico</strong></label>
                    		<input type="email" name="correo" required/> 
                		<button type="submit">Suscribir</button>
            			</form>
        				</div>
                        <!--<p><a href="">Leer m&aacute;s...</a></p>-->
                    </div>
                    <div class="widget span3">
                    	<h4>Descargas e Interes</h4>
                        <p><i class="icon-file"></i><a href="formularios.php" >Formularios Vida e Ive</a></p>
                        <p><i class="icon-money"></i><a href="formasdepago.php" >Formas de Pago</a></p>
                        <p><i class="icon-briefcase"></i><a href="empleo.php" >Empleo</a></p>
                        <p><i class="icon-comments"></i><a href="complaint.php" >Quejas</a></p>
                        <p><i class="icon-th-large"></i><a href="talleres.php" >Red de Talleres</a></p>
                        <!--
                        <h4>Tweets</h4>
                        <a class="twitter-timeline" href="https://twitter.com/@acieba" data-widget-id="376000348541833216">Tweets por @aceiba</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    	-->
                    </div>
                  <div class="widget span3">
                    <h4>Personal Ceiba</h4>
                       <p><i class="icon-envelope-alt"></i><a href="https://mail.aceiba.com.gt:83/horde" target="_blank" >Correo Electr&oacute;nico</a></p>
                        <p><i class="icon-picture"></i><a href="http://aceiba.com.gt:8888/apps/imagenes" target="_blank" >Subir imagenes</a></p>
                        <p><i class="icon-user"></i><a href="http://www.aceiba.com.gt/servicat" target="_blank" >Agentes Servicat</a></p>
                        <p><i class="icon-question-sign"></i><a href="http://www.aceiba.com.gt/consultas/index.html" target="_blank" >Consultas</a></p>
                        <!--<p><i class="icon-th-list"></i><a href="#" ></a></p>-->
                        <!--
                        <h4>En FaceBook	</h4>
                        <!--<ul class="flickr-feed"></ul>-->
                        <!--
                        <a class="fb-like-box" data-href="http://www.facebook.com/aceiba"  data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></a>  
                  		-->
                  </div>
                   <div class="widget span3">
                        <h4>Contactanos</h4>
                        <p><i class="icon-map-marker"></i> Dirección: 20 Calle 15-20 zona 13 Guatemala, C.A. 01013</p>
                        <p><i class="icon-phone"></i> PBX: 2379-1800 / 2311-1200</p>
                        <p><i class="icon-print"></i> Fax: 2334-8167 / 2334-8168</p>
                        <p><i class="icon-envelope-alt"></i> Correo: <a href="mailto:admin@aceiba.com.gt?subject=Contacto a Administrador - Desde el Sitio Web&body=Favor ponerse en contacto con mi persona, Gracias!" target="_top">
admin@aceiba.com.gt</a></p>
                    	<p><i class="icon-home"></i><a href="contact.html" >Todas las agencias</a></p>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="row">
                    <div class="copyright span4">
                        <p><a href="http://www.aceiba.com.gt">Aseguradora La Ceiba, S.A. </a> - 20 Calle 15-20 Zona 13 - &copy; <?php echo date("Y"); ?>.</p>
                    </div>
                    <div class="social span8">
                        <a class="facebook" href="https://www.facebook.com/aceiba"></a>
                        <a class="googleplus" href="https://plus.google.com/105501455679593689740" rel="publisher"></a>
                        <a class="twitter" href="https://www.twitter.com/aceiba"></a>
                        <a class="pinterest" href="https://www.pinterest.com/aceiba/"></a>
                        <a class="linkedin" href="https://www.pinterest.com/aceiba/"></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/jquery.tweet.js"></script>
    <script src="assets/js/jflickrfeed.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/js/jquery.ui.map.min.js"></script>
    <script src="assets/js/jquery.quicksand.js"></script>
    <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/scriptcito.js"></script>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
        
        
</body>

</html>

