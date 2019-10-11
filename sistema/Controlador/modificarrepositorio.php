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
		
		$msj = $consultas -> modificarRepositorio('fecha', $nombre, $codigo1);
    $msj = $consultas -> modificarRepositorio('reporte', $repositorios, $codigo1);

        echo $msj;

       echo '<script>alert("repositorio modificado")</script> ';
      echo "<script>location.href='../vista/reportes.php'</script>";

	}else{

	        echo" por favor rellene todos los campos"; 
      }

  


?>