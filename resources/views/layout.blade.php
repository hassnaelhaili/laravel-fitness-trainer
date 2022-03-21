
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Gym Manager</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        @if(auth()->check())
            <a href="{{route('logout')}}">Logout</a>
        @endif
        @yield('content')
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>

</body>
</html>
