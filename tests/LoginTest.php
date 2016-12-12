<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */

    public function pagosCreate(){
        $this->visit('/auth/login')
            ->type('12.345.678-9', 'rut')
            ->type('admin', 'password')
            ->press('Ok')

            //agregar

            ->visit('/admin/pagos/create')
            ->type('redCompra','tipo_pago')
            ->press('registrar')
            ->seePageIs('/admin/pagos');
    }
}
