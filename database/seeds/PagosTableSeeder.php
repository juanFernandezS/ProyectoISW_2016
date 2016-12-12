<?php

use Illuminate\Database\Seeder;

class PagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('pagos')->insert(array(
            'tipo_pago'  => 'efectivo',
            'created_at' => 'now',
            'updated_at' => 'now'
        ));


    }
}
