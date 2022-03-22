
@extends('layouts.layoutss')

@section('content')
		<br/> <h2 class="text-center">Editer un Article</h2>
		<br/>
		<div class="container">
			<form method="POST" action="{{route('editArticleBD')}}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="id" value="{{$article->id}}" />
                
               
                                @if(session()->get('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}  
                    </div><br />
                @endif
                <div class="row">
                    
                    <div class="col-md-8">

                        <div class="form-group">
                            <label>Titre de l'article</label>
                            <input type="text" value="{{$article->titre}}"  name="titre" class="form-control" 
                               required >
                         </div>

                         <div class="form-group">
                            <label>Description de l'article</label>
                            <input type="text" value="{{$article->description}}"  name="description" class="form-control" 
                              required  >
                                
                         </div>
                         <div class="form-group">
                          <label for="category">Catégorie </label>
                          <select name="category" class="form-control">
                                            <option value="{{$article->category}}"></option>
                                            <option value="Evénnement">Evénnement</option>
                                            <option value="Nouveauté" >Nouveauté</option>
                                            
                          </select>

                      </div>
                         <div class="form-group">
                            <label>Nom de l'allbum </label>
                            <input type="text" value="{{$allbum->nom_allbum}}" name="nom_allbum" class="form-control" 
                              required  >
                                
                         </div>
                         <div class="form-group">
                            <label>Description de l'allbum</label>
                            <input type="text" value="{{$allbum->description_allbum}}" name="description_allbum" class="form-control" 
                              required  >
                                
                         </div>
                         <div class="form-group">
                        <label>Photo</label>
                        <input type="file"  name="url" class="form-control" 
                        value="{{$image->url}}"  placeholder="Choisissez une photo" multiple>
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
