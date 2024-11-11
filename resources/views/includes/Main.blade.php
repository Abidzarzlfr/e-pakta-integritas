<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/telkomedika-logo.png') }}">
    @vite('resources/css/app.css')
    <title>E-Pakta TelkoMedika</title>
</head>

<body>
    <!-- Layouts -->
    <div class="layouts">
        @yield('home')
    </div>
    <!-- Login Page -->
    @yield('login')
</body>

</html>
