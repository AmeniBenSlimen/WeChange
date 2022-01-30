<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Article extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable = ['titre', 'description','user_id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
