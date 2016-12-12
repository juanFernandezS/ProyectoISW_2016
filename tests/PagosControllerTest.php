<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagosControllerTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function pagosIndex()
    {
        $this->get(route('admin.pagos.index'));
        //verifica si esque se puede ingresar directamente a las ruta
        $this->seeStatusCode(500);
    }


}
