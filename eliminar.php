<?php
require "db.php";

$id = $_GET["id"];
$conexion->query("DELETE FROM envios WHERE id=$id");

header("Location: index.php");
