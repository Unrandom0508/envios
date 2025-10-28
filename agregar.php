<?php
require "db.php";

if ($_POST) {
    $dest = $_POST["destinatario"];
    $dir = $_POST["direccion"];
    $desc = $_POST["descripcion"];

    $conexion->query("INSERT INTO envios (destinatario, direccion, descripcion) VALUES ('$dest', '$dir', '$desc')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Agregar envío</title></head>
<body>

<h2>Agregar envío</h2>
<form method="post">
    Destinatario:<br>
    <input type="text" name="destinatario" required><br><br>

    Dirección:<br>
    <input type="text" name="direccion" required><br><br>

    Descripción:<br>
    <textarea name="descripcion"></textarea><br><br>

    <input type="submit" value="Guardar">
</form>

</body>
</html>
