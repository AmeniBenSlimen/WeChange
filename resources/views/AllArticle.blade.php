<!-- index.blade.php -->

@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
    margin-left:150px;
    margin-right:150px;
  }
  .ameni{
    margin-left:100px;
    margin-right:100px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<div class="ameni">
  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Titre de l'article </td>
          <td>Description de l'article  </td>
          <td>categorie  </td>
          <td>titre de l'allbum  </td>
          <td>Description de l'allbum  </td>
          <td>Images  </td>
          
          
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($cc as $c)
        @foreach($aa as $a)
      
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$c->titre}}</td>
            <td>{{$c->description}}</td>
            <td>{{$c->category}}</td>
            <td>{{$c->nom_allbum}}</td>
            <td>{{$c->description_allbum}}</td>
            <td><img src="{{asset('public/multiple_image/'.$c->url)}}" alt="" height="100px" width="100px"></td>
            
           
            
            
           
            <td><a href="{{ route('editArticle', $a->id)}}" class="btn btn-primary">Modifier</a></td>
            <td><a class="btn btn btn-danger" href="{{route('deleteArticleBD',$a->id)}}" onclick="return confirm('Vous Êtes sûr de supprimer cet article ?')">Supprimer</a></td>
        
        </tr>
      
        @endforeach
        @endforeach

    </tbody>
  </table>
  
</div>
<div>
@endsection
