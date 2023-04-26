<?php
    session_start();  

    if(isset($_POST['p1'])) {
        $p1 = $_POST['p1'];
        $_SESSION['p1'] = $p1;
    }
    if(isset($_POST['p2'])) {
        $p2 = $_POST['p2'];
        $_SESSION['p2'] = $p2;
    }
    if(isset($_POST['p3'])) {
        $p3 = $_POST['p3'];
        $_SESSION['p3'] = $p3;
    }
    if(isset($_POST['p4'])) {
        $p4 = $_POST['p4'];
        $_SESSION['p4'] = $p4;
    }
    if(isset($_POST['p5'])) {
        $p5 = $_POST['p5'];
        $_SESSION['p5'] = $p5;
    }
    if(isset($_POST['p6'])) {
        $p6 = $_POST['p6'];
        $_SESSION['p6'] = $p6;
    }
    if(isset($_POST['p7'])) {
        $p7 = $_POST['p7'];
        $_SESSION['p7'] = $p7;
    }
    if(isset($_POST['p8'])) {
        $p8 = $_POST['p8'];
        $_SESSION['p8'] = $p8;
    }
    if(isset($_POST['p9'])) {
        $p9 = $_POST['p9'];
        $_SESSION['p9'] = $p9;
    }
    if(isset($_POST['p10'])) {
        $p10 = $_POST['p10'];
        $_SESSION['p10'] = $p10;
    }
	if(isset($_POST['p11'])) {
        $p11 = $_POST['p11'];
        $_SESSION['p11'] = $p11;
    }
	if(isset($_POST['p12'])) {
        $p12 = $_POST['p12'];
        $_SESSION['p12'] = $p12;
    }

    if(isset($_POST['j1'])) {
        $j1 = $_POST['j1'];
        $_SESSION['j1'] = $j1;
    }
    if(isset($_POST['j2'])) {
        $j2 = $_POST['j2'];
        $_SESSION['j2'] = $j2;
    }
    if(isset($_POST['j3'])) {
        $j3 = $_POST['j3'];
        $_SESSION['j3'] = $j3;
    }
    if(isset($_POST['j4'])) {
        $j4 = $_POST['j4'];
        $_SESSION['j4'] = $j4;
    }
    if(isset($_POST['j5'])) {
        $j5 = $_POST['j5'];
        $_SESSION['j5'] = $j5;
    }
    if(isset($_POST['otros'])) {
        $otros = $_POST['otros'];
        $_SESSION['otros'] = $otros;
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
        $age = $_SESSION['edad'];
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

    header('Content-Type: text/html; charset=UTF-8');
?>
    <div id="contenedor"> 
    <div id="letter" class="scroll-pane">
    <form action="generarCarta.php" method="post" target="_blank" name="printLetter">
	<form action="enviarCarta.php" method="post" target="_blank" name="sendLetter">
<?php
    echo '<p class="carta c1">hola! me llamo '.strtolower($name).' '.strtolower($lastname).', tengo '.$age.' años, y vivo en '.strtolower($city).', '.strtolower($paisN).'.</p>
    <p class="carta c1">comienzo mi carta de este año respondiendo algunas preguntas para que veas mi comportamiento y mis compromisos para el próximo año</p>';
?>
    <p class="carta c2">
        <p class="carta c2 qst">cómo he tratado a mis abuelos, padres y hermanos?</p>
        <p class="carta c2 r"><?php echo $p1; ?></p>
		<input type="hidden" name="p1" value="<?php echo $p1; ?>" />
        <p class="carta c2 qst">cómo le manifiesto el amor a mi familia?</p>
        <p class="carta c2 r"><?php echo $p2; ?></p>
		<input type="hidden" name="p2" value="<?php echo $p2; ?>" />
        <p class="carta c2 qst">cómo cuido mi ropa y mis juguetes?</p>
        <p class="carta c2 r"><?php echo $p3; ?></p>
		<input type="hidden" name="p3" value="<?php echo $p3; ?>" />
        <p class="carta c2 qst">cómo ha sido mi rendimiento escolar?</p>
        <p class="carta c2 r"><?php echo $p4; ?></p>
		<input type="hidden" name="p4" value="<?php echo $p4; ?>" />
        <p class="carta c2 qst">qué deportes practico?</p>
        <p class="carta c2 r"><?php echo $p5; ?></p>
		<input type="hidden" name="p5" value="<?php echo $p5; ?>" />
        <p class="carta c2 qst">cómo me he comportado con mis amigos?</p>
        <p class="carta c2 r"><?php echo $p6; ?></p>
		<input type="hidden" name="p6" value="<?php echo $p6; ?>" />
        <p class="carta c2 qst">cómo ayudo a las personas mayores?</p>
        <p class="carta c2 r"><?php echo $p7; ?></p>
		<input type="hidden" name="p7" value="<?php echo $p7; ?>" />
        <p class="carta c2 qst">cómo ahorro energía?</p>
        <p class="carta c2 r"><?php echo $p8; ?></p>
		<input type="hidden" name="p8" value="<?php echo $p8; ?>" />
        <p class="carta c2 qst">he pedido disculpas cuando he realizado algo incorrecto?</p>
        <p class="carta c2 r"><?php echo $p9; ?></p>
		<input type="hidden" name="p9" value="<?php echo $p9; ?>" />
        <p class="carta c2">me comprometo en el año 2013 a mejorar en:</p>
        <p class="carta c2 r"><?php echo $p10; ?></p>
		<p class="carta c2 r"><?php echo $p11; ?></p>
		<p class="carta c2 r"><?php echo $p12; ?></p>
		<input type="hidden" name="p10" value="<?php echo $p10; ?>" />
		<input type="hidden" name="p11" value="<?php echo $p11; ?>" />
		<input type="hidden" name="p12" value="<?php echo $p12; ?>" />
    </p>

	<div>
	<p class="carta c3">Este año quisiera recibir los siguientes juguetes: </p>
<?php
    echo '<b class="carta c3">'.strtolower($j1).'</b><input type="hidden" name="j1" value="'.strtolower($j1).'" />';
	if($j2){ echo '<b class="carta c3">, '.strtolower($j2).'</b><input type="hidden" name="j2" value="'.strtolower($j2).'" />';}
	if($j3){ echo '<b class="carta c3">, '.strtolower($j3).'</b><input type="hidden" name="j3" value="'.strtolower($j3).'" />'; }
	if($j4){ echo '<b class="carta c3">, '.strtolower($j4).'</b><input type="hidden" name="j4" value="'.strtolower($j4).'" />'; }
	if($j5){ echo '<b class="carta c3">, '.strtolower($j5).'</b><input type="hidden" name="j5" value="'.strtolower($j5).'" />'; }
    if($otros){ echo '<b class="carta c3">, '.strtolower($otros).'.</b><input type="hidden" name="otros" value="'.strtolower($otros).'" /><br>'; }
?>
	<input type="hidden" name="j1" value="<?php echo $j1; ?>" />
	<input type="hidden" name="j2" value="<?php echo $j2; ?>" />
	<input type="hidden" name="j3" value="<?php echo $j3; ?>" />
	<input type="hidden" name="j4" value="<?php echo $j4; ?>" />
	<input type="hidden" name="j5" value="<?php echo $j5; ?>" />
	<input type="hidden" name="otros" value="<?php echo $otros; ?>" />
	</div>

    </div> <!-- Letter -->

        <div id="ajaxSubmit"></div>

    <div id="custom">
        <table>
            <tr>
                <td><label>Lazo</label></td>
                <td><div class="lazo" id="la1"></div></td>
                <td><div class="lazo" id="la2"></div></td>
				<input type="hidden" name="lazo" value="img/sobres/lazo-rojo.png" />
            </tr>
            <tr>
                <td><label>Papel</label></td>
                <td><div class="papel" id="pa1"></div></td>
                <td><div class="papel" id="pa2"></div></td>
				<input type="hidden" name="papel" value="img/sobres/papel-amarillo.png" />
            </tr>
            <tr>
                <td><label>Sobre</label></td>
                <td><div class="sobre" id="so1"></div></td>
                <td><div class="sobre" id="so2"></div></td>
				<input type="hidden" name="sobre" value="img/sobres/sobre-rojo.png" />
            </tr>
        </table>    
    </div>

    <div id="kreisel"><a href="http://www.kreisel.com/"><p>SALIR</p></a></div>

    </form>
    </form>
    </div> <!-- Contenedor -->

    <script>
        $(document).ready(function () {
			lazo = $('#lazo').attr('src');
            $('.lazo').click(function () {
                if ($(this).attr('id') == 'la1') {
                    $('#lazo').attr('src', 'img/sobres/lazo-rojo.png');
                } else {
                    $('#lazo').attr('src', 'img/sobres/lazo-verde.png');
                }
                lazo = $('#lazo').attr('src');
				$('input[name="lazo"]').attr('value', lazo);
                //alert(lazo);
            });
			papel = $('#papel').attr('src');
            $('.papel').click(function () {
                if ($(this).attr('id') == 'pa1') {
                    $('#papel').attr('src', 'img/sobres/papel-amarillo.png');
                } else {
                    $('#papel').attr('src', 'img/sobres/papel-blanco.png');
                }
                papel = $('#papel').attr('src');
				$('input[name="papel"]').attr('value', papel);
                //alert(papel);
            });
			sobre = $('#sobre').attr('src');
            $('.sobre').click(function () {
                if ($(this).attr('id') == 'so1') {
                    $('#sobre').attr('src', 'img/sobres/sobre-rojo.png');
                } else {
                    $('#sobre').attr('src', 'img/sobres/sobre-verde.png');
                }
                sobre = $('#sobre').attr('src');
				$('input[name="sobre"]').attr('value', sobre);
                //alert(sobre);
            });
			$('div#print').click(function () {
				$('form[name="printLetter"]').submit();
			});
			// $('div#send').click(function () {
				// $('form[name="sendLetter"]').submit();
			// });

            var texto1 = $(".c1").text();
            var texto2 = $(".c2").text();
            var texto3 = $(".c3").text();
            $('#send').click(function () {
                $("#ajaxSubmit").load("submitNew.php", { id1: texto1, id2: texto2, id3: texto3, src1: lazo, src2: papel, src3: sobre }, function () {
                    $('#ajaxSubmit').fadeIn('slow');
                    //alert("recibidos los datos por ajax" + idEdo);
                });
                $("#custom").fadeOut('slow');
                $("#kreisel").fadeIn('slow');
            });
         });
	</script>