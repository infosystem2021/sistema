<?php
	session_start();
	if (!$_SESSION['users']) {
		header("Location:../index.html");
	}		
  ?> 	
<?php
require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultar.php");
require_once("../Controlador/usuariosregistrados.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.css">

    <link rel="stylesheet" href="../estilo.css">
    <link rel="stylesheet" type="text/css" href="../estilos2.css">
 
<style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
  .boton_personalizado:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
</style>
    <title>INFORMATICA</title>
</head>
<body>
      <div class="contenedor">

        <header class="header">
              <?php
                                         include("../include/menu5.php");
                                      ?>
                <a href="#" class="imagen">
                      <IMG src="../images/alcaldia1.png" width="130" height="76"  />
                </a> 
                  <h1 class="hidden-xs">JEFATURA DE INFORMATICA</h1>
                                 
        </header>

                    
                
     
      <main class="contenido">
      
	
      <form action="../Controlador/controlusuarios.php" method="post" accept-charset="utf-8">
    <h2 style="text-align: center;">REGISTRAR USUARIO</h2>
    
    <div class="form-group">
			     <label for="usr">USUARIO:</label>
			     <input type="text"   name="user"  class="form-control" id="usr" placeholder="ingrese el usuario" required>
         </div>
         <div class="form-group">
			     <label for="usr">CONTRASEÑA A:</label>
			     <input type="password"   name="passadmin"  class="form-control" id="usr" placeholder="ingrese la contraseña" required>
         </div>
         <div class="form-group">
			     <label for="usr">CONTRASEÑA B:</label>
			     <input type="password"   name="pass"  class="form-control" id="usr" placeholder="ingrese la contraseña" required>
         </div>


					
			<input class="btn btn-success" type="submit" value="Registrar Usuario">




		<h2 style="text-align: center;">USUARIOS REGISTRADOS</h2>

        <?php

usuarios();

?>
	
	</form>
      </main>
      <!--<aside class="sidebar">
      <IMG src="../images/escudo.png" width="130" height="76"  />
      </aside>-->
      <div class="wridget-1">
      <h3 style="text-align:center">GNU</h3>	
	                 
      </div>
      <div class="wridget-2">
      <h3 style="text-align:center">LINUX</h3>
      </div>
    <footer  class="footer">
    <p style="color: red">&copy; Copyright INFOSYSTEM  <IMG src="../images/escudo.png" width="130" height="76" align="right" /> <br/><br/></p>
    </footer>
</div>
<script src="reloj.js"></script>
</body>
</html>
