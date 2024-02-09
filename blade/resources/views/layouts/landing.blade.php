<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('styles')
    <title>
        @yield('title')
    </title>
</head>
<body>
    @include('layouts._partials.manu')
    @yield('content')
    @include('layouts._partials.footer')

    
    @yield('scripts')
</body>
</html>