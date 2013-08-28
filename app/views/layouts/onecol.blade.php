<!doctype html>
<html lang="en" class="onecol">
<head>
    <meta charset="UTF-8">
    <title>AT Casts</title>
    @section('css')
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    @show
</head>
<body>
    @include('layouts.sections.topnav')
    <div class="container">
        <div class="main">
            @yield('content')
        </div>
    </div>
</body>
</html>
