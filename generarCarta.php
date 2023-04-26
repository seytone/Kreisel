<?php
header("Cache-control: private"); //IE 6 Fix 
session_start();

if($_SESSION['nombre']==""){
	echo "<script>
	window.alert('Debes iniciar sesión para descargar tu carta.');
	window.close();
	</script>";
}

$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$edad = $_SESSION['edad'];
$ciudad = $_SESSION['ciudad'];
$paisNombre = $_SESSION['paisNombre'];
$email = $_SESSION['email'];
$eParents = $_SESSION['eParents'];

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$p8 = $_POST['p8'];
$p9 = $_POST['p9'];
$p10 = $_POST['p10'];
$p11 = $_POST['p11'];
$p12 = $_POST['p12'];

$j1 = $_POST['j1'];
$j2 = $_POST['j2'];
$j3 = $_POST['j3'];
$j4 = $_POST['j4'];
$j5 = $_POST['j5'];
$otros = $_POST['otros'];

$lazo = $_POST['lazo'];
$papel = $_POST['papel'];
$sobre = $_POST['sobre'];

include 'fpdf/generaPDF.php';

$pdf=new PDF('P','mm','letter',$lazo,$papel,$sobre);
//página
$pdf->SetFont('Arial');
$pdf->SetFontSize(12);
$pdf->SetAutoPageBreak('auto', 80);
$pdf->SetMargins(30, 30, 35);
$pdf->AddPage('P','Letter');
$pdf->SetTextColor(0,0,0);
$pdf->WriteHTML(utf8_decode('Hola, mi nombre es '.$nombre.' '.$apellido.', tengo '.$edad.' años, y vivo en '.$ciudad.', '.$paisNombre.'.'));
$pdf->Ln(12);
$pdf->WriteHTML(utf8_decode('Comienzo mi carta de este año respondiendo algunas preguntas para que veas mi comportamiento y mis compromisos durante todo este año'));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('¿Cómo he tratado a mis abuelos, padres y hermanos?'),0,0);
$pdf->Ln(4);
$pdf->WriteHTML(utf8_decode('  '.$p1));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('¿Cómo le manifiesto el amor a mi familia?'),0,0);
$pdf->Ln(4);
$pdf->WriteHTML(utf8_decode('  '.$p2));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('¿Cómo cuido mi ropa y mis juguetes?'),0,0);
$pdf->Ln(4);
$pdf->WriteHTML(utf8_decode('  '.$p3));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('¿Cómo ha sido mi rendimiento escolar?'),0,0);
$pdf->Ln(4);
$pdf->WriteHTML(utf8_decode('  '.$p4));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('¿Qué deportes practico?'),0,0);
$pdf->Ln(4);
$pdf->WriteHTML(utf8_decode('  '.$p5));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('¿Cómo me he comportado con mis amigos?'),0,0);
$pdf->Ln(4);
$pdf->WriteHTML(utf8_decode('  '.$p6));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('¿Cómo ayudo a las personas mayores?'),0,0);
$pdf->Ln(4);
$pdf->WriteHTML(utf8_decode('  '.$p7));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('¿Cómo ahorro energía?'),0,0);
$pdf->Ln(4);
$pdf->WriteHTML(utf8_decode('  '.$p8));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('¿He pedido disculpas cuando he realizado algo incorrecto?'),0,0);
$pdf->Ln(4);
$pdf->WriteHTML(utf8_decode('  '.$p9));
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('Este año quisiera recibir los siguientes regalos: '),0,0);
$pdf->Ln(8);
$pdf->WriteHTML('  '.$j1);
if($j2!="") {
$pdf->WriteHTML(', '.$j2);
}
if($j3!="") {
$pdf->WriteHTML(', '.$j3);
}
if($j4!="") {
$pdf->WriteHTML(', '.$j4);
}
if($j5!="") {
$pdf->WriteHTML(', '.$j5);
}
if($otros!="") {
$pdf->WriteHTML(', '.$otros);
}
$pdf->Ln(15);
$pdf->Cell(0,0,utf8_decode('Finalmente me comprometo en el año 2013 a mejorar en: '),0,0);
$pdf->Ln(8);
$pdf->WriteHTML(utf8_decode(' 1. '.$p10));
$pdf->Ln(5);
$pdf->WriteHTML(utf8_decode(' 2. '.$p11));
$pdf->Ln(5);
$pdf->WriteHTML(utf8_decode(' 3. '.$p12));
$pdf->Output('micarta.pdf','I');
?>