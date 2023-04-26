<?php
    session_start();    

    if(isset($_SESSION['paisValor'])) {
        $vpais = $_SESSION['paisValor'];
    }

    if (isset($_POST['id'])) {
        $idCat = $_POST['id'];
    }

    include('conexion.php');

    $ruta = 'http://www.kreisel.com/imagen/productos/270/230/';

    $query2 = "SELECT products.* FROM products INNER JOIN products_countries ON products.id_product = products_countries.id_product AND products_countries.id_country = $vpais AND products.active = 1 ORDER BY id_product DESC";
    $result2 = mysql_query($query2) or die ("Error en la consulta SQL");
?>
    
    <ul id="juegos">
    <?php
    $x=0;
    while ($row2 = mysql_fetch_array($result2)) {
        if ($idCat != 0) {
            if ($row2["id_category"] == $idCat) {
                echo '<li><div id="'.$x.'" class="juguete"><img id="imgJ" src="'.$ruta.$row2["image"].'"><div id="hover'.$x.'" class="producto-hover"><span>'.$row2["short_desc"].'</span></div></div></li>';
                echo '<input type="hidden" id="n'.$x.'" value="'.$row2["short_desc"].'">';
                $x++; 
            }
        } else {
            echo '<li><div id="'.$x.'" class="juguete"><img id="imgJ" src="'.$ruta.$row2["image"].'"><div id="hover'.$x.'" class="producto-hover"><span>'.$row2["short_desc"].'</span></div></div></li>';
            echo '<input type="hidden" id="n'.$x.'" value="'.$row2["short_desc"].'">';
            $x++; 
        }         
    }
    ?>
    </ul>

    <script>
        numx = 0;
        $('.categoria-icono').click(function () {
            numx = $(this).attr("id");
            idCat = numx;
            $("#productos").load("lista.php", { id: idCat }, function () {
                //alert("recibidos los datos por ajax" + idEdo);
            });
            $('.categoria-icono').removeClass('categoria_selected');
            $(".cat-ico-" + numx).addClass('categoria_selected');
        });

        $(".juguete").hover(
            function () {
                numz = $(this).attr("id")
                $(this).find("#hover" + numz).css({ 'display': 'block' });
            },
            function () {
                numz = $(this).attr("id")
                $(this).find("#hover" + numz).css({ 'display': 'none' });
            }
        );

        $(".juguete").click(function () {
            id = $(this).attr("id"); // id del juguete seleccionado
            var nombre = $("#n" + id).val(); // nombre del juguete seleccionado.
            var valor = $("#numRegalo").val();
            var clase = $(this).attr('class');
            if (clase == 'juguete seleccionado') {
                $('.' + id).remove();
                valor++;
                $("#numRegalo").attr('value', valor);
                $(this).removeClass('seleccionado');
            } else {
                if (valor <= 5) {
					$("#next6").fadeIn('slow');
				}
				if (valor > 0) {
					valorN = valor - 1;
					$("#numRegalo").attr('value', valorN);
					$(this).addClass('seleccionado');
					lista = '<li class="' + id + '">' + nombre + '</li>';
					$("#lista").append(lista);
				} else {
                    alert('Solo puedes seleccionar hasta un máximo de 5 juguetes.');
					//$("#juguetes").fadeOut('slow');
					// $("#ajaxToy").load("continua.php", { id: 'dato' }, function () {
						// $("#next6").fadeIn('slow');
						// //alert("recibidos los datos por ajax" + idEdo);
					// });
				}
            }
        });
    </script>

<?php mysql_close($conexion); ?>