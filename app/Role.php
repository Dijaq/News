<?php

namespace radioyaravi;

use Illuminate\Database\Eloquent\Model;
use radioyaravi\User;

class Role extends Model
{
    public $table = 'role';

    public function user()
    {
    	return $this->hasMany(User::class, 'idRole');
    }
}
