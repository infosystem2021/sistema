<?php

function seleccionar(){
		if (isset($_GET['codigo'])) {
			$consultas= new Consultar();
			$codigo = $_GET['codigo'];

			$filas = $consultas->cargarImpresora($codigo);
			foreach ($filas as $fila) {
				echo '
               <center>
               <form action="" method="post"> 

                 <table>
				<tr>
					<td><span class="label label-info">Codigo: </span></td>
					<td><input type="number" min="1" name="codigo" value="'.$fila['codigo'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Departamento: </span></td>
					<td><input type="text" name="departamento" value="'.$fila['departamento'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Tipo:</span> </td>
					<td>					 <select name="tipo" disabled>
                          <option value="'.$fila['tipo'].'" ><b>'.$fila['tipo'].'</b></option>
                          <option>continua</option>
                          <option>scaner</option>
                          <option>multifuncional</option>
                          <option>factura</option>
                       </select></td>
				</tr>
				<tr>
					<td><span class="label label-info">Marca: </span></td>
					<td><input type="text" name="marca" value="'.$fila['marca'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Enciende:</span> &nbsp;</td>
					<td>					 <select name="enciende" disabled>
                          <option value="'.$fila['enciende'].'" ><b>'.$fila['enciende'].'</b></option>
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
					<td><span class="label label-info">Cable Corriente: </span></td>
					<td>					 <select name="cable_c" disabled>
                          <option value="'.$fila['cable_c'].'" ><b>'.$fila['cable_c'].'</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select></td>
				</tr>
				<td><span class="label label-info">Cable usb: </span></td>
					<td>					 <select name="cable_usb" disabled>
                          <option value="'.$fila['cable_usb'].'" ><b>'.$fila['cable_usb'].'</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select></td>
				</tr>
				<tr>
					<td><span class="label label-info">Toner: </span></td>
					<td><input type="text" name="toner" value="'.$fila['toner'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Falla: </span></td>
					<td><input type="text" name="falla" value="'.$fila['falla'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Traido por:</span></td>
					<td><input type="text" name="traido" value="'.$fila['traido'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Recibido por:</span></td>
					<td><input type="text" name="recibido" value="'.$fila['recibido'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Reparado por:</span></td>
					<td><input type="text" name="reparado" value="'.$fila['reparado'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Entregado por:</span></td>
					<td><input type="text" name="entregado" value="'.$fila['entregado'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Fecha Entrada:</span></td>
					<td><input type="date" name="entrada" value="'.$fila['entrada'].'" disabled></td>
				</tr>
				<tr>
					<td><span class="label label-info">Fecha Salida:</span></td>
					<td><input type="date" name="salida" value="'.$fila['salida'].'" disabled></td>
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
					<td><a href="verimpresoras.php" class="btn btn-success"</a>volver</td>
				</tr>
			
		</table>
                   
    
                </form>
                </center>

			';
			}
			
		}
}

?>