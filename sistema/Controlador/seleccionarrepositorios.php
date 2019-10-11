<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarRepositorio($codigo);
			foreach ($filas as $fila) {
				echo '
				<h2>MODIFICAR REPORTE</h2>
				<form action="../Controlador/modificarrepositorio.php" method="post">
				<input class="btn btn-success" type="submit" value="Modificar reporte">
				<a href="reportes.php" class="btn btn-danger">volver</a>
			  <div class="form-group">
			  <label for="pwd">Fecha:</label>
			  <input type="date" name="nombre" value="'.$fila['fecha'].'"  class="form-control" id="pwd">
			</div>
			<p style="color:#0016b0">agregar al final de cada parrafo <IMG src="../images/br.png" width="100" height="60"  /></p>
			<div class="form-group">
			<label for="pwd">Reporte:</label> </br>
		   <textarea name="repositorios" rows="30" cols="100" id="pwd" class="form-control"  >'.$fila['reporte'].'</textarea>
		   </div>
		   <input type="hidden" name="codigo1" value="'.$codigo.'">

                </form>
                </center>

			';
			}

		}
}

?>
