<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Aplicativo') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        @include('layouts.elements.nav')
    </header>

    <main>
        <section class="container">
            @if (session('message'))
                @component('layouts.elements.alert')
                    {{ session('message') }}
                @endcomponent
            @endif

            {{ $slot }}
        </section>
    </main>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
