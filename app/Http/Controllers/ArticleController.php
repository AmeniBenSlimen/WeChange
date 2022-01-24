<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticle(){
        $aa = Article :: all();
        return view('AllArticle', compact('aa'));
    }
   

    public function addArticle(){
        $art=\App\Models\User::all();
        return view('article',compact('art'));
    }

    public function addArticleBD(Request $request){
        $article=new Article();
        $article->titre=$request->titre;
        $article->description=$request->description;
        $article->save();
    return redirect()->route('addArticle')->with('success', 'Article créer avec succèss');

    }

    public function editArticle($id)
    {
        $aa=\App\Models\User::all();
        $article=\App\Models\Article::where('id',$id)->first();

        return view('modifierArticle',compact('article','aa'));
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
