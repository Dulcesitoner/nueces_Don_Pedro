<?php
$titulo = 'Galería | Nueces Don Pedro';
$ruta = '';
$pagina = 'galeria';
include 'includes/encabezado.php';
?>
<main class="contenedor">
    <div class="pagina">
        <h2>Galería</h2>
        <div class="galeria">
            <figure>
                <img src="imagenes/huerta.jpg" alt="Huerta de nogales">
                <figcaption>Nuestra huerta</figcaption>
            </figure>
            <figure>
                <img src="imagenes/nuez-con-cascara.jpg" alt="Nuez con cáscara">
                <figcaption>Nuez con cáscara</figcaption>
            </figure>
            <figure>
                <img src="imagenes/nuez-pelada.jpg" alt="Nuez pelada">
                <figcaption>Nuez pelada</figcaption>
            </figure>
            <figure>
                <img src="imagenes/nuez-seleccionada.jpg" alt="Nuez seleccionada">
                <figcaption>Nuez seleccionada</figcaption>
            </figure>
        </div>
    </div>
</main>
<?php include 'includes/pie.php'; ?>
