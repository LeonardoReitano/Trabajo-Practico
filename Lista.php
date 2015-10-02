
 <html>
 <head> 	 
        
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="js/funcionesABM.js" ></script> 
  <script type="text/javascript" src="js/funcionesAjax.js"></script>


 	<title>Lista</title>
 </head>
 <body>
<?php
session_start();
if(isset($_SESSION['usuarioActual']))
{

}
else
{
	header("location:index.php");
}

                           
require_once("clases/AccesoDatos.php");
require_once("clases/Clientes.php");
$Array=Cliente::TraerTodoLosClientes();
     
echo"<table class='table' >
<thead>
<tr>
<td></td><td></td><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Domicilio</td><td>Pedido</td>
</tr>
</thead>
<tbody>";
foreach ($Array as $cliente) 
 {
  echo "<tr>
  <td><a class='btn btn-info' onclick='modificar($cliente->id)'>Modificar</td>
  <td><a class='btn btn-warning' onclick='borrar($cliente->id)'>Borrar</td>
 <td>$cliente->nombre</td>
<td>$cliente->apellido</td>
 <td>$cliente->telefono</td>
<td>$cliente->domicilio</td>
<td>$cliente->pedido</td>

</tr> ";
}         
                                      
 echo "</tbody></table>";

      ?>
<a class="btn btn-info" href="index.php">Menu principal</a>
 </body>
 </html>

 

