

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
		//console.log(retorno);
		alert("FCDfsdfs");
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
								pedido:pedidoClie 						

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


