<?php
$servidor = 'localhost';
$base = 'nueces_don_pedro';
$usuario = 'root';
$clave = '12345678';

try {
    $conexion = new PDO(
        "mysql:host=$servidor;dbname=$base;charset=utf8mb4",
        $usuario,
        $clave
    );
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    exit('No fue posible conectar con la base de datos.');
}
?>
