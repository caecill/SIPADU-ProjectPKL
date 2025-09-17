<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','SIPADU')</title>
  <link rel="stylesheet" href="{{ asset('style/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style/beranda.css') }}">
  <link rel="stylesheet" href="{{ asset('style/arsip.css') }}">


</head>
<body>
  <div class="wrapper">
    @include('partials.sidebar')

    <div class="content">
      @yield('content')
    </div>
  </div>
</body>
</html>
