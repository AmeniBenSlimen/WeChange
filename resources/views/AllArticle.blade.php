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
          <td>Images  </td>
          
          
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($aa as $a)
        @foreach($img as $im)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->titre}}</td>
            <td>{{$a->description}}</td>
            
            <td><img src="images/{{$im->URL}}" class="img-responsive" style="max-height:100px;max-width:100px"> </td>
            
            
           
            <td><a href="{{ route('editArticle', $a->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                
                <a class="btn btn-sm btn-danger" href="{{route('deleteArticleBD',$a->id)}}" onclick="return confirm('Vous Êtes sûr de supprimer cet article ?')">Supprimer</a>

          
            </td>
        
        </tr>
        @endforeach
        @endforeach
    </tbody>
  </table>
  
<div>
@endsection
