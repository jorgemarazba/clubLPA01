<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="resources/css/app.css'">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/idioma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estudiantes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tecnicas.css') }}"> 
          
    

    @stack('stilos')
    

    
</head>

<body>

    <header class="container">
        @include('layouts.navbar')

    </header>

    <main class="container" style="margin-top: 4rem; margin-right: 80px;">
        @yield('content')
    </main>

    <footer>
        @yield('footer')
    </footer>


    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    @stack('scriptsjs')
</body>

</html>
