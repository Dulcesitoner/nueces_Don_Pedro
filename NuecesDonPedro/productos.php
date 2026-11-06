<?php
require 'config/conexion.php';
$titulo = 'Productos | Nueces Don Pedro';
$ruta = '';
$pagina = 'productos';

$consulta = $conexion->prepare(
    'SELECT id, nombre, descripcion, precio, existencia, imagen
     FROM productos WHERE activo = 1 ORDER BY nombre'
);
$consulta->execute();
$productos = $consulta->fetchAll();

include 'includes/encabezado.php';
?>
<main class="contenedor">
    <h2>Productos disponibles</h2>
    <section class="contenedor-tarjetas">
        <?php foreach ($productos as $producto): ?>
        <article class="tarjeta">
            <img src="imagenes/<?= htmlspecialchars($producto['imagen'] ?: 'nuez-mixta.jpg') ?>"
                 alt="<?= htmlspecialchars($producto['nombre']) ?>">
            <h3><?= htmlspecialchars($producto['nombre']) ?></h3>
            <p><?= htmlspecialchars($producto['descripcion']) ?></p>
            <p class="precio">$<?= number_format($producto['precio'], 2) ?> por kg</p>
            <p>Existencia: <?= (int)$producto['existencia'] ?> kg</p>
            <a class="boton" href="pedidos.php?producto=<?= (int)$producto['id'] ?>">Solicitar</a>
        </article>
        <?php endforeach; ?>
    </section>
</main>
<?php include 'includes/pie.php'; ?>
