<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Allbum;

class Article extends Model
{
    use HasFactory;
    
protected $table='articles';

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function allbum(){
        return $this->belongsTo(Allbum::class);
    }
}
