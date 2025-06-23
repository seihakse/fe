<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') | FE Engineering Day</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>