<?PHP include "../../Includes/parts/js.php";?>
<script type="text/javascript">
    var i = 0;
    var total_acumulado = 0;
    var contador = 0;
    var acumulado  = 0;
    var preciofinal = 0;
    var nFilas = 0;

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
         console.log("id",id);
         var uno = document.getElementById(id);
         var tipo_corte = uno.innerText;
         console.log("tipo corte",tipo_corte);
         var cantidad = 1 ;
         var precio = document.getElementById(id).value;
         var subtotal = document.getElementById(id).value;
         var total = document.getElementById("total").value;
         var total_acumulado = total + precio;
         
         contador++;
         

         //contador para asignar id al boton que borrara la fila
         var fila = '<tr id="row' + contador + '"><td>'+contador+'</td><td><input type="text" class="tipo_corte form-control" value="'+tipo_corte+'" readonly/></td><td width="10%"><input type="number" class="cantidad form-control" id="cantidad" onchange="cantidad(this);" value="1" min="1"></td><td ><input type="number" class="precio form-control" value="'+precio+'" readonly/></td><td class="total">'+subtotal+'</td><td><center><button type="button" onclick="deleteRow(this)" class="btn btn-danger">Eliminar</button></center></td></tr>'; //esto seria lo que contendria la fila
        
          
          

            

          var btn = document.createElement("tr");
          btn.innerHTML=fila;
          document.getElementById("ventas").appendChild(btn);
          total = parseFloat(precio);
          acumulado = document.getElementById("total").value;
          preciofinal = parseFloat(total) + parseFloat(acumulado);
          document.getElementById("total").value = preciofinal.toFixed(2);

       }

       function deleteRow(r) {

         
         var i = r.parentNode.parentNode.parentNode.rowIndex;
         swal({
              title: "Estas Seguro?",
              text: "¿Desea eliminar el producto de la venta?",
              icon: "warning",
              buttons: [
                  'No, cancelar',
                  'Si, estoy seguro'
              ],
              dangerMode: true,
              }
              ).then(
                function (isConfirm) {

         if (isConfirm) {
         

         var total_ventas = document.getElementById('tablita').rows[i].cells[4];
         var total_input = document.getElementById("total").value;
         var precio_producto_select = total_ventas.innerHTML;
         var preciofinalrow =  parseFloat(total_input) - parseFloat(precio_producto_select);
         document.getElementById("total").value = preciofinalrow.toFixed(2);
         document.getElementById("tablita").deleteRow(i);
         contador = contador -1;
             
                         

        }else{

          swal({ title: "Cancelado", text: "Tus datos estan a salvo", icon: "success" }).then(function () {  });
      
        }

       },
       function() {

          swal({ title: "Cancelado", text: "Tus datos estan a salvo", icon: "success" }).then(function () {  });
      
        });

        }

        function cantidad(e) {

            var row = e.parentNode.parentNode.rowIndex;
            console.log("row", row);
            var total_ventas = document.getElementById('tablita').rows[row].cells[4];
            var precio_articulo = document.getElementById('tablita').rows[row].cells[3].children[0].value;
            console.log("precio articulos", precio_articulo);
            var precio_input1 = $("#precios"+row+"").val();
            var chuy = precio_articulo.value = Number(precio_articulo);




            var newQty = parseFloat(e.value);
            var precio_art = parseFloat(chuy);


            var total = precio_articulo * newQty;
            total_ventas.innerText = total.toFixed(2);

            var data = [];
            $("td.total").each(function(){
                 data.push(parseFloat($(this).text()));
             });
            var suma = data.reduce(function(a,b){ return a+b; },0);
            

            document.getElementById("total").value = suma.toFixed(2);


            }

            function pagar(){

                var tipo_corte = [];
                var cantidad = [];
                var precio = [];
                var subtotal = [];

                $('.tipo_corte').each(function(){
                   tipo_corte.push($(this).val()); 
                 });

                $('.cantidad').each(function(){
                   cantidad.push($(this).val()); 
                 });

                $('.precio').each(function(){
                   precio.push($(this).val()); 
                 });

                $('.total').each(function(){
                   subtotal.push($(this).val()); 
                 });

                var pago_con = $("#pago_con").val();
                var total = $("#total").val();
                var nombre_usuario = "Prueba";
                var tipo_pago = $("#tipo_pago").val();
                var id_barbero = $("#barberos").val();

                if(pago_con == ''){

                 

               swal({ title: "Cuidado !", text: "Ingrese el monto en el campo pago con.", icon: "warning" }).then(function () { });

               }else{

               if(Number(pago_con) < total){

               swal({ title: "Cuidado !", text: "El pago es menor al total de su venta..", icon: "warning" }).then(function () { });

               }else{
 

                  $.ajax({
                          url:"../../Controllers/caja/insertar_venta.php",
                          method:"POST",
                          data:{tipo_corte:tipo_corte,
                          cantidad:cantidad,
                          precio:precio,
                          subtotal:subtotal,
                          pago_con:pago_con,
                          total:total,
                          nombre_usuario:nombre_usuario,
                          tipo_pago:tipo_pago,
                          id_barbero:id_barbero
                          },


                 success:function(data){

                    
                  var obj = JSON.parse(data);
                  var cambio = Number(data);
                  console.log("cambio", cambio);
                  var devolucion = parseFloat(pago_con-total);

                   if(obj.numero == 1){

                         

                       swal({ title: "Buen trabajo!", 
                              text: "Se guardo venta con exito. \n  Su cambio es de:    "+devolucion.toFixed(2)+"\n  No.Ticket: "+obj.no_tiket+"", 
                              icon: "success" }).then(function () {

                              window.open("ticket2.php?no_ticket="+obj.no_tiket+"", "Ticket", "width=600, height=800");
                              location.reload();});


                   }else if(cambio == 4){


                        

                    swal({ title: "Error !", text: "Error en la tabla de ventas", icon: "error" }).then(function () { location.reload(); });

                   }else if(cambio == 5){

                       


                    swal({ title: "Error !", text: "Error en el update de productos", icon: "error" }).then(function () { location.reload(); });


                   }else if (cambio == 6 ){

                         

                    swal({ title: "Error !", text: "Error al momento de insertar en la tabla de ventas.", icon: "error" }).then(function () { location.reload(); });



                   }else if(cambio == 7){

                        

                    swal({ title: "Error !", text: "Error en el script campo vacio del formulario..", icon: "error" }).then(function () { location.reload(); });


                   }else if(cambio == 8){

                     swal({ title: "Error !", text: "No ha seleccionado ningun articulo.", icon: "error" }).then(function () { });
                   }

                   }
               

                 });
             }
         }
}
        
    
            

            function cancelar(){

                  swal({
                        title: "Estas Seguro?",
                        text: "¿Desea cancelar la venta ?",
                        icon: "warning",
                        buttons: [
                            'No, cancelar!',
                            'SI, Estoy seguro !'
                        ],
                        dangerMode: true,
                        }
                        ).then(

                          function (isConfirm) {
                 

                          if (isConfirm){

                              location.reload();

                              }else{

                               return false;

                             }
                        });
            }
       
</script>