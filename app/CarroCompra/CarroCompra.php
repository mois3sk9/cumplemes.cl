<?php
namespace cumplemes\CarroCompra;

use cumplemes\Producto;
use cumplemes\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates   
 * and open the template in the editor.
 */

class CarroCompra
{
    private $request;
    
    function __construct($request) {
        $this->request = $request;
    }
    
    private function getSession()
    {
        return $this->request->session();
    }
    
    public function agregar($idProducto, $cantidad = 10)
    {
        if($this->contieneProductos()){
            $collect = Collect($this->getCarro());
           
            $existe = false;
            $collect->transform(function($item, $key)use($idProducto, &$existe, $cantidad){
             
               if($item['id'] == $idProducto){//si el producto ya esta en el carro de compras, solo modificamos la cantidad
                    $item['cantidad'] = $cantidad;
                    $existe = true;
                    return $item;
                }
                return $item;
            });
          
            if(!$existe){ 
                $collect->push(['id'=>$idProducto, 'cantidad'=>$cantidad]);
            }
          
            
            $this->vaciar();
          
            $this->getSession()->put('productos', $collect->toArray());
           
            
            return 1;
            
        } 
      
        $this->vaciar();
        $collect = Collect(['id'=>$idProducto, 'cantidad'=>$cantidad]);
       
        $this->getSession()->put('productos', [$collect->toArray()]);
     
        return 1;
    }
    
    public function quitar($idProducto)
    {
       
        $this->getSession()->pull('productos', $idProducto);
    }
    
    public function getCarro()
    {
        return $this->getSession()->get('productos');
    }
    public function vaciar()
    {
        return $this->getSession()->forget('productos');
    }
    public function contieneProductos()
    {
        return $this->getSession()->has('productos');
    }
    public function productoEnCarro($idProducto)
    {
        
        
    }
    
}

