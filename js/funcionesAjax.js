

function Mostrar(queMostrar)
{
		
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		
		$("#content").html(retorno);
		
	});
	funcionAjax.fail(function(retorno){
		
		alert("No registrado");
		$("#principal").html(":(");
		
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}







