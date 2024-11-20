<?php
// Se usa el requiere para incluir el archivo de conexión
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Generar el query
$consulta_sql = "SELECT * FROM persona";

// Ejecutar el query
$resultado = $conexion->query($consulta_sql);

// Retorna el número de filas del resultado. Si encuentra más de uno, imprimimos el resultado en nuestra tabla
$count = mysqli_num_rows($resultado);

echo "<table border='2'>
    <tr>
        <th>Número</th>
        <th>Nombre de Usuario</th>
        <th>No. de Cuenta</th>
        <th>Teléfono</th>
        <th>Correo Electrónico</th>
        <th>Contraseña</th>
        <th>Fecha de Registro</th>
    </tr>";

if ($count > 0) {
    // Aquí se pintarán los registros de la tabla `persona`
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['numero'] . "</td>";
        echo "<td>" . $row['nombre_usuario'] . "</td>";
        echo "<td>" . $row['no_cuenta'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['fecha_registro'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    // Mensaje si no hay registros
    echo "<h1 style='color:red'>Sin ningún registro</h1>";
}
?>
<h1><a href='EliminarUsuario.php'>Eliminar Usuario</a></h1>
<h1><a href='index.php'>Inicio</a></h1>
