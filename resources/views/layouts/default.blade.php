<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'YoungWebApp') -- For Young 进阶学习Laravel</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')

<div class="container">
  <div class="col-md-offset-1 col-md-10">
    @yield('content')
    @include('layouts._footer')
  </div>
</div>
</body>
</html>