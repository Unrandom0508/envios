<?php
$conexion = new mysqli("mysql-flaw.alwaysdata.net", "flaw", "misifu123+", "flaw_envios");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
