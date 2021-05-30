<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('aset/bootstrap/css/bootstrap.min.css') }}">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>@yield('title') | UTS Web Service</title>
    <style>
        html, body{
          font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="mt-5"><b>@yield('judul')</b></h3>
        <hr width="300px" align="left">
        @yield('konten')
    </div>
    <script src="{{ asset('aset/jquery/jquery-3.6.0.min.js') }}"></script>
</body>
</html>
