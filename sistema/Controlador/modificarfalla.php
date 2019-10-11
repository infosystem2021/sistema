<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$msj= null;
$consultas = new Consultar();

$id = $_POST['nombre'];
$nombre = $_POST['nombre'];
$repositorios = $_POST['repositorios'];


$codigo1 = $_POST['codigo1'];
	

	if (strlen($id) > 0) {
		
		$msj = $consultas -> modificarFalla('falla', $nombre, $codigo1);
    $msj = $consultas -> modificarFalla('solucion', $repositorios, $codigo1);

        echo $msj;

       echo '<script>alert("registro modificado")</script> ';
      echo "<script>location.href='../vista/fallas.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>
