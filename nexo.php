<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/Clientes.php");
require_once("clases/usuario.php");


$queHago=$_POST['queHacer'];

switch ($queHago) {


case 'GuardarUsuario':	
			$usuario = new usuario();
			$usuario->id=$_POST['id'];
			$usuario->nombre=$_POST['nombre'];
			$usuario->contrasenia=$_POST['pass'];
			$usuario->email=$_POST['email'];		
			$cantidad=$usuario->InsertarUsuario();	            
            echo true;
            break;
case 'MostrarFormMod':
		include("partes/formModificar.php");
		break;
case 'VerEnMapa':
			include("partes/formMapaGoogle.php");
			break;	
case 'Registro':
				include("partes/Registro de Usuario.php");
					break;	
case 'MostrarAlta':
		include("partes/PedidoDeClientes.php");
		break;
	case 'MostrarIndex':
		include("partes/inicio.php");
		break;	
	case 'MostrarLista':
		include("partes/Lista.php");
		break;

	case 'borrar':
			$cliente = new Cliente();
			$cliente->id=$_POST['id'];
			$cantidad=$cliente->BorrarCliente();
			echo $cantidad;

		break;
	case 'GuardarCliente':
			$cliente = new Cliente();
			$cliente->id=$_POST['id'];
			$cliente->nombre=$_POST['nombre'];
			$cliente->apellido=$_POST['apellido'];
			$cliente->telefono=$_POST['telefono'];
			$cliente->domicilio=$_POST['domicilio'];
			$cliente->pedido=$_POST['pedido'];
			$cantidad=$cliente->GuardarCliente();	            
            echo true;

		break;

	case 'modificar':
			$clie = Cliente::TraerUnCliente($_POST['id']);		
			echo json_encode($clie);

		break;
	default:
		# code...
		break;
}

 ?>

