<?php

namespace radioyaravi;

use Illuminate\Database\Eloquent\Model;
use radioyaravi\News;

class Label extends Model
{
	public $table = 'labelsnews';

	public function news()
	{
		return $this->hasMany(News::class, 'idLabelNews');
	}
}
