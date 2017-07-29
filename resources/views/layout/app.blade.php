<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/bootstrap.js"></script>    
</head>
<body>
    <div class="container">
        <div class="row">
            @section('body')
                @show
        </div>
    </div>
</body>
</html>
