<!DOCTYPE html>
<html>
<head>
    <title>Página secundaria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidenav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tarjeta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estructraycontent.css') }}">
</head>

<body>

<div class="main">

    <x-header />

    <div class="content">
        @yield('contenido')
    </div>

    <x-footer />

</div>

</body>
</html>