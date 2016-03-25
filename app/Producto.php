<?php

namespace cumplemes;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
	
	public function tipo()
	{
		return $this->belongsTo('cumplemes\tipo');
	}
}
