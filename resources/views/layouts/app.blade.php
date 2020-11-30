<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">        
    <meta name="turbolinks-cache-control" content="no-cache">        
    <title>@yield("title")</title>
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />--}}
    @livewireStyles                    
    <link rel="stylesheet" href="{{ asset("css/app.css")}}">    
</head>
<body class="bg1">         
    @yield("content")            
    @livewireScripts
    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>