<?php
require "db.php";

$id = $_GET["id"];
$envio = $conexion->query("SELECT * FROM envios WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $dest = $_POST["destinatario"];
    $dir = $_POST["direccion"];
    $desc = $_POST["descripcion"];

    $conexion->query("UPDATE envios SET destinatario='$dest', direccion='$dir', descripcion='$desc' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Editar envío</title></head>
<body>

<h2>Editar envío</h2>
<form method="post">
    Destinatario:<br>
    <input type="text" name="destinatario" value="<?= $envio['destinatario'] ?>" required><br><br>

    Dirección:<br>
    <input type="text" name="direccion" value="<?= $envio['direccion'] ?>" required><br><br>

    Descripción:<br>
    <textarea name="descripcion"><?= $envio['descripcion'] ?></textarea><br><br>

    <input type="submit" value="Actualizar">
</form>

</body>
</html>
