<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/telkomedika-logo.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite('resources/css/app.css')
    <title>E-Pakta TelkoMedika</title>
</head>

<body>
    <!-- Layouts -->
    <div class="layouts">
        @yield('home')
        @yield('DashboardAdmin')
    </div>
    <!-- Login Page -->
    @yield('login')
</body>

</html>