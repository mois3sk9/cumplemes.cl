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
    
    public function agregar($idProducto, $cantidad = 1)
    {
        if(!$this->validaciones()) return false;
        
        if($this->contieneProductos()){
            $collect = Collect($this->getCarro());
            
            $existe = false;
            $collect->transform(function($item, $key)use($idProducto, &$existe, $cantidad){
             
               if($item['id'] == $idProducto){//si el producto ya esta en el carro de compras, solo modificamos la cantidad
                    $item['cantidad'] += $cantidad;
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
           
            
            return true;
            
        } 
      
        $this->vaciar();
        $collect = Collect(['id'=>$idProducto, 'cantidad'=>$cantidad]);
       
        $this->getSession()->put('productos', [$collect->toArray()]);
     
        return true;
    }
    
    public function quitar($idProducto)
    {
        $collect = Collect($this->getCarro());
        
        $collect->transform(function($item, $key)use($idProducto){
            if($item['id'] == $idProducto){ 
                $item['cantidad'] = 0;
                return $item;
            }
        });
        //$this->getSession()->pull('productos', $idProducto);
    }
    
    public function reducirCantidadDeProducto($idProducto) {
        
        $collect = Collect($this->getCarro());
        
        $collect->transform(function($item, $key)use($idProducto){
            if($item['id'] == $idProducto){
                if($item['cantidad'] > 0){
                    $item['cantidad']-=1;
                    return $item;
                }
                
            }
        });
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
        if($this->getSession()->has('productos')) {
            $collect = Collect($this->getCarro());
            $estado = false;
            $collect->map(function($item, $key) use(&$estado){
                if($item['cantidad']>0) {// si existe algun producto con cantidad mayor a 0 es que hay productos en el carro
                    $estado = true;
                }
            });
            
            return $estado;
        }
        
        return false;
    }
    public function productoEnCarro($idProducto)
    {
        
    }
    
    public function cantidad()
    {
        if($this->contieneProductos()) {
            $cantidad = 0;
            $collect = Collect($this->getCarro());
            $collect->map(function($item, $key) use (&$cantidad){
                $cantidad+=$item['cantidad'];//sumamos la cantidad de cada producto
            });
            return $cantidad;
        }
        
        return 0;
    }
    
    private function validaciones()
    {
        //aqui todas las validaciones para verificar si se debe agregar un producto o no
        $estado = true;
        if(!$this->estaDisponible()) $estado = false;
        
        return $estado;
    }
    
    public function estaDisponible()
    {
        //todo
        return true;
    }
    
}

