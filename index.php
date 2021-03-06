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
                                <a class="brand" href="#">Ceiba - A su servicio!</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                	<li class="current-page">
                                    	<a href="#"><i class="icon-home"></i><br />Inicio</a>
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

        <!-- Slider -->
        <div class="slider">
            <div class="container">
                <div class="row">
                    <div class="span10 offset1">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="assets/img/slider/2.jpg">
                                   <img src="assets/img/slider/2.jpg">
                                   <!-- <p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>-->
                                </li>
                               <li data-thumb="assets/img/slider/1.jpg">
                                   <img src="assets/img/slider/1.jpg">
                                    <!--<p class="flex-caption">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>-->
                                </li>
                                <li data-thumb="assets/img/slider/3.jpg">
                                   <img src="assets/img/slider/3.jpg">
                                    <!--<p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur.</p>-->
                                </li>
                                <li data-thumb="assets/img/slider/4.jpg">
                                    <img src="assets/img/slider/4.jpg">
                                    <!--<p class="flex-caption">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Site Description -->
        <div class="presentation container">
            <h2><span class="violet">Aseguradora La Ceiba</span>, a tu servicio!.</h2>
            <p>Nos encargamos de tus percances, asistimos en el camino y tu destino esta seguro con nosotros. </p>
        </div>

        <!-- Services
        <div class="what-we-do container">
            <div class="row">
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-eye-open"></i>
                    </div>
                    <h4>Beautiful Websites</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                    <a href="services.html">Leer más</a>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-table"></i>
                    </div>
                    <h4>Responsive Layout</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                    <a href="services.html">Leer más</a>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-magic"></i>
                    </div>
                    <h4>Awesome Logos</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                    <a href="services.html">Leer más</a>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-print"></i>
                    </div>
                    <h4>High Res Prints</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
                    <a href="services.html">Leer más</a>
                </div>
            </div>
        </div>
         -->

        <!-- Latest Work -->
        <div class="portfolio container">
            <!--<div class="portfolio-title">
                <h3>Mira lo que hay para ti</h3>
            </div>-->
            
            <div class="row">
            	<a href="seguros.php">
                <div class="work span3">
                    <img src="assets/img/portfolio/work1.png" alt=""> 
                    <h4>Nuestros Productos</h4>
                    <!--<p>Estar siempre preparado para cualquier evento inesperado, es la merjor inversión...</p>-->
                    <!--<div class="icon-awesome">
                        <a href="assets/img/portfolio/work3	.jpg" rel="prettyPhoto">
                        <i class="icon-search"></i></a>
                        <a href="portfolio.html"><i class="icon-link"></i>
                    </div>-->
                   
                </div>
                 </a>
                 <a href="portfolio.html">
                <div class="work span3"> 
                    <img src="assets/img/portfolio/work2.png" alt="">
                    <h4>Red de Talleres</h4>
                    <!--<p>Tu auto siempre lucirá como te gusta, los talleres de más alta calidad están con nosotros...</p>-->
                    <!--<div class="icon-awesome">
                        <a href="assets/img/portfolio/work2.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.html"><i class="icon-link"></i>
                    </div>-->
                    
                </div>
                </a>
                
                <div class="work span3"> <a href="portfolio.html">
                    <img src="assets/img/portfolio/work3.png" alt="">
                    <h4>Emergencias</h4>
                    <!--<p>Atención personalizada, rápida y eficaz. Llama a los números: 2379-1818 y 2311-1223...</p>-->
                    <!--<div class="icon-awesome">
                        <a href="assets/img/portfolio/work3.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.html"><i class="icon-link"></i></a>
                    </div>
                    -->
                    </a>
                </div>
                
                <div class="work span3"> <a href="complaint.php">
                    <img src="assets/img/portfolio/work4.png" alt="">
                    <h4>Buzón de Quejas</h4>
                    <!--<p>Si tienes alguna queja o sugerencia, no dudes en enviarla, queremos darte el mejor servicio...</p>-->
                    <!--<div class="icon-awesome">
                        <a href="assets/img/portfolio/work3.jpg" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="portfolio.html"><i class="icon-link"></i></a>
                    </div>
                    -->
                    </a>
                </div>
                
            </div>
        </div>

        <!-- Testimonials
        <div class="testimonials container">
            <div class="testimonials-title">
                <h3>Testimonios</h3>
            </div>
            <div class="row">
                <div class="testimonial-list span12">
                    <div class="tabbable tabs-below">
                        <div class="tab-content">
                            <div class="tab-pane active" id="A">
                                <img src="assets/img/testimonials/1.jpg" title="" alt="">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                            </div>
                            <div class="tab-pane" id="B"> 
                                <img src="assets/img/testimonials/2.jpg" title="" alt="">
                                <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                            </div>
                            <div class="tab-pane" id="C">
                                <img src="assets/img/testimonials/3.jpg" title="" alt="">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur..."<br /><span class="violet">Lorem Ipsum, dolor.co.uk</span></p>
                            </div>
                            <div class="tab-pane" id="D">
                                <img src="assets/img/testimonials/1.jpg" title="" alt="">
                                <p>"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat..."<br /><span class="violet">Minim Veniam, nostrud.com</span></p>
                            </div>
                        </div>
                       <ul class="nav nav-tabs">
                           <li class="active"><a href="#A" data-toggle="tab"></a></li>
                           <li class=""><a href="#B" data-toggle="tab"></a></li>
                           <li class=""><a href="#C" data-toggle="tab"></a></li>
                           <li class=""><a href="#D" data-toggle="tab"></a></li>
                       </ul>
                   </div>
                </div>
            </div>
        </div>
-->
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

