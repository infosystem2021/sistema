
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap2/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap2/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
       <a class="navbar-brand" style="color:white" href="#"><?php echo $_SESSION["users"];?></a>
            
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">         
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EQUIPOS <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="verequipos.php">VER EQUIPOS</a></li>
                  <li><a href="insertar.php">REGISTRAR EQUIPO</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MONITORES <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="vermonitores.php">VER MONITORES</a></li>
                  <li><a href="insertarmonitor.php">REGISTRAR MONITOR</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IMPRESORAS <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="verimpresoras.php">VER IMPRESORAS</a></li>
                  <li><a href="insertarimpresora.php">REGISTRAR IMPRESORA</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">IP <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="verips.php">VER IPS</a></li>
                  <li><a href="insertarip.php">REGISTRAR IP</a></li>
                </ul>
              </li>              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REPORTES <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="verreportes.php">VER REPORTES</a></li>
                  <li><a href="insertarrepositorios.php">REGISTRAR REPORTE</a></li>
                </ul>
              </li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FALLAS <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="verfallas.php">VER FALLAS</a></li>
                  <li><a href="insertarfalla.php">REGISTRAR FALLAS</a></li>
                </ul>
              </li>
              <li><a href="../vista/usuarios.php">USUARIOS</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a style="color:white" href="../resp.php">BACKUP</a></li>
 
              <li><a  style="color:white" href="../salir.php">SALIR</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <script src="../bootstrap2/js/jquery-1.11.0.min.js"></script>
      <script src="../bootstrap2/js/bootstrap.min.js"></script>
</body>
</html>
