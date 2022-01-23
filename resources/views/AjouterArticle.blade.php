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

      <form method="post" action="">
         @csrf
          <div class="form-group">
              <label for="titre">Titre de l'article:</label>
              <input type="text" class="form-control" name="titre" required/>
          </div>

          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description" required/>
          </div>
          
                        </select>

          </div>
          <br/>
         <center> <button type="submit" class="btn btn-primary">Créer</button></center>
      </form>
  </div>
</div>
@endsection
