<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsToMany(User::class, 'junction_tables');
    }

    // public function userName(){


    // }

    public function post(){
      return $this->hasMany(Post::class);
    }

}
