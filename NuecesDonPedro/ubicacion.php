<?php
$titulo = 'Ubicación | Nueces Don Pedro';
$ruta = '';
$pagina = 'ubicacion';
include 'includes/encabezado.php';
?>
<main class="contenedor">
    <div class="pagina">
        <h2>Ubicación</h2>
        <div class="distribucion">
            <section class="bloque">
                <h3>Cómo llegar</h3>
                <address>
                    Avenida de las Nueces número 120,<br>
                    Atlautla, Estado de México.
                </address>
                <p>Teléfono: 55 0000 0000</p>
            </section>

            <aside class="lateral">
                <h3>Horario de atención</h3>
                <table class="tabla-horario">
                    <tr><th>Lunes a viernes</th><td>9:00 a 19:00</td></tr>
                    <tr><th>Sábados</th><td>9:00 a 16:00</td></tr>
                    <tr><th>Domingos</th><td>10:00 a 14:00</td></tr>
                </table>
            </aside>
        </div>
    </div>
</main>
<?php include 'includes/pie.php'; ?>
