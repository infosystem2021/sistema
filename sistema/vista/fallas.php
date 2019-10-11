<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
require_once("../Controlador/cargarfallas.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" type="text/css" href="../estilos2.css">
    <title>INFORMATICA</title>
</head>
<body>
    <br>
<form method="get">
    <h2>FALLAS REGISTRADAS</h2>
    <input type="text" name="buscar">
    <input class="btn btn-danger" type="submit" value="BUSCAR">
    <a class="btn btn-info" href="fallas.php">TODAS</a>
</form>


<?php
if (isset($_GET['buscar'])) {
    buscar($_GET['buscar']);
}else{

cargar();

}

?>
</body>
</html>