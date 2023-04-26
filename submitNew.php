<?php
    session_start();
	
/* GENERAR CARTA */

$id_user = $_SESSION['id_usuario'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$edad = $_SESSION['edad'];
$ciudad = $_SESSION['ciudad'];
$paisNombre = $_SESSION['paisNombre'];
$email = $_SESSION['email'];
$eParents = $_SESSION['eParents'];

// $p1 = $_POST['p1'];
// $p2 = $_POST['p2'];
// $p3 = $_POST['p3'];
// $p4 = $_POST['p4'];
// $p5 = $_POST['p5'];
// $p6 = $_POST['p6'];
// $p7 = $_POST['p7'];
// $p8 = $_POST['p8'];
// $p9 = $_POST['p9'];
// $p10 = $_POST['p10'];

if(isset($_SESSION['p1'])) {
	$p1 = $_SESSION['p1'];
}
if(isset($_SESSION['p2'])) {
	$p2 = $_SESSION['p2'];
}
if(isset($_SESSION['p3'])) {
	$p3 = $_SESSION['p3'];
}
if(isset($_SESSION['p4'])) {
	$p4 = $_SESSION['p4'];
}
if(isset($_SESSION['p5'])) {
	$p5 = $_SESSION['p5'];
}
if(isset($_SESSION['p6'])) {
	$p6 = $_SESSION['p6'];
}
if(isset($_SESSION['p7'])) {
	$p7 = $_SESSION['p7'];
}
if(isset($_SESSION['p8'])) {
	$p8 = $_SESSION['p8'];
}
if(isset($_SESSION['p9'])) {
	$p9 = $_SESSION['p9'];
}
if(isset($_SESSION['p9'])) {
	$p9 = $_SESSION['p9'];
}
if(isset($_SESSION['p10'])) {
	$p10 = $_SESSION['p10'];
}
if(isset($_SESSION['p11'])) {
	$p11 = $_SESSION['p11'];
}
if(isset($_SESSION['p12'])) {
	$p12 = $_SESSION['p12'];
}

// $j1 = $_POST['j1'];
// $j2 = $_POST['j2'];
// $j3 = $_POST['j3'];
// $j4 = $_POST['j4'];
// $j5 = $_POST['j5'];
// $otros = $_POST['otros'];

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
$pdf->Output('cartas/carta_'.$id_user.'-'.$nombre.'-'.$apellido.'.pdf','F');
$pdf->Close();

/* ENVIO DE LA CARTA */
    
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

    if(isset($_POST['id1'])) {
        $texto1 = $_POST['id1'];
    }
    if(isset($_POST['id2'])) {
        $texto2 = $_POST['id2'];
    }
    if(isset($_POST['id3'])) {
        $texto3 = $_POST['id3'];
    }

    if($_POST['src1']!="") {
        $lazo = $_POST['src1'];
    } else {
        $lazo = 'img/sobres/lazo-rojo.png';
    }
    if($_POST['src2']!="") {
        $papel = $_POST['src2'];
    } else {
        $papel = 'img/sobres/papel-amarillo.png';
    }
    if($_POST['src3']!="") {
        $sobre = $_POST['src3'];
    } else {
        $sobre = 'img/sobres/sobre-rojo.png';
    }

	if(isset($_SESSION['id_usuario'])) {
        $id_user = $_SESSION['id_usuario'];
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
    $emailK = 'info@kreisel.com';


    require_once('phpmailer/class.phpmailer.php');

    $mail = new PHPMailer(); // defaults to using php "mail()"

    $body = '
    <!DOCTYPE html>
	<html>
	<head>
		<title>Carta de Navidad Kreisel</title>
        <style>
        #contenedor {
            margin: 10px; z-index: 99999999999; position: absolute;
        }
        #letter {
            margin: 0 auto;
            position: absolute;
            top: 75px;
            z-index: 10;
            left: 155px;
        }
        #papel, #sobre, #lazo {
            position: absolute;
        }
        #papel {
            top: -130px;
            left: 170px;
        }
        #sobre {
            top: 255px;
            left: 114px;
        }
        #lazo {
            top: -164px;
            left: 125px;
        }
        /*Contenido final carta*/
        .carta {
            color: #000 !important;
            font-size: 15px !important;
        }
        .r {
            margin-top: -7px !important;
            white-space: pre-wrap;
            overflow: hidden;
        }
        .c2, .c1, .c3 {
            color: #000;
            text-shadow: 0px 5px 5px yellow !important;
        }
        </style>
	</head>
	<body>
	<div id="contenedor" style="background: green; padding: 10px; border-radius: 20px; color: black;"> 
        <div id="letter" style="background: beige; padding: 10px; border-radius: 20px; border: 5px solid red;">

        <div style="padding:15px; margin: 0 auto; color: black; font-weight:bold;">
            <p style="text-align:center;">TU CARTA ESTA LISTA!</p>
            <p style="text-align:center;">Descargala en el archivo adjunto del correo.</p>
        </div>

        </div> <!-- Letter -->
        </div> <!-- Contenedor -->
	</body>
	</html>
    ';

    $mail->SetFrom("info@kreisel.com", "Kreisel");

    $mail->AddAddress($eParents, "Padres de ".$name." ".$lastname);
    $mail->AddCC($email, $name." ".$lastname);
    $mail->AddBCC($emailK, "info@kreisel.com");

    $mail->Subject    = "Carta de Navidad - ".$name." ".$lastname.".";

	$mail->AddAttachment('cartas/carta_'.$id_user.'-'.$nombre.'-'.$apellido.'.pdf');

    $mail->AltBody    = "Para ver este mensaje, utilizar un visualizador de correo html compatible!"; // optional, comment out and test

    $mail->IsHTML(true);

    $mail->MsgHTML($body);

    if(!$mail->Send()) {
        echo '<p class="carta c4">error :(</p>';
    } else {
        echo '<p class="carta c4">carta enviada!</p>';
    }


?>
