<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poligono extends Model
{
    use HasFactory;

    protected $table = 'poligonos';

    public function house(){
        return $this->hasMany(House::class,'poligono_id');
    }
}
