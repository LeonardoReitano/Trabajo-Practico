<?php 

if($_FILES["Foto"]['error'])
		{
			echo "Error de imagen";
		}
		else
		{
			$tamanio =$_FILES['Foto']['size'];
    		if($tamanio>1024000)
    		{
    				echo "Error: archivo muy grande!"."<br>";
    		}
    		else
    		{
    			//OBTIENE EL TAMAÑO DE UNA IMAGEN, SI EL ARCHIVO NO ES UNA
				//IMAGEN, RETORNA FALSE
				$esImagen = getimagesize($_FILES["Foto"]["tmp_name"]);
				if($esImagen === FALSE) 
				{
							//NO ES UNA IMAGEN
					$res = "No es una imagen";
					echo $res;
				}
				else
				{
					$NombreCompleto=explode(".", $_FILES['Foto']['name']);
					$Extension=  end($NombreCompleto);
					$arrayDeExtValida = array("jpg", "jpeg", "gif", "bmp","png");  //defino antes las extensiones que seran validas
					if(!in_array($Extension, $arrayDeExtValida))
					{
					   //"Error archivo de extension invalida";
						$res = "Error, extension invalida";
						echo $res;
					}
					else
					{
						//$destino =  "fotos/".$_FILES["foto"]["name"];
						$destino = "../fotos/".$_FILES['Foto']['name'];//.$Extension;
						//$foto=.".".$Extension;
						//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
    					if (move_uploaded_file($_FILES["Foto"]["tmp_name"],$destino))
    					{		
      						 $res = "Correcto";
      						 echo $res;
      					}
      					else
      					{   
      						// algun error;
      						$res = "Error!";
      						echo $res;
      					}
					}
				}
			}


		}
?>