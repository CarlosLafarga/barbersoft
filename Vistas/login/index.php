
<!DOCTYPE html>
<html>

<head>

   <title>BarberSoft</title>
    <!--css-->
   <?PHP include "../../Includes/parts/css.php";?>
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 style="margin-left: -250px" class="logo-name">Barbersoft</h1>

            </div>
            <h3>Bienvenido a Barbersoft</h3>
            <p>Una aplicacion para el control de citas y efectivo en tu negocio.</p>
            <p></p>
            <form class="m-t" role="form" action="" method="POST">
                <div class="form-group">
                    <input name="user" type="text" class="form-control" placeholder="Usuario" required="">
                </div>
                <div class="form-group">
                    <input name="pswd" type="password" class="form-control" placeholder="Contrase&ntilde;a" required="">
                </div>
                <button name="iniciar" type="submit" class="btn btn-primary block full-width m-b">Iniciar Sesion</button>

                
            </form>
            <p class="m-t"> <small>Derechos Reservados HMOdevelopers &copy; 2018</small> </p>
        </div>
    </div>

 <!--js-->
<?PHP include "../../Includes/parts/js.php";?>
</body>

</html>
<?PHP

require_once "sesion.class.php";
require_once "../../Controllers/login/index.php";
$sesion = new sesion();

if (isset($_POST["iniciar"])) {

    $usuario  = $_POST["user"];
    $password = sha1($_POST["pswd"]);

    if (validarUsuario($usuario, $password) == true) {

        $sesion->set("usuario", $usuario);
        echo "<script language='JavaScript'>";
        echo "location = '../inicio/'";
        echo "</script>";

    } elseif (validarUsuario($usuario, $password) == false) {

        echo '<script>
              swal({ title: "Error !!", text: "Usuario y contraseña incorrecto",  icon: "error" }).then(function () {window.location.href="index.php";});
              </script> ';
               
    }
}
?>
