<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel lesson</title>
    <link rel="stylesheet" href="././public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../../public/css/bootstrap.min.css.map">

    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href = {{ asset("public/css/app.css") }} rel="stylesheet" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
</head>
<body>
    @if (Session::has('success'))
        <div style="background-color:green; color:yellow">
            {{Session::get('success')}}
        </div>
        
    
        
    @endif
    <h1>This is the Header!</h1>
    @yield('content')

    <script rel="stylesheet" src="../../public/js/bootstrap.js" ></script>
    <script rel="stylesheet" src="../../public/js/bootstrap.js.map" ></script>
    <script rel="stylesheet" src="../public/js/bootstrap.min.js" ></script>
</body>
</html>