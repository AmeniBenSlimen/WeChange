<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Espace Administrateur</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        nav img{
    height: 110px;
    width: 110px;
    border-radius: 50%;
    margin-right: 700px;
}
body{
    background-color: white;
}
ul {
  list-style: none;
}

a {
  text-decoration: none;
}


nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 60px;
  background-color: #ffffff;
  box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
  padding: 0px 5%;
}
nav ul {
  display: flex;
}
.toggle {
  display: none;
}

nav ul li a {
  margin: 30px;
  font-family: myriad pro regular;
  color: #505050;
  font-size: 18px;
  font-weight: 700;
}
.logo {
  font-family: RoadTest;
  color: #000000;
  font-size: 22px;
  font-weight: 1000;
}
.active {
  color: #2d2a2a;
  font-weight: bold;
}

.clearfix {
  clear: both;
}

    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <ul>
        <li><a href="{{route('index')}}" class="active">Acceuil</a></li>
        <li><a href="{{route('addArticle')}}" class="active">Publier Article</a></li>
        <li><a href="{{route('AllArticles')}}">Tous les Articles</a></li>
        <li><a href="{{route('addMembre')}}">Publier Membre</a></li>
        <li><a href="{{route('Allmembre')}}">Tous les Membres</a></li>
   
      </ul>
                <div>

</div>
            
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                  

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
         
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
