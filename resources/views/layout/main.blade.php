<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document @yield('title', 'Home')</title>
    <style>
        .my-nav svg {
            width: 20px;
        }
    </style>
</head>
<body>
    <h1>Worker App</h1>
    @yield('content')

    @section('footerScripts')
        <script>console.log('layout')</script>
    @show
</body>
</html>
