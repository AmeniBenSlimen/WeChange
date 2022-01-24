
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
                            <input type="text" value="{{$article->titre}}" required name="titre" class="form-control" 
                                >
                         </div>

                         <div class="form-group">
                            <label>Description de l'article</label>
                            <input type="text" value="{{$article->description}}" required name="description" class="form-control" 
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
