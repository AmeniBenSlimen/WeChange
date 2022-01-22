<!DOCTYPE html>
<html>
<head>
	<title>Espace Administrateur..</title>
	      <style>
           body{
              margin: 0px;
              padding: 0px;
              font-family: 'Montserrat', sans-serif;
              background-image: url("images/img1.jpg");
              background-size: 100% 100%;
              height: 625px;
               }
nav{
    display:flex;
    justify-content: center;
    align-items: center;
    
}
nav h1{
    color: #717171;
    font-family: 'Playfair Display', serif;
    font-size: 30px;
}
nav .navv{
    margin-top: 3px;
    margin-left: 300px;
}
nav .navv a{
    text-decoration: none;
    color: #000;
    margin-right: 10px;
    border-bottom: 1px solid #000;
    padding-bottom: 5px;
}
nav img{
    height: 110px;
    width: 110px;
    border-radius: 50%;
    margin-right: 700px;
}
</style>
</head>
<body>

     <nav>
     	<img src="images/logo.jpg">
              @if (Route::has('login'))
                <div class="navv">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </nav>
</body>
</html>