<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EstadosControllerTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function estadoindex()
    {
       //$this->assertTrue(true);
        $this->get(route('admin.estados.index'));
        //verifica si es que se puede ingresar directamente a las rutas
        $this->seeStatusCode(500);

    }
}
