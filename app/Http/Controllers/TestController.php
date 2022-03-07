<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;
use App\Models\Allbum;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function OneToMany(){
        return User :: find(1)->articles;
    }

    public function hasOne(){
        return Allbum :: find(1)->article;
    }

    public function hasMany2(){
        return Image :: find(1)->allbums;
    }

    public function accueil(){
        if (Auth::check()) {

       $getid = User :: get('id');
       return view ('ameni',compact('getid'));

        }

    }

    
}
