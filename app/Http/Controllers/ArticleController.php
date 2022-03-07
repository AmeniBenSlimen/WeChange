<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Article;
use App\Models\Image;
use App\Models\Allbum;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

  

  

  
    public function getAllArticle(){
        $aa = Article :: all();
        $bb = Allbum :: all();
        $ii = Image :: all();
        return view('AllArticle', compact('aa','bb','ii'));
    }

   
    public function addArticle(){
        
        return view('article');
    }

    public function addArticleBD(Request $request){
        
        $article = new Article();
        $article->titre=$request->titre;
        $article->description=$request->description;
        $article->category=$request->category;
        $article->user_id=$request->user;
        $article->save();
        return view('allbum',compact('article'));
    }
    public function AddAllbumBD(Request $request){
        
        $allbum = new Allbum();
        $allbum->nom_allbum=$request->nom_allbum;
        $allbum->description_allbum=$request->description_allbum;
        $allbum->article_id=$request->article;
        $allbum->save();
        return view('dropzone',compact('allbum'));
        
    }

    public function AddImagesBD(Request $request){
       
               $request->validate([
            'url' => 'required'
          ]);
      
              foreach($request->file('url') as $file)
              {
                  $name = $file->getClientOriginalName();
                  $name=time().'.'.$name;
                  $file->move('public/multiple_image/', $name);  
                  $image = new Image();
                  $image->url = $name;
                  $image->allbum_id=$request->allbum;
                  $image->save(); 
              }
    
              
             
 
    return redirect()->route('addArticle')->with('success', 'Article Ajouter avec succèss');
          
        }
    


    public function editArticle($id)
    {
        
        $article=Article::where('id',$id)->first();

        return view('modifierArticle',compact('article'));
    }

    public function editArticleBD(Request $request)
    {
        $article=\App\Models\Article::where('id',$request->id)->first();
        $article->titre=$request->titre;
        $article->description=$request->description;

            $article->update();
          
            return redirect()->route('AllArticles')->with('success', 'Article Modifier avec succèss');
            
    }

    public function deleteArticleBD(Request $request)
    {
        $article=\App\Models\Article::where('id',$request->id)->first();
        $article->delete();

        return redirect()->route('AllArticles')->with('success', 'Article Supprimer avec succèss');

    }
}
