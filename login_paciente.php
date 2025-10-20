<?php
include("../basededatos/conexion.php"); 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = trim($_POST['dni']);

    if (empty($dni)) {
        echo "<script>alert('Por favor, ingrese su DNI.'); window.location='login_paciente.html';</script>";
        exit();
    }

    $query = "SELECT * FROM usuarios WHERE dni = '$dni' AND tipo = 'paciente'";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) > 0) {
        $paciente = mysqli_fetch_assoc($resultado);
        $_SESSION['paciente_id'] = $paciente['id'];
        $_SESSION['paciente_nombre'] = $paciente['nombre'];
        header("Location: panel_paciente.php");
        exit();
    } else {
        echo "<script>alert('DNI no encontrado o no registrado como paciente.'); window.location='login_paciente.html';</script>";
    }
}
?>
