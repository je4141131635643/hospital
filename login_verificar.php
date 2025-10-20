<?php
include("../basededatos/conexion.php"); // tu conexión a la base de datos
session_start();

if (!isset($_SESSION['paciente_id'])) {
    header("Location: login_paciente.html");
    exit();
}

$paciente_id = $_SESSION['paciente_id'];
$paciente_nombre = $_SESSION['paciente_nombre'];
?>
