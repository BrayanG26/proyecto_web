<?php
    session_start();
	//Activar errores
    ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
	
	
?>
<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="es"> <!--<![endif]-->

    <!--........Erogames........-->
    <head>
        <meta charset="utf-8">
        <title>Erogames LTDA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!-- Favicon -->
		<link rel="icon" type="image/png" href="imagenes/faviconerogames.png" />
        <!-- Fuentes y estilos css-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">
        <!-- Javascrip -->
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>










    <!--..............Body......................-->	      
    <body>
		
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

         <!-- Menus -->
        <header>       
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="home-account">
                                    <a href="../nueva_entrega/">Home</a>                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cart-info">
                                    <i class="fa fa-users"></i>    <!-- icono de awesome fonds -->
									<?php 
									if(isset($_SESSION["ingresado"]) && $_SESSION['ingresado'] == 1){
										?>
										<i><?php echo $_SESSION["nombres"]." ".$_SESSION["apellidos"];?> </i></a><a href="cerrarSesion.php">(Cerrar Sesion)</a>
										<?php
									}else{
									
									?>
                                    <a href="ingresar.php">Iniciar sesión</a> ó <a href="registrarse.php"> Registrarse </a>
									<?php
									}
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="../nueva_entrega/"><img src="images/logo.png" title="Grill Template" alt="Grill Website Template" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>                                    
                                        <li><a href="juegos.php">Juegos</a></li>
                                        <li><a href="about-us.php">Nosotros</a></li>
										<?php 
										if(isset($_SESSION["ingresado"]) && $_SESSION['ingresado'] == 1){
											if ($_SESSION["codigo_tipo"] == '01'){
										?>
										<li><a href="entrega.php">Entregas</a></li>
										<li><a href="menu.php">Consultas</a></li>
										<?php
											}
											if ($_SESSION["codigo_tipo"] == '02'){
										?>
										<li><a href="menu.php">Consultas</a></li>
										<?php
											}
											if ($_SESSION["codigo_tipo"] == '03'){
										?>
										<li><a href="menu.php">Consultas</a></li>
										<?php
											
											}
										}
										?>
                                        <li><a href="contact-us1.php">Contactenos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="search-box">  
                                    <form name="search_form" method="get" class="search_form">
                                        <input id="search" type="text" />
                                        <input type="submit" id="search-button" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
             <!-- Fin de los menus -->










             <!-- Carteles deslizantes -->
            <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                            <h1>Fallout 4</h1>
                            <p>Proximamente
                            <br><br>11-11-11</p>
                            <a href="single-post.html">Leer mas</a>
                        </div>
                      <img src="images/slide1.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Fallout Shelter</h1>
                            <p>El refugio ahora en tu movil
                            <br><br>Disponible ahora en tu appstore</p>
                            <a href="single-post.html">Mas detalles</a>
                        </div>
                      <img src="images/slide2.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Metal Gear 5 The Panthom Pain</h1>
                            <p>La obra maestra del sigilo tactico ahora en mundo abierto
                            <br><br>Ya puedes ver muchos de los gameplay del juego</p>
                            <a href="single-post.html">Septiembre 1</a>
                        </div>
                      <img src="images/slide3.jpg" alt="" />
                    </li>
                  </ul>
                </div>
            </div>
             <!-- Fin del cartel deslizande -->










             <!-- Informacion x -->
            <div id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Erogames</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <h4>VideoGames</h4>
                                <p>Currently announced projects at Erogames include the ongoing support of the Dave Rush, one of the highest rated video game series of all time, Dave Rush: Inquisition, the latest entry in the Dave Rush franchise, a story-driven massively multiplayer online game.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Promotions</h4>
                                <p>Erogames works with a host of awesome companies who are dedicated to making great products for our fans including collectibles, apparel, books, comics and more. .</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bell"></i>
                                </div>
                                <h4>Ready to Play</h4>
                                <p>Quality in the Workplace: Advocate for work/life balance, engage employees in a high-performance setting, promote team-oriented work.Quality in our Products: Deliver the best story-driven games in the world, build a trusted brand through products, events, and community.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <h4>Satisfaction</h4>
                                <p>For every machine, game or system that Erogames creates, we start with more than an idea—we begin with the experience in mind.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Fin de informacion x -->










             <!-- Posts del blog cuadros de imagenes -->
            <div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Latest blog posts</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogpost1.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Septiembre Boss</a></h4>
                                        <span>29 Sep 2015</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogpost2.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Demasiado por Explorar</a></h4>
                                        <span>23 Sep 2015</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogpost3.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Venom Snake</a></h4>
                                        <span>14 Sep 2015</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>                                            
                    </div>
                </div>
            </div>
            <!-- Fin Posts del blog cuadros de imagenes -->









            <!-- Texto deslizante -->
            <div id="testimonails">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>What Customers Say</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonails-slider">
                              <ul class="slides">
                                <li>
                                    <div class="testimonails-content">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                        <h6>Jennifer - <span class="blue">Designer</span></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonails-content">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                        <h6>Laureen - <span class="blue">Marketing Executive</span></h6>
                                    </div> 
                                </li>
                                <li>
                                    <div class="testimonails-content">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                        <h6>Tanya - <span class="blue">Creative Director</span></h6>
                                    </div>
                                </li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Texto deslizante -->









             <!-- Pie de pagina -->
            <footer>
                <div class="container">

                    <!-- SUSCRIBCION Y SIGUENOS -->
                    <!--

                    <div class="top-footer">                       
                        <div class="row">                            
                            <div class="col-md-9">
                                <div class="subscribe-form">
                                    <span>Get in touch with us</span>
                                    <form method="get" class="subscribeForm">
                                        <input id="subscribe" type="text" />
                                        <input type="submit" id="submitButton" />
                                    </form>
                                </div>
                                
                            </div>
                            
                            
                            <div class="col-md-3">
                                <div class="social-bottom">
                                    <span>Follow us:</span>
                                    <ul>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-rss"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->

                    <div class="main-footer">
                        <div class="row">

                            <!-- ABOUT US -->

                            <!--
                            <div class="col-md-3">
                                <div class="about">
                                    <h4 class="footer-title">About Us</h4>
                                    <p>Texto normal <span class="blue">Texto estilo Azul</span><span class="green"> Verde</span> Texto normal.
                                </div>
                            </div>
                            -->

                            <!-- Categorias -->

                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">Categorias</h4>
                                    <ul>
                                        <li><a href="juegos.php"><i class="fa fa-angle-right"></i>Juegos</a></li>
                                        <li><a href="about-us.php"><i class="fa fa-angle-right"></i>Nosotros</a></li>
                                        <li><a href="contact-us.php"><i class="fa fa-angle-right"></i>Contactenos</a></li>
                                    </ul>
                                </div>
                            </div>
                            

                            <!-- RECENT POST -->
                            <!--
                            <div class="col-md-3">
                                <div class="recent-posts">
                                    <h4 class="footer-title">Recent posts</h4>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post1.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                            <span>24/12/2084</span>
                                        </div>
                                    </div>
                                    <div class="recent-post">
                                        <div class="recent-post-thumb">
                                            <img src="images/recent-post2.jpg" alt="">
                                        </div>
                                        <div class="recent-post-info">
                                            <h6><a href="#">Simple and effective meals</a></h6>
                                            <span>18/12/2084</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->

                            <div class="col-md-3">
                                <div class="more-info">
                                    <h4 class="footer-title">Mas Informacion</h4>
                                    <p>Aca puedes encontrar mas informacion hacerca de nosotros.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>000-111-2222</li>
                                        <li><i class="fa fa-globe"></i>123 Bucaramanga, Colombia</li>
                                        <li><i class="fa fa-envelope"></i><a href="#">erogames@company.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <p>Copyright © 2015 <a href="#">Erogames</a></p>
                    </div>
                    
                </div>
            </footer>
            <!-- Fin Pie de pagina -->










        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
