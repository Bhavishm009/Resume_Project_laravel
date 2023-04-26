<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Importing bootstrap css from public folder --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    {{-- Importing fontAweosome css from public folder --}}
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    {{-- Importring CSS file --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- link google font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poltawski+Nowy:ital@0;1&display=swap" rel="stylesheet">
    <title>{{$title}}</title>
</head>
<body>
    <div class="container-fluid bg-dark">
 <div class="row">
    <div class="col-sm-2">
        @include('include.sidebar')
    </div>
    <div class="col-sm-10">
        {{$content}}
    </div>
 </div>
    </div>
 {{-- Importring bootstrap js  file from public folder --}}
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
{{-- Importring Fontaweosome js  file from public folder --}}
    <script src="{{asset('js/all.min.js')}}"></script>
</body>
</html>