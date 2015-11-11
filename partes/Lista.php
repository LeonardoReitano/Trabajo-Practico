<?php
session_start();
if(isset($_SESSION['usuarioActual']))
{


                           
require_once("clases/AccesoDatos.php");
require_once("clases/Clientes.php");
$Array=Cliente::TraerTodoLosClientes();
     
echo"<table class='table' >
<thead>
<tr>
<td></td><td></td><td>Nombre</td><td>Apellido</td><td>Telefono</td><td>Domicilio</td><td>Pedido</td><td>Pago</td><td>Envio</td>
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
<td>$cliente->pago</td>
<td>$cliente->envio</td>

</tr> ";
}         
                                      
 echo "</tbody></table>";

      ?>
<a class="btn btn-info" href="index.php">Menu principal</a>



<?php 
}
else
{
  header("HTTP/1.0 500 No autorizado");
}

 ?>




 

