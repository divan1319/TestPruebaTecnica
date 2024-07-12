<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function poligono(){
        return $this->belongsTo(Poligono::class,'poligono_id');
    }

    public function senda(){
        return $this->belongsTo(Senda::class,'senda_id');
    }

    public function payment(){
        return $this->hasMany(Payment::class,'house_id');
    }
}
