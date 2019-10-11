<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarFalla($codigo);
			foreach ($filas as $fila) {
				echo '
				<h2>MODIFICAR FALLA</h2>
				<form action="../Controlador/modificarfalla.php" method="post">
				<input class="btn btn-success" type="submit" value="Modificar Falla">
				<a href="fallas.php" class="btn btn-danger">volver</a>
			  <div class="form-group">
			  <label for="pwd">Falla:</label>
			  <input type="text" name="nombre" value="'.$fila['falla'].'"  class="form-control" id="pwd">
			</div>
			<p style="color:#0016b0">agregar al final de cada parrafo <IMG src="../images/br.png" width="100" height="60"  /></p>
			<div class="form-group">
			<label for="pwd">solucion:</label> </br>
		   <textarea name="repositorios" rows="30" cols="100" id="pwd" class="form-control"  >'.$fila['solucion'].'</textarea>
		   </div>
		   <input type="hidden" name="codigo1" value="'.$codigo.'">

                </form>
                </center>

			';
			}

		}
}

?>
