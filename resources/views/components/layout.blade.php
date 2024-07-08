<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }} - Controle de Séries</title>
        <link rel="stylesheet" href="{{('css/app.css')}}">
    </head>
    <body>
    <div class="container"> 
        <h1>{{ $title }}</h1>
        {{ $slot }}
    </div>
    </body>
</html>

