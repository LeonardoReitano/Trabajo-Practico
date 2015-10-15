

function Mostrar(queMostrar)
{
		
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		console.log(retorno);
		$("#content").html(retorno);
		
	});
	funcionAjax.fail(function(retorno){
		console.log(retorno);
		alert("No registrado");
		$("#principal").html(":(");
		
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}







