<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Article;
use App\Models\Image;
use App\Models\Allbum;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ArticleController extends Controller
{
  /*   public function __construct()
    {
        $this->middleware('auth');
    } */
 //compact c'est une fonction php qui permet de créé un tableau automatiquement a partir de paramétre donné w bech ya3ref l variable sinon ma ya3rfouch
public function viewArticle(){
    $aa = Article :: all();
    $tab = array ();
    foreach ($aa as $value){
        $ii=Allbum :: where('article_id', $value->id)->get()->toArray();
        foreach($ii as $value2){
            $allbum=$value2;
        }
        $jj=Image :: where('allbum_id', $value2['id'])->get(); 
        $images=array();
        foreach($jj as $image){
        $images[]=$image['url'];
     }
     $article=array(
        "titre"=>$value->titre,
        "description"=>$value->description,
        "created_at"=>$value->created_at,
        "allbum_id"=>$value2['id'],
        "image"=>$images,
     );
     $tab[]=$article;
   
    }
    

    return  view('viewArticle', compact('tab','images'));
}
  

public function getAllArticle(){
    $aa = DB::table('articles')
    ->select('id')
    ->get();
   $cc= DB::table('articles')
    ->crossJoin('allbums')
    ->crossJoin('images')
    ->select('*')
    ->where('articles.id','=',DB::raw('allbums.id'))
    ->where('images.allbum_id','=',DB::raw('allbums.id'))->get();
    return view ('AllArticle',compact('cc','aa'));
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
            
               if ($request->hasfile('url'))
                {
                    $file=$request->file('url');
                    $ext=$file->getClientOriginalName();
                    $filename=time().'.'.$ext;
                    $file->move('public/multiple_image/', $filename);
                    $image->url=$filename;
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
