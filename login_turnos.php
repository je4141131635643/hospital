<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Paciente | Hospital San Martín</title>
    <link rel="stylesheet" href="../css/paciente.css">
</head>
<body>
    <h2>Bienvenido, <?php echo $paciente_nombre; ?></h2>
    <h3>Tus turnos:</h3>

    <?php if(mysqli_num_rows($result) > 0): ?>
        <table border="1" cellpadding="10">
            <tr>
                <th>Fecha y Hora</th>
                <th>Doctor</th>
                <th>Estado</th>
                <th>Descripción</th>
            </tr>
            <?php while($turno = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $turno['fecha_hora']; ?></td>
                <td><?php echo $turno['doctor_nombre']; ?></td>
                <td><?php echo $turno['estado']; ?></td>
                <td><?php echo $turno['descripcion']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No tienes turnos asignados.</p>
    <?php endif; ?>

    <br>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
