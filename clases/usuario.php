<?php
    class usuario
    {
        public $Id;
        public $Nombre;
        public $Contrasenia;
        public $Email;
        public $Foto;
        
 
     public static function TraerUsuarioPorNombre($nomb)
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUsuarioPorNombre('$nomb')");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario"); 

        }



          public static function TraerTodoLosUsuarios()
        {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("Select * from usuarios");
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario"); 

        }




    
        public static function validarUsuario($Nombre, $Contrasenia)
        {


            $resultado= usuario::TraerUsuarioPorNombre($Nombre); 
    
            if($resultado != null)
            {
            if($resultado[0]->Nombre==$Nombre && $resultado[0]->Contrasenia==$Contrasenia)
                return true;
            else
                
                return false;
            }
            else 
                return false;
        }  


 public function InsertarUsuario()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("CALL altausuario(:paramNombre,:paramcontrasenia,:paramEmail,:paramFoto)");
                $consulta->bindValue(':paramNombre',$this->Nombre, PDO::PARAM_STR);
                $consulta->bindValue(':paramcontrasenia', $this->Contrasenia, PDO::PARAM_STR);
                $consulta->bindValue(':paramEmail', $this->Email, PDO::PARAM_STR);   
                $consulta->bindValue(':paramFoto', $this->Foto, PDO::PARAM_STR);            
                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();
     }




 public function BorrarUsuario()
     {
                $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
                $consulta =$objetoAccesoDato->RetornarConsulta("CALL borrarusuario(:paramId)");
                $consulta->bindValue(':paramId',$this->Id, PDO::PARAM_INT);                       
                $consulta->execute();       
                return $objetoAccesoDato->RetornarUltimoIdInsertado();
     }




public function ModificarUsuario()
{
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("CALL modificarUsuario(:paramid,:nombre,:contra,:email,:foto)");              
            $consulta->bindValue(':paramid',$this->Id, PDO::PARAM_INT);
            $consulta->bindValue(':nombre',$this->Nombre, PDO::PARAM_STR);
            $consulta->bindValue(':contra', $this->Contrasenia, PDO::PARAM_STR);
            $consulta->bindValue(':email', $this->Email, PDO::PARAM_INT);
            $consulta->bindValue(':foto', $this->Foto, PDO::PARAM_STR);      

            return $consulta->execute();
}




      public function GuardarUsuario()
     {
        if($this->Id>0)
             $this->ModificarUsuario();
        else           
        $this->InsertarUsuario();


     }


     public static function TraerUsuarioPorId($id) 
    {
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $consulta =$objetoAccesoDato->RetornarConsulta("select Id,Nombre,Contrasenia,Email,Foto from usuarios where Id=$id");
            $consulta->execute();
            $clientesBuscado= $consulta->fetchObject('usuario');
            return $clientesBuscado;            
    }
   

    }

?>