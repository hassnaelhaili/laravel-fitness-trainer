<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function exersice(){

        return $this->hasMany(Exersice::class, 'exersice');

    }

    public function user(){

        return $this->belongsTo(User::class)
    }
}
