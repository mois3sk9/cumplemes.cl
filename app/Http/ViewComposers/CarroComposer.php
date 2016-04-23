<?php

namespace cumplemes\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Users\Repository as UserRepository;
use Illuminate\Http\Request;
use cumplemes\CarroCompra\CarroCompraProxy;
use cumplemes\CarroCompra\CarroCompra;

class CarroComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;
    protected $request;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Request $request)
    {
        // Dependencies automatically resolved by service container...
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
    	$carroProxy = new CarroCompraProxy(new CarroCompra($this->request));
    	
        $view->with('productos', $carroProxy->getProductos());
    }
}