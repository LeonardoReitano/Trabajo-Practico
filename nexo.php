<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/Clientes.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {

case 'MostrarFormMod':
		include("formModificar.php");
		break;
case 'MostrarAlta':
		include("PedidoDeClientes.php");
		break;
	case 'MostrarIndex':
		include("inicio.php");
		break;	
	case 'MostrarLista':
		include("Lista.php");
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

