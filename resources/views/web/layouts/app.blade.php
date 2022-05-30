<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Limagas</title>
</head>
<body>

    <div class="app">
        @include('web.layouts.menu')
        @yield('contenido')
        @include('web.layouts.footer')
    </div>

    @stack('scripts')
    
</body>
</html>