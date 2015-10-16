
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">



<title>Pedido</title>

<!-- main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/media-queries.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script type="text/javascript" src="js/funcionesABM.js" ></script> 
  <script type="text/javascript" src="js/funcionesAjax.js"></script>





</head>
<body>
	 <form  onsubmit="alta(); return false">

		<table class='table' >
			
			<tr> 
		
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Telefono</td>
				<td>Domicilio</td>
				<td>Pedido</td>
				

			</tr>
			<tr>
				<td><input type="text" name="Nombre" id="Nombre"></td>
				<td><input type="text" name="Apellido" id="Apellido" ></td>
				<td><input type="number" name="Telefono" id="Telefono"></td>
				<td><input type="text"  size="40"  width="70" name="Domicilio" id="Domicilio"></td>
				<td><input type="text" size="40"  width="70" name="Pedido" id="Pedido"></td>
				

			</tr>
			<tr align="right" >			
				<td colspan="5" ><input type="submit" value='Aceptar' class="MiBotonUTNPro" ></td>
					
			</tr>
				<input readonly   type="hidden"    id="idPedido">
			
			
		</table>
	</form>

</body>
</html>

