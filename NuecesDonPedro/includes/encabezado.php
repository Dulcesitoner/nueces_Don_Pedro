<?php
$ruta = $ruta ?? '';
$pagina = $pagina ?? '';
$enlaces = [
    'index'      => ['index.php', 'Inicio'],
    'historia'   => ['historia.php', 'Nuestra historia'],
    'productos'  => ['productos.php', 'Productos'],
    'proceso'    => ['proceso.php', 'Proceso'],
    'galeria'    => ['galeria.php', 'Galería'],
    'pedidos'    => ['pedidos.php', 'Pedidos'],
    'contacto'   => ['contacto.php', 'Contacto'],
    'admin'      => ['login.php', 'Administración'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo ?? 'Nueces Don Pedro') ?></title>
    <link rel="stylesheet" href="<?= $ruta ?>css/estilos.css">
</head>
<body>
<header class="encabezado">
    <h1>Nueces Don Pedro</h1>
    <p>Nueces para cada momento especial</p>
</header>
<nav class="menu">
    <ul>
        <?php foreach ($enlaces as $clave => [$archivo, $texto]): ?>
        <li><a href="<?= $ruta . $archivo ?>"<?= $clave === $pagina ? ' class="activo" aria-current="page"' : '' ?>><?= $texto ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
