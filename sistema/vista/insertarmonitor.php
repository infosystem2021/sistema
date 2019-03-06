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
                        include("../include/menu5.php");
                    ?>
                    


	<div class ="container">
		
		


	<form action="../Controlador/insertarmonitor.php" class="inline" method="POST" accept-charset="utf-8">
		<br><br>
		
		<h1>REGISTRO DE MONITOR</h1>
		<br>

		<center>
				
				<p>
				
					
					<input type="text" name="departamento" placeholder="departamento:" required>
				
					 <select name="tipo">
                          <option value="lcd"><b>tipo:</b></option>
                          <option>lcd</option>
                          <option>led</option>
                          <option>plasma</option>
                          <option>trc</option>
                       </select>
                    <input type="text" name="marca" placeholder="marca:" required>		

					 <select name="enciende">
                          <option value="si" ><b>enciende:</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>

        	</p>
			<p>               <select name="cable_c">
                          <option value="si" ><b>cable corriente:</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>

                       <select name="cable_vga">
                          <option value="si" ><b>cable vga:</b></option>
                          <option>si</option>
                          <option>no</option>
                       </select>

					<input type="text" name="falla" placeholder="falla:" required>

					<input type="text" name="traido" placeholder="traido por:" required>
             </p>
			<p>
					<input type="text" name="recibido" placeholder="recibido por:" required>

					<input type="text" name="reparado" placeholder="reparado por:" >

					<input type="text" name="entregado" placeholder="entregado por:">

					<input type="date" name="entrada" placeholder="fecha entrada:" required>
             </p>
			<p>
					<input type="date" name="salida" placeholder="fecha salida:">

					<textarea name="observacion" rows="5" cols="50" placeholder="observacion:"></textarea>

				</p>

					
					&nbsp;
					<input class="btn btn-success" type="submit" value="registrar monitor">

		</center>
		
	
	</form>
	</div>
	</div>
</body>
</html>