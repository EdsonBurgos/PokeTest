<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poke Test</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/pokemon/details.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<div class="jumbotron py-3 px-4 mb-5 bg-danger text-white">
    <h1 class="display-4">POKEDEX</h1>
    <p class="lead">Prueba de POKE API para cuentas claras</p>
</div>

@include('components.pokemon.details-modal')

<div class="container">

    <div class="row row-cols-sm-1 row-cols-md-4 row-cols-6">
        @foreach($pokemons['results'] as $id => $pokemon)
            @include('components.pokemon.details-card')
        @endforeach
    </div>
</div>
</body>
</html>