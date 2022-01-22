<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <title>Bienvenue...</title>

        
        <!-- Styles -->
        <style>
          
           body{
              margin: 0px;
              padding: 0px;
              font-family: 'Montserrat', sans-serif;
          
               }
nav{
    display:flex;
    justify-content: center;
    align-items: center;
    border-bottom: 3px solid #F8AD18;

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
    color: #F8AD18;
    margin-right: 10px;
    border-bottom: 1px solid #F8AD18;
    padding-bottom: 5px;
}
nav img{
    height: 110px;
    width: 110px;
    border-radius: 50%;
}

header{
    display: flex;
    flex-direction: column;
    align-items: center;
    background: url('images/img6.jpeg');
    background-size: cover;
    color: #fff;
    padding: 90px;
    width: 86.6%;
    height: 300px;
    background-size: 100% 100%;



}
header h1{
    font-family: 'Playfair Display', serif;
    font-size: 50px;
    color: #fff;
}
header h4{
    margin-top: -20px;
    font-size: 30px;
    text-align: center;
    /*border-bottom: 1px solid black;*/
    color: #fff;

}


.art{
    margin-top: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.art .content .card{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom:20px;
}
.art .content .card .left{
   flex: 0 0 30%;
   padding: 20px;
   background-color: #62B7F1 ;
   color:#fff;
}
.art .content .card .right img{
    height:300px;
    width: 400px;
    margin-top: 5px;
}


/* CUSTOM FOOTER CONTACT ROW */
.widget_text.col-full.contact-us-wrapper {
    max-width: 100%;
    background-color: #F8AD18;
    padding: 20px;
    text-align: center;
}
.site-footer {
    border-top: none;
    padding: 0;
}
.contactrow {
    max-width: 80em;
    margin: auto;
}
.contactrow .column {
   margin: 5px;
   text-align: center;
     display: inline-block;
     width: 30%;
}
.column, .column a {
    font-family: 'Roboto Slab', serif;
    font-size: 16px;
    font-weight: 300;
    color: #F8AD18;
}


.column h4 {
    font-family: 'Oswald', sans-serif;
    color: #eee;
    font-size: 20px;
    text-transform: uppercase; 
    letter-spacing: 2px;
}


.column h4 .fa {
    color: #F8AD18;
    font-size: 30px;
    background: none;
}
.column h4 .fab {
    color: #F8AD18;
    font-size: 30px;
    background: none;
}

.contactrow {
    max-width: 90em;
    margin: auto;
    border-top: 3px solid #F8AD18;
   
}
/* END CUSTOM FOOTER CONTACT ROW */




        </style>

    </head>
    <body>
        <nav>
        <img src="images/logo.jpg">
        <div class="navv">
            <a href="#">Acceuil</a>
            <a href="{{ route('login') }}">Espace Administrateur</a>
            <a href="#contact">Contact</a>
            <a href="#contact">Plus d'informations</a>
        </div>
    </nav>
      <header>
        <h1>We Change </h1>
        <h4>Pour mieux connaître la nature...</h4>
        
    </header>

    <section class="art" id="articles">

        <div class="content">
            <div class="card">
                <div class="left">
                    <h1>Nos valeurs</h1>
                    <p>Mangez sainement mais délicieusement. Nos clients sont rois, nos clients sont nos patrons.</p>
                </div>
                <div class="right">
                    <img src="images/img1.jpg" alt="">
                </div>
            </div>

            <div class="card">
                <div class="left">
                    <h1>Nos recettes</h1>
                    <p>Nous mettons à votre disposition les recettes de nos burgers les plus délicieux ! </p>
                </div>
                <div class="right">
                    <img src="images/img3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

<div class="contactrow" style="background-color: #757777 ">
    <div class="column phone1">
        <h4><i class="fa fa-phone"></i><br>
        Numéro de Télephone</h4>
        <p>+216 93461607</p>
    </div>

    <div class="column hours3">
        <h4><i class="fa fa-location-arrow"></i> <br>
       adresse</h4>
        <p>Rue 18 janvier Siliana<br>
6100 Siliana</p>
    </div>

    <div class="column email2">
        <h4><i class="fa fa-envelope"></i><br>
        Adresse E-Mail </h4>
        <a href="wechange.organization08@gmail.com">wechange.organization08@gmail.com</a>
    </div>


    <div class="column hours3">
        <h4><i class="fab fa-facebook"></i> <br>
       Facebook</h4>
        <a href="https://www.facebook.com/WeChangeSl">We Change</a>
    </div>

    <div class="column hours3">
        <h4><i class="fab fa-linkedin"></i> <br>
       Linkedin</h4>
        <a href="https://www.facebook.com/WeChangeSl">We Change</a>
    </div>

    <div class="column hours3">
        <h4><i class="fab fa-twitter"></i> <br>
       Linkedin</h4>
        <a href="https://www.facebook.com/WeChangeSl">We Change</a>
    </div>

     
</div>
  <!-- Site footer -->

        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
 -->
            
    </body>
</html>
