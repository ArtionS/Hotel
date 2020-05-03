<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuarto extends Model
{


    public function categoria_cuarto(){
        return $this->belongsTo(Categoria_Cuarto::class);
    }
}
