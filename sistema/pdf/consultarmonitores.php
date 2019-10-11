<?php 
  require_once('../Modelo/class.conexion.php');	
  class pdf{
  public function cargarMonitores(){
  	$rows=null;
  	$modelo = new Conexion();
  	$conexion=$modelo->get_conexion();
  	$sql="select * from monitores";
  	$statement=$conexion->prepare($sql);
  	$statement->execute();
  	while ($result=$statement->fetch()) {
  		
      $rows[]=$result;
  	}

  	return $rows;
  }
}

 //	$usuarios=$mysqli->query($usuario);
	
if(isset($_POST['create_pdf'])){
	require_once('tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'LETTER', true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Cesar Ratia');
	$pdf->SetTitle($_POST['reporte_name']);
	
	$pdf->setPrintHeader(true); 
	$pdf->setPrintFooter(true);
	$pdf->SetMargins(5, 5, 5, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
  $pdf->addPage('L');
  
  $consultar= new pdf();
  $filas = $consultar->cargarMonitores();
  
  if (isset($filas)) {
   

	$content = '';

  $content .= '<header><img src="alcaldia.png" width="800" height="60" alt="" ></header>
    <div class="row"> 
          <div class="col-md-12">
              <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>

      
      <table border="1" cellpadding="5" bgcolor="">
        <thead >
          <tr  bgcolor="#a2a5aa">
           
            <th WIDTH="30" HEIGHT="20"><B>Cod</B></th>
            <th HEIGHT="20"><B>Dep</B></th>
            <th HEIGHT="20"><B>Tipo</B></th>
            <th HEIGHT="20"><B>Marca</B></th>
            <th WIDTH="40" HEIGHT="20"><B>Enciende</B></th>
            <th HEIGHT="20"><B>Falla</B></th>
            <th HEIGHT="20"><B>Traido</B></th>
            <th HEIGHT="20"><B>Recibido</B></th>
            <th HEIGHT="20"><B>Reparado</B></th>
            <th WIDTH="60" HEIGHT="20"><B>Entregado</B></th>
            <th HEIGHT="20"><B>Entrada</B></th>
            <th HEIGHT="20"><B>Salida</B></th>
            <th WIDTH="90" HEIGHT="20"><B>Observacion</B></th>

          </tr>
        </thead>
  ';
  
  
  foreach ($filas as $user) { 
   //print_r($user ); 
  $content .= '
    <tr bgcolor="">
           
            <td WIDTH="30">'.$user['codigo'].'</td>
            <td>'.$user['departamento'].'</td>
            <td>'.$user['tipo'].'</td>
            <td>'.$user['marca'].'</td>
            <td WIDTH="40">'.$user['enciende'].'</td>
            <td>'.$user['falla'].'</td>
            <td>'.$user['traido'].'</td>
            <td>'.$user['recibido'].'</td>
            <td>'.$user['reparado'].'</td>
            <td WIDTH="60">'.$user['entregado'].'</td>
            <td>'.$user['entrada'].'</td>
            <td>'.$user['salida'].'</td>
            <td WIDTH="90">'.$user['observacion'].'</td>
        </tr>

          
  ';
  }
  
  $content .= '</table>';

	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
  $pdf->output('ReporteMonitores.pdf', 'I');
}
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
             <header><img src="alcaldia.png" width="630" height="80" alt="" ></header>
            	<?php $h1 = "Datos de los monitores en pdf";
            	echo '<h1 style="text-align:left">'.$h1.'</h1>'
        ?>
                        <form method="post">
                  <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                  <a href="../vista/monitores.php" class="btn btn-danger" > Volver</a>
                  <input type="submit" name="create_pdf" class="btn btn-success" value="Generar PDF">
                </form>
                <br>
      <table  width="630" border="2" style="text-align:center;">
        <thead>
          <tr>
            <th><center>Departamento</center></th>
            <th><center>Fecha Entrada</center></th>
            <th><center>Fecha Salida</center></th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $consultar= new pdf();
        $filas = $consultar->cargarMonitores();
         if (isset($filas)) {
       foreach ($filas as $user) {   ?>
          <tr class="">
            <td><?php echo $user['departamento']; ?></td>
            <td><?php echo $user['entrada']; ?></td>
            <td><?php echo $user['salida']; ?></td>
          </tr>
         <?php  } }?>
        </tbody>
      </table>


</body>
</html>