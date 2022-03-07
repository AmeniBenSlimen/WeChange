<!-- index.blade.php -->

@extends('layouts.layoutss')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

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
        @foreach($aa as $a)
        @foreach($bb as $b)
        @foreach($ii as $i)
      
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->titre}}</td>
            <td>{{$a->description}}</td>
            <td>{{$a->category}}</td>
            <td>{{$b->nom_allbum}}</td>
            <td>{{$b->description_allbum}}</td>
            <td>{{$i->url}}</td>
            
           
            
            
           
            <td><a href="{{ route('editArticle', $a->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                
                <a class="btn btn-sm btn-danger" href="{{route('deleteArticleBD',$a->id)}}" onclick="return confirm('Vous Êtes sûr de supprimer cet article ?')">Supprimer</a>

          
            </td>
        
        </tr>
        @endforeach
        @endforeach
        @endforeach

    </tbody>
  </table>
  
<div>
@endsection
