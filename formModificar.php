
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">



<title>Modificar</title>

<!-- main css -->
<link href="style.css" rel="stylesheet" type="text/css">

<!-- media queries css -->
<link href="media-queries.css" rel="stylesheet" type="text/css">

<link href="estilo.css" rel="stylesheet" type="text/css">

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
				<td><input type="text" name="Domicilio" id="Domicilio"></td>
				<td><input type="text" name="Pedido" id="Pedido"></td>
				

			</tr>
			<tr align="right" >			
				<td colspan="5" ><input type="submit" value='Aceptar' class="MiBotonUTNPro" ></td>
					
			</tr>
				<input readonly   type="hidden"    id="idPedido">
			
			
		</table>
	</form>

</body>
</html>


    



   


