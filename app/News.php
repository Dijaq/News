<?php

namespace radioyaravi;

use Illuminate\Database\Eloquent\Model;
use radioyaravi\Label;
use radioyaravi\User;
use radioyaravi\ContentNews;
use radioyaravi\Prioridad;

class News extends Model
{
    public $table = 'news';

    public function label()
    {
    	return $this->belongsTo(Label::class, 'idLabelNews');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'idUser');
    }

    public function contentnews()
    {
    	return $this->hasMany(ContentNews::class, 'idNews');
    }

    public function prioridad()
    {
        return $this->belongsTo(Prioridad::class, 'idPrioridad');
    }
}
