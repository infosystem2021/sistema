<?php

function usuarios(){

	$consultar= new Consultar();
	$filas = $consultar->cargarUsuarios();

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>Usuario</th>
				<th>Contraseña A</th>
				<th>Contraseña B</th>
				<th>Eliminar</th>
				<th>Modificar</th>
		
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['user']."</td>";
			echo "<td>".$fila['passadmin']."</td>";
			echo "<td>".$fila['pass']."</td>";
			
			echo "<td><a href='../Controlador/eliminarusuario.php?id=".$fila['id']."'>Eliminar</a></td>";
			echo "<td><a href='modificarusuario.php?id=".$fila['id']."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}
		
	echo "</table>";
}

?>