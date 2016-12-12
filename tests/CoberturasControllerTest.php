<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CoberturasControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_index_method_returns_all_coberturas()
    {
        //verifica si es posible entrar directamente a la ruta indicada
        $this->get(route('admin.coberturas.index'));
        $this->seeStatusCode(500);
    }

    public function test_show_method_returns_a_particular_cobertura()
    {
        //verifica si se puede entrar directamente a la ruta indicada
        $this->get(route('admin.coberturas.show',1));
        $this->seeStatusCode(500);
    }

    public function test_destroy_method_return_particular_cobertura()
    {
        $this->put(route('admin.coberturas.destroy',1));
        $this->seeStatusCode(405);
    }

    public function test_create_method_create_cobertura(){
        $faker =Faker\Factory::create();

        $this->visit('/auth/login')
            ->type('12.345.678-9', 'rut')
            ->type('admin', 'password')
            ->press('Ok')
            ->visit('/admin/coberturas/create')
            ->type($faker->colorName,'nombre')
            ->type($faker->numberBetween($min = 2000, $max = 20000),'precio')
            ->press('registrar')
            ->seePageIs('/admin/coberturas');
    }
}
