<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación Laravel')</title>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} 

</head>
<body>
    <div class="container">
        @yield('content')  </div>

    <footer>
        </footer>
</body>
</html>