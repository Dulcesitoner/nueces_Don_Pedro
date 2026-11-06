<?php
$titulo = 'Contacto | Nueces Don Pedro';
$ruta = '';
$pagina = 'contacto';
include 'includes/encabezado.php';
?>
<main class="contenedor">
    <div class="pagina">
        <h2>Contacto</h2>
        <p>Escríbenos y responderemos lo antes posible.</p>
    </div>

    <form action="gracias.php" method="get">
        <fieldset>
            <legend>Envíanos un mensaje</legend>

            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
        </fieldset>
        <button type="submit">Enviar mensaje</button>
    </form>
</main>
<?php include 'includes/pie.php'; ?>
