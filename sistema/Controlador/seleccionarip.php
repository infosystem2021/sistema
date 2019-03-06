<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarIp($codigo);
			foreach ($filas as $fila) {
				echo '
               <center>
               <form action="" method="post"> 

                 <table>
				<tr>
					<td><span class="label label-info">IP: </span></td>
					<td><input type="text" name="ip" value="'.$fila['ip'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Departamento: </span></td>
					<td><input type="text" name="departamento" value="'.$fila['departamento'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Tipo:</span> </td>
					<td>					 <select name="tipo" disabled>
                          <option value="'.$fila['equipo'].'" ><b>'.$fila['equipo'].'</b></option>
                          <option>escritorio</option>
                          <option>laptop</option>
                       </select></td>
				</tr>
				<tr>
					<td><span class="label label-info">Sistema:</span> &nbsp;</td>
					<td>					 <select name="sistema" disabled>
                          <option value="'.$fila['sistema'].'" ><b>'.$fila['sistema'].'</b></option>
                          <option>canaima 5</option>
                          <option>canaima 4</option>
                          <option>ubuntu</option>
                          <option>xubuntu</option>
                          <option>windows xp</option>
                           <option>windows 7</option>
                          <option>windows 8</option>
                           <option>windows 10</option>
                         
                       </select></td>
				</tr>
				<tr>
					<td><span class="label label-info">Siap: </span></td>
					<td>					 <select name="siap" disabled>
                          <option value="'.$fila['siap'].'" ><b>'.$fila['siap'].'</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select></td>
				</tr>
				<tr>
					<td><span class="label label-info">Falla: </span></td>
					<td><input type="text" name="falla" value="'.$fila['usuario'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Traido por:</span></td>
					<td><input type="text" name="traido" value="'.$fila['clave'].'" disabled></td>
				</tr>
				<tr><td><span class="label label-info">Observacion:</span></td>
				    <td><textarea name="observacion" rows="5" cols="50" disabled>'.$fila['observacion'].'</textarea></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="hidden" name="codigo1" value="'.$codigo.'"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><a href="verips.php" class="btn btn-success"</a>volver</td>
				</tr>
			
		</table>
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>