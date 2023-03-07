<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.css') }}">
    <title>Crud Basico | {{ $titulo }}</title>
</head>
<body>
    @yield('contenido')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>