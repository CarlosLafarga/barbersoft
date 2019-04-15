<?PHP include "../../Includes/parts/js.php";?>
<script type="text/javascript">
	$( document ).ready(function() {

      listar();
    });


    var listar = function(){

        var table =  $("#servicios").DataTable({
            "destroy":true,
            "ajax":{
                "method": "POST",
                "url": "../../Controllers/config/listarServicios.php"
            },
            "columns":[
                {"data":"Id_servicios"},
                {"data": "nombre"},
                {"data": "precio"},
                {"data": "fecha_creacion"},
                {"defaultContent": " <center><button type='button' class='editar btn-sm btn-primary'><i class='fa fa-edit'></i></button>|<button type='button' class='eliminar btn-sm btn-danger'><i class='fa fa-trash'></i></button></center>"}
            ]
        });

        acciones("#servicios",table);
    }

          var acciones = function(tbody,table){

               

                  $(tbody).on("click", "button.eliminar", function(){
                    var data = table.row($(this).parents("tr")).data();
                     if (confirm('¿Desea eliminar el producto' +' ' + data.Id_servicios + '?')) {
                    window.location.href = "../Modelo/funcionborrar.php?id="+data.Id_servicios+"";
                    console.log(data.Id_servicios);
                    }
                });


        }

        $('#agregar_form').on("submit", function(event){  
               event.preventDefault();  

             if($('#nombre_servicio').val() == "")  
                 {  
                  alert("Name is required");  
                 }  

            else if($('#precio_servicio').val() <= 0)  
                {  
                  alert("Address is required");  
                }  
            else  
             {  
             $.ajax({  
              url:"insertar.php",  
              method:"POST",  
              data:$('#agregar_form').serialize(),  
              beforeSend:function(){  
               $('#insert').val("Inserting");  
              },  
              success:function(data){  
               $('#agregar_form')[0].reset();  
               $('#agregar').modal('hide');  
               listar();  
              }  
              });  
              }  
              });

</script>