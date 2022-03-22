<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
 
 <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@extends('layouts.appp')

@section('content')
<style>
   @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.card-body{
    margin-bottom:250px;
}
body {
 
  font-family: "Open Sans", sans-serif;
  min-height: 90vh;
}
img {
  width: 100%;
  height:70%;
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
          <img src="images/login.png">
        </div>
      </div>
      <div class="contactForm">
        <h1>Login</h1>
    
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Votre adresse Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Votre mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="mot de passe ">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
