<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title></title>
</head>
<body>
    @include('inc/nav')
    <div class="container">
    @include('inc/messeges')
    @yield('content')
    </div>
</body>
</html>