
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
				<td>Pago</td>
				<td>Envio</td>

				

			</tr>
			<tr>
				<td><input type="text" autofocus="" name="Nombre" id="Nombre" title="cualquiernombre" required minlegth="4" pattern="[a-zA-Z]*+"></td>
				<td><input type="text" name="Apellido" id="Apellido" ></td>
				<td><input type="number" name="Telefono" id="Telefono"></td>
				<td><input type="text"   name="Domicilio" id="Domicilio"></td>
				<td><textarea  name="Pedido" id="Pedido"></textarea></td>
				<td><input type="radio" name="Pago" value="Efectivo" checked>Efectivo
  					
  					 <input type="radio" name="Pago" value="Tarjeta">Tarjeta</td>
				<td>
					<select id="Envio">
					  <option value="EnvioD">Domicilio</option>
					  <option value="Retira">Retira</option>
					</select>			
				</td>

			</tr>
			<tr align="right" >			
				<td colspan="5" ><input type="submit" value='Aceptar' class="MiBotonUTNPro" ></td>
					
			</tr>
				<input readonly   type="hidden"    id="idPedido">
			
			
		</table>
	</form>

</body>
</html>

