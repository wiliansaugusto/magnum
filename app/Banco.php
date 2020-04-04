<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    public function bancoPalestrante(){
        return $this->belongsTo(Palestrante::class, 'id_palestrante', 'id');

    }
}
