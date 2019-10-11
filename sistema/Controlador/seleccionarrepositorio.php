 <?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarRepositorio($codigo);
			foreach ($filas as $fila) {
				echo '
				<a class="btn btn-success" href="../pdf/reportespdf.php?$codigo'.$codigo.'">generar reporte</a>
				<a href="reportes.php" class="btn btn-success">volver</a>
			  <div class="form-group">
			  <label for="pwd">Fecha:</label>
			  <input type="text" name="nombre" value="'.$fila['fecha'].'" disabled class="form-control" id="pwd">
			</div>
			<div class="form-group">
			<label for="pwd">Reporte:</label> </br>
		   <textarea name="observacion" rows="30" cols="100" id="pwd" class="form-control"  >'.$fila['reporte'].'</textarea>
		   </div>

			 

                </form>
                </center>

			';
			}

		}
}

?>
