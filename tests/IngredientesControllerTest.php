<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IngredientesControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function MetodoQueRetornaTodosLosIngredientes()
    {
        $this->get(route('admin.coberturas.index'));
        $this->seeStatusCode(500);
    }

    public function metodoQueRetornaUnIngredienteEnParticular()
    {
        $this->get(route('admin.ingredientes.show',1));
        $this->seeStatusCode(500);
    }

    public function metodoQUeDestruyeUnIngredienteEnParticular()
    {
        $this->put(route('admin.ingredientes.destroy',1));
        $this->seeStatusCode(405);
    }


    public function creaUnIngrediente(){
        $faker =Faker\Factory::create();

        $this->visit('/auth/login')
            ->type('12.345.678-9', 'rut')
            ->type('admin', 'password')
            ->press('Ok')
            ->visit('/admin/ingredientes/create')
            ->type($faker->colorName,'nombre')
            ->type($faker->numberBetween($min = 0, $max = 10000),'cantidad_unitaria')
            ->press('registrar')
            ->seePageIs('/admin/ingredientes');
    }
}
