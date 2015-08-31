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
                                        <li><a href="contact-us.php">Contactenos</a></li>
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
                                <h2>Nosotros</h2>
                                <span>Home / <a href="about-us.php">Nosotros</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Banner -->









             <!-- Quienes Somos-->
            <div id="timeline-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Quienes Somos</h2>
                                <img src="images/under-heading.png" alt="" >
                                <h2>Erogames LTDA</h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Mision:</h4> 
                            <p>Nuestra misión como compañía es proporcionar a nuestros clientes los mejores productos e  innovaciones en el campo de los videojuegos. Teniendo siempre como función principal servir a nuestros clientes con software audiovisual interactivo y productos de calidad. Innovar el proceso creación ofreciendo nuestros productos a precio y calidad inigualable.</p>
                            <h4>Justificacion:</h4>
                            <p>EroGames, viendo como el mercado de videojuegos ha experimentado en los últimos años altas tasas de crecimiento, debido al desarrollo de la computación, capacidad de procesamiento, imágenes más reales y la estrecha relación entre películas de cine y los videojuegos, con lo cual los consumidores reconocen los títulos más pronto pero que aún no es tan altamente explotado en latinoamérica como en otras regiones del mundo quiere fomentar su crecimiento en este sector.</p>
                            
                        </div>
                        <div class="col-md-6">
                            <h4>Vision:</h4>
                            <p>Ser la compañía elegida por nuestra innovación, y calidad para nuestras soluciones, productos y servicios. Siendo reconocida por la calidad humana y profesional de nuestra gente y por nuestra contribución a la comunidad gamer.</p>
                            <h4>Objetivos:</h4>
                            <ul>
                                <li><p>Marcar una nueva tendencia en el área de los videojuegos.</p></li>
                                <li><p>Diversificarse a las distintos formas mercados incluyendo el mercado de videojuegos free to play.</p></li>
                                <li><p>Ofrecer los mejores productos en relación precio calidad.</p></li>
                                <li><p>Ofrecer nuestros productos a todos los tipos de plataforma.</p></li>
                                <li><p>Garantizar que cada compra con nosotros sea una experiencia única para nuestros clientes.</p></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="space50"></div>










                    
                    
                    <div class="row">
                        <div class="col-md-2 col-sm-4">
                            <div class="timeline-thumb">
                                <div class="thumb">
                                    <img src="images/timeline1.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="timeline-caption">
                                        <a href="#"><h4>1</h4></a>
                                        <p>Vault Boy</p>
                                     </div>
                                 </div>
                             </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="timeline-thumb">
                                <div class="thumb">
                                    <img src="images/timeline2.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="timeline-caption">
                                        <a href="#"><h4>2</h4></a>
                                        <p>Vault Boy</p>
                                     </div>
                                 </div>
                             </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="timeline-thumb">
                                <div class="thumb">
                                    <img src="images/timeline3.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="timeline-caption">
                                        <a href="#"><h4>3</h4></a>
                                        <p>Vault Boy</p>
                                     </div>
                                 </div>
                             </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="timeline-thumb">
                                <div class="thumb">
                                    <img src="images/timeline4.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="timeline-caption">
                                        <a href="#"><h4>4</h4></a>
                                        <p>Vault Boy</p>
                                     </div>
                                 </div>
                             </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="timeline-thumb">
                                <div class="thumb">
                                    <img src="images/timeline5.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="timeline-caption">
                                        <a href="#"><h4>5</h4></a>
                                        <p>Vault Boy</p>
                                     </div>
                                 </div>
                             </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <div class="timeline-thumb">
                                <div class="thumb">
                                    <img src="images/timeline6.jpg" alt="">
                                </div>
                                <div class="overlay">
                                    <div class="timeline-caption">
                                        <a href="#"><h4>6</h4></a>
                                        <p>Vault Boy</p>
                                     </div>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Fin Quienes Somos-->










            <!-- Nuestro Equipo  -->
            <!--
            <div id="our-team">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Our Team</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="authors">
                            <div class="col-md-3 col-sm-6">
                                <div class="team-thumb">
                                    <div class="author">
                                        <img src="images/author1.jpg" alt="Tracy - templatemo">
                                    </div>
                                    <div class="overlay">
                                        <div class="author-caption">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="author-details">
                                     <h2>Tracy</h2>
                                     <span>Designer</span>
                                 </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="team-thumb">
                                    <div class="author">
                                        <img src="images/author2.jpg" alt="Mary - templatemo">
                                    </div>
                                    <div class="overlay">
                                        <div class="author-caption">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="author-details">
                                     <h2>Mary</h2>
                                     <span>Developer</span>
                                 </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="team-thumb">
                                    <div class="author">
                                        <img src="images/author3.jpg" alt="Julia - templatemo">
                                    </div>
                                    <div class="overlay">
                                        <div class="author-caption">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="author-details">
                                     <h2>Julia</h2>
                                     <span>Director</span>
                                 </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="team-thumb">
                                    <div class="author">
                                        <img src="images/author4.jpg" alt="Linda - templatemo">
                                    </div>
                                    <div class="overlay">
                                        <div class="author-caption">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="author-details">
                                     <h2>Linda</h2>
                                     <span>Manager</span>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <!-- Fin de Nuestro equipo -->










            <!-- Testimonios -->
            <!--
            <div id="testimonails">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Testimonials and Awards</h2>
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
                                        <h6>Jennifer - <a href="#">Chief Designer</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonails-content">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                        <h6>Laureen - <a href="#">Marketing Executive</a></h6>
                                    </div> 
                                </li>
                                <li>
                                    <div class="testimonails-content">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                        <h6>Tanya - <a href="#">Creative Director</a></h6>
                                    </div>
                                </li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             -->
            <!-- Fin de Testimonios -->









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