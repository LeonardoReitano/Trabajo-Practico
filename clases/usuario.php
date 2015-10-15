<?php
	class usuario
	{
        public $id;
		public $nombre;
		public $contraseña;
         public $email;
		
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


 public function InsertarUsuario()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("INSERT into usuarios (nombre,contraseña,email)values(:paramNombre,:paramContraseña,:paramEmail)");
               $consulta->bindValue(':paramId',$this->id, PDO::PARAM_INT);
                $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_STR);
                $consulta->bindValue(':paramContraseña', $this->apellido, PDO::PARAM_STR);
                $consulta->bindValue(':paramEmail', $this->legajo, PDO::PARAM_STR);
              
                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();
     }






/*
 */

       


  




    /* public function validarusuario($usuario,$clave)
     {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("select * from usuario where mail=$usuario and ");
            $consulta->execute();         


     }*/
   

	}

?>