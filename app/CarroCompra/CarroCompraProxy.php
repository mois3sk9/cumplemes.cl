<?php
namespace cumplemes\CarroCompra;

use cumplemes\CarroCompra\CarroCompra as Carro;
use cumplemes\Producto;
use Illuminate\Support\Collection;
use cumplemes\Http\Controllers\ProductosController;

class CarroCompraProxy
{
	private $carro;
	
	public function __construct(Carro $carro)
	{
		$this->carro = $carro;
	}
	/*
	 * 
	 * Esta funcion transforma los productos del carro de compra en productos de la base de datos
	 */
	public function getProductos()
	{
		$productos = [];
		
		if($this->carro) {
			
			$productosCollection = Collect($this->carro->getCarro());
			$idDeProductos = [];
			$idYCantidad = [];
			//separamos los ids para luego consultarlos en la BBDD ademas realizamos otro arreglo en donde indexamos el id junto con la cantidad para luego cruzar los arreglos
			$productosCollection->map(function($item, $key) use(&$idDeProductos, &$idYCantidad){
				if($item['cantidad'] > 0) {
					$idDeProductos[] = $item['id'];
					$idYCantidad[] = ['id'=>$item['id'], 'cantidad'=>$item['cantidad']];
					
				}		
			});
			//buscamos los productos en la BBDD en base a los id que estaban en el carro
			$productos = Producto::disponibles()->whereIn('id',$idDeProductos)->get();
			$productos = $productos->toArray();
			
			//cruzamos los array de cada producto que sacamos de la BBDD junto con la cantidad de cada producto que habia en el carro
			$iterador = 0;
			foreach ($productos as $producto) {
				foreach ($idYCantidad as $cantidad) { 
					if($cantidad['id'] == $producto['id']) {
						$productos[$iterador]['cantidad'] = $cantidad['cantidad'];
					}
				}
				++$iterador;
			}
			
			
		}
		return $productos;
	}
	
	
}