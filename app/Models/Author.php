<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public function skins(){
        return $this->hasMany(Skin::class);
    }
}
