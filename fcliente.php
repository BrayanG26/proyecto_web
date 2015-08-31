
<?PHP
ini_set('display_errors', 'On');
ini_set('display_errors', 1);


    $codigo_cliente = $_POST["codigo"];
    $identificacion = $_POST["identificacion"];
    $email = $_POST["email"];
    $nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$fecha_nacimiento = $_POST["fecha_nacimiento"];
	$telefono = $_POST["telefono"];
	$pais = $_POST["pais"];
	$ciudad = $_POST["ciudad"];
	$direccion = $_POST["direccion"];
	$codigo_mpago = $_POST["codigo_mpago"];
	$codigo_genero = $_POST["codigo_genero"];
	
	
	
    $conexion = pg_connect("host=localhost user=postgres port=5432 dbname=eroGames password=123456"); 
    /*if ($conexion === PGSQL_CONNECTION_OK) {
		echo 'Estado de la conexión ok';
	} else {
		echo "No se ha podido conectar \n";
		$conexion2 = pg_connection_reset($conexion);
		if ($conexion2) {
			echo "restablecimiento con exito\n";
		} else {
			echo "restablecimiento fallo\n";
		}
	}          */                                                               
    $insercion="insert into clientes (codigo_cliente, identificacion, nombres, apellidos, fecha_nacimiento, 
	email, telefono, pais, ciudad, direccion, codigo_mpago, codigo_genero ) values ('$codigo_cliente', '$identificacion', '$nombres', '$apellidos', '$fecha_nacimiento', '$email',
	'$telefono', '$pais', '$ciudad', '$direccion', '$codigo_mpago', '$codigo_genero')";
                                                
    $result = pg_query($conexion, $insercion);
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
    </head>










    <!--..............Body......................-->       
    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->






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
                                <h2>Insercion de datos correcta</h2>
                                <img src="images/under-heading.png" alt="" />
                                <div class="send">
                                	<button type="button" onclick="history.back()">Regresar</button>
                                </div>

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

    </body>
</html>