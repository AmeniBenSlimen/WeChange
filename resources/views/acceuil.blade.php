<html>
    <head>
    <meta charset="utf-8">
  <title>We Change Website</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <style>
            
:root {
  --nav-shad: rgba(0, 0, 0, 0.6);
  --btn-color: #ff2291;
}

* {
  box-sizing: border-box;
}
body {
  height: 50vh;
  width: 100%;
  margin: 0;
  padding: 0;
}


label {
  display: none;
  cursor: pointer;
}
.im.im-code {
  margin: 0;
  padding: 0;
  color: white;
  font-size: 30px;
  margin-left: 30px;
  cursor: pointer;
}

.im.im-code:hover {
  color: var(--btn-color);
}

#checkbox {
  display: none;
}

.menu {
  list-style: none;
  margin-left: auto;
  margin-right: 20px;
  display: flex;
  flex-direction: row;
  gap: 20px;
}

nav ul li a {
  text-decoration: none;
  color: white;
  font-family: poppins;
}

nav ul li a:hover {
  border-bottom: solid var(--btn-color);
  padding: 1px 0;
  animation: border-animation 1s infinite ease-in-out;
  animation-direction: alternate-reverse;
}

@keyframes border-animation {
  0% 100% {
    border-width: 2px;
  }
}

.header {
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  margin: 0;
  padding: 0;
  z-index: 2;
}

.header h1 {
  color: white;
  background-color: rgba(0, 0, 0, 0.6);
  padding: 20px 40px;
  border-radius: 10px;
}

.header p {
  font-size: 15px;
  font-family: poppins;
  color: white;
  text-align: center;
  width: 45%;
}

.header button {
  background-color: var(--btn-color);
  border: unset;
  width: 15%;
  height: 30px;
  border-radius: 5px;
  box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.5);
  font-weight: bold;
  color: white;
  cursor: pointer;
}

.header button:active {
  transform: scale(1.1);
}

.slider {
  overflow: hidden;
  position: relative;
}
.slider figure {
  position: relative;
  height: 100%;
  width: 500%;
  margin: 0;
  left: 0;
  animation: slider 10s infinite ease-in-out;
}

.slider figure img {
  width: 20%;
  float: left;
  height: 90vh;
  background-size: cover;
  background-position: center;
}

@keyframes slider {
  0% {
    left: 0;
  }

  20% {
    left: 0;
  }

  25% {
    left: -100%;
  }

  45% {
    left: -100%;
  }

  50% {
    left: -200%;
  }
  70% {
    left: -200%;
  }

  75% {
    left: -300%;
  }

  90% {
    left: -300%;
  }

  100% {
    left: -400%;
  }
}

@media only screen and (max-width: 600px) {
  .menu {
    display: none;
  }
  #menuicon {
    display: block;
    color: white;
    margin-left: auto;
    margin-right: 30px;
  }
  #menuicon:hover {
    color: var(--btn-color);
  }

  #checkbox:checked + .menu {
    height: 60px;
    width: 100%;
    position: absolute;
    margin: auto;
    padding: 0;
    top: 60px;
    display: grid;
    grid-template-columns: repeat(4, auto);
    column-gap: 20px;
    align-items: center;
    justify-content: center;
    background-color: var(--nav-shad);
  }

  .menu li {
    margin: 0;
    padding: 0;
  }

  .menu li a {
    font-size: 14px;
  }

  .header h1 {
    font-size: 35px;
    padding: 6px 12px;
  }
  .header p {
    font-size: 12px;
    text-align: left;
    width: 56%;
  }
  .header button {
    width: 34%;
    margin-top: 10px;
  }
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
nav  img{
  height: 90px;
    width: 150px;
    border-radius: 50%;
}

#contact {
  -webkit-user-select: none; /* Chrome/Safari */
  -moz-user-select: none; /* Firefox */
  -ms-user-select: none; /* IE10+ */
  width: 200px;
  height: 40px;
  background-color: #ffffff;
  color: #000000;
  border: none;
  outline: none;
  font-size: 18px;
  font-weight: bold;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px;
  box-shadow: 2px 2px 15px rgba(255, 255, 255, 0.4);
  cursor: pointer;
}
.about-container {
  width: 80%;
  height: 330px;
  background: #ffffff;
  border-radius: 20px;
  box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
  display: flex;
  margin: -7% auto 20px auto;
  position: relative;
  justify-content: space-evenly;
  align-items: center;
}
.about-container img {
  height: 250px;
}
.about-text {
  width: 500px;
}
.about-text p:nth-child(1) {
  color: #403e3e;
  font-family: myriad pro;
  font-weight: bold;
  font-size: 23px;
  line-height: 0px;
}
.about-text p:nth-child(2) {
  color: #3e3d3d;
  font-size: 13px;
  font-family: myriad pro;
  font-weight: bold;
  line-height: 5px;
}
.about-text p:nth-child(3),
.about-text p:nth-child(4) {
  color: #7e7d7d;
  font-family: calibri;
  font-size: 16px;
}

.about-text p:nth-child(4) {
  margin-bottom: 30px;
}

.about-text a {
  position: relative;
  justify-content: center;
  align-items: center;
  width: 120px;
  height: 40px;
  color: #ffffff;
  outline: none;
  border: 2px;
  font-family: calibri;
  background-color: #262525;
  cursor: pointer;
  font-size: 16px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
  margin-top: 30px;
  padding: 10px;
}

.about-text a:hover {
  color: #8f8f8f;
}

.services {
  height: 1050px;
  background-color: #ffffff;
  padding: 2% 10% 0px 10%;
}
.services-text p:nth-child(1) {
  font-family: calibri;
  font-weight: bold;
  color: #1d1c1c;
  font-size: 30px;
  line-height: 0px;
}
.services-text p:nth-child(2) {
  font-family: calibri;
  font-weight: bold;
  color: #3e3d3d;
  font-size: 15px;
  line-height: 5px;
}
.services-text p:nth-child(3) {
  font-family: calibri;
  color: #7e7d7d;
  font-size: ;
}
.services-text {
  width: 95%;
  margin: 50px 0px;
}
.box-container {
  display: flex;
  justify-content: space-between;
}

.box-1,
.box-2,
.box-3,
.box-4,
.box-5,
.box-6 {
  width: 300px;
  height: 380px;
  background-repeat: no-repeat;
  background-size: cover;
  box-shadow: 2px 2px 18px rgba(0, 0, 0, 0.3);
  align-items: center;
  justify-content: center;
  display: flex;
  flex-direction: column;
  margin: 0px 4px;
}

.box-container img {
  height: 170px;
  width: 97%;
  margin: 1px 0 0 0;
}

.box-container img:hover {
  transition: 1s;
  transform: scale(1.5);
}

.box-1 {
  background: rgba(0, 0, 0, 0.02);
}
.box-2 {
  background: rgba(0, 0, 0, 0.02);
}
.box-3 {
  background: rgba(0, 0, 0, 0.02);
}

.box-4 {
  background: rgba(0, 0, 0, 0.02);
}
.box-5 {
  background: rgba(0, 0, 0, 0.02);
}
.box-6 {
  background: rgba(0, 0, 0, 0.02);
}

/* .box-1 span,
.box-2 span,
.box-3 span,
.box-4 span,
.box-5 span,
.box-6 span {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #000000;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: calibri;
  font-weight: bold;
} */

.box-1 p:nth-child(2),
.box-2 p:nth-child(2),
.box-3 p:nth-child(2),
.box-4 p:nth-child(2),
.box-5 p:nth-child(2),
.box-6 p:nth-child(2) {
  color: #8f8f8f;
  font-family: calibri;
  font-size: 23px;
  line-height: 0px;
}

.box-1 p:nth-child(3),
.box-2 p:nth-child(3),
.box-3 p:nth-child(3),
.box-4 p:nth-child(3),
.box-5 p:nth-child(3),
.box-6 p:nth-child(3) {
  font-family: calibri;
  color: #8f8f8f;
  text-align: center;
  width: 230px;
  margin: 0px 0px 15px 0px;
}

.box-1 a,
.box-2 a,
.box-3 a,
.box-4 a,
.box-5 a,
.box-6 a {
  width: 100px;
  height: 30px;
  background-color: #000000;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  border: none;
  outline: none;
  border-radius: 2px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
  cursor: pointer;
}

.box-container a:hover {
  color: #8f8f8f;
}

.contact-me {
  width: 100%;
  height: 280px;
  background-size: cover;
  background-repeat: no-repeat;
  /*   background-image: url("https://i.ibb.co/1rmXYj8/project-in-your-mind.png"); */
  background-color: #000000;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0px 0px 20px 0px;
}
.contact-me p {
  color: #ffffff;
  font-size: 30px;
  font-family: calibri;
  font-weight: bold;
  border-bottom: 2px solid #ffffff;
}
.contact-me a {
  width: 200px;
  height: 40px;
  background-color: #ffffff;
  color: #000000;
  border: none;
  outline: none;
  font-size: 18px;
  font-weight: bold;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px;
  box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.3);
}

.contact-me a:hover {
  color: #7e7d7d;
}

#contact {
  -webkit-user-select: none; /* Chrome/Safari */
  -moz-user-select: none; /* Firefox */
  -ms-user-select: none; /* IE10+ */
  width: 200px;
  height: 40px;
  background-color: #ffffff;
  color: #000000;
  border: none;
  outline: none;
  font-size: 18px;
  font-weight: bold;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px;
  box-shadow: 2px 2px 15px rgba(255, 255, 255, 0.4);
  cursor: pointer;
}

#contact:hover {
  color: #7e7d7d;
}
#contact:active {
  background: #444;
}

#contactForm {
  display: none;
  z-index: 1500;
  border: 8px solid #000000;
  padding: 0.5em;
  width: 400px;
  text-align: center;
  background: #fff;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
}

input,
textarea {
  margin: 0.8em auto;
  font-family: inherit;
  text-transform: inherit;
  font-size: inherit;
  border: 2px solid black;
  display: block;
  width: 280px;
  padding: 0.4em;
}
textarea {
  height: 80px;
  resize: none;
}

.formBtn {
  width: 150px;
  height: 40px;
  background-color: #000000;
  color: #ffffff;
  border: none;
  outline: none;
  font-size: 18px;
  font-weight: bold;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
  cursor: pointer;
}

.formBtn:hover {
  color: #7e7d7d;
}
footer p {
  font-family: calibri;
}
footer p:nth-child(1) {
  font-size: 30px;
  font-weight: bold;
  color: #191919;
  line-height: 10px;
}
footer p:nth-child(2) {
  font-size: 16px;
  color: #7e7d7d;
  width: 600px;
  text-align: center;
}
footer {
  height: 300px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative;
}
.social-icons a {
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #e6e3e3;
  margin: 10px 10px;
  border-radius: 50%;
}
.social-icons {
  display: flex;
}
.social-icons i,
.social i {
  color: #000000;
}
.social-icons a:hover {
  background-color: #000000;
  box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
  transition: all ease 0.5s;
}
.social-icons a:hover i,
.social a:hover i {
  color: #ffffff;
  transition: all ease 0.5s;
}

.copyright {
  color: #565555;
  font-size: 12px;
  position: absolute;
  left: 50%;
  bottom: 10px;
  transform: translateX(-50%);
}
.social {
  position: fixed;
  top: 50%;
  right: 0px;
  transform: translateY(-50%);
}
.social a {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  margin: 0px;
  padding: 0px;
  line-height: 0px;
  background-color: #ffffff;
  border: 1px solid #cbcbcb;
  box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
}
.social a:hover {
  background-color: #000000;
  transition: all ease 0.5s;
}
.social i {
  font-size: 20px;
  color: #2b2b2b;
}

.social-icons2 a {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 20px 10px;
  color: #000000;
  font-weight: 600;
}
.social-icons2 {
  display: flex;
}

.social-icons2 a:hover {
  color: #7e7d7d;
}

@media (max-width: 1000px) {
  * {
    box-sizing: border-box;
  }
  .model {
    height: 460px;
    left: 90%;
    transform: translateX(-90%);
  }
  .text-container {
    top: 46%;
  }
  .text-container button {
    margin: 5px;
  }
  .about-container {
    width: 90%;
    border-radius: 10px;
  }
  .about-container img {
    height: 200px;
  }
  .about-text {
    width: 400px;
  }
  .about-text p:nth-child(1) {
    font-size: 20px;
  }
  .about-text p:nth-child(2) {
    font-size: 10px;
  }

  .about-text p:nth-child(3),
  .about-text p:nth-child(4) {
    font-size: 14px;
  }
  .services {
    padding: 2% 5% 0px 5%;
  }
  .box-container {
    justify-content: center;
    flex-wrap: wrap;
  }
  .services {
    height: auto;
  }
  .box-1,
  .box-2,
  .box-3,
  .box-4,
  .box-5,
  .box-6 {
    flex-grow: 1;
    margin: 10px;
  }
  .contact-me {
    height: 200px;
  }
  .contact-me p {
    font-size: 26px;
  }
  .contact-me a {
    font-size: 14px;
    height: 35px;
    width: 160px;
    cursor: pointer;
  }
}

@media (max-width: 750px) {
  .toggle {
    display: block;
    float: right;
    cursor: pointer;
  }

  .toggle:before {
    content: "\f0c9";
    font-family: fontAwesome;
    line-height: 30px;
    z-index: 1;
    cursor: pointer;
  }

  .toggle.active:before {
    content: "\f00d";
    position: fixed;
    right: 25px;
    line-height: 0px;
    cursor: pointer;
  }
}

@media (max-width: 750px) {
  section {
    background-image: none;
    background-color: #f7f7f7;
  }
  .model {
    display: none;
  }

  .text-container p:nth-child(2) {
    line-height: 40px;
    margin: 0px;
    padding: 0px;
  }
  .text-container {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
  }
  nav ul {
    margin: 0px;
    padding: 0px;
    background-color: #ebeef4;
    flex-direction: column;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100vh;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    display: none;
  }
  nav ul li {
    padding: 10px;
  }
  nav ul li a {
    font-family: calibri;
    font-size: 1.4em;
    text-transform: uppercase;
    color: #5c5c5c;
  }
  nav ul li a:hover {
    color: #121212;
  }

  nav.active ul {
    display: flex !important;
  }
  .about-container {
    top: 0px;
    flex-direction: column;
    width: 90%;
    height: auto;
    padding: 30px 0px;
    align-items: center;
  }
  .about-text {
    width: 90%;
    text-align: center;
  }
  .services-text {
    width: 100%;
  }
  .contact-me {
    height: 180px;
  }
  .contact-me p {
    font-size: 18px;
  }
  .contact-me a {
    width: 150px;
    height: 33px;
  }
  footer p:nth-child(2) {
    width: 90%;
  }
}
nav  img{
  height: 90px;
    width: 150px;
    border-radius: 50%;
}
.back{
  background:url('images/img7.jpg');
}
* {
  margin: 0;
  padding: 0%;
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
    </head>
    <body>

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
        <li><a href="{{route('organization')}}">@lang('public.Organization')</a></li>
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
  <div class="header">
    <h1>@lang('public.Organization')
    @lang('public.We Change')</h1>
    <p>@lang('public.Ne cherchez pas la nature') @lang('public.de l"Esprit,') @lang('public.mais plutôt l"esprit de la Nature,')</p>
    <button onclick="location.href='{{route('organization')}}';">Voir plus</button>
  </div>
  <div class="slider">
    <figure>
      <img id="image" src="images/db.jpg" alt="">
      <img src="images/img5.jpg" alt="">
      <img src="images/img7.jpg" alt="">
      <img src="images/img11.jpg" alt="">
      <img src="images/img14.jpg" alt="">
    </figure>
<br>
    <br>

  <!--services-container---------------------------->
  <div id="projetos" class="services ">
    <!--text-->
    <div class="services-text ">
      
      <br><br>
    </div>
   
    <div class="box-container">
      <!--1------------->
      @foreach($aa as $a)
      
      <div class="box-1">
       
        <p class="heading">{{$a->titre}}</p>
        <p class="details">{{$a->description}}</p>
        <p class="heading" style="font-size:10px;margin-left:120px">{{$a->created_at}}</p>
      </div>

        @endforeach  
      <!--2------------->
      
      <!--3------------->
      
      <br><br>
    <span>
      {{$aa->links()}}
    </span>
      <!--2------------->
     
      <!--3------------->
     
    </div>
  </div>

    <div id="contato" class="contact-me">
    <p>@lang('public.Si vous souhaitez parler d"un projet, contactez-nous..')</p><br>
    <div id="contact"><a href="{{route('contact')}}">@lang('public.E-mail')</a></div>
  </div>
  <footer id="redes">
    <!--heading-->
    <p>@lang('public.We Change')</p><br>
    <!--paragraph-->
    <p>@lang('public.Contactez-nous à')</p>
    <!--social-->
    <div class="social-icons">
      <a target="blanck" class="linkedin" href="https://br.linkedin.com/in/wechange03"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      <a target="blanck" class="twitter" href="https://twitter.com/wechange"><i class="fab fa-twitter"></i></a>
      <a target="blanck" class="instagram" href="https://www.instagram.com/we_change/"><i class="fab fa-instagram"></i></a>
      <a target="blanck" class="facebook" href="https://www.facebook.com/WeChangeSl"><i class="fa fa-facebook " aria-hidden="true"></i></a>
    
    </div>

    <div class="social-icons2">

      <a href="#home">@lang('public.Acceuil')</a>
      <a href="#sobre">@lang('public.Organization')</a>
      <a href="#projetos">@lang('public.Articles')</a>
      <a href="#contato">@lang('public.Contact')</a>
    

    </div>
    <!--copyright-->
    <p class="copyright">@lang('public.Copyright 2022 We Change')</p>
  </footer>
  <!--social-attach-bar-->
  <div class="social">
    <a target="blanck" class="linkedin" href="https://br.linkedin.com/in/wechange03"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    <a target="blanck" class="twitter" href="https://twitter.com/wechange"><i class="fab fa-twitter"></i></a>
    <a target="blanck" class="instagram" href="https://www.instagram.com/we_change/"><i class="fab fa-instagram"></i></a>
    <a target="blanck" class="facebook" href="https://www.facebook.com/WeChangeSl"><i class="fab fa-facebook"></i></a>
    
    
  </div>
    </body>
</html>