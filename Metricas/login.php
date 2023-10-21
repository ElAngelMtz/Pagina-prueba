<?php
session_start();

$servidor = "localhost";
$usuario = "tu_usuario";
$contrasena = "tu_contraseña";
$base_de_datos = "MiApp";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {
    $row = $resultado->fetch_assoc();
    if (password_verify($contrasena, $row['contrasena'])) {
        echo "Inicio de sesión exitoso";
        $_SESSION['usuario_id'] = $row['id']; // Guardar la información del usuario en una sesión
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

$conexion->close();
?>
