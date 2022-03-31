<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exersice extends Model
{
    use HasFactory;

    public function programs(){
        return $this->hasMany(Program::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
