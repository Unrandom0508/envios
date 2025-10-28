<?php
require "db.php";
$resultado = $conexion->query("SELECT * FROM envios");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Envíos</title>
</head>
<body>

<h2>Listado de Envíos</h2>
<a href="agregar.php">Agregar envío</a><br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Destinatario</th>
    <th>Dirección</th>
    <th>Descripción</th>
    <th>Acciones</th>
</tr>

<?php while($row = $resultado->fetch_assoc()): ?>
<tr>
    <td><?= $row["id"] ?></td>
    <td><?= $row["destinatario"] ?></td>
    <td><?= $row["direccion"] ?></td>
    <td><?= $row["descripcion"] ?></td>
    <td>
        <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
        |
        <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Eliminar?')">Eliminar</a>
    </td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>
