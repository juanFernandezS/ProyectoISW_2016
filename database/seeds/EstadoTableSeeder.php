<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('estados')->insert(array(
            'nombre'  => 'Habilitado',
            'created_at' => 'now',
            'updated_at' => 'now'
        ));


    }
}