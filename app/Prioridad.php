<?php

namespace radioyaravi;

use Illuminate\Database\Eloquent\Model;
use radioyaravi\News;

class Prioridad extends Model
{
    public $table = "prioridad";

    public function news()
	{
		return $this->hasMany(News::class, 'idPrioridad');
	}
}
