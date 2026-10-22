<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-black">
    @include('layout.navbar')
    <div class="container mt-4 text-black">
        @yield('content')
    </div>
    @include('layout.footer')
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
