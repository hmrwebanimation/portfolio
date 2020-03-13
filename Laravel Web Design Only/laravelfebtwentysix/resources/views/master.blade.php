<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="header">
        @include('header')
    </div>
    <div class="main-body">
        @yield('maintext')
    </div>
    <div class="footer">
        @include('footer')
    </div>

</body>
</html>
