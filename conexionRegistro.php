<?php
$conexion = new mysqli("localhost", "root", "", "ProyetoWeb_Noche");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $ciudad = $_POST['ciudad'];

    $sql = "INSERT INTO Usuarios (nombre, correo, contrasena, telefono, sexo, ciudad)
            VALUES ('$nombre', '$correo', '$contrasena', '$telefono', '$sexo', '$ciudad')";

    if ($conexion->query($sql)) {
        echo "<p style='color:green;'>Registro guardado con exito.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conexion->error . "</p>";
    }
}

$conexion->set_charset("utf8mb4");
