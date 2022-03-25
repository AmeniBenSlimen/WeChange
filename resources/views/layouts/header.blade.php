<html>

<head>
  <meta charset="utf-8">
  <title>We Change Website</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <style>
    @charset "utf-8";

@import url
(
  "https://fonts.googleapis.com/css2? family = Poppins: ital, wght @ 0,100; 0,200; 0,300; 0,400; 0,500; 0,600; 0,700; 0,800; 0,900; 1,100; 1,200; 1.300; 1.400; 1.500; 1.600; 1.700; 1.800; 1.900 & display = trocar "
);

body {
  background-color: #f6f5f5;
  font-family: "poppins", sans-serif;
  margin: 0px;
  padding: 0px;
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
<body>
 
    <!--navigation------------------------->
    <nav>
      
      <!--logo-->
      <a href=""><img src="images/logo.jpg"></a>
      <!--menu-->
      <div class="container">
    

</div>

      <ul>
        <li><a href="{{route('index')}}" class="active">@lang('public.Acceuil')</a></li>
        <li><a href="#sobre">@lang('public.Organization')</a></li>
        <li><a href="{{route('viewArticle')}}">@lang('public.Articles')</a></li>
        <li><a href="{{route('equipe')}}">@lang('public.Equipe')</a></li>
        <li><a href="{{route('contact')}}">@lang('public.Contact')</a></li>
        
      </ul>
      <!--bars--------------->
      <div class="toggle"></div>
   
<div class="dropdown" style="margin-reight:20px">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
    @lang('public.Language') 
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="locale/en" class="dropdown-item" type="button">English<i><img src="images/eng.webp" style="height: 30px;width: 30px;margin-left: 9px;font-size: 14px"></i></a>
    <a href="locale/fr" class="dropdown-item" type="button">Français<i><img src="images/fr.webp" style="height:30px;width: 30px "></i> </a>
    <a href="locale/ar" class="dropdown-item" type="button">Arabe<i><img src="images/tun.png" style="height: 30px;width: 30px;margin-left: 20px"></i> </a>
    
  </div>
</div>
    </nav>


</body>