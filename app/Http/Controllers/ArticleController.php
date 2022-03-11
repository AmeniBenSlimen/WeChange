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
        $aa = Article ::where('id',$id);
        $bb = Allbum ::where('id',$id)->with('article')->first();
       // $ii = Image ::all()->where('id',$id)->with('allbum')->first();
        $ii=Image::all()->where('image.allbum_id','=',function($query){
            $query->from('allbum')->select('id')->where('allbum.article_id','=','article_id');
        })->get();
        return view('AllArticle', compact('aa','bb','ii'));
    }
 
    
    public function index(){
        $aa = Article :: all();
        $bb = Allbum :: all();
        $ii = Image :: all();
        return view('welcome', compact('aa','bb','ii'));
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
        $allbum=Allbum::where('id',$id)->first();
        $image=Image::where('id',$id)->first();

        return view('modifierArticle',compact('article','allbum','image'));
    }

    public function editArticleBD(Request $request)
    {
        $article=Article::where('id',$request->id)->first();
        $allbum=Allbum::where('id',$request->id)->first();
        $image=Image::where('id',$request->id)->first();

        $article->titre=$request->titre;
        $article->description=$request->description;
        $article->category=$request->category;
       
        $allbum->nom_allbum=$request->nom_allbum;
        $allbum->description_allbum=$request->description_allbum;

            foreach($request->file('url') as $file)
              {
                  $name = $file->getClientOriginalName();
                  $name=time().'.'.$name;
                  $file->move('public/multiple_image/', $name);  
                  $image = new Image();
                  $image->url = $name;
                  $image->allbum_id=$request->allbum;
                   
              }
           
              
            $article->update();
            $allbum->update();
            $image->update();
          
            return redirect()->route('AllArticles')->with('success', 'Article Modifier avec succèss');
            
    }

    public function deleteArticleBD(Request $request)
    {
        $article=Article::where('id',$request->id)->first();
        $allbum=Allbum::where('id',$request->id)->first();
        $image=Image::where('id',$request->id)->first();
        $article->delete();
        $allbum->delete();
        $image->delete();

        return redirect()->route('AllArticles')->with('success', 'Article Supprimer avec succèss');

    }
}
