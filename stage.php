<?php
    session_start();

    if(isset($_POST['gen'])) {
        $gen = $_POST['gen'];
    }
	if(isset($_SESSION['id_usuario'])) {
        $id_user = $_SESSION['id_usuario'];
    }
    if(isset($_POST['nombre'])) {
        $name = $_POST['nombre'];
        $_SESSION['nombre'] = $name;
    }
    if(isset($_SESSION['apellido'])) {
        $lastname = $_SESSION['apellido'];
    }
    if(isset($_POST['pais'])) {
        $paisV = $_POST['pais'];
        $_SESSION['paisValor'] = $paisV; //ID del Pais.
    }
    if(isset($_POST['paisN'])) {
        $paisN = $_POST['paisN'];
        $_SESSION['paisNombre'] = $paisN; //Nombre del Pais.
    }
    if(isset($_POST['ciudad'])) {
        $city = $_POST['ciudad'];
        $_SESSION['ciudad'] = $city;
    }
    if(isset($_POST['edad'])) {
        $age = $_POST['edad'];
        $_SESSION['edad'] = $age;
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
    }
    if(isset($_POST['emailParents'])) {
        $eParents = $_POST['emailParents'];
        $_SESSION['eParents'] = $eParents;
    }
    //echo '<h1>'.$name.' - '.$lastname.' - '.$paisV.' - '.$paisN.' - '.$age.' - '.$email.' - '.$eParents.'</h1>';
?>

<!DOCTYPE html>

<html><head>
    <meta charset="utf-8" />
    <meta http-equiv="content-language" content="es">
	<title>Carta de Navidad Kreisel</title>
    <link type="image/x-icon" href="favicon.ico" rel="icon">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset/reset-min.css">
    <link rel="stylesheet" type="text/css" href="css/stage.css">
    <link rel="stylesheet" type="text/css" href="css/toys.css">
    <link rel="stylesheet" type="text/css" href="css/website.css">
    <link href="http://www.kreisel.com/assets/main/css/jscrollpane.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
        if ($gen == 'niño') {
            $boy = 1;
        } else
        if ($gen == 'niña') {
            $boy = 2;
        }
    ?>

    <img id="loading" src="img/cargando.gif" alt="load" style="display: none; position: absolute; top: 70%; left: 48%; z-index: 1000;">

    <div id="background" class="fondow">
    	<div id="fondow"></div>
    </div><!-- end fondo -->
	<div id="cloud1" class="clouds">
    	<!--<div id="clouds-small"></div>-->
    </div><!-- end clouds -->
    <div id="glob" class="globox">
        <div id="globox"></div>
    </div><!-- end globox -->
    <div id="cloud2" class="clouds">
        <div id="clouds-big"></div>
    </div><!-- end clouds -->
    <div id="groundx" class="ground">
        <div id="suelo"></div>
    </div><!-- end ground -->
    <div id="mount1" class="mountains">
        <div id="mount-back"></div>
    </div><!-- end mount -->
    <div id="mount2" class="mountains">
        <div id="mount-front"></div>
    </div><!-- end mount -->
    <div id="arbol1" class="arboles">
        <div id="arbolito-back"></div>
    </div><!-- end arbol -->
    <div id="nino" class="boy">
        <div id="boy<?php echo $boy; ?>"></div>
    </div><!-- end nino -->
    <div id="frente" class="front">
        <div id="front1"></div>
    </div><!-- end front -->  

    <img id="mute" class="si_vol" src="sound/vol_up.png" alt="vol"><!-- audio control -->
    
	<div id="header">
   		<h1 id="logo"></h1>
        <div id="marcador">
            <img id="carta" src="img/stage/carta.png" alt="carta de navidad">
            <ul id="menu">
			    <li><a id="1" class="vlink1 vclk">1</a></li>
			    <li><a id="2" class="vlink2 vclk">2</a></li>
			    <li><a id="3" class="vlink3 vclk">3</a></li>
			    <li><a id="4" class="vlink4 vclk">4</a></li>
			    <li><a id="5" class="vlink5 vclk">5</a></li>
			    <li><a id="6" class="vlink6 vclk">6</a></li>
			    <li><a id="7" class="vlink7 vclk">7</a></li>
			    <li><a id="8" class="vlink8 vclk">8</a></li>
            </ul>
            <div class="counter"> 
                <input type="text" id="numRegalo" value="5">
            </div>
        </div>	
	</div><!-- end header -->

    <div style="display: none;">
        <ol id="lista"></ol>
    </div>

    <form id="wrapper" action="carta.php" method="post">
    	<ul id="mask">
        	<li id="box1" class="box">
                <div class="content"><div class="inner">
                    <div class="message">
                        <h1 class="qsti">Hola, <b><?php echo strtolower($name); ?></b>! Ahora para crear tu carta de navidad debo saber cómo te has portado este año.</h1>
                        <br>
                        <h1>Responde cada una de las preguntas que verás a continuación para que puedas luego seleccionar los juguetes que deseas en esta navidad.</h1>
                        <br>
                        <h1 class="qsti">Avanza!</h1>
                    </div>
                    <a href="#box2" id="2" class="link2 clk"><div class="avanza"></div></a>
                </div></div>
            </li><!-- end box1 -->
            <li id="box2" class="box">
                <div class="content question"><div class="inner">
                    <h2>Pregunta 1</h2><br>
                    <p class="qst">Cómo he tratado a mis abuelos, padres y hermanos?</p><br>
                    <input type="text" maxlength="140" required value="" id="vp1"><br>
                    <h2>Pregunta 2</h2><br>
                    <p class="qst">Cómo le manifiesto el amor a mi familia?</p><br>
                    <input type="text" maxlength="140" required value="" id="vp2">
                    <a href="#box3" id="3" class="link3 clk"><div id="next1" class="avanza"></div></a>
                </div></div>
            </li><!-- end box2 -->
            <li id="box3" class="box">
                <div class="content question"><div class="inner">
                    <h2>Pregunta 3</h2><br>
                    <p class="qst">Cómo cuido mi ropa y mis juguetes?</p><br>
                    <input type="text" maxlength="140" required value="" id="vp3"><br>
                    <h2>Pregunta 4</h2><br>
                    <p class="qst">Cómo ha sido mi rendimiento escolar?</p><br>
                    <input type="text" maxlength="140" required value="" id="vp4">
                    <a href="#box2" id="2" class="link2 clk"><div id="retro1" class="retrocede"></div></a>
                    <a href="#box4" id="4" class="link4 clk"><div id="next2" class="avanza"></div></a>
                </div></div>
            </li><!-- end box3 -->
            <li id="box4" class="box">
                <div class="content question"><div class="inner">
                    <h2>Pregunta 5</h2><br>
                    <p class="qst">Qué deportes practico?</p><br>
                    <input type="text" maxlength="140" required value="" id="vp5"><br>
                    <h2>Pregunta 6</h2><br>
                    <p class="qst">Cómo me he comportado con mis amigos?</p><br>
                    <input type="text" maxlength="140" required value="" id="vp6">
                    <a href="#box3" id="3" class="link3 clk"><div id="retro2" class="retrocede"></div></a>
                    <a href="#box5" id="5" class="link5 clk"><div id="next3" class="avanza"></div></a>
                </div></div>
            </li><!-- end box4 -->
			<li id="box5" class="box">
                <div class="content question"><div class="inner">
                    <h2>Pregunta 7</h2><br>
                    <p class="qst">Cómo ayudo a las personas mayores?</p><br>
                    <input type="text" maxlength="140" required value="" id="vp7"><br>
                    <h2>Pregunta 8</h2><br>
                    <p class="qst">Cómo ahorro energía?</p><br>
                    <input type="text" maxlength="140" required value="" id="vp8">
                    <a href="#box4" id="4" class="link4 clk"><div id="retro3" class="retrocede"></div></a>
                    <a href="#box6" id="6" class="link6 clk"><div id="next4" class="avanza"></div></a>
                </div></div>
            </li><!-- end box5 -->
            <li id="box6" class="box">
                <div class="content noche question"><div class="inner">
                    <h2>Pregunta 9</h2><br>
                    <p class="qst">He pedido disculpas cuando he realizado algo incorrecto?</p><br>
                    <input type="text" maxlength="140" required value="" id="vp9"><br>
                    <h2>Pregunta 10</h2><br>
                    <p>Me comprometo en el año 2013 a mejorar en:</p><br>
                    <input type="text" maxlength="30" required value="" id="vp10" style="width: 200px; margin: 5px; text-align: center;">
					<input type="text" maxlength="30" required value="" id="vp11" style="width: 200px; margin: 5px; text-align: center;">
					<input type="text" maxlength="30" required value="" id="vp12" style="width: 200px; margin: 5px; text-align: center;">
                    <a href="#box5" id="5" class="link5 clk"><div id="retro4" class="retrocede"></div></a>
                    <a href="#box7" id="7" class="link7 clk"><div id="next5" class="avanza"></div></a>
                </div></div>
            </li><!-- end box6 -->
            <li id="box7" class="box">
                <div class="content noche question"><div id="ajaxToy"><div class="inner">
                    <h2>Juguetes</h2><br>
                    <p>Ahora escoge los juguetes que quieres este año.</p>
                    <br>
                    <p id="distinto">Debes seleccionar uno a uno buscando entre las diferentes categorias. puedes escoger hasta 5 juguetes.</p>
                    <br><br>
                    <div id="verj"></div>
                </div></div><!-- Ajax -->
                    <a href="#box6" id="6" class="link6 clk"><div id="retro5" class="retrocede"></div></a>
                    <a href="#box8" id="8" class="link8 clk"><div id="next6" class="avanza jug"></div></a></div>
            </li><!-- end box7 -->
			<li id="box8" class="box">
                <div class="content noche"><div class="inner">
                    <a href="#box7" id="7" class="link7 clk"><div id="retro6" class="retrocede"></div></a>
                    <div id="ajax" style="width: 794px; margin: 0 auto; z-index: 9999999;">
                        <div class="message">
                            <h1>Resumen</h1><br>
                            <h1 class="qsti">Muy bien <?php echo strtolower($name); ?>! Has terminado el recorrido y tu carta ha sido creada mágicamente.</h1>
                            <br>
                            <h1>Ahora podrás ver tu carta, enviarla para que se cumplan tus deseos y también podrás imprimirla.</h1>
                            <br>
                        </div>
                        <div id="ver"></div>
                    </div>
					<img id="fondox" src="img/stage/fondoCarta.png">
					<img id="papel" src="img/sobres/papel-amarillo.png">
					<img id="sobre" src="img/sobres/sobre-rojo.png">
					<img id="lazo" src="img/sobres/lazo-rojo.png">
                    <img id="logo" src="img/stage/logoK.png" style="position:relative;top:475px;">
					<div id="send"></div>
	                <div id="print"></div>
                </div></div>
            </li><!-- end box8 -->
        </ul><!-- end mask -->
    </form><!-- end wrapper -->

    <audio autoplay="autoplay" loop="loop" preload="auto" id="sound">
        <source src="sound/popurri_villancicos.ogg" type="audio/ogg"/>
        <source src="sound/popurri_villancicos.mp3" type="audio/mp3"/>
    </audio>
    
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.PrintArea.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.js"></script>
    <!-- <script type="text/javascript" src="js/fireworks.js"></script> -->
    <script type="text/javascript" src="js/carta.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $("#glob").hide();
            setTimeout(function() {
                $("#glob").fadeIn();
            }, 20000);

            $("#mute").click(function () {
                var clase = $(this).attr('className');
                //alert(clase);
                if (clase == 'si_vol') {
                    //alert('apagado');
                    volumen(0);
                    $(this).attr('src', 'sound/vol_down.png');
                    $(this).removeClass('si_vol');
                    $(this).addClass('no_vol');
                } else {
                    //alert('encendido');
                    volumen(1);
                    $(this).attr('src', 'sound/vol_up.png');
                    $(this).removeClass('no_vol');
                    $(this).addClass('si_vol');
                }
            });

            $("#vp2").keyup(function () {
                if ($("#vp1").val().length >= 2) {
                    $("#next1").fadeIn('slow');
                    return false;
                }
            });
            $("#vp4").keyup(function () {
                if ($("#vp4").val().length >= 2) {
                    $("#next2").fadeIn('slow');
                    return false;
                }
            });
            $("#vp6").keyup(function () {
                if ($("#vp6").val().length >= 2) {
                    $("#next3").fadeIn('slow');
                    return false;
                }
            });
            $("#vp8").keyup(function () {
                if ($("#vp8").val().length >= 2) {
                    $("#next4").fadeIn('slow');
                    return false;
                }
            });
            $("#vp12").keyup(function () {
                if ($("#vp12").val().length >= 2) {
                    $("#next5").fadeIn('slow');
                    return false;
                }
            });

            $('#ver').click(function () {
                p1 = $('#vp1').val();
                p2 = $('#vp2').val();
                p3 = $('#vp3').val();
                p4 = $('#vp4').val();
                p5 = $('#vp5').val();
                p6 = $('#vp6').val();
                p7 = $('#vp7').val();
                p8 = $('#vp8').val();
                p9 = $('#vp9').val();
                p10 = $('#vp10').val();
				p11 = $('#vp11').val();
				p12 = $('#vp12').val();
                j1 = $("ol#lista li").eq(0).text();
                j2 = $("ol#lista li").eq(1).text();
                j3 = $("ol#lista li").eq(2).text();
                j4 = $("ol#lista li").eq(3).text();
                j5 = $("ol#lista li").eq(4).text();
                otros = $("#otros").val();
                //alert(p1 + p2 + p3 + p4 + p5 + j1 + j2 + j3 + j4 + j5 + otros);
                $('#marcador, #logo').fadeOut(1000);
                $('#nino').animate({marginLeft:'1330px;'}, 1000);
				$('#fondox, #lazo, #papel, #sobre, #print, #send').fadeIn(1000);
                $("#ajax").load("carta.php", { p1: p1, p2: p2, p3: p3, p4: p4, p5: p5, p6: p6, p7: p7, p8: p8, p9: p9, p10: p10, p11: p11, p12: p12, j1: j1, j2: j2, j3: j3, j4: j4, j5: j5, otros: otros }, function () {
                    $('#ajax').fadeIn('slow');
                    //alert("recibidos los datos por ajax" + idEdo);
                });
            });
            $('#verj').click(function () {
				//cargando();
                $('.counter').fadeIn('slow');
                $.getScript( "js/fireworks.js", function() {
                      console.log( "Load was performed.");
                });
                $("#ajaxToy").load("juguetes.php", { id: 'dato' }, function () {
                    $('#ajaxToy').fadeIn('slow');
                    //alert("recibidos los datos por ajax" + idEdo);
                });
            });

            // Inicializamos num=1 para llevar el foco en el punto inicial.
            var num = 1;
            $('a.vlink' + num).addClass('selected');
            // Controlar el Parallax mediante los botones de navegación.
            $('a.clk').click(function () {
                num = $(this).attr("id");
                //alert(num);
                $('#wrapper').scrollTo($('a.link' + num).attr('href'), 800);
                setPosition($('a.link' + num).attr('href'), '#background', '0px', '800px', '1600px', '2400px', '3200px', '4000px', '4800px', '5400px')
                setPosition($('a.link' + num).attr('href'), '#cloud1', '0px', '300px', '600px', '900px', '1200px', '1500px', '1800px', '2100px')
                setPosition($('a.link' + num).attr('href'), '#cloud2', '0px', '400px', '800px', '1200px', '1600px', '2000px', '2400px', '2800px')
                setPosition($('a.link' + num).attr('href'), '#glob', '6300px', '5400px', '4500px', '3600px', '2700px', '1800px', '900px', '0px')
                setPosition($('a.link' + num).attr('href'), '#mount1', '0px', '800px', '1600px', '2400px', '3200px', '4000px', '4800px', '5400px')
                setPosition($('a.link' + num).attr('href'), '#mount2', '0px', '900px', '1800px', '2700px', '3600px', '4500px', '5400px', '6300px')
                setPosition($('a.link' + num).attr('href'), '#arbol1', '0px', '500px', '1000px', '1500px', '2000px', '2500px', '3000px', '3500px')
                setPosition($('a.link' + num).attr('href'), '#arbol2', '0px', '700px', '1400px', '2100px', '2800px', '3500px', '4200px', '4900px')
                setPosition($('a.link' + num).attr('href'), '#frente', '0px', '1000px', '2000px', '3000px', '4000px', '5000px', '6000px', '7000px')
                $('a.vclk').removeClass('selected');
                $('a.vlink' + num).addClass('selected');
                return false;
            });
        });

        function volumen(vol) {
            var audiox = document.getElementById("sound");
            audiox.volume = vol;
        }
        function cargando() {
            $('#loading').show();
        }
        function imprimir(id) {
            var div, imp;
            div = document.getElementById(id); //seleccionamos el objeto
            imp = window.open(" ", "Formato de Impresion"); //damos un titulo
            imp.document.open();     //abrimos
            imp.document.write('style: background: cyan;'); //tambien podriamos agregarle un <link ...
            imp.document.write(div.innerHTML); //agregamos el objeto
            imp.document.close();
            imp.print();   //Abrimos la opcion de imprimir
            imp.close(); //cerramos la ventana nueva
        }
    </script>
</body>
</html>
