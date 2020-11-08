<?php header('Content-Type: charset=utf-8'); ?>
<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel Photo Gallery</title>
    <link rel="stylesheet" href="/css/foundation.min.css">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

    <div class="off-canvas position-left reveal-for-large" id="fomenu" data-off-canvas data-position="left">
        <div class="row column">
        <h5>Main menu</h5>
        <ul class="vertical menu">
            <li><a href="/">Home Page</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Registration</a></li>
            <li><a href="/gallery/create">New Photo Gallery</a></li>
        </ul>
        </div>
    </div>

    @yield('content')
    
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/js/foundation.js"></script>
    <script src="/js/app.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>


    