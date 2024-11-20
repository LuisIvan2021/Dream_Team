<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Recibir los datos del formulario
$nombre_jefe = $_POST['nombre_jefe'];
$password_jefe = $_POST['password_jefe'];

// Consulta para verificar si el jefe existe en la tabla 'usuario'
$sql = "SELECT * FROM usuario WHERE nombre_jefe = ? AND password_jefe = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ss", $nombre_jefe, $password_jefe);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    echo "<script>
            alert('Inicio de sesión exitoso. ¡Bienvenido $nombre_jefe!');
            window.location.href = 'verRegistro.php';
          </script>";
} else {
    // Credenciales incorrectas
    echo "<script>
            alert('Usuario o contraseña incorrectos. Intenta de nuevo.');
            window.location.href = 'login.php';
          </script>";
}
?>
