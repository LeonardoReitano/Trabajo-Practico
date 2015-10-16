<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">



<title>Registro de Usuario</title>

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
	 <form  onsubmit="registroUsuario(); return false">

		<table class='table' >
			
			<tr> 
		
				<td>Nombre</td>
				<td>Contraseña</td>
				<td>Email</td>
							

			</tr>
			<tr>
				<td><input type="text" id="Nom" name="Nom"></td>
				<td><input type="password" id="Contra" name="Contra"></td>
				<td><input type="Email" id="Email" name="Email"></td>
			</tr>
			<tr align="right" >			
				<td colspan="5" ><input type="submit" value='Registrar Usuario' class="MiBotonUTNPro" ></td>
					
			</tr>
			<input readonly   type="hidden"    id="idUsuario">
			
		</table>
	</form>

</body>
</html>

