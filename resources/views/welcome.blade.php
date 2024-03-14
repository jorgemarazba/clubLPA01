<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>MagnoBilingue</title>
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/idioma.css') }}">      
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="resources/css/app.css">
    

    <style>
      .container {
          display: flex;
          justify-content: space-around;
          align-items: flex-end;
          flex-wrap: wrap;
          margin-top: 50px;
          padding:  3px;
          width: 78%;
          
      }
  </style>
  </head>
  <body>
    <aside class="sidebar">
      <div class="logo">
        <i class="fa fa-globe fa-4x fa-spin fa-3x fa-fw" aria-hidden="true"></i>
      </div>
      <ul class="links"> 
        <li>
          <span class="material-symbols-outlined"><i class="fa fa-language" aria-hidden="true"></i></span>
          <a href="{{ route('idiomas.index') }}">Idiomas</a>
        </li>
        <li>       
        <li>
          <span class="material-symbols-outlined"><i class="fa fa-registered" aria-hidden="true"></i></span>
          <a href="#">Registered</a>
        </li>
        <li class="logout-link">
          <span class="material-symbols-outlined">logout</span>
          <a href="#">Logout</a>
        </li>
      </ul>
    </aside>

    <div class="container">
      @for ($i = 1; $i <= 70; $i++)
          <div class="card" style="color: black; background-color: gray;">
              
              <img width="48%" height="48%" style="margin-left: 2rem; margin-bottom: 1px" src="https://img.icons8.com/color/48/test-account.png" alt="test-account"/>
              <div class="card-content">
                  <span></span>
                  <p>Users verified</p>
              </div>
          </div>
      @endfor
  </div>
  
  </body>
</html>

  



