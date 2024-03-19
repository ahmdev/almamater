<?php

include 'database.php';

// Obtener el ID del formulario
$id = $_POST['id'];

// Conectar a la base de datos
$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

// Consulta SQL
$sql = "SELECT * FROM validacion WHERE id = '$id'";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

// Validar si se encontró un registro
if (mysqli_num_rows($resultado) > 0) {

    // Mostrar los datos del registro
    $fila = mysqli_fetch_assoc($resultado);
    echo "<p>Nombres: " . $fila['nombres'] . "</p>";
    echo "<p>Apellidos: " . $fila['apellidos'] . "</p>";
    echo "<p>Cédula: " . $fila['cedula'] . "</p>";
    echo "<p>Curso: " . $fila['curso'] . "</p>";
    echo "<p>Horas: " . $fila['horas'] . "</p>";
    echo "<p>Fecha: " . $fila['fecha'] . "</p>";

} else {

    // No se encontró un registro con el ID
    echo "<p>No se encontró un registro con el ID $id.</p>";

}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

?>
