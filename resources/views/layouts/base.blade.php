<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title', 'Continut CRM')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="container">
        @include('partials.navbar')
        @yield('content')
    </div>
</body>
</html>
