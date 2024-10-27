<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="styles.css">
    <title>Registro en mi DB</title>
</head>
<body>

    <nav class="grey" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo">
            <img src="https://www.unam.mx/sites/default/files/images/unam.svg" style="height: 100px;">
            
            <img src="https://amei.mx/wp-content/uploads/2016/08/UNAM-FES-Aragon.png" style="height: 100px;">
            <img src="C:\Users\Usuario\Documents\Tareas\redes_Web\proyecto\Dream_Team\imagenes\ICO_logo.png" style="height: 100px;">
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <h3 class="waves-effect waves-light large-font"><a href="">Iniciar Sesión</a></h3>
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
        <h3>Registro en mi DB</h3>
    </header>

    <div class="container">
        <div class="row">
            <form class="col s12" action="enviarRegistro.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nombre_usuario" type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                        <label for="nombre_usuario">Nombre de usuario</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="no_cuenta" type="text" name="no_cuenta" required maxlength="100" placeholder="Ingresa tu numero de cuenta">
                        <label for="no_cuenta">Numero de cuenta</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="telefono" type="text" name="telefono" required maxlength="100" placeholder="Ingresa tu telefono">
                        <label for="telefono">Telefono</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                        <label for="email">Correo</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="password" type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                        <label for="password">Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center-align">
                        <button type="submit" name="submit" class="btn waves-effect waves-light">Enviar registro</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container center-align">
        <a href='Registro.php' class="btn-flat">Nuevo registro</a>
        <a href='verRegistro.php' class="btn-flat">Ver registro</a>
    </div>

    <footer class="page-footer orange">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Company Bio</h5>
              <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
    
    
            </div>
            <div class="col l3 s12">
              <h5 class="white-text">Settings</h5>
              <ul>
                <li><a class="white-text" href="#!">Link 1</a></li>
                
              </ul>
            </div>
            <div class="col l3 s12">
              <h5 class="white-text">Connect</h5>
              <ul>
                <li><a class="white-text" href="#!">https://aragon.unam.mx/fes-aragon/?authuser=1#!/oferta-academica/licenciaturas/computacion</a></li>
               
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
          </div>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>
