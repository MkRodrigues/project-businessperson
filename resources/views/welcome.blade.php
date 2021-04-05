<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ponteon - Soluções Digitais Integradas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        .space {
            height: 100vh;
            padding-top: 100px;
        }

        .register-img {
            position: absolute;
            right: 150px;
            top: 50px;
            width: 13%;
        }

        .pencil-img {
            width: 10%;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            top: 85vh;
            left: 0;
            right: 0;
        }

    </style>

</head>

<body class="bg-light">
    @yield('content')
</body>

</html>
