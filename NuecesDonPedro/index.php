<?php
require 'config/conexion.php';
$titulo = 'Inicio | Nueces Don Pedro';
$ruta = '';
$pagina = 'index';

$destacados = $conexion->query(
    'SELECT id, nombre, descripcion, precio, imagen
     FROM productos WHERE activo = 1 ORDER BY id LIMIT 3'
)->fetchAll();

include 'includes/encabezado.php';
?>
<section class="banner">
    <div class="banner-contenido">
        <h2>Nueces para celebrar momentos inolvidables</h2>
        <p>Cosechamos y seleccionamos nueces de calidad.</p>
        <a href="productos.php" class="boton">Ver productos</a>
    </div>
</section>

<main class="contenedor">
    <section class="productos">
        <h2>Productos destacados</h2>
        <div class="contenedor-tarjetas">
            <?php foreach ($destacados as $producto): ?>
            <article class="tarjeta">
                <img src="imagenes/<?= htmlspecialchars($producto['imagen'] ?: 'nuez-mixta.jpg') ?>"
                     alt="<?= htmlspecialchars($producto['nombre']) ?>">
                <h3><?= htmlspecialchars($producto['nombre']) ?></h3>
                <p><?= htmlspecialchars($producto['descripcion']) ?></p>
                <p class="precio">$<?= number_format($producto['precio'], 2) ?> por kg</p>
                <a href="pedidos.php?producto=<?= (int)$producto['id'] ?>" class="boton">Solicitar</a>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="distribucion">
        <section class="servicios">
            <h2>Proceso de producción</h2>
            <p>Realizamos el proceso desde el cuidado del nogal hasta el empaque.</p>
            <ul>
                <li>Cuidado del nogal</li>
                <li>Selección de la cosecha</li>
                <li>Secado natural</li>
                <li>Pelado y limpieza</li>
                <li>Entrega a domicilio</li>
            </ul>
        </section>

        <aside class="lateral">
            <h2>Horario</h2>
            <p>Lunes a viernes: 9:00 a 19:00 horas.</p>
            <p>Sábados: 9:00 a 16:00 horas.</p>
            <p>Domingos: 10:00 a 14:00 horas.</p>

            <h2>Disponibilidad</h2>
            <p>10 % de descuento en pedidos anticipados.</p>
        </aside>
    </div>
</main>
<?php include 'includes/pie.php'; ?>
