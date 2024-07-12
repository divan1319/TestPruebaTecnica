<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senda extends Model
{
    use HasFactory;

    protected $table = 'sendas';

    public function house(){
        return $this->hasMany(House::class,'senda_id');
    }
}
