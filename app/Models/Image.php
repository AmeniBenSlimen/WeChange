<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable=['URL'];

    public function setfilenamesattribute($value){
        $this->attributes['URL']=json_encode($value);
    }
}
