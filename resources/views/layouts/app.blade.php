<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GEL Group - Global Engineering & Logistics. Solutions intégrées en ingénierie, informatique et transport au Sénégal et au Canada.">
    <title>@yield('title', 'GEL Group - Global Engineering & Logistics')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/gelgroup.css') }}">
    @stack('styles')
</head>
<body>
    @include('partials.header')
    @include('partials.alerts')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('js/gelgroup.js') }}"></script>
    @stack('scripts')
</body>
</html>
