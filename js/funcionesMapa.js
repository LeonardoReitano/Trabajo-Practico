function VerEnMapa(punto)
{    
    var punto = punto +", Argentina";
    console.log(punto);
    var funcionAjax=$.ajax({
    url:"nexo.php",
    type:"post",
    data:{
      queHacer:"VerEnMapa"
    }
  });
    funcionAjax.done(function(retorno){
    $("#content").html(retorno);
        $("#punto").val(punto);
         $("#id").val(id);
    
  });
}