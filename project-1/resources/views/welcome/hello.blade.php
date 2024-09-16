<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <h1>Rota hello</h1>

        <x-botoes.primario>Meu componente manual</x-botoes.primario>
        <x-botoes.secundario>Meu componente manual</x-botoes.secundario>
    </body>
</html>
