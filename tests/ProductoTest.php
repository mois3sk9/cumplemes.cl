<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestProducto extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   
    public function testExiste()
    {
        $response = $this->call('GET', '/productos/show/1');
        $this->assertEquals(200, $response->getStatusCode());
    }
}
