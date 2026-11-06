<?php
require __DIR__ . '/proteger.php';
require __DIR__ . '/../config/conexion.php';
$sql = 'SELECT p.id, p.cliente, p.telefono, p.cantidad, p.fecha, p.estado,
               pr.nombre AS producto
        FROM pedidos p INNER JOIN productos pr ON p.producto_id = pr.id
        ORDER BY p.fecha DESC';
$pedidos = $conexion->query($sql)->fetchAll();
$titulo = 'Pedidos recibidos | Nueces Don Pedro';
$ruta = '../';
$pagina = 'admin';
include __DIR__ . '/../includes/encabezado.php';
?>
<main class="contenedor">
    <h2>Pedidos recibidos</h2>
    <div class="barra-admin">
        <a class="boton" href="productos.php">Administrar productos</a>
        <a class="boton" href="../logout.php">Cerrar sesión</a>
    </div>
    <div class="tabla-responsive">
        <table class="tabla-admin">
            <thead>
                <tr><th>Cliente</th><th>Producto</th><th>Cantidad</th><th>Teléfono</th><th>Fecha</th><th>Estado</th></tr>
            </thead>
            <tbody>
            <?php foreach ($pedidos as $pedido): ?>
                <tr>
                    <td><?= htmlspecialchars($pedido['cliente']) ?></td>
                    <td><?= htmlspecialchars($pedido['producto']) ?></td>
                    <td><?= (int)$pedido['cantidad'] ?> kg</td>
                    <td><?= htmlspecialchars($pedido['telefono']) ?></td>
                    <td><?= htmlspecialchars($pedido['fecha']) ?></td>
                    <td><?= htmlspecialchars($pedido['estado']) ?></td>
                </tr>
            <?php endforeach; ?>
            <?php if (!$pedidos): ?>
                <tr><td colspan="6">Todavía no hay pedidos.</td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>
<?php include __DIR__ . '/../includes/pie.php'; ?>
