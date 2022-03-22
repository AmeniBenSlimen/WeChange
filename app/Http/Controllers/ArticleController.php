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
  /*   public function __construct()
    {
        $this->middleware('auth');
    } */
 //compact c'est une fonction php qui permet de créé un tableau automatiquement a partir de paramétre donné w bech ya3ref l variable sinon ma ya3rfouch
public function viewArticle(){
    $aa = Article :: all()->take(20);
    $bb = Allbum :: all();
    $ii = Image ::all()->take(3);
    return view('viewArticle', compact('aa','bb','ii'));
}
  

public function getAllArticle(){

    $aa=Article::paginate(5);
    $bb=Allbum::paginate(5);
    $ii=Image::paginate(5);
    
    return view ('AllArticle',compact('aa','bb','ii'));
}

    public function Article($id){
        $aa=Article::where('id',$id)->first();
        $bb=Allbum::where('id',$id)->first();
        $ii=Image::where('id',$id)->first();
        /* $ii=Image::all()->where('image.allbum_id','=',function($query){
            $query->from('allbum')->select('id')->where('allbum.article_id','=','article_id');
        })->get(); */
        return view('viewArticle', compact('aa','bb','ii'));
    }
 
    
     public function index(){
       
        return view('welcome',);
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
//getClientOriginalName :utilisé pour récupérer le nom d'origine du fichier au moment du téléchargement   
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
        
        $article->delete();
        
        return redirect()->route('AllArticles')->with('success', 'Article Supprimer avec succèss');

    }
}
