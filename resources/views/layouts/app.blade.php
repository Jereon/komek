<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap-reboot.min.css') }}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" media="screen" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" media="screen" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script> 
    <title>Макет сайта</title>
</head>
<body>
    <div id="wrapper" class="container-fluid">
        @include('parts.poster')
        @include('parts.header')
        @yield('content')
        @include('parts.footer')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>  
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>  
</body>
</html>

