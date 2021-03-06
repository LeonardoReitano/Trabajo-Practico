<?php 


class Cliente 
{	

	public $id;
 	public $nombre;
  	public $apellido;
  	public $telefono;
  	public $domicilio;
  	public $pedido;
  	public $pago;
  	public $envio;
  	

	   	public static function TraerTodoLosClientes()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,Nombre as nombre, Apellido as apellido,Telefono as telefono,Domicilio as domicilio, Pedido as pedido,Pago as pago,Envio as envio from clientes");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "Cliente");		
	}
	

	   public function InsertarCliente()
     {
     			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("CALL alta(:nom,:ape,:tele,:domi,:pedi,:pago,:envio)");
				$consulta->bindValue(':nom',$this->nombre, PDO::PARAM_INT);
				$consulta->bindValue(':ape', $this->apellido, PDO::PARAM_STR);
				$consulta->bindValue(':tele', $this->telefono, PDO::PARAM_INT);
				$consulta->bindValue(':domi', $this->domicilio, PDO::PARAM_STR);
				$consulta->bindValue(':pedi', $this->pedido, PDO::PARAM_STR);
				$consulta->bindValue(':pago', $this->pago, PDO::PARAM_STR);
				$consulta->bindValue(':envio', $this->envio, PDO::PARAM_STR);

				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
              /*  $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("CALL alta('$this->nombre','$this->apellido','$this->telefono','$this->domicilio','$this->pedido')");
                
                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();*/
     }	
	 
	


	       public function BorrarCliente()
   {

            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL borrar(:id)");
            $consulta->bindValue(':id',$this->id, PDO::PARAM_INT);                     
            $consulta->execute();   
            return $consulta->rowCount();         

   }

	
	 public function ModificarClienteParametros()
	 {

	 		 	
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL modificar(:paramid,:nombre,:apel,:telef,:domi,:pedid,:pago,:envio)");
	
				
			$consulta->bindValue(':paramid',$this->id, PDO::PARAM_INT);
			$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
			$consulta->bindValue(':apel', $this->apellido, PDO::PARAM_STR);
			$consulta->bindValue(':telef', $this->telefono, PDO::PARAM_INT);
			$consulta->bindValue(':domi', $this->domicilio, PDO::PARAM_STR);
			$consulta->bindValue(':pedid', $this->pedido, PDO::PARAM_STR);
			$consulta->bindValue(':pago', $this->pago, PDO::PARAM_STR);
			$consulta->bindValue(':envio', $this->envio, PDO::PARAM_STR);

			return $consulta->execute();



	 }

  	public function mostrarDatos()
	{
	  	return "Metodo mostar:".$this->nombre."    ".$this->apellido."  ".$this->telefono." ".$this->domicilio." ".$this->pedido." ".$this->pago." ".$this->envio;
	}

	  public function GuardarCliente()
     {
        if($this->id>0)
             $this->ModificarClienteParametros();
        else           
        $this->InsertarCliente();


     }
	



public static function TraerUnCliente($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,nombre,apellido,telefono,domicilio,pedido,pago,envio from clientes where id = $id");
			$consulta->execute();
			$clientesBuscado= $consulta->fetchObject('Cliente');
			return $clientesBuscado;			
	}

}

 ?>
