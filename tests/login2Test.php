<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class login2Test extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function login2example()
    {
       // $this->assertTrue(true);

        $this->visit('/auth/login')
            ->type('12.345.678-9', 'rut')
            ->type('admin', 'password')
            ->press('Ok')
            //agregar
            ->visit('/admin/estados/create')
            ->type('Vacaciones','nombre')
            ->press('registrar')
            ->seePageIs('/admin/estados');


    }
}
