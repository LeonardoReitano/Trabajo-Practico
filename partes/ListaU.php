<?php
session_start();
if(isset($_SESSION['usuarioActual']))
{


                           
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
$Array=usuario::TraerTodoLosUsuarios();
     
echo"<table class='table' >
<thead>
<tr>
<td></td><td></td><td>Nombre</td><td>Email</td><td>Foto</td>
</tr>
</thead>
<tbody>";
foreach ($Array as $usuario) 
 {
  echo "<tr>
 	<td><a class='btn btn-info' onclick='modificarUsuario($usuario->Id)'>Modificar</td>
 	<td><a class='btn btn-warning' onclick='BorrarUsuario($usuario->Id)'>Borrar</td>
 	<td>$usuario->Nombre</td>
	<td>$usuario->Email</td>
	<td><img class='ImagenSubida' src='fotos/$usuario->Foto'></td>

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




 

