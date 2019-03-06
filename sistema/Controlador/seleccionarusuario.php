<?php

function seleccionarUsuario(){
		if (isset($_GET['id'])) {
			$consultas= new Consultar();
			$id = $_GET['id'];

			$filas = $consultas->cargarusuario($id);
			foreach ($filas as $fila) {
				echo '
               
               <form action="../Controlador/modificarusuario.php" method="post"> 

                 <table>
				
				<tr>
					<td><span class="label label-info">Usuario: </span></td>
					<td><input type="text" name="user" value="'.$fila['user'].'"></td>
				</tr>
				<tr>
					<td><span class="label label-info">Contraseña A: </span>&nbsp;</td>
					<td><input type="text" name="passadmin" value=""></td>
				</tr>
				<tr>
					<td><span class="label label-info">Contraseña B: </span>&nbsp;</td>
					<td><input type="text" name="pass" value=""></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="hidden" name="id" value="'.$id.'"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" class="btn btn-success" value="Modificar usuario"></td>
				</tr>
		</table>
                   
    
                </form>

			';
			}
			
		}
}

?>