<?php
    session_start();
	ini_set('display_errors', 'On');
    ini_set('display_errors', 1);
	
    include("conectarse.php");
    $conn=conectarse();

	
    
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
                                    <a href="../administrador/">Home</a>
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
                                    <a href="../administrador/"><img src="images/logo.png" title="Grill Template" alt="Grill Website Template" ></a>
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
                                <h2>Eliminacion</h2>
                                <span>Home / <a>Eliminacion</a></span>
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
                                <h2>Eliminacion</h2>
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
                                                <div class="image">
                                                    <div class="image-post">
                                                        <img src="images/single-post.jpg" alt="">
                                                    </div>
                                                </div>

                                            <div class="leave-comment">

                                                <div class="leave-one">
                                                    <h3>Buscar mensajes</h3>
                                                </div>

                                            </div>

                                            <div class="leave-form">



                                                <!-- Formulario-->
                                                <form action="" method="post" class="leave-comment">

                                                    <div class="row">
                                                        <div class="name col-md-6">
                                                            <input title="Ingrese el nombre" type="text" name="filtro" id="filtro" value="" size="20" maxlength="30" placeholder="Nombre de quien envio el mensaje" autofocus required/>
                                                        </div>
                                                    </div>                        
                                                    <div class="send">
                                                        <button type="submit">Buscar</button>
                                                    </div>                                                
                                                </form>
                                                <!-- Fin de Formulario-->

                                                <?PHP
                                                extract($_POST); 
                                                if (isset($filtro)) {
                                                    $filtro = strtoupper($filtro);
                                                    $consulta ="SELECT * FROM mensajes WHERE nombre LIKE '$filtro%'";
                                                    $result1 = pg_query($conn,$consulta);
                                                    $numrows = pg_numrows($result1);
													
                                                    if($numrows!=0){
                                                        
                                                        
                                                ?>
                                                <h2>Resultado:</h2>
                                                <form method="post" action ="eliminar_mensajes.php" >
                                                <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr class="info">
                                                            <th>#</th>
                                                            <th>Codigo</th>
                                                            <th>Nombre</th>
                                                            <th>Precio</th>
                                                            <th>Disponibilidad</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <?PHP
                                                $count = 1;
                                                if ($row = pg_fetch_array($result1)) {
                                                        echo "<tr class='info'>";
                                                        echo "<td><b>".$count."</b></td>";
                                                        echo "<td>".$row['nombre']."</td>";
                                                        echo "<td>".$row['email']."</td>";
                                                        echo "<td>".$row['asunto']."</td>";
                                                        echo "<td>".$row['mensaje']."</td>";
                                                        echo "</tr>";
														$codigo = $row['nombre'];
														$nombre = $row['email'];										
                                                        $asunto = $row['asunto'];
                                                        $mensaje = $row['mensaje'];				
                                                        $count++;
                                                    }
                                                ?>
													<input  type="hidden"  name="codigo"  value=<?PHP echo $codigo;?> >
													<input  type="hidden"  name="nombre"  value=<?PHP echo $nombre;?> >
                                                    <input  type="hidden"  name="asunto"  value=<?PHP echo $asunto;?> >
                                                    <input  type="hidden"  name="mensaje"  value=<?PHP echo $mensaje;?> >
													
                                                    </tbody>
                                                </table>
                                                    <div class="send">
														<input type="submit" value="Eliminar" />
                                                    </div> 
                                                </form>
                                                <?php
                                                    }else{
                                                        ?>

                                                        <div class="alert alert-danger name col-md-10"><b>¡Ups!</b> No hay nada :( </div>
                                                        
                                                        <?php
                                                    }
                                                }
                                                ?>

												
                                            </div>
                                        </div>


                                        
                                        <div class="col-md-3 col-md-offset-1">
                                            <div class="side-bar">

                                                <!-- Menu lateral formularios -->
                                                <div class="news-letters">
                                                    <h4>Menu</h4>
                                                    <div class="archives-list">
                                                        <ul>
                                                            <li><a href="consulta_categoria.php"><i class="fa fa-angle-right"></i>Categorias</a></li>
                                                            <li><a href="consulta_cliente.php"><i class="fa fa-angle-right"></i>Cliente</a></li>
                                                            <li><a href="consulta_compra.php"><i class="fa fa-angle-right"></i>Compras</a></li>
                                                            <li><a href="consulta_estados.php"><i class="fa fa-angle-right"></i>Estados</a></li>
                                                            <li><a href="consulta_genero.php"><i class="fa fa-angle-right"></i>Genero</a></li>
                                                            <li><a href="consulta_mensajes.php"><i class="fa fa-angle-right"></i>Productos</a></li>
                                                            <li><a href="consulta_productos.php"><i class="fa fa-angle-right"></i>Proveedores</a></li>
                                                            <li><a href="consulta_tipo.php"><i class="fa fa-angle-right"></i>Tipo</a></li>
                                                            <li><a href="consulta_usuario.php"><i class="fa fa-angle-right"></i>Ventas</a></li>
                                                            <li><a href="consulta_ventas.php"><i class="fa fa-angle-right"></i>Contactenos</a></li>
                                                        </ul>
                                                    </div>        
                                                </div>
                                                <!-- Fin del Menu lateral formularios -->





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

                   

                    <div class="main-footer">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="shop-list">
                                    <h4 class="footer-title">Categorias</h4>
                                    <ul>
                                        <li><a href="juegos.html"><i class="fa fa-angle-right"></i>Juegos</a></li>
                                        <li><a href="entrega.html"><i class="fa fa-angle-right"></i>Entregas</a></li>
                                        <li><a href="about-us.php"><i class="fa fa-angle-right"></i>Nosotros</a></li>
                                        <li><a href="contact-us.html"><i class="fa fa-angle-right"></i>Contactenos</a></li>
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