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
         var uno = document.getElementById(id);
         var tipo_corte = uno.innerText;
         var cantidad = 1 ;
         var precio = document.getElementById(id).value;
         var total = document.getElementById("total").value;
         var total_acumulado = total + precio;
         console.log(total);
         contador++;
         

         //contador para asignar id al boton que borrara la fila
         var fila = '<tr id="row' + contador + '"><td>'+contador+'</td><td class="tipo_corte">' + tipo_corte + '</td><td width="10%"><input type="number" class="form-control cantidad" id="cantidad" onchange="cantidad(this);" value="1" min="1"></td><td class="precio">' + precio + '</td><td class="subtotal">'+precio+'</td><td><center><button type="button" onclick="deleteRow(this)" class="btn btn-danger">Eliminar</button></center></td></tr>'; //esto seria lo que contendria la fila
        
         
          console.log("fila",fila);
          console.log("contador",contador);
          console.log("precio",precio);

            

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
         console.log("este es el valor de r",r.parentNode.parentNode.parentNode.rowIndex);
         console.log("este es el valor de i",i);
         swal({
         title: "Estas Seguro?",
         text: "¿Desea eliminar el producto de la venta?",
         type: "warning",
         showCancelButton: true,
         confirmButtonColor: '#DD6B55',
         confirmButtonText: 'Si, Estoy seguro!',
         cancelButtonText: "No, Cancelar!"

         },
         function (isConfirm) { 

         if (isConfirm){

         var total_ventas = document.getElementById('tablita').rows[i].cells[4];
         var total_input = document.getElementById("total").value;
         var precio_producto_select = total_ventas.innerHTML;
         var preciofinalrow =  parseFloat(total_input) - parseFloat(precio_producto_select);
         document.getElementById("total").value = preciofinalrow.toFixed(2);
         document.getElementById("tablita").deleteRow(i);
         contador = contador -1;
         console.log("total_row ",total_ventas);      
                         

        }else{

        return false;

        }
        });

        }

        function cantidad(e) {

            var row = e.parentNode.parentNode.rowIndex;
            console.log("row", row);
            var total_ventas = document.getElementById('tablita').rows[row].cells[4];
            var precio_articulo = document.getElementById('tablita').rows[row].cells[3].innerHTML;
            console.log("precio articulos", precio_articulo);
            var precio_input1 = $("#precios"+row+"").val();
            var chuy = precio_articulo.value = Number(precio_articulo);




            var newQty = parseFloat(e.value);
            var precio_art = parseFloat(chuy);


            var total = precio_articulo * newQty;
            total_ventas.innerText = total.toFixed(2);

            var data = [];
            $("td.subtotal").each(function(){
                 data.push(parseFloat($(this).text()));
             });
            var suma = data.reduce(function(a,b){ return a+b; },0);
            console.log("suma",suma);

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

                $('.subtotal').each(function(){
                   subtotal.push($(this).val()); 
                 });

                var pago_con = $("#pago_con").val();
                var total = $("#total").val();
                var nombre_usuario = "Prueba";
                var tipo_pago = $("#tipo_pago").val();
                var id_barbero = $("#barbero").val();



                
            }

            function cancelar(){

                    swal({
                         title: "Estas Seguro?",
                         text: "¿Desea cancelar la venta ?",
                         type: "warning",
                         showCancelButton: true,
                         confirmButtonColor: '#DD6B55',
                         confirmButtonText: 'Si, Estoy seguro!',
                         cancelButtonText: "No, Cancelar!"

                         },
                         function (isConfirm) { /*Your Code Here*/

                          if (isConfirm){

                              location.reload();

                              }else{

                               return false;

                             }
                        });
            }
       
</script>