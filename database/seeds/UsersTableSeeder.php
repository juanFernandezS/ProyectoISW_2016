<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'rut' => '12.345.678-9',
            'nombre' => 'admin',
            'telefono' => '89926339',
            'correo' => 'admin@gmail.com',
            'direccion' => 'maipu 193 b',
            'tipo_de_usuario' => 'administrador',
            'password' => bcrypt('admin'),
            'created_at' => 'now',
            'updated_at' => 'now',
        ]);
    }
}
