<?php include("header.php"); ?>
<?php

print '<p class="parrafo-nosotros">Somos una empresa nacional con más de 40 años de trayectoria en el mercado farmacéutico, comprometida en brindar a través de nuestros colaboradores la más alta calidad en atención y servicio. Contamos en nuestros mostradores con un alto nivel de idoneidad y profesionalismo, stock permanente de medicamentos en cada una de nuestras sucursales, teniendo como eje conductor brindar soluciones a las necesidades de nuestros clientes.</p>';


print '<h2 class= "servicios"> Contrata Nuestros Servicios </h2>';

$premium = "Premium";
$duracion_premium = 12;
$arancel_premium = 30000;
$fecha_premium = "Al momento del pago";

$basico = "Básico";
$duracion_basico= 6;
$arancel_basico = 15000;
$fecha_basico = "Al momento del pago";

?>
<div class="contenido">
    <div class="premium">
        <h2 class="titulo_premium"><?php echo $premium; ?></h2>
        <ul>
            <li>Duración: <?php echo $duracion_premium, " meses"; ?></li>
            <li>Arancel: <?php echo "$", $arancel_premium; ?></li>
            <li>Fecha de inicio: <?php echo $fecha_premium; ?></li>
        </ul>
    </div>

    <div class="basico">
        <h2 class="titulo_basico"><?php echo $basico; ?></h2>
        <ul>
            <li>Duración: <?php echo $duracion, " meses"; ?></li>
            <li>Arancel: <?php echo "$", $arancel_basico; ?></li>
            <li>Fecha de inicio: <?php echo $fecha_basico; ?></li>
        </ul>
    </div>

    <?php $dolar = 1345 ?>;
    <?php $arancel_dolar_premium = $arancel_premium / $dolar ?>;
    <?php $arancel_dolar_basico = $arancel_basico / $dolar ?>



    <section class="totales_dolares">
        <h2>
            <ul>
                <li>Arancel premium en dolares: $ <?php echo round($arancel_dolar_premium, 2); ?></li>
                <li>Arancel basico en dolares: $ <?php echo round($arancel_dolar_basico, 2); ?></li>
            </ul>
        </h2>
    </section>
</div>

<p class="condiciones">El plan premium incluye hasta 15% de descuento en medicamentos, y 20% en perfumeria más delivery sin cargo</p>
<p class="condiciones_2">El plan básico incluye hasta 10% de descuento en medicamentos y delivery sin cargo</p>




<?php include("footer.php"); ?>




