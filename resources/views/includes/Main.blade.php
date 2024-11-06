<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>E-Pakta TelkoMedika</title>
</head>

<body>
    <!-- Layouts -->
    <div class="container mx-auto">

    </div>
    <!-- Login Page -->
    @yield('login')
</body>

</html>