<?php

session_start();
if (!$_SESSION["user"]) {
	header("location:index.php");
}
?>

<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
require_once("../Controlador/seleccionarusuario.php");
?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
  <title>mision sucre</title>
</head>
<body style="background-color:#FFF">
<div class="container">
		 <header class="header">
         
              <?php
                     include("../include/cabecera.php");
                 ?>
     
      </header>


              <?php
                        include("../include/menu5.php");
                    ?>
                    
<br>
<br>
	<h1>MODIFICAR USUARIO</h1>

	<?php

        seleccionarUsuario();

     ?>
     </div>
</body>
</html>