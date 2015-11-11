<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/Clientes.php");
require_once("clases/usuario.php");
require_once("clases/Encriptador.php");


$queHago=$_POST['queHacer'];

switch ($queHago) {



case 'modificarU':
$usuario = usuario::TraerUsuarioPorId($_POST['id']);		
			echo json_encode($usuario);
	break;

case 'MostrarListaU':
	include("partes/ListaU.php");
	break;
case 'GuardarUsuario':	
			$encriptada = Encriptadora::Encriptador($_POST['pass']);
			$usuario = new usuario();
			$usuario->Id=$_POST['id'];
			$usuario->Nombre=$_POST['nombre'];
			$usuario->Contrasenia=$encriptada;
			$usuario->Email=$_POST['email'];
			$usuario->Foto=$_POST['foto'];
			$cantidad=$usuario->GuardarUsuario();	            
            echo true;
            break;

 case 'borrarU':
	            $usuario = new usuario();
				$usuario->Id=$_POST['id'];
				$cantidad=$usuario->BorrarUsuario();
				echo $cantidad;
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
			
			$cliente->pago=$_POST['pag'];
			$cliente->envio=$_POST['env'];

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

