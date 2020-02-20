<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected function fotos(){
        return $this->hasMany(Foto::class);
    }
}
