<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Modalidades de titulación ICO - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Centrar contenido */
        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 60vh;
            margin: 0 auto;
            text-align: center;
        }

        /* Estilizar el formulario */
        form {
            background: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%;
        }

        h1 {
            margin-bottom: 30px;
        }

        /* Espaciado entre botones */
        .button-wrapper a {
            display: block;
            margin-top: 10px;
        }
    </style>
    <title>Eliminar Usuario</title>
    <br>
    <br>
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
    <!-- Contenido central -->
    <div class="content-wrapper">
        <h1>Eliminar Usuario</h1>
        <form method="POST" action="deleteUsuario.php">
            <div class="input-field">
                <input id="no_cuenta" type="text" name="no_cuenta" placeholder="Número de Cuenta" required />
            </div>
            <button class="btn red waves-effect waves-light" type="submit">Eliminar usuario</button>
        </form>
        <div class="button-wrapper">
            <a href="index.php" class="btn blue waves-effect waves-light">Volver al Inicio</a>
            <a href="verRegistro.php" class="btn blue waves-effect waves-light">Ver lista</a>
        </div>
    </div>
    <br>
    <br>
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
</body>

</html>
