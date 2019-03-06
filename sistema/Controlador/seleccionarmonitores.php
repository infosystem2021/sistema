<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarMonitor($codigo);
			foreach ($filas as $fila) {
				echo '
               <center>
               <form action="../Controlador/modificarmonitor.php" method="post"> 

                 <table>
				<tr>
					<td><span class="label label-info">Codigo: </span></td>
					<td><input type="number" min="1" name="codigo" value="'.$fila['codigo'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Departamento: </span></td>
					<td><input type="text" name="departamento" value="'.$fila['departamento'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Tipo:</span> </td>
					<td>					 <select name="tipo">
                          <option value="'.$fila['tipo'].'" ><b>'.$fila['tipo'].'</b></option>
                          <option>lcd</option>
                          <option>plasma</option>
                          <option>led</option>
                          <option>tcr</option>
                       </select></td>
				</tr>
			    <tr>
					<td><span class="label label-info">Marca: </span></td>
					<td><input type="text" name="marca" value="'.$fila['marca'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Enciende:</span> &nbsp;</td>
					<td><select name="enciende">
                          <option value="'.$fila['enciende'].'" ><b>'.$fila['enciende'].'</b></option>
                          <option>si</option>
                          <option>no</option>   
                       </select>
                    </td>
				</tr>
								<tr>
					<td><span class="label label-info">Cable Corriente:</span> &nbsp;</td>
					<td><select name="cable_c">
                          <option value="'.$fila['cable_c'].'" ><b>'.$fila['cable_c'].'</b></option>
                          <option>si</option>
                          <option>no</option>   
                       </select>
                    </td>
				</tr>
				<tr>
					<td><span class="label label-info">Cable vga: </span></td>
					<td>					 <select name="cable_vga">
                          <option value="'.$fila['cable_vga'].'" ><b>'.$fila['cable_vga'].'</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select></td>
				</tr>
				<tr>
					<td><span class="label label-info">Falla: </span></td>
					<td><input type="text" name="falla" value="'.$fila['falla'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Traido por:</span></td>
					<td><input type="text" name="traido" value="'.$fila['traido'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Recibido por:</span></td>
					<td><input type="text" name="recibido" value="'.$fila['recibido'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Reparado por:</span></td>
					<td><input type="text" name="reparado" value="'.$fila['reparado'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Entregado por:</span></td>
					<td><input type="text" name="entregado" value="'.$fila['entregado'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Fecha Entrada:</span></td>
					<td><input type="date" name="entrada" value="'.$fila['entrada'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Fecha Salida:</span></td>
					<td><input type="date" name="salida" value="'.$fila['salida'].'"></td>
				</tr>
				<tr><td><span class="label label-info">Observacion:</span></td>
				    <td><textarea name="observacion" rows="5" cols="50">'.$fila['observacion'].'</textarea></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="hidden" name="codigo1" value="'.$codigo.'"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input class="btn btn-success" type="submit" value="Modificar Monitor">
					<a href="vermonitores.php" class="btn btn-success"</a>volver</td>
				</tr>
		</table>
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>