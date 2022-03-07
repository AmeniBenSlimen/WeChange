
@extends('layouts.layoutss')

@section('content')
		<br/> <h2 class="text-center">Editer un Membre</h2>
		<br/>
		<div class="container">
			<form method="POST" action="{{route('editMembreBD')}}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="id" value="{{$equipe->id}}" />
                                @if(session()->get('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}  
                    </div><br />
                @endif
                <div class="row">
                    
                    <div class="col-md-8">

                        <div class="form-group">
                            <label>Nom Membre ;</label>
                            <input type="text" value="{{$equipe->nom_membre}}" required name="nom_membre" class="form-control" 
                                >
                         </div>

                         <div class="form-group">
                            <label>Prénom Membre :</label>
                            <input type="text" value="{{$equipe->prenom_membre}}" required name="prenom_membre" class="form-control" 
                                >
                         </div>
                         <div class="form-group">
                            <label>Spécialité :</label>
                            <input type="text" value="{{$equipe->specialite}}" required name="specialite" class="form-control" 
                                >
                         </div>
                         <div class="form-group">
                            <label>Description :</label>
                            <input type="text" value="{{$equipe->description_membre}}" required name="description_membre" class="form-control" 
                                >
                         </div>
                         <div class="form-group">
                        <label>Photo :</label>
                        <input type="file"  name="image" class="form-control" 
                        value=""  placeholder="Choisissez une photo">
                     </div>
                     <div class="form-group">
                            <label>Contact :</label>
                            <input type="text" value="{{$equipe->contact}}" required name="contact" class="form-control" 
                                >
                         </div>   
                                   
                      </div>
                                    
                   
                      <br/>  <br/>
                        <p>
                            <button type="submit" class="btn btn-warning" >Editer</button>
                           
                        </p>
                    </div>
                </div>
				

                
                


                

    		</form>
		</div>
