<?php

session_start();
if (!$_SESSION["user"]) {
	header("location:index.php");
}
?>

<!DOCTYPE html>

<html>
<head>
	  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  <title>informatica</title>
</head>
<body style="background-color:#FFF">
	<div class="container">

	 <header class="header">
           
              <?php
                     include("../include/cabecera.php");
                 ?>
      
      </header>

       <?php

                // include("../include/carrusel.php");
              ?>

              <?php
                        include("../include/menu5.php");
                    ?>
                    


	<div class ="container">
		
		


	<form action="../Controlador/insertarip.php" class="inline" method="POST" accept-charset="utf-8">
		<br><br>
		
		<h1>REGISTRO DE IP</h1>
		<br>

		<center>
				
				<p>
					<input type="text" pattern="[0-9_.]{1,13}"  name="ip" placeholder="ip: " required>
					</p>
					<p>
					<input type="text" name="departamento" placeholder="departamento:" required>
				</p>
                 <p>
					<input type="text" name="equipo" placeholder="equipo:" required>
				</p>
				<p>

					 <select name="sistema">
                          <option value="canaima 5" ><b>sistema operativo:</b></option>
                          <option>canaima 5</option>
                          <option>canaima 4</option>
                          <option>debian 8</option>
                          <option>debian 9</option>
                          <option>ubuntu</option>
                          <option>xubuntu</option>
                          <option>windows xp</option>
                           <option>windows 7</option>
                          <option>windows 8</option>
                           <option>windows 10</option>
                         
                       </select>
			
			</p>
			<p>
					 <select name="siap">
                          <option value="si" ><b>sistema opensiap:</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>
				
					

				</p>
				<p>
					<input type="text" name="usuario" placeholder="usuario:" required>
				</p>
                 <p>
					<input type="text" name="clave" placeholder="clave:" required>
				</p>
				<p><textarea name="observacion" rows="5" cols="50" placeholder="observacion:"></textarea></p>

					
					&nbsp;
					<input class="btn btn-success" type="submit" value="registrar IP">

		</center>
		
	
	</form>
	</div>
	</div>
</body>
</html>
