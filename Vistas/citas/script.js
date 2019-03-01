

   function listar(){

   var ajax = $.ajax({
        data:{},
        url:"../Controllers/citas/listarCitas.php",
        success: function (response) {
            for (  i = 0 ; i < response.data.length; i++){ //cuenta la cantidad de registros
                var nuevafila= "<tr><td>" +
                response.data[i].nombre_persona + "</td><td>" +
                response.data[i].fechahor_cita + "</td><td>" +
                response.data[i].nombre_completo + "</td><td></tr>" +
                

                $("#citas_rows").append(nuevafila)
            }
        },
        error: function (response,status, error) {
            alert("error");
        }

    })

} 