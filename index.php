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
          <h3 class="waves-effect waves-light large-font"><a href="">Iniciar Sesión</a></h3>
        </li>
        <li>
          <h3 class="waves-effect waves-light large-font"><a href="Registro.php">Formulario</a></h3>
        </li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h2 class="header center blue-text">Modalidades de titulación para los alumnos de ICO en la FES Aragón</h2>
    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.collapsible');
                var instances = M.Collapsible.init(elems);
              });
            </script>
            <h5 class="center">Con trabajo escrito y réplica oral</h5>
            <ul class="collapsible">
              <li>
                <div class="collapsible-header">
                  <i class="material-icons">expand_more</i>
                  Información
                  </div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                  <a id="info-button-1" class="waves-effect waves-light btn-flat small-font" style="display: none;">
                    <i class="material-icons left">add_circle_outline</i>Más Información
                  </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">arrow_downward</i></h2>
            <h5 class="center">Con trabajo escrito, sin réplica oral</h5>
            <ul class="collapsible">
              <li>
                <div class="collapsible-header">
                  <i class="material-icons">expand_more</i>
                  Información
                  </div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                  <a id="info-button-2" class="waves-effect waves-light btn-flat small-font" style="display: none;">
                    <i class="material-icons left">add_circle_outline</i>Más Información
                  </a>
              </li>
            </ul>
          </div>
        </div>
        

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Sin trabajo escrito</h5>
            <ul class="collapsible">
              <li>
                <div class="collapsible-header">
                  <i class="material-icons">expand_more</i>
                  Información
                  </div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                  <a id="info-button-3" class="waves-effect waves-light btn-flat small-font" style="display: none;">
                    <i class="material-icons left">add_circle_outline</i>Más Información
                  </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <div id="footer-placeholder"></div>
  <script>
    // Cargar el contenido del archivo footer.html dentro del footer-placeholder
    fetch('footer.html')
      .then(response => response.text())
      .then(data => document.getElementById('footer-placeholder').innerHTML = data);
  </script>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Inicializar los elementos 'collapsible'
      var elems = document.querySelectorAll('.collapsible');
      M.Collapsible.init(elems);

      // Obtener todos los botones
      var buttons = document.querySelectorAll('[id^="info-button-"]');
      var headers = document.querySelectorAll('.collapsible-header');

      headers.forEach(function(header, index) {
        header.addEventListener('click', function() {
          var body = header.nextElementSibling;
          if (body.style.display === 'block') {
            buttons[index].style.display = 'none'; // Ocultar el botón
          } else {
           buttons[index].style.display = 'block'; // Mostrar el botón
          }
        });
      });

      // Asignar eventos de clic a cada botón para redirigir a su URL correspondiente
      document.getElementById("info-button-1").addEventListener('click', function() {
        window.location.href = "escritoYReplica.html"; // URL de destino para la primera sección
      });

      document.getElementById("info-button-2").addEventListener('click', function() {
        window.location.href = "escritoSinReplica.html"; // URL de destino para la segunda sección
      });

      document.getElementById("info-button-3").addEventListener('click', function() {
        window.location.href = "sinEscrito.html"; // URL de destino para la tercera sección
     });
    });
</script>
</body>
</html>

