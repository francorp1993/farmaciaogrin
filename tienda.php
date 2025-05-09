<?php include("header.php"); ?>


<section class='tienda_contenedor'>
    <h2>Productos</h2>
    <ul>
        <li class="producto">
            <a href="tienda.php?producto=dm">Dermatología</a>
        </li>
        <li class="producto">
            <a href="tienda.php?producto=hg">Higiene</a>
        </li>
        <li class="producto">
            <a href="tienda.php?producto=sd">Salud</a>
        </li>
    </ul>

    <?php

    if (isset($_GET['producto'])) {


        switch ($_GET['producto']) {
            case "dm":
                $nombre = 'Dermaglos';
                $accion = 'Sirve para proteger, hidratar y regenerar la piel.';
                $precio = 4000;
                $img = './img/dermaglos.jpg';
                break;
            case "hg":
                $nombre = 'Shampoo';
                $accion = 'Para el cuidado capilar.';
                $precio = 3000;
                $img = './img/shampoo.jpg';
                break;
            case "sd":
                $nombre = 'Termómetro';
                $accion = 'Para medir la temperatura.';
                $precio = 10000;
                $img = './img/termometro.jpg';
                break;
            default:
                echo "Medicamentos con receta solo en local";
        }

    ?>

        <div class='producto_descripcion'>

        <div class="contenedor_img">
                <img class="img" src="<?php echo $img; ?>" alt="<?php echo $nombre; ?>" >

            </div>
            <h2>
                <?php
                echo $nombre
                ?>
            </h2>
            <p>
                <?php
                echo $accion
                ?>
            </p>
            <h3>
                <?php
                echo '$ ' . $precio
                ?>
            </h3>


        </div>
    <?php } ?>

</section>









<?php include("footer.php"); ?>