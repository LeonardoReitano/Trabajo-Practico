<?php
	class usuario
	{
        public $id;
		public $nombre;
		public $contrasenia;
        public $email;
		
        public function GetNombre()
        {
            return $this->nombre;

        }

         public function getConstraeseña()
        {
            return $this->contrasenia;

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
            if($resultado[0]->nombre=$nom && $resultado[0]->contrasenia=$contra)
                return true;
            else
                
                return false;

        }  


 public function InsertarUsuario()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("CALL altausuario(:paramNombre,:paramcontrasenia,:paramEmail)");
                $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_STR);
                $consulta->bindValue(':paramcontrasenia', $this->contrasenia, PDO::PARAM_STR);
                $consulta->bindValue(':paramEmail', $this->email, PDO::PARAM_STR);              
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