<!DOCTYPE html>
<html>
<head>
    <title>Contacter nous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <style>
        ul {
  list-style: none;
}

a {
  text-decoration: none;
}
nav  img{
  height: 90px;
    width: 150px;
    border-radius: 50%;
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
<section id="home">
    <!--navigation------------------------->
    <nav>
      <!--logo-->
      <a href=""><img src="images/logo.jpg"></a>
      <!--menu-->
      <ul>
        <li><a href="" class="active">@lang('public.Acceuil')</a></li>
        <li><a href="">@lang('public.Organization')</a></li>
        <li><a href="">@lang('public.Articles')</a></li>
        <li><a href="{{route('equipe')}}">@lang('public.Equipe')</a></li>
        <li><a href="">@lang('public.Contact')</a></li>
        
      </ul>
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
      <!--bars--------------->
      <div class="toggle"></div>

    </nav>
    <div class="clearfix"></div>
  </section>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header" style="background-color:black">
                        <h3 class="text-white">Envoyer un Mail ...</h3>
                    </div>
                    <div class="card-body">
                        
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                   
                        <form method="POST" action="{{ route('contactBD') }}">
                  
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Nom:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Numéro e téléphone:</strong>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Sujet:</strong>
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                        @if ($errors->has('subject'))
                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Message:</strong>
                                        <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                   <br>
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>