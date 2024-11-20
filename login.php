<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="styles.css">
    <title>Inicio de sesión</title>
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
            <li>
              <h3 class="waves-effect waves-light large-font"><a href="registro.php">Formulario</a></h3>
            </li>
            <li>
              <h3 class="waves-effect waves-light large-font"><a href="index.php">Inicio</a></h3>
            </li>
          </ul>
    
          <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </nav>

    <header class="center-align">
        <br>
        <br>
        <br>
        <br>
        <h3>Inicio de sesión</h3>
    </header>

    <div class="container">
        <div class="row">
            <form class="col s12" action="validarJefe.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nombre_jefe" type="text" name="nombre_jefe" required maxlength="100" placeholder="Ingresa tu Nombre">
                        <label for="nombre_jefe">Nombre de usuario</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="password_jefe" type="password" name="password_jefe" required maxlength="8" placeholder="Ingresa tu contraseña">
                        <label for="password_jefe">Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center-align">
                        <button type="submit" name="login_submit" class="btn waves-effect waves-light">Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>
