<?php
   require_once('../Modelo/class.conexion.php');
   require_once('../Modelo/class.consultar.php');
/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Custom Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */  

if (isset($_GET['codigo'])) {
    $consultas= new Consultar();
    $codigo = $_GET['codigo'];

    $filas = $consultas->cargarRepositorio($codigo);
  //  foreach ($filas as $fila) {
   // echo $fila['fecha'];
    //echo $fila['reporte'];
    //}
    
}
class pdf{ 

    //function seleccionar1(){

  //}

   
    public function cargarRepositorio($arg_codigo){
        $rows=null;
          $modelo = new Conexion();
          $conexion=$modelo->get_conexion();
          $sql="select * from reporte where fecha = :codigo";
          $statement=$conexion->prepare($sql);
          $statement->bindParam(":codigo", $arg_codigo);
          $statement->execute();
          while ($result=$statement->fetch()) {
            $rows[]=$result;
          }
          return $rows;
      }
    }
   if(isset($_GET['codigo'])){
 

require_once('tcpdf/tcpdf.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'alcaldia.jpg';
        $this->Image($image_file, 10, 10, 180,  '', 'jpg', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', '', 20);
        // Title
        //$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $image1_file = K_PATH_IMAGES.'footer.png';
        $this->Image($image1_file, 10, 270, 180,  '', 'png', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 003');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'BI', 12);

// add a page
$pdf->AddPage();
//$pdf->AddPage();

$consultar= new pdf();
  $filas = $consultar->cargarRepositorio($codigo);
  
  if (isset($filas)) {
    foreach ($filas as $user) {
 
  $content = '';



  $content .= '';

$content .='
<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8" />
    <title>reporte de actividades</title>
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



<br><br>
      <p style="text-align:center; line-height:150%; font-size:11pt">
        <span style="font-family:Calibri">________________</span>
      <br>
        <strong><span style="font-family:Calibri; ">Ingeniero: José Luis Meléndez
        </span></strong>
    <br>

        <strong><span style="font-family:Calibri; ">jefe de Informática(E).</span></strong>

  </body>
</html>';
} }

// set some text to print
/*$txt = <<<EOD
TCPDF Example 003

Custom page header and footer are defined by extending the TCPDF class and overriding the Header() and Footer() methods.
EOD;*/
$horizontal_alignments = array('L', 'C', 'R');
$vertical_alignments = array('T', 'M', 'B');

$img_file = K_PATH_IMAGES.'informatica.png';
$pdf->Image($img_file, 140, 200  , 50, 50, '', '', '', false, 300, '', false, false, 0);
// print a block of text using Write()
$pdf->writeHTML($content, true, 0, true, 0);
//$pdf->WriteHTML(0, $content, '', 0, 'C', true, 0, false, false, 0);

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('ReporteDeActividades-'.$user['fecha'].'.pdf', 'I');
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
<!--<link href="css/style.css" rel="stylesheet">-->
</head>

<body>
	<div class="container">
       
        <div>
        	<div>
            <header><img src="alcaldia.png" width="100%" height="80" alt="" ></header>
            	<?php $h1 = "Actividades Realizadas en pdf";
               echo '<h1 style="text-align:left">'.$h1.'</h1>
               <div>
               <form method="post">
               <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                 <a href="../vista/reportes.php" class="btn btn-danger" > Volver</a>
                 <input type="submit" name="create_pdf" class="btn btn-success " value="Generar PDF">
               </form>
             </div>'

				?>
            </div>

              <div>

        <?php
        $consultar= new pdf();
        $filas = $consultar->cargarRepositorio($codigo);

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
