	function subirFoto(formData){
			
			$.ajax({
			    url: 'partes/subirFoto.php',  
			    type: 'POST',
			    data: formData,			    
			    cache: false,//Para subir archivos via ajax
			    contentType: false,//Para subir archivos via ajax
			    processData: false,//Para subir archivos via ajax
			    beforeSend: function(){
			        $("#mensaje").html("Subiendo imagen");			          
			    },
			    success: function(data){
			    	 console.log(data);
			        
			        if(data == "Correcto")
			        	alert("Imagen subida correctamente");
			        	else
			        	alert(data);
			        
			    },
			    error: function(data){
			    	console.log(data);
			        alert("Error al subir imagen");			        
			    }
			});
		}


function registroUsuario()
  {
  			var id=$("#idUsuario").val();	
			var nomusuario=$("#Nom").val();
			var contraUsuario=$("#Contra").val();
			var emailUsuario=$("#Email").val();
			var foto = $("#Foto")[0].files[0].name;

			var formData = new FormData($("#formUsuario")[0]);
			

			var funcionAjax=$.ajax({url:"nexo.php",type:"POST",

						data:
						{
							    queHacer:"GuardarUsuario",
							    id:id,
								nombre:nomusuario,
								pass:contraUsuario,
								email:emailUsuario,
								foto:foto					

						}
							});

					funcionAjax.done(function(resultado){
						console.log(resultado);

						subirFoto(formData);				
						Mostrar('MostrarIndex');
						/*/console.log(resultado);	
						alert("Usuario Registrado");*/
						

					

						//Mostrar('RegistrarInvitado');														
					});
						
							
					funcionAjax.fail(function(resultado){	
						alert("Error en el registro");
		
					});				
				


  }





      function modificarUsuario(idParametro) 
      {

      	Mostrar("Registro");
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"modificarU",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		//console.log(retorno);

		var usuario =JSON.parse(retorno);

			$("#idUsuario").val(usuario.Id);	
			$("#Nom").val(usuario.Nombre);
			$("#Contra").val(usuario.Contrsenia);
			$("#Email").val(usuario.Email);
			$("#Foto").attr("src", "fotos/"+usuario.foto)
	});
	funcionAjax.fail(function(retorno){	
		//console.log(retorno);
		alert("No se modifico");
	});	
      
      }





 function BorrarUsuario(idParametro) 
      {

      	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"borrarU",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		console.log(retorno);//Salta error usarlo
		//(Mostrar("MostrarGrilla");
			alert("Exito al borrar");
			Mostrar("MostrarListaU");
		//$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		alert("Error");

		$("#informe").html(retorno.responseText);	
	});	
      
      }







function modificar(idParametro)
{
	Mostrar("MostrarAlta");
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"modificar",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		console.log(retorno);

		var clie =JSON.parse(retorno);
		$("#idPedido").val(clie.id);
		$("#Nombre").val(clie.nombre);
		$("#Apellido").val(clie.apellido);
		$("#Telefono").val(clie.telefono);
		$("#Domicilio").val(clie.domicilio);
		$("#Pedido").val(clie.pedido);
	});
	funcionAjax.fail(function(retorno){	
		alert("No se modifico");
	});	
	
}




function borrar(idParametro)
{

	
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"borrar",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		console.log(retorno);//Salta error usarlo
		//(Mostrar("MostrarGrilla");
			alert("Exito al borrar");
			Mostrar("MostrarLista");
		//$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		alert("Error");

		$("#informe").html(retorno.responseText);	
	});	

}



 


function alta()
		{

			var id = $("#idPedido").val();	
			var nomClie=$("#Nombre").val();
			var apeClie=$("#Apellido").val();
			var teleClie=$("#Telefono").val();
			var domiClie=$("#Domicilio").val();
			var pedidoClie=$("#Pedido").val();
		   	var pago=$('input:radio[name=Pago]:checked').val();
        	var envio=$("#Envio").val();
			
			
			if(!validarTexto())
        	 {
				var funcionAjax=$.ajax({url:"nexo.php",type:"POST",

						data:
						{
							    queHacer:"GuardarCliente",
							    id:id,
								nombre:nomClie,
								apellido:apeClie,
								telefono:teleClie,
								domicilio:domiClie,
								pedido:pedidoClie,
								pag:pago,
								env:envio 						

						}
							});

					funcionAjax.done(function(resultado){

						console.log(resultado);	
						alert("Pedido Registrado");

					

						//Mostrar('RegistrarInvitado');														
					});
						
							
					funcionAjax.fail(function(resultado){	
						alert("No se ha dado de alta");
		
					});	
					

				
				}
			}

	
      
        

        function validarTexto()
        {

        	var nom = document.getElementById("Nombre").value;
        	var ape = document.getElementById("Apellido").value;
        	var tel = document.getElementById("Telefono").value;
        	var dom = document.getElementById("Domicilio").value;
        	var ped = document.getElementById("Pedido").value;
        
        	var mensaje="Debe ingresar: ";
        	var bandera = false;

        	if(nom == "" || nom == null)
        	{
        		mensaje+="el nombre ";
        		bandera=true;
        	}        		
        	if(ape == "" || ape == null)
        	{
        		mensaje+="el apellido ";
        		bandera=true;
        	}
        	if(tel == "" || tel == null)
        	{
        		mensaje+="el tel ";
        		bandera=true;
        	}		
        	if(dom == "" || dom == null)
        	{
        		mensaje+="el numero de dom ";
        		bandera=true;
        	}
        	if(ped == "" || ped == null)
        	{
        		mensaje+="el numero de ped ";
        		bandera=true;
        	}

        	if(mensaje !="Debe ingresar: ")
        		alert(mensaje);


        	return bandera; 

        } 


