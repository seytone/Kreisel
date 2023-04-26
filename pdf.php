<?php
    
    session_start();
    
    $toys = $_POST['juguetes'];

    $p1 = $_SESSION['p1'];
    $p2 = $_SESSION['p2'];
    $p3 = $_SESSION['p3'];
    $p4 = $_SESSION['p4'];
    $p5 = $_SESSION['p5'];
    $p6 = $_SESSION['p6'];
    $p7 = $_SESSION['p7'];
    $p8 = $_SESSION['p8'];
    $p9 = $_SESSION['p9'];
    $p10 = $_SESSION['p10'];

    if(isset($_SESSION['j1'])) {
        $j1 = $_SESSION['j1'];
    }
    if(isset($_SESSION['j2'])) {
        $j2 = $_SESSION['j2'];
    }
    if(isset($_SESSION['j3'])) {
        $j3 = $_SESSION['j3'];
    }
    if(isset($_SESSION['j4'])) {
        $j4 = $_SESSION['j4'];
    }
    if(isset($_SESSION['j5'])) {
        $j5 = $_SESSION['j5'];
    }
    if(isset($_SESSION['otros'])) {
        $otros = $_SESSION['otros'];
    }

    if(isset($_GET['id1'])) {
        $texto1 = $_GET['id1'];
    }
    if(isset($_GET['id2'])) {
        $texto2 = $_GET['id2'];
    }
    if(isset($_GET['id3'])) {
        $texto3 = $_GET['id3'];
    }
    if(isset($_GET['src1'])) {
        $lazo = $_GET['src1'];
    }
    if(isset($_GET['src2'])) {
        $papel = $_GET['src2'];
    }
    if(isset($_GET['src3'])) {
        $sobre = $_GET['src3'];
    }

    if(isset($_SESSION['nombre'])) {
        $name = $_SESSION['nombre'];
    }
	if(isset($_SESSION['apellido'])) {
        $lastname = $_SESSION['apellido'];
    }
    if(isset($_SESSION['edad'])) {
        $edad = $_SESSION['edad'];
    }
    if(isset($_SESSION['ciudad'])) {
        $city = $_SESSION['ciudad'];
    }
    if(isset($_SESSION['paisNombre'])) {
        $paisN = $_SESSION['paisNombre'];
    }
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }
    if(isset($_SESSION['eParents'])) {
        $eParents = $_SESSION['eParents'];
    }

    $img = 'sobre-rojo.png';

    require('fpdf/fpdf.php');

    class PDF extends FPDF
    {
       //Cabecera de página
       function Header()
       {

          $this->Image('img/index/logo.png',10,8,33);

          $this->SetFont('Arial','B',12);

          $this->Cell(30,10,'Carta de Navidad',1,0,'C');

       }
    }

    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(200,20, 'Hola! Me llamo '.$name.' '.$lastname.', tengo '.$edad.' años, y vivo en '.$city.', '.$paisN.'.',0,1,'C');
    $pdf->Cell(200,20, $texto1.' '.$texto2.' '.$texto3, 0,1,'C');
    $pdf->Output();

    //function Header()
    //{
	   // $this->Image('img/sobres/'.$img,0,0,220,0,'','');
    //}
?>