<!-- create.blade.php -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
 
 <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@extends('layouts.app')
@section('content')
<style>
   @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: linear-gradient(to bottom right, #92c5fe 0%, #cbc2fb 100%);
  font-family: "Open Sans", sans-serif;
  min-height: 90vh;
}
img {
  width: 100%;
  height:100%;
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  display: block;
}
a {
  margin-left: 30px;
  color: #3c63cc;
  font-weight: 600;
}
a:hover {
  margin-left: 30px;
  color: #2fa1fd;
}
.modernForm {
  max-width: 1200px;
  display: flex;
  margin: 100px auto;
  background-color: #fff;
  border-radius: 10px;
}
.imageSection {
  flex-basis: 50%;
  position: relative;
  color: white;
}
.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: rgba(96, 30, 150, 0.507);
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  z-index: 0;
}
.textInside,
.service {
  position: absolute;
}
.textInside {
  bottom: 200px;
  right: 120px;
}
.tagLine {
  font-size: 1.4rem;
  font-weight: 600;
}
.price {
  font-size: 2rem;
  font-weight: 700;
}
.service {
  bottom: 30px;
  right: 50px;
}
.service p {
  font-weight: 700;
}
.contactForm {
  flex-basis: 45%;
  margin: auto;
  color: #555;
  padding-left: 30px;
}
.contactForm h1 {
  padding: 15px 0;
}
input[type="email"],
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: rgb(177, 177, 177) 1px solid;
  margin-top: 10px;
}
.name {
  position: relative;
  margin-bottom: 20px;
}
.iconName {
  position: absolute;
  right: 10px;
  bottom: 10px;
}

input[type="checkbox"] {
  margin-right: 10px;
}
input[type="submit"] {
  background-color: #3c63cc;
  font-size: 1rem;
  border: none;
  color: white;
  padding: 10px 50px;
  border-radius: 5px;
  text-decoration: none;
  margin: 30px 0;
  cursor: pointer;
  float: left;
}
input[type="submit"]:hover {
  background-color: #2fa1fd;
}

@media only screen and (max-width: 768px) {
  .modernForm {
    flex-wrap: wrap;
  }
  .imageSection,
  .contactForm {
    flex-basis: 100%;
  }
  .overlay,
  img {
    border-bottom-left-radius: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .contactForm {
    padding-right: 30px;
  }
}
</style>

 

  
   
    <div class="modernForm">
      <div class="imageSection">
        <div class="image">
          <div class=""></div>
          <img src="images/logo.jpg" style="hight:100px">
        </div>
       
        
      </div>
      <div class="contactForm">
        <h1>Crée Article </h1>
    
     
      <form method="post" action="{{route('addArticleBD')}}">
      @csrf
      <input type="hidden" value="{{Auth::user()->id}}" name="user">
      @if(session()->get('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}  
                    </div><br />
                @endif
                <div class="name">
            <label for="titre" >Titre de l'article :</label>
            <input type="text"  name="titre"  placeholder="Titre de l'article" required/>
            <div class="iconName"><i class="fa-solid fa-user"></i></div>
          </div>
          <div class="name">
            <label for="description">Description :</label>
            <textarea type="text" class="form-control" name="description" placeholder="Description de l'article" required></textarea>
            <div class="iconName"><i class="fa-solid fa-lock"></i></div>
          </div>
          <div class="name">
            <label for="category">Catégorie :</label>
            <select name="category" class="form-control">
                                            <option value="">Choisissez un Catégorie</option>
                                            <option value="Evénnement">Evénnement</option>
                                            <option value="Nouveauté" >Nouveauté</option>
                                            
                          </select>
            <div class="iconName"><i class="fa-solid fa-lock"></i></div>
          </div>
          <center> <input type="submit" value="Suivant"></center>
        </form>
      </div>
    </div>
  </body>

         
@endsection

