<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">


    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="" width="100" height="60" class="d-inline-block align-text-top">
                Equipe Pokemon
              </a>    
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Os mais populares</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/register">Cadastra-se</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Objetivo</a>
                  </li>
                  
                </ul>
              </div>
              
            </div>
            
          </nav>
          
          <main>
            <div class="container-fluid"> 
              <div class="row">
                @if (session('msg'))
                <h2 class="msg">{{session('msg')}}</h2>
                @endif
                @yield('content')

              </div>

            </div>
          </main>
    </body>
</html>
