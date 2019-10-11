<?php

class Conexion{

	public function get_conexion(){
		$user="root";
		$pass="";
		$host="localhost";
		$db="sistema2";
		$conexion= new pdo("mysql:host=$host;dbname=$db;",$user,$pass);

       return $conexion;
	}


}

?>
