<?php

namespace cumplemes\Http\Controllers;

use Illuminate\Http\Request;

use cumplemes\Http\Requests;
use cumplemes\Http\Controllers\Controller;
use cumplemes\Producto;
use cumplemes\CarroCompra\CarroCompra as Carrito;
use cumplemes\Carrocompra\CarroCompraProxy;


class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $carroProxy = new CarroCompraProxy(new Carrito($request));
        $productos = $carroProxy->getProductos();
        return view('partials.carro.contenido_carro', ['productos'=>$productos]);
        //return Response()->json(['data'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'id_producto'=>'required|Numeric'
        ]);
        
        $carrito = new Carrito($request);
        
        $estado  = $carrito->agregar($request->input('id_producto'));
        $cantidad  = $carrito->cantidad();
        
       return Response()->json(['estado'=> $estado, 'cantidad'=>$cantidad, 'data'=>$carrito->getCarro()]);
    }
    
    public function cantidad(Request $request) {
       // $request = new Request();
        $carrito = new Carrito($request);
       
        return Response()->json(['cantidad'=>$carrito->cantidad()]);
    }
    
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($request, $id)
    {
        
        $productos =  $request->session()->get('productos');
        $request->session()->forget('productos');
    }
}
