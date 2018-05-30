<?php

namespace radioyaravi;

use Illuminate\Database\Eloquent\Model;

class Publicidad extends Model
{
    public $table = 'publicidades';

    public function user()
    {
    	return $this->belongsTo(User::class, 'idUser');
    }
}
