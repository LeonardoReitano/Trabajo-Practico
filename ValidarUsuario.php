<?php
include_once("clases/AccesoDatos.php");
include_once("clases/usuario.php");

session_start();

if(usuario::validarUsuario($_POST['usuario'],$_POST['clave']))
{
		$_SESSION["usuarioActual"]=$_POST['usuario'];
		echo true;
}
else
{
	echo false;
}
	






?>




