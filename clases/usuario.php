<?php
	class usuario
	{
		public $nombre;
		public $contraseña;
		
        public function GetNombre()
        {
            return $this->nombre;

        }

         public function getConstraeseña()
        {
            return $this->contraseña;

        }


	 public static function TraerUsuarioPorNombre($nomb)
   		{
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuarios where Nombre='$nomb'");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario"); 

   		}



    
        public static function validarUsuario($nom, $contra)
        {


            $resultado= usuario::TraerUsuarioPorNombre($nom); 
            if($resultado[0]->nombre=$nom && $resultado[0]->contraseña=$contra)
                return true;
            else
                
                return false;

        }  









/*
  public function InsertarUsuario()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into usuario (nombre,apellido,legajo,direccion,fecha,mail,foto,clave)values(:paramNombre,:paramApellido,:paramLegajo,:paramDireccion,:paramFecha,:paramMail,:paramFoto,:paramClave)");
               $consulta->bindValue(':paramId',$this->id, PDO::PARAM_INT);
                $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_INT);
                $consulta->bindValue(':paramApellido', $this->apellido, PDO::PARAM_STR);
                $consulta->bindValue(':paramLegajo', $this->legajo, PDO::PARAM_STR);
                $consulta->bindValue(':paramDireccion', $this->direccion, PDO::PARAM_STR);
                $consulta->bindValue(':paramFecha', $this->fecha, PDO::PARAM_STR);
                $consulta->bindValue(':paramMail', $this->mail, PDO::PARAM_STR);
                $consulta->bindValue(':paramFoto', $this->foto, PDO::PARAM_STR);
                $consulta->bindValue(':paramClave', $this->clave, PDO::PARAM_STR);
                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();
     }*/

       


  




    /* public function validarusuario($usuario,$clave)
     {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("select * from usuario where mail=$usuario and ");
            $consulta->execute();         


     }*/
   

	}

?>