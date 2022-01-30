<!-- create.blade.php -->


@extends('layouts.app')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .carduper{
      margin-left:350px;
      margin-right:350px;
  }
</style>


<div class="carduper">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="card-header">
    
    Créer un Article
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{route('addArticleBD')}}">
         @csrf
          <div class="form-group">
              <label for="titre">Titre de l'article:</label>
              <input type="text" class="form-control" name="titre" required/>
          </div>

          <div class="form-group">
              <label for="description">Description :</label>
              <textarea type="text" class="form-control" name="description" required></textarea>
          </div>
          <div class="form-group">
                        <label>Photo</label>
                        <input type="file"  name="URL" class="form-control" 
                            placeholder="Choisissez une photo" multiple>
                     </div>
                     <div class="form-group">
                          <label>Admin :</label>
                          <select name="user_id" class="form-control">
                                        <option value="">Aucune</option>
                                        @foreach ($art as $ar)
                                            @if($ar->user_id==$ar->id)
                                            <option value="{{$ar->id}}" selected>{{$ar->name}}</option>
                                            @else
                                            <option value="{{$ar->id}}" >{{$ar->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>

                      </div>
                      

          </div>
          <br/>
         <center> 
           <button type="submit" class="btn btn-primary">Créer</button>
                  
        </center>
      </form>
      
  </div>
</div>
@endsection
