<?PHP include "../../Includes/parts/js.php";?>
<script type="text/javascript">
	$( document ).ready(function() {

     	cargar();
     });

      function cargar(){

            

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
            xmlhttp.open("GET","../Controllers/listar_botones.php",true);
            xmlhttp.send();
            //this.load();
       }	
</script>