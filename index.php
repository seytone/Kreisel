<?php
    session_start();

    if(isset($_POST['gen'])) {
        $gen = $_POST['gen'];
    }
	if(isset($_POST['id'])) {
        $id_user = $_POST['id'];
        $_SESSION['id_usuario'] = $id_user;
    }
    if(isset($_POST['nombre'])) {
        $name = $_POST['nombre'];
        //$_SESSION['nombre'] = $name;
    }
    if(isset($_POST['apellido'])) {
        $lastname = $_POST['apellido'];
        $_SESSION['apellido'] = $lastname;
    }
    if(isset($_POST['pais'])) {
        $pais = $_POST['pais'];
        //$_SESSION['paisValor'] = $pais; //ID del Pais.
    }
    if(isset($_POST['ciudad'])) {
        $city = $_POST['ciudad'];
        //$_SESSION['ciudad'] = $city; //ID del Pais.
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        //$_SESSION['email'] = $email;
    }
    if(isset($_POST['emailParents'])) {
        $eParents = $_POST['emailParents'];
        //$_SESSION['eParents'] = $eParents;
    }

    include('conexion.php');

    $query = "SELECT countries.name FROM countries INNER JOIN users ON countries.id_country = users.id_country AND users.id_country = $pais";
    $result = mysql_query($query) or die ("Error en la consulta SQL");

    $row = mysql_fetch_array($result);

    $paisN = $row["name"];

    mysql_close($conexion);
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
		<meta http-equiv="content-language" content="es">
        <title>Carta de Navidad Kreisel</title>
		<link type="image/x-icon" href="favicon.ico" rel="icon">
        <link type="text/css" href="css/index.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/form.validate.js"></script>

        <script>
            $(document).ready(function () {
                $("#nino, #boy").click(function () {
                    $(this).attr("src", "img/index/nino2.png");
                    $("#boy").attr("src", "img/index/boy2.png");
                    $("#nina").attr("src", "img/index/nina.png");
                    $("#girl").attr("src", "img/index/girl.png");
                    $("#gen").attr("value", "niño");
                });
                $("#nina, #girl").click(function () {
                    $(this).attr("src", "img/index/nina2.png");
                    $("#girl").attr("src", "img/index/girl2.png");
                    $("#nino").attr("src", "img/index/nino.png");
                    $("#boy").attr("src", "img/index/boy.png");
                    $("#gen").attr("value", "niña");
                });
                $("#next").click(function () {
                    var sex = $("#gen").val();
                    var edad = $("#edad").val();
                    if (!sex) {
                        alert("Debes seleccionar Niño o Niña!");
                    } else
                        if (!edad) {
                            alert("Debes indicar tu edad!");
                        } else {
                            $("#formulario").submit();
                        }
                });
                $("#formulario").validate();
            });
        </script>
    </head>
    <body>
        <div id="container">
            <img id="background" src="img/index/background.jpg" alt="background">
            <img id="logo" src="img/index/logo.png" alt="logo">
            <img id="girl" src="img/index/girl.png" alt="kid">
            <img id="boy" src="img/index/boy.png" alt="kid">
            <img id="arbol" src="img/index/arbol.png" alt="arbol">
            <img id="box" src="img/index/box.png" alt="box">
            <img id="nino" src="img/index/nino.png" alt="box">
            <img id="nina" src="img/index/nina.png" alt="box">

            <div>
                <form id="formulario" action="stage.php" method="post">
                    <div id="form">
                        <input class="required" required type="hidden" id="gen" name="gen" value="">
                        <div class="in">
                            <label for="name">Nombre y Apellido</label><b> *</b><br>
                            <input class="required" required type="text" readonly="readonly" id="name" name="nombre" value="<?=$name.' '.$lastname?>"><br>
                            <label for="edad">Edad</label><b> *</b><br>
                            <input class="digits" type="text" name="edad" id="edad" value="">
                        </div>
                        <div class="in">
                            <label for="pais">Pais</label><b> *</b><br>
                            <input class="required" type="text" id="pais" readonly="readonly" name="paisN" value="<?=$paisN?>"><br>
                            <input class="required" type="hidden" id="valorPais" name="pais" value="<?=$pais?>">
                            <label for="ciudad">Ciudad</label><b> *</b><br>
                            <input class="required" type="text" readonly="readonly" id="ciudad" name="ciudad" value="<?=$city?>">
                        </div> 
                        <div class="in">
                            <label for="emailParents">Email de tus padres</label><b> *</b><br>
                            <input class="required email" required type="text" readonly="readonly" id="emailParents" name="emailParents" value="<?=$eParents?>"><br>
                            <label for="email">¿Tienes correo electrónico?</label><br>
                            <input class="email" type="text" id="email" name="email" value="">
                        </div>
                        <p>Los campos Señalados con el asterístco (<b>*</b>) son obligatorios para poder continuar</p>
                    </div>
                    <input id="next" type="button" value="">
                </form>
            </div>
        </div>
    </body>
</html>
