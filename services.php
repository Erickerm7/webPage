<!DOCTYPE html>
<html lang="es">

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
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/scriptcito.js"></script>
	<script>
		(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>  
	<script>
			$(document).ready(function(){
		 		/*$.scrollUp();*/	 		
		 		$.scrollUp({
				  	animation: "slide",
				    scrollText: 'Subir'			   
				 });
		 	});
	</script> 
       
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
                                    <li class="current-page">
                                        <a href="services.php"><i class="icon-tasks"></i><br />Servicios</a>
                                    </li>
                                    <li>
                                        <a href="about.php"><i class="icon-user"></i><br />Nosotros</a>
                                    </li>
                                    <li>
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
                        <i class="icon-tasks page-title-icon"></i>
                        <h2>Servicios /</h2>
                        <p>Otros beneficios que tenemos para ti.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Full Width Text 
        <div class="services-full-width container">
            <div class="row">
                <div class="services-full-width-text span12">
                    <h4>Aca se encontraran nuestros servicios como:</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <strong>eiusmod tempor</strong> incididunt.</p>
                </div>
            </div>
        </div>
		-->

        <!-- Services -->
        <div class="what-we-do container">
            <div class="row">
            	<div class="contact-form span7">
            		<a href="express.php">
                		<div class="service span3">
                  			<div class="icon-awesome">
                        		<img src="assets/img/portfolio/work15.png" alt="">
                  			</div>
                    		<h4>Ceiba Express</h4>
                    		<p>Texto de preliminar...</p>
                		</div>
                	</a>	

               		 <a href="express.php">
                		<div class="service span3">
                  			<div class="icon-awesome">
                        		<img src="assets/img/portfolio/work16.png" alt="">
                  			</div>
                    		<h4>Ceiba Express</h4>
                    		<p>Texto de preliminar...</p>
                		</div>
                	</a> 
                </div>

      
                <div class="contact-address span5">

                  
                        <a class="twitter-timeline" href="https://twitter.com/@acieba" data-widget-id="376000348541833216">Tweets por @aceiba</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
             	
                </div>
        </div>
        </div>



        <!-- Services Half Width Text -->
        <div class="services-half-width container">
            <div class="row">
                <div class="services-half-width-text span6">
                    <h4>Servidor de imagenes</h4>
                    <p>Texto de preliminar...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <strong>eiusmod tempor</strong> incididunt.</p>
                </div>
                <div class="services-half-width-text span6">
                    <h4>Subir Imagenes</h4>
                    <p>Texto de preliminar...Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <strong>eiusmod tempor</strong> incididunt.</p>
                </div>
            </div>
        </div>

        <!-- Call To Action -->
        <div class="call-to-action container">
            <div class="row">
                <div class="call-to-action-text span12">
                    <div class="ca-text">
                        <p>Sieres usuario del<span class="violet">Cotizador Ceiba</span>, ingresa para realizar una cotización en linea, si eres agente de seguros y necesitas tu usuario y contraseña ingresa <a href="#">aquí</a></p>
                    </div>
                    <div class="ca-button">
                        <a href="">Cotizador!<</a>
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
		<!--
        <script type='text/javascript' src='assets/contact/js/jquerycontact.js'></script>
		<script type='text/javascript' src='assets/contact/js/contactservices.simple.js'></script>
		<script type='text/javascript' src='assets/contact/js/js/contactservices.js'></script>
    	-->
    </body>

</html>

