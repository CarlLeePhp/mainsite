<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>About</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
        <div class="container">
          <a class="navbar-brand" href="#">MainSite</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://blog.carl-kunhui-developer.cyou" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}"  href="{{ url('about') }}">About</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>