<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Article;

class Allbum extends Model
{
    use HasFactory;
    
    protected $table='allbums';

   
       public function article(){
           return $this->hasOne(Article::class);
       }

       public function images(){
           return $this->belongsTo(Image::class);
       }
      
    
}
