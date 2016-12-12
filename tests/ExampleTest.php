<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/auth/login')
            ->type('12.345.678-9', 'rut')
            ->type('admin', 'password')
            ->press('Ok')
            ->visit('/admin/zonas/create')
            ->type('Talcahuano','nombre')
            ->press('Registrar')
            ->seePageIs('/admin/zonas');
    }
}
