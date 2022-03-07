<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $table='equipes';

                public function idUser(){
                    return $this ->belongsTo(User::class);
                }
}
