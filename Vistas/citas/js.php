<?PHP include "../../Includes/parts/js.php";?>
<script type="text/javascript">
	$( document ).ready(function() {
    console.log( "ready!" );
    listar();
    });




   function listar(){

   var ajax = $.ajax({
        data:{},
        url:"../../Controllers/citas/listarCitas.php",
        success: function (response) {

            var types = JSON.parse(response);
            console.log(types);
            console.log(types.data.length);
            for (  i = 0 ; i < types.data.length; i++){ //cuenta la cantidad de registros
                var id = i+1;
                var nuevafila = "<tr><td>"+id+"</td><td>" +
                types.data[i].nombre_persona    + "</td><td>" +
                types.data[i].fechahora_cita     +  "</td><td>" +
                types.data[i].nombre_completo   + "</td><td><button class='btn btn-primary'>Editar</button><button class='btn btn-danger'>Eliminar</button></td></tr>" ;
                
                //console.log("Estoy dentro del for");
                $("#citas_rows").append(nuevafila)
            }
        },

        error: function (response,status, error) {
            alert("error");
        }

    })

} 
</script>