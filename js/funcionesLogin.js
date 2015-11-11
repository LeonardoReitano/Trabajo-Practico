 function login()
        {
        	

        	var elUsuario=$("#usuario").val();
        	var laClave=$("#pass").val();
        	var recordar = $("#recordar").is(':checked');
       

        	var funcionAjax = $.ajax({url:"ValidarUsuario.php", type:"POST",
					data:
					{
						usuario:elUsuario,
						clave:laClave,
						recordarme:recordar
						
					}
				});
				
				funcionAjax.done(function(resultado){
					
						if(resultado==1)
						{

							alert("Bienvenido");
							window.location="index.php";

						}
						else
						{
							console.log(resultado);	
							alert("Usuario no registrado, reingrese");
						} 
					}); 	
			
        	

        }


        function logout()
        {
        	var funcionAjax=$.ajax({
			url:"logout.php",
			type:"POST"		
			});

			funcionAjax.done(function(retorno){				
				$("#usuario").val("");
				$("#pass").val("");							
			
			});	

        } 

     