function VerEnMapa()
{    

      var prov=$("#Provincia").val();
      var loc=$("#Localidad").val();
      var direc=$("#Direccion").val();
       
if (prov!=null)
 {
    var punto = prov+","+loc+","+","+direc+", Argentina";
    console.log(punto);
 }
 else 
  var punto="Buenos Aires,Avellaneda,Mitre 750,Argentina";
  
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
       //  $("#id").val(id);
    
  });
}