<?php

namespace App\Models;
use App\Models\Allbum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='images';
   

    public function allbums(){
        return $this->hasMany(Allbum::class);
    }
    
}
