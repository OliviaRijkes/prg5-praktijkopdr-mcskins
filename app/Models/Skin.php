<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skin extends Model
{
    //
    public function skintags(){
        return $this->hasMany(Tag::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function author(){
        return $this->belongsTo(Author::class);
    }
}
