<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>Main</title>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style type="text/css">
        i{
            font-size: 50px;
        }
    </style>
</head>
<body class="vw-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="container m-0 p-0 shadow bg-white rounded h-50 w-50">
        <div class="container-sm h-25 d-flex justify-content-center align-items-center border-bottom border-primary border-2">
            <h1 class="text-center font-weight-bold">Library System</h1>
        </div>
        <div class="container d-flex flex-wrap p-5 justify-content-around gap-3">
            <a href="/login" class="btn btn-primary flex-fill"><div class=" flex-fill">Login</div></a>
            <a href="/register" class="btn btn-primary flex-fill"><div class=" flex-fill">Create Account</div></a>
        </div>
        <div class="container p-0 mt-4 pt-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="150 20 1140 200"><path fill="blue" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,69.3C384,32,480,32,576,58.7C672,85,768,139,864,170.7C960,203,1056,213,1152,229.3C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </div>
</body>
</html>