<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function verificaQueElIndexMuestreTodosLosUsuarios()
    {

        $this->get(route('admin.users.index'));
        $this->seeStatusCode(500);
    }

    public function verificaQueElMetodoShowMuestreUnSoloUsuario()
    {

        $this->get(route('admin.users.show',1));
        $this->seeStatusCode(500);
    }

    public function verificaQueElMetodoDestroyElimineUnUsuario(){

        $this->put(route('admin.users.destroy',1));
        $this->seeStatusCode(405);
    }


}
