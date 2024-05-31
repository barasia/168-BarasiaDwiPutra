<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/main.js') }}" defer></script>
</head>
<body>
    @include('partials.header')

    <div class="content">
        @yield('content')
    </div>

    @include('partials.footer')

    @yield('modal')
    @yield('js')
</body>
</html>
