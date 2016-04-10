<?php

namespace cumplemes;

use Illuminate\Database\Eloquent\Model;
use cumplemes\Producto;

class Tipo extends Model
{
    
    public function productos() 
    {
        return $this->hasMany('cumplemes\Producto');
    }
}
