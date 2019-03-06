<?php

function cargar(){

	$consultar= new Consultar();
	$filas = $consultar->cargarMonitores();
	if (isset($filas)) {

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>COD:</th>
				<th>DEPARTAMENTO:</th>
				<th>TIPO:</th>
				<th>MARCA:</th>
				<th>FECHA ENTRADA:</th>
			    <th>FECHA SALIDA:</th>
				<th>OBSERVACION:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
		
			</tr>";

			foreach ($filas as $fila) {


		    echo "<tr class='success'>";
			echo "<td>".$fila['codigo']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			echo "<td>".$fila['tipo']."</td>";
			echo "<td>".$fila['marca']."</td>";
			echo "<td>".$fila['entrada']."</td>";
			echo "<td>".$fila['salida']."</td>";
			echo "<td>".$fila['observacion']."</td>";
			
             $codigo=$fila['codigo'];
            echo "<td><a href='vermonitor.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarmonitor.php?codigo=".$codigo."'>Eliminar</a></td>";
			echo "<td><a href='modificarmonitor.php?codigo=".$codigo."'>Modificar</a></td>";
			echo "</tr>";
		
				
			}

		}
		
	echo "</table>";
}

 function buscar($codigo){
	$consultar= new Consultar();
	$filas = $consultar->buscarMonitor($codigo);

	echo "<table border='2'; class='table table-hover';>
			<tr class='warning'>
				<th>COD:</th>
				<th>DEPARTAMENTO:</th>
				<th>TIPO:</th>
				<th>MARCA:</th>
				<th>FECHA ENTRADA:</th>
			    <th>FECHA SALIDA:</th>
				<th>OBSERVACION:</th>
				<th>VER</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
			</tr>";

		if (isset($filas)) {

				foreach ($filas as $fila) {

		 echo "<tr class='success'>";
			echo "<td>".$fila['codigo']."</td>";
			echo "<td>".$fila['departamento']."</td>";
			echo "<td>".$fila['tipo']."</td>";
			echo "<td>".$fila['marca']."</td>";
			echo "<td>".$fila['entrada']."</td>";
			echo "<td>".$fila['salida']."</td>";
			echo "<td>".$fila['observacion']."</td>";
			echo "<td><a href='vermonitor.php?codigo=".$codigo."'>Ver</a></td>";
			echo "<td><a href='../Controlador/eliminarmonitor.php?codigo=".$fila['codigo']."'>Eliminar</a></td>";
			echo "<td><a href='modificarmonitor.php?codigo=".$fila['codigo']."'>Modificar</a></td>";
			echo "</tr>";
				
			}
		}
		
	echo "</table>";

}
	


?>