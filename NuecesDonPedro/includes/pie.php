<?php $ruta = $ruta ?? ''; ?>
<footer class="pie-pagina">
    <address>
        Avenida de las Nueces número 120,<br>
        Atlautla, Estado de México.
    </address>
    <p>Teléfono: 55 0000 0000</p>
    <p>
        <a href="<?= $ruta ?>ubicacion.php">Ubicación</a> |
        <a href="<?= $ruta ?>preguntas-frecuentes.php">Preguntas frecuentes</a>
    </p>
    <p>&copy; <?= date('Y') ?> Nueces Don Pedro.</p>
</footer>
</body>
</html>
