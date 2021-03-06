<?PHP include "../../Includes/parts/js.php";?>
<script type="text/javascript">
	$( document ).ready(function() {

    $('.clockpicker').clockpicker();
    var date = $("#fecha-escoger").val();
    listar(date);
    listar_barberos();

    $('#data1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
    });
    });




   function listar(date){
   
   var ajax = $.ajax({
        data:{date:date},
        method:"POST",
        url:"../../Controllers/citas/listarCitas.php",

        success: function (response) {

            var types = JSON.parse(response);
            console.log(types);
            console.log(types.data.length);
             $("#citas_rows").empty();
            for (  i = 0 ; i < types.data.length; i++){ //cuenta la cantidad de registros
                var id = i+1;
                var nuevafila = "<tr><td>"+id+"</td><td>" +
                types.data[i].nombre_persona    + "</td><td>" +
                types.data[i].fechahora_cita     +  "</td><td>" +
                types.data[i].nombre_completo   + "</td><td><center><button class='btn btn-primary'><i class='fa fa-pencil'></i></button>&nbsp;<button class='btn btn-danger'><i class='fa fa-trash'></i></button></center></td></tr>" ;
                
              
                $("#citas_rows").append(nuevafila);
            }
        },

        error: function (response,status, error) {
            alert("error");
        }

     });

    }  

        function listar_barberos(){

            $.ajax({

              type:"POST",
              url: "../../Controllers/caja/listar_barberos.php",
              success: function(response){
              $('#peluquero').html(response).fadeIn();
             }
        });
        }

    $( "#guardar" ).click(function() {

            var nombre = $("#nombre").val();
            var fecha = $("#fecha").val();
            var hora = $("#hora").val();
            var peluquero = $("#peluquero").val();
            var fecha_hora = fecha+" "+hora;

            if(nombre != "" && peluquero != ""){

                 $.ajax({
                 url:"../../Controllers/citas/insertarCitas.php",
                 method:"POST",
                 data:{nombre:nombre,fecha_hora:fecha_hora,peluquero:peluquero},

                 success:function(data){

                    var numero = Number(data);
                    if(numero == 1 ){


                       swal({
                         title:"Buen trabajo!",
                         text: "Se agrego cita con exito",
                         type: "success"
                         });
                         $("#form-citas")[0].reset();
                         listar(fecha);

                    }else if(numero = 2){

                      alert("Error al insertar cita.");
                      $("#form-citas")[0].reset();

                    }



                 }

                 });
            }else{

                   swal({
                         title:"Cuidado!",
                         text: "Debe Rellenar todos los campos requeridos.",
                         type: "warning"
                         });

            }


        });


</script>