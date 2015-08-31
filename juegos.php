<?php
    session_start();
    
    
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









              <!-- Banner --> 
            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Nuestros Juegos</h2>
                                <span>Home / <a href="juegos.php">Juegos</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Banner -->











            <div id="products-post">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-heading">
                                <h2>Que quieres jugar ?</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                                <li><span class="filter" data-filter="all">Todos</span></li>
                                <li><span class="filter" data-filter=".ginger">Accion</span></li>
                                <li><span class="filter" data-filter=".pizza">Aventura</span></li>
                                <li><span class="filter" data-filter=".pasta">Rol/RPG</span></li>
                                <li><span class="filter" data-filter=".drink">Estrategia</span></li>
                                <li><span class="filter" data-filter=".hamburger">Otros</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="Container">
                        <div class="col-md-3 col-sm-6 mix portfolio-item Pizza">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product1.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product1_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pizza</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Fallout 4</a></h3>
                                    <span class="text-category">$160.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item ginger">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product2.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product2_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Ginger</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Farenheit</a></h3>
                                    <span class="text-category">$60.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item pizza">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product3.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product3_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pizza</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Kingdom under fire 2</a></h3>
                                    <span class="text-category">$200.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item pasta">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product4.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product4_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pasta</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">lost odyssey</a></h3>
                                    <span class="text-category">$80.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item drink">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product5.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product5_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Drink</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Metal Gear 1</a></h3>
                                    <span class="text-category">$16.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item hamburger">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product6.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product6_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Hamburger</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Metal Gear 4</a></h3>
                                    <span class="text-category">$125.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item pizza">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product7.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product7_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pizza</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Resident evil 2</a></h3>
                                    <span class="text-category">$14.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item pasta">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product8.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product8_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pasta</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Lineaje 2</a></h3>
                                    <span class="text-category">$15.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item hamburger">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product9.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product9_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Hamburger</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Metal Gear Solid 3</a></h3>
                                    <span class="text-category">$80.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item drink">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product10.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product10_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Drink</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Fallout 3 GOTY</a></h3>
                                    <span class="text-category">$90.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item ginger">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product11.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product11_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Ginger</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Kingdom under fire heroes</a></h3>
                                    <span class="text-category">$16.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item pasta">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product12.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product12_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pasta</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="single-post.html">Metal Gear The phantom pain</a></h3>
                                    <span class="text-category">$160.00</span>
                                </div>
                            </div>          
                        </div>
                    </div>
                    <div class="pagination">
                        <div class="row">   
                            <div class="col-md-12">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">>></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>     
                </div>

            </div>











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
                                    <ul><li><a href="juegos.php"><i class="fa fa-angle-right"></i>Juegos</a></li>
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