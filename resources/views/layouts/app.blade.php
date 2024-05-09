<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraMovie</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=advent-pro:200,300,400,500,600,700,800" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>


<body class="antialiased">

    @include('partials.header')

    <main class="bg-dark">
        @yield('content')
    </main>


    @include('partials.footer')

</body>

</html>
