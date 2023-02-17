@props([
    'title' => '',
    'page' => '',
    'iconClass' => '',
    'subpage' => '',
    'mainClass1' => '',
    'mainClass2' => '',
])


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('assets/style/sidebar.css') }}">
</head>

<body>
    <x-dashboard.header />
</body>

</html>
