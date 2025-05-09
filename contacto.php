<?php include("header.php"); ?>

<section class="contacto_form">
    <h1>Contacto</h1>
    <div>
        <form action="enviar_consulta.php" method="post" class="form">
        <label for="nombre">Nombre: </label>
        <input type="text" name ="nombre" class="contacto_input">

        <label for="apellido">Apellido: </label>
        <input type="text" name ="apellido" class="contacto_input">

        <label for="edad">Edad: </label>
        <input type="number" name ="edad" class="contacto_input">

        <label for="mensaje">Mensaje: </label>
        <textarea type="text" name ="mensaje" class="contacto_input" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar Mensaje" class="btn_enviar">


        </form>

        <?php 
        if (isset ($_GET['ok'])){

            echo "<h3>Mensaje enviado<h3>";
        }
        ?>
    </div>
</section>






<?php


print
    '<div class= "contacto">
    <h2> Dirección: <h3>Viejo Bueno 801, Bernal Oeste</h3> </h2>
    <h2> Numero de teléfono: <h3>4252-0366</h3 </h2>
    <h2> Numero de Whatsapp: <h3>+54 011 67920733</h3></h2>
</div>';



print '<h2 class= "servicios"> Contrata Nuestros Servicios </h2>'; ?>


<?php include("footer.php"); ?>