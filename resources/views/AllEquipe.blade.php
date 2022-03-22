<!-- index.blade.php -->

@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
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
          <td>Nom du Membre</td>
          <td>Prénom du Membre  </td>
          <td>Spécialité  </td>
          <td>Description  </td>
          <td>Photo  </td>
          <td>Contact  </td>
          
          
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($equipe as $eq)
      
        <tr>
            <td>{{$eq->id}}</td>
            <td>{{$eq->nom_membre}}</td>
            <td>{{$eq->prenom_membre}}</td>
            <td>{{$eq->specialite}}</td>
            <td>{{$eq->description_membre}}</td>
            <td>{{$eq->image}}</td>
            <td>{{$eq->contact}}</td>
            
           
            
            
           
            <td><a href="{{route('modifierMembre',$eq->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                
                <a class="btn btn btn-danger" href="{{route('deleteMembreBD',$eq->id)}}" onclick="return confirm('Vous Êtes sûr de supprimer cette membre?')">Supprimer</a>

          
            </td>
        
        </tr>
        @endforeach

    </tbody>
  </table>
</div>
  
<div>
@endsection
