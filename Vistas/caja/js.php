<?PHP include "../../Includes/parts/js.php";?>
<script type="text/javascript">
    var i = 0;
    var total_acumulado = 0;

	$( document ).ready(function() {

     	botones();
     	listar_barberos();
        

     });

        function botones(){

            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
            } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET","../../Controllers/caja/listar_botones.php",true);
            xmlhttp.send();
            //this.load();
        }	


       function listar_barberos(){

       	           $.ajax({

                    type:"POST",
                    url: "../../Controllers/caja/listar_barberos.php",
                    success: function(response){

                      $('#barberos').html(response).fadeIn();
                    }
                    });

       }

       function agregar_venta(valor){

       	
        
       	 var id = $(valor).attr("id");
         var uno = document.getElementById(id);
         var tipo_corte = uno.innerText;
         var cantidad = 1 ;
         var precio = document.getElementById(id).value;
         var total = document.getElementById("total").value;
         var total_acumulado = total + precio;
         console.log(total);
         i++;
         

         //contador para asignar id al boton que borrara la fila
         var fila = '<tr id="row' + i + '"><td>'+i+'</td><td>' + tipo_corte + '</td><td width="10%"><input type="number" class="form-control"id="cantidad" value="1" min="1"></td><td>' + precio + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila
        
         
          console.log(fila);
          console.log(i);

        $('#ventas tr:first').after(fila);
        $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
        var nFilas = $("#ventas tr").length;
        $("#adicionados").append(nFilas);
        


        


       $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        //cuando da click obtenemos el id del boton
        $('#row' + button_id + '').remove(); //borra la fila
        //limpia el para que vuelva a contar las filas de la tabla
        $("#adicionados").text("");
        var nFilas = $("#ventas tr").length;
        $("#adicionados").append(nFilas - 1);
        i-1;
        });


       

       }


       
</script>