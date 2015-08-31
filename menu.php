<?php
    session_start();
    
?>
<!DOCTYPE html>
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
                                    <a href="menu.php">Consultas</a>                                 
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
                                        <li><a href="entrega.php">Entregas</a></li>
                                        <li><a href="about-us.php">Nosotros</a></li>
                                        <li><a href="contact-us1.php">Contactenos</a></li>
                                        <li><a href="menu.php">Consultas</a></li>
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
                                <h2>Informacion</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin Banner -->


            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Seleccione la accion que desea realizar...</h2>
                                <img src="images/under-heading.png" alt="" />
								<?php if($_SESSION["codigo_tipo"] == '01'){
								
								?>
                                <div class="send">
                                    <a href="entrega.php" target="_self"><button type="button">Insertar</button></a>
                                </div>
                                <div class="send">
                                    <a href="#" target="_self"><button type="button">Modificar</button></a>
                                </div>
                                <div class="send">
                                    <a href="consulta_usuario.php" target="_self"><button type="button">Consulta</button></a>
                                </div>
								<?php
								}
								if($_SESSION["codigo_tipo"] == '02'){
								?>
								<div class="send">
                                    <a href="consulta_usuario.php" target="_self"><button type="button">Consultar</button></a>
                                </div>
								<?php
								}
								if($_SESSION["codigo_tipo"] == '03'){
								?>
								<div class="send">
                                    <a href="#" target="_self"><button type="button">Modificar</button></a>
                                </div>
								<div class="send">
                                    <a href="consulta_usuario.php" target="_self"><button type="button">Consultar</button></a>
                                </div>
								<?php
								
								}
								?>
                            </div>
                        </div>
                    </div>
                    <div id="single-blog" class="page-section first-section">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>












			 <!-- Pie de pagina -->
            <footer>
                <div class="container">

 

                    <div class="main-footer">
                        <div class="row">

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