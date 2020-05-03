<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_Cuarto extends Model
{

    public function cuartos(){
        return $this->hasMany(Cuarto::class);
    }
}
