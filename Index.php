<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">



<title>Menu</title>


<link href="style.css" rel="stylesheet" type="text/css">
<link href="media-queries.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="estilo.css">
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>
<script type="text/javascript" src="js/funcionesAJAX.js"></script>
<script type="text/javascript" src="js/funcionesLogin.js"></script>

<script type="text/javascript" src="js/funcionesMapa.js"></script>
<script type="text/javascript" src="js/geolocalizacionCommon.js"></script>
<script type="text/javascript" src="js/moduloGeolocalizacion.js"></script>



</head>

<body onload="Mostrar('MostrarIndex')">

<div id="pagewrap">

	<header id="header">

		<hgroup>
			<h1 id="site-logo"><a href="#">Carnicería</a></h1>
			
		</hgroup>

		<nav>
			<ul id="main-nav" class="clearfix">
				<li><a href="Index.php">Inicio</a></li>
				<li><a  style="cursor:pointer" onclick="Mostrar('MostrarLista')" >Lista de Pedidos</a></li>
				<li><a  style="cursor:pointer" onclick="VerEnMapa('Buenos Aires,Mitre 750')" >Mapa</a></li> 
				
			
			</ul>
			<!-- /#main-nav --> 
		</nav>

		<form id="searchform">
			<input type="search" id="s" placeholder="Buscar">
		</form>

	</header>
	<!-- /#header -->
	
	<div id="content">

	
		

		

	</div>
	<!-- /#content --> 
	
	
	<aside id="sidebar">

		<section class="widget">
			<h4 class="widgettitle">Ingresar</h4>
			<ul>
				
					<input type="text" name="usuario" id="usuario" placeholder="Usuario" value="<?php
					if(isset($_SESSION['usuarioActual']))
					{
							 echo $_SESSION['usuarioActual']; 
					}?>">
						<input type="password" id="pass" name="pass" placeholder="Contraseña">
						<input type="button" id="registro" name="registro" value="Login" class="MiBotonUTN" onclick="login()">
						<input type="button" id="logout" name="logout" value="Logout" onclick="logout()" class="MiBotonUTN">  
						<input type="button" id="Registrarme" name="Registrarme" value="Registrarme" onclick="Mostrar('Registro')" class="MiBotonUTN">  



			
			</ul>
		</section>
		<!-- /.widget -->

		<!--<section class="widget clearfix">
			<h4 class="widgettitle">Panel </h4> -->
			
		</section>
		<!-- /.widget -->
						
	</aside>
	<!-- /#sidebar -->

	<footer id="footer">
	
		

	</footer>
	<!-- /#footer --> 
	
</div>
<!-- /#pagewrap -->

</body>
</html>