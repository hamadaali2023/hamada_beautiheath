<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
	public function scopeSelection($query)
    {
     return $query->select(
        	'id',
        	'name_' . app()->getLocale() . ' as name'
        	
        );
 }
}
