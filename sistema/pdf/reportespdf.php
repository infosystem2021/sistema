<?php
   require_once('../Modelo/class.conexion.php');
  require_once('../Modelo/class.consultar.php');
   //require_once('../Vista/reportes.php');

   class pdf{
    
   public function cargarRepositorio(){
     $codigo='2019-07-09';
     $rows=null;
     $modelo = new Conexion();
     $conexion=$modelo->get_conexion();
     $sql="select * from reporte where fecha = '2019-07-09'";
     $statement=$conexion->prepare($sql);
     $statement->execute();
     while ($result=$statement->fetch()) {

       $rows[]=$result;
     }

     return $rows;
   }
  }
if(isset($_POST['create_pdf'])){

  require_once('tcpdf/tcpdf.php');

  $pdf = new TCPDF('P', 'mm', 'LETTER', true, 'UTF-8', false);
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Cesar Ratia');
  $pdf->SetTitle($_POST['reporte_name']);
  
  $pdf->setPrintHeader(true);
  $pdf->setPrintFooter(true);
  $pdf->SetMargins(20, 10, 20, false);
  $pdf->SetAutoPageBreak(true, 20);
  $pdf->SetFont('Helvetica', '', 10);
  $pdf->Image('/var/www/html/sistema4/pdf/alcaldia.png', 15, 140, 75, 113, 'PNG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);
  $pdf->addPage();
  $consultar= new pdf();
  $filas = $consultar->cargarRepositorio();
  
  if (isset($filas)) {
    foreach ($filas as $user) {
 
  $content = '';



  $content .= '';

$content .='
<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8" />
    <title>Costancia de Residencia</title>
    <style type="text/css">
    <!--  body { font-family:"Times New Roman"; font-size:12pt; margin-top: 0em;  }
      p { margin:0pt }
      .Header { font-size:12pt  }
      .Footer { font-size:12pt }
      .BalloonText { font-family:Tahoma; font-size:8pt }
      span.EncabezadoCar { font-size:12pt }
      span.PiedepginaCar { font-size:12pt }-->
    </style>
  </head>
  <body >
  <!--<header><img src="alcaldia.png" width="800" height="100" alt="" ></header>-->
  <p style="text-align:rigth">
 '.$user['fecha'].'
</p>
  <p style="text-align:left">
 Para: Despacho del Alcalde, Sala Situacional<br>
De: Jefatura de Informática 
</p>
      <p style="text-align:center">
        <strong><span style="font-family:Arial; ">ACTIVIDADES REALIZADAS</span></strong>
      </p>

      <p>'.$user['reporte'].'</p>




      <p style="text-align:center; line-height:150%; font-size:11pt">
        <span style="font-family:Calibri">________________</span>
      <br>
        <strong><span style="font-family:Calibri; ">Ingeniero: José Luis Meléndez
        </span></strong>
    <br>

        <strong><span style="font-family:Calibri; ">jefe de Informática(E).</span></strong>


<br>
<br>
<br>
<br>
<br>

        <Footer> <img src="footer.png" width="900px" height="60" alt="" ></<footer>

  </body>
</html>';
} }

	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('reportepdf.pdf', 'I');
}

?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Exportar a PDF - informatica</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!-- Meta Mobil
================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<div class="container">
        <div>
        	<div>
            <header><img src="alcaldia.png" width="600" height="80" alt="" ></header>
            	<?php $h1 = "Actividades Realizadas en pdf";
               echo '<h1 style="text-align:left">'.$h1.'</h1>
               <div>
               <form method="post">
                 <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                 <a href="../vista/reportes.php" class="btn btn-danger pull-left" > Volver</a>
                 <input type="submit" name="create_pdf" class="btn btn-success " value="Generar PDF">
               </form>
             </div>'
               
				?>
            </div>

              <div>

        <?php
        $consultar= new pdf();
        $filas = $consultar->cargarRepositorio();

         if (isset($filas)) {

       foreach ($filas as $user) {   ?>

       <div class="form-group">
         <label for="pwd">Fecha:</label>
         <input type="text" name="departamento" value="<?php echo $user['fecha']; ?>" disabled class="form-control" id="pwd">
      </div>
      <div class="form-group">
       <label for="pwd">Reporte:</label>
       <textarea name="repositorios" rows="30" cols="100" id="pwd" class="form-control"  ><?php echo $user['reporte']; ?></textarea>
     </div>

         <?php  } }?>


        </div>
  </div>
</body>
</html>