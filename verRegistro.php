<?php
// Incluir el archivo de conexión
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Generar el query
$consulta_sql = "SELECT * FROM persona";

// Ejecutar el query
$resultado = $conexion->query($consulta_sql);

// Retorna el número de filas del resultado
$count = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Personas</title>

  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

  <!-- Iconos Materialize -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Estilo adicional -->
  <style>
    body {
      padding: 20px;
    }
    h3 {
      color: #1e88e5;
    }
    table {
      margin-top: 20px;
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <nav class="grey" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">
        <img src="https://www.unam.mx/sites/default/files/images/unam.svg" style="height: 100px;">
        
        <img src="https://amei.mx/wp-content/uploads/2016/08/UNAM-FES-Aragon.png" style="height: 100px;">
        <img src="imagenes/ICO_logo.png" style="height: 100px;">
      </a>
      <ul class="right hide-on-med-and-down">
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="container">
    <h3 class="center-align">Lista de Personas</h3>
    <?php if ($count > 0): ?>
        <table class="highlight centered">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Nombre de Usuario</th>
                    <th>No. de Cuenta</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Contraseña</th>
                    <th>Fecha de Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['numero']) ?></td>
                        <td><?= htmlspecialchars($row['nombre_usuario']) ?></td>
                        <td><?= htmlspecialchars($row['no_cuenta']) ?></td>
                        <td><?= htmlspecialchars($row['telefono']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['password']) ?></td>
                        <td><?= htmlspecialchars($row['fecha_registro']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <h5 class="center-align red-text">Sin ningún registro</h5>
    <?php endif; ?>

    <div class="center-align" style="margin-top: 20px;">
        <a href="EliminarUsuario.php" class="btn red">Eliminar Usuario</a>
        <a href="index.php" class="btn blue">Inicio</a>
        <br>
        <br>
    </div>
  </div>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Footer -->
    <div id="footer-placeholder"></div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Cargar el contenido del archivo footer.html dentro del footer-placeholder
      fetch('footer.html')
        .then(response => response.text())
        .then(data => document.getElementById('footer-placeholder').innerHTML = data);
    });
  </script>

  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Inicializar elementos Materialize
      var elemsCollapsible = document.querySelectorAll('.collapsible');
      M.Collapsible.init(elemsCollapsible);
    });
  </script>
</body>
</html>


