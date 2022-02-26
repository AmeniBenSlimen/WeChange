<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<style>
    
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
nav  img{
  height: 90px;
    width: 150px;
    border-radius: 50%;
}
.search-bar {
  width: 90%;
  max-width: 400px;
  display: flex;
  align-items: center;
  border-radius: 60px;
  border-color: rgba(129, 96, 221);
  padding: 10px;
}
.search-bar input {
  background: transparent;
  flex: 1;
  border: 1px solid black;
  border-radius: 12px;
  padding: 5p;
  font-size: 20px;
  max-width: 150px;
 height:40px;
}
::placeholder {
  color: gray;
  font-size:15px;
}
.search-bar button {
  border: 0;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  margin-left:10px;
}

</style>
<section id="home">
    <!--navigation------------------------->
    <nav>
      
      <!--logo-->
      <a href="#home"><img src="images/logo.jpg"></a>
      <!--menu-->
      <div class="container">
    
    <form action="https://www.google.com/search" method="get"  class="search-bar" traget="_blank" style="margin-reight:60px">
      <input type="text"  placeholder="@lang('public.Rechercher')" name="q">
        <button type="submit"><i class="fas fa-search"></i></button>
        
    </form>

</div>

      <ul>
        <li><a href="#home" class="active">@lang('public.Acceuil')</a></li>
        <li><a href="#sobre">@lang('public.Organization')</a></li>
        <li><a href="#projetos">@lang('public.Articles')</a></li>
        <li><a href="#contato">@lang('public.Contact')</a></li>
        
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
    <div class="clearfix"></div>
  </section>