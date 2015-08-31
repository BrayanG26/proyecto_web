<?PHP
    //Activar errores
    ini_set('display_errors', 'On');
    ini_set('display_errors', 1);

    include("conectarse.php");
    $conn = conectarse();
    //LLenar el combo de tipos de usuario
    $result1 = pg_query("SELECT * FROM tipo_usuario");

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
        <title>Registrarse - Erogames LTDA</title>
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
        <!--<link href="css/style.css" media="screen" rel="stylesheet">
        <link href=
            'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
            rel='stylesheet' type='text/css'>-->
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
                                <h2>Entrega</h2>
                                <span>Home / <a href="registrarse.php">Registrarse</a></span>
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
                                <h2>Registro</h2>
                                <img src="images/under-heading.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div id="single-blog" class="page-section first-section">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">  
                                                <div class="image" >
                                                    <div class="image-post">
                                                        <img src="images/single-post.jpg" alt="">
                                                    </div>
                                                </div>

                                            <div class="leave-comment">

                                                <div class="leave-one">
                                                    <h3>Registrate</h3>
                                                </div>

                                            </div>

                                            <div class="leave-form">




                                                <!-- Formulario-->
                                                <form action="" method="post" class="leave-comment">

                                                    <div class="row">
                                                        <div class="name col-md-6">
                                                            <input title="Ingrese su nombre" type="text" name="nombres" id="nombres" value="" size="20" maxlength="30" placeholder="Nombres" autofocus required/>
                                                        </div>
                                                        <div class="name col-md-6">
                                                            <input title="Ingrese su apellido" type="text" name="apellidos" id="apellidos" value="" size="20" maxlength="30" placeholder="Apellidos" required/>
                                                        </div>
                                                        <div class="name col-md-7">
                                                            <input title="Ingrese su usuario" type="text" name="username" id="username" value="" size="20" maxlength="15" placeholder="Usuario" required/>
                                                        </div>
                                                        <div class="name col-md-5">
                                                            <input title="Ingrese la contraseña" type="password" name="password" id="password" value="" size="20" maxlength="20" placeholder="Contraseña" required/>
                                                        </div>
                                                        <div class="col-md-2">
                                                                <br/><p>Tipo de usuario: </p>    
                                                        </div> 
                                                        <div class="name col-md-10">
                                                            <br/>
                                                            <select class="form-control" name="tipo" id="tipo" required>
                                                            <?PHP
                                                            while ($fila = pg_fetch_array($result1)) {
                                                                $aux = "";
                                                                if ($fila["codigo_tipo"] == $row["codigo_tipo"]) {
                                                                    $aux = "selected";
                                                                }
                                                            ?>
                                                            <option <?PHP echo $aux; ?> value="<?PHP echo $fila["codigo_tipo"]; ?>"><?PHP echo $fila["nombre"]; ?></option>
                                                            <?PHP
                                                            }
                                                            ?>
                                                            </select>                                                            
                                                        </div>
                                                    </div>                        
                                                    <div class="send">
                                                        <button type="submit">Enviar</button>
                                                    </div>                                                
                                                </form>
                                                <!-- Fin de Formulario-->

                                                <?PHP
                                                extract($_POST);
                                                if (isset($nombres) && isset($apellidos) && isset($username) && isset($password) && isset($tipo)) {
                                                    $nombres = strtoupper($nombres);
                                                    $apellidos = strtoupper($apellidos);
                                                    $sql1="Select* from usuarios where usuario='$username' ";
                                                    $result2 = pg_query($conn,$sql1);
                                                    $numrows = pg_numrows($result2);
                                                    if($numrows == 0){
                                                        $insercion = "INSERT INTO usuarios (nombres, apellidos, usuario, clave, codigo_tipo) VALUES ('$nombres', '$apellidos', '$username', '$password', '$tipo')";
                                                        $result3 = pg_query($conn, $insercion);
                                                        if ($result3) {
                                                    ?>
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                        <strong>Registro Satisfactorio!</strong> Puedes <a href="ingresar.php">Ingresar</a>
                                                    </div>
                                                <?PHP
                                                    }else{
                                                ?>
                                                        <div class="alert alert-warning">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                            <strong>No se completo la operacion</strong> Intenta nuevamente
                                                        </div>
                                                <?PHP
                                                    }
                                                }else{
                                                ?>
                                                <div class="alert alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <strong>El usuario ya existe</strong> Intenta nuevamente
                                                </div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>


                                        
                                        <div class="col-md-3 col-md-offset-1">
                                            <div class="side-bar">

                                                <!-- Menu lateral formularios -->
                                            <!--Formularios no disponibles
                                                <div class="news-letters">
                                                    <h4>Menu Formularios</h4>
                                                    <div class="archives-list">
                                                        <ul>
                                                            <li><a href="entrega.html"><i class="fa fa-angle-right"></i>Categorias</a></li>
                                                            <li><a href="fcliente.html"><i class="fa fa-angle-right"></i>Cliente</a></li>
                                                            <li><a href="fcompras.html"><i class="fa fa-angle-right"></i>Compras</a></li>
                                                            <li><a href="festados.html"><i class="fa fa-angle-right"></i>Estados</a></li>
                                                            <li><a href="fgenero.html"><i class="fa fa-angle-right"></i>Genero</a></li>
                                                            <li><a href="fproductos.html"><i class="fa fa-angle-right"></i>Productos</a></li>
                                                            <li><a href="fproveedores.html"><i class="fa fa-angle-right"></i>Proveedores</a></li>
                                                            <li><a href="ftipo.html"><i class="fa fa-angle-right"></i>Tipo</a></li>
                                                            <li><a href="fventas.html"><i class="fa fa-angle-right"></i>Ventas</a></li>
                                                            <li><a href="contact-us.html"><i class="fa fa-angle-right"></i>Contactenos</a></li>
                                                        </ul>
                                                    </div>        
                                                </div>
                                            -->
                                                <!-- Fin del Menu lateral formularios -->


                                                
                                                <!-- barra lateral posts -->
                                                <!--
                                                <div class="recent-post">

                                                    <h4>Recent Posts</h4>
                                                    <div class="posts">
                                                        <div class="recent-post">
                                                            <div class="recent-post-thumb">
                                                                <img src="images/recent-post1.jpg" alt="">
                                                            </div>
                                                            <div class="recent-post-info">
                                                                <h6><a href="#">Vestibulum molestie odio sit amet</a></h6>
                                                                <span>24 Sep 2084</span>
                                                            </div>
                                                        </div>
                                                        <div class="recent-post">
                                                            <div class="recent-post-thumb">
                                                                <img src="images/recent-post2.jpg" alt="">
                                                            </div>
                                                            <div class="recent-post-info">
                                                                <h6><a href="#">Vivamus mattis quam eget urna tincidunt</a></h6>
                                                                <span>22 Sep 2084</span>
                                                            </div>
                                                        </div> 
                                                        <div class="recent-post">
                                                            <div class="recent-post-thumb">
                                                                <img src="images/recent-post3.jpg" alt="">
                                                            </div>
                                                            <div class="recent-post-info">
                                                                <h6><a href="#">Curabitur in nunc eget neque posuere</a></h6>
                                                                <span>21 Sep 2084</span>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                                -->
                                                <!-- fin barra lateral posts -->


                                                <!-- imagenes de barra lateral -->
                                                <!--
                                                <div class="advertisement">
                                                    <h4>Flickr news</h4>
                                                    <div class="flickr-images">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-2 col-xs-3">
                                                                <img src="images/flickr-image1.jpg" alt="">
                                                            </div>
                                                            <div class="col-md-4 col-sm-2 col-xs-3">
                                                                <img src="images/flickr-image2.jpg" alt="">
                                                            </div>
                                                            <div class="col-md-4 col-sm-2 col-xs-3">
                                                                <img src="images/flickr-image3.jpg" alt="">
                                                            </div>
                                                            <div class="col-md-4 col-sm-2 col-xs-3">
                                                                <img src="images/flickr-image4.jpg" alt="">
                                                            </div>
                                                            <div class="col-md-4 col-sm-2 col-xs-3">
                                                                <img src="images/flickr-image1.jpg" alt="">
                                                            </div>
                                                            <div class="col-md-4 col-sm-2 col-xs-3">
                                                                <img src="images/flickr-image2.jpg" alt="">
                                                            </div>
                                                            <div class="col-md-4 col-sm-2 col-xs-3">
                                                                <img src="images/flickr-image3.jpg" alt="">
                                                            </div>
                                                            <div class="col-md-4 col-sm-2 col-xs-3">
                                                                <img src="images/flickr-image4.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                -->
                                                <!-- imagenes de barra lateral -->




                                            </div>
                                        </div>     
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