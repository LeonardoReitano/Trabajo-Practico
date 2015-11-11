 <div id="contenedor">



<table class="table">
	<tr>
		<td>Ingrese Provincia</td>
		<td>Ingrese Localidad</td>
		<td>Ingrese Direccion</td>
	</tr>
	<tr>
		<td><input type="text"  id="Provincia" style="width:230px;height:25px"></td>
		<td><input type="text" id="Localidad"  style="width:230px;height:25px"></td>
		<td><input type="text"  id="Direccion" style="width:230px;height:25px"></td>
	</tr>

</table>
<td><input type="button" class="btn btn-info" value="Buscar" onclick="VerEnMapa()"></td>
 		
      	    <div id="mostrarMapa" style="width: 765px; height: 388px">
             <script async defer src="https://maps.google.com/maps/api/js?signed_in=true&callback=Geolocalizacion.Marcador.iniciar"></script>
        </div>
     <input type="hidden" name="punto" id="punto" readonly>
     <input type="hidden" name="id" id="id" readonly>
</div>