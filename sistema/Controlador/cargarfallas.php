<?php

function cargar(){

	$consultar= new Consultar();
	$filas = $consultar->cargarFallas();
	if (isset($filas)) {

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>falla:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['falla']."</td>";

			
             $codigo=$fila['falla'];
            echo "<td><a href='../pdf/falla.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarfalla.php?codigo=".$codigo."'>Eliminar</a></td>";
			echo "<td><a href='modificarfalla.php?codigo=".$codigo."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}

		}
		
	echo "</table>";
}

 function buscar($codigo){
	$consultar= new Consultar();
	$filas = $consultar->buscarFalla1($codigo);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>falla:</th>


				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
			</tr>";

		if (isset($filas)) {

				foreach ($filas as $fila) {

		 echo "<tr class='success'>";
			echo "<td>".$fila['falla']."</td>";
			$codigo=$fila['falla'];
			echo "<td><a href='../pdf/nuevo.php?codigo=".$fila['falla']."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarrepositorios.php?codigo=".$fila['falla']."'>Eliminar</a></td>";
			echo "<td><a href='modificarrepositorios.php?codigo=".$fila['falla']."'>Modificar</a></td>";
			echo "</tr>";
				
			}
		}
		
	echo "</table>";

}
	


?>