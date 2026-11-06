<?php
require __DIR__ . '/proteger.php';
require __DIR__ . '/../config/conexion.php';
$productos = $conexion->query('SELECT * FROM productos ORDER BY id DESC')->fetchAll();
$titulo = 'Administrar productos | Nueces Don Pedro';
$ruta = '../';
$pagina = 'admin';
include __DIR__ . '/../includes/encabezado.php';
?>
<main class="contenedor">
    <h2>Administrar productos</h2>
    <p>Sesión: <?= htmlspecialchars($_SESSION['usuario']) ?></p>
    <div class="barra-admin">
        <a class="boton" href="agregar.php">Agregar producto</a>
        <a class="boton" href="pedidos.php">Ver pedidos</a>
        <a class="boton" href="../logout.php">Cerrar sesión</a>
    </div>
    <div class="tabla-responsive">
        <table class="tabla-admin">
            <thead>
                <tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Existencia</th><th>Estado</th><th>Acciones</th></tr>
            </thead>
            <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr<?= $producto['activo'] ? '' : ' class="inactivo"' ?>>
                    <td><?= (int)$producto['id'] ?></td>
                    <td><?= htmlspecialchars($producto['nombre']) ?></td>
                    <td>$<?= number_format($producto['precio'], 2) ?></td>
                    <td><?= (int)$producto['existencia'] ?> kg</td>
                    <td><?= $producto['activo'] ? 'Activo' : 'Inactivo' ?></td>
                    <td>
                        <a href="editar.php?id=<?= (int)$producto['id'] ?>">Editar</a> |
                        <form action="eliminar.php" method="post" class="form-inline">
                            <input type="hidden" name="id" value="<?= (int)$producto['id'] ?>">
                            <button type="submit" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<?php include __DIR__ . '/../includes/pie.php'; ?>
