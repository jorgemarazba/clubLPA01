
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiomas</title>
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="app.css">
  </head>
  <body>
    <aside class="sidebar">
      <div class="logo">
        <i class="fa fa-globe fa-4x" aria-hidden="true"></i>
      </div>
      <ul class="links">
        <li>
          <span class="material-symbols-outlined"><i class="fa fa-television" aria-hidden="true"></i></span>
          <a href="#">dashboard</a>
        </li>
        <li>
          <span class="material-symbols-outlined"><i class="fa fa-language" aria-hidden="true"></i></span>
          <a href="{{ route('idiomas.index') }}">Idiomas</a>
        </li>
        <li>
          <span class="material-symbols-outlined"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></span>
          <a href="{{ route('tecnicas.index') }}">Tecnicas</a>
        </li>
        <li>
          <span class="material-symbols-outlined"><i class="fa fa-users" aria-hidden="true"></i></span>
          <a href="{{ route('estudiantes.index') }}">Estudiantes</a>
        </li>
        <li>
          <span class="material-symbols-outlined"><i class="fa fa-envelope" aria-hidden="true"></i></span>
          <a href="#">Solicitudes </a>
        </li>
        <li>
          <span class="material-symbols-outlined"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
          <a href="#">I/T</a>
        </li>
        <li>
          <span class="material-symbols-outlined"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
          <a href="{{asset('')}}">T/H</a>
        </li>
        
        <hr>
        <h4>Cuentas</h4>
        
        <li>
          <span class="material-symbols-outlined">mail</span>
          <a href="#">Message</a>
        </li>
        <li>
          <span class="material-symbols-outlined">settings</span>
          <a href="#">Settings</a>
        </li>
        <li class="logout-link">
          <span class="material-symbols-outlined">logout</span>
          <a href="#">Logout</a>
        </li>
      </ul>
    </aside>
  </body>
</html>

  



