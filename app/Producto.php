<?php

namespace cumplemes;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    
	
    public function tipo()
    {
       return $this->belongsTo('cumplemes\tipo');
    }
    public function scopeDisponibles($query)
    {
        return $query->where('stock', '>', 0);
    }
    public function scopeAgotados($query)
    {
        return $query->where('stock', '=', 0);
    }
    
    
    
        
}
