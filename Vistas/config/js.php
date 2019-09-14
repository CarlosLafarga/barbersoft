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

               
                  $(tbody).off('click');
                  $(tbody).on("click", "button.eliminar", function(){
                    var data = table.row($(this).parents("tr")).data();

                   swal({
                        title: "Estas seguro que deseas desac?",
                        text: "You will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: [
                            'No, cancel it!',
                            'Yes, I am sure!'
                        ],
                        dangerMode: true,
                        }
                        ).then(
                          function (isConfirm) {
                            if (isConfirm) {
                              $.ajax({
                                   url: "../../Controllers/config/borrarServicio.php",
                                   type: 'POST',           
                                   data: {id:data.Id_servicios},
                                   dataType: 'json'
                                   })

                                   .done(function(data){

                                  if(data == 1){

                                   swal({ title: "Buen Trabajo !!", text: "Servicio eliminado con exito",  icon: "success" }).then(function () { listar(); });
                    

                                    }else{

                                   swal({ title: "Error !!", text: "Algo salio mal con la consulta ajax",  icon: "error" }).then(function () { listar(); });
 
                                    }
                                   
                               })

                              .fail(function(){
                                    swal({ title: "Error !!", text: "Algo salio mal con la consulta ajax",  icon: "error" }).then(function () { listar(); });
                                    });
                                    }
                                    },
                               function() {

                                  swal({ title: "Cancelado", text: "Tus datos estan a salvo", icon: "success" }).then(function () { listar(); });
      
                               });
                      
                     
                });


        }

        $('#agregar_form').on("submit", function(event){  
               event.preventDefault();  

             if($('#nombre_servicio').val() == "")  
                 {

                  swal({ title: " ¡ Cuidado !", text: "Nombre es requerido", icon: "error" }).then(function () { });

                 }  

             else if($('#precio_servicio').val() <= 0)  
                {  
            
                   swal({ title: "¡ Cuidado !", text: "Precio es requerido", icon: "error" }).then(function () { });
                }  
            else  
             {  
             $.ajax({  
              url:"../../Controllers/config/insertarServicio.php",  
              method:"POST",  
              data:$('#agregar_form').serialize(),  
              beforeSend:function(){  
               $('#insert').val("Inserting");  
              },  
              success:function(data){ 
                console.log("data",data);
                if(data == 1){

                  $('#agregar_form')[0].reset();  
                  $('#agregar').modal('hide');  
                  swal({ title: "Buen Trabajo !!", text: "Servicio registrado con exito",  icon: "success" }).then(function () { listar(); });
                }else{
                  swal({ title: "Error!!", text: "Problemas con la insercion",  icon: "error" }).then(function () { listar(); });
                }
                
              }  
              });  
              }  
              });

</script>