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
        @foreach($tab as $t)
      
        @foreach($images as $im)
      
        <tr>
            <td>{{$t['id']}}</td>
            <td>{{$t['titre']}}</td>
            <td>{{$t['description']}}</td>
            <td>{{$t['category']}}</td>
            <td>{{$t['nom_allbum']}}</td>
            <td>{{$t['description_allbum']}}</td>
            <td><img src="{{asset('public/multiple_image/'.$im)}}" alt="" height="100px" width="100px"></td>
            
           
            
            
           
            <td><a href="{{ route('editArticle', $t['id'])}}" class="btn btn-primary">Modifier</a></td>
            <td><a class="btn btn btn-danger" href="{{route('deleteArticleBD',$t['id'])}}" onclick="return confirm('Vous Êtes sûr de supprimer cet article ?')">Supprimer</a></td>
        
        </tr>
        @endforeach
        @endforeach
       

    </tbody>
  </table>
  
</div>
<div>
@endsection
