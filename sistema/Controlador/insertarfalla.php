<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");

$mensaje = null;

$nombre = $_POST['nombre'];
$repositorios = $_POST['repositorios'];


if (strlen($nombre) > 0 && strlen($repositorios) > 0) {

	$consultas = new Consultar();
	
	$mensaje = $consultas -> insertarFallas($nombre, $repositorios);

}else{

	echo "por favor complete los campos";
}

echo $mensaje;

 echo '<script>alert("registro guardado")</script> ';
      echo "<script>location.href='../vista/verfallas.php'</script>";



?>
