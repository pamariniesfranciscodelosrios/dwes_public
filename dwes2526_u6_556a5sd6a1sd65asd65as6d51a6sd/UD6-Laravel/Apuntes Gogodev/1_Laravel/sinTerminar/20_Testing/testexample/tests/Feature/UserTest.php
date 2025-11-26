<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;




class UserTest extends TestCase
{
    public function test_set_database_config(): void
    {
        //Llamamos al seed para que resetee la base de datos
        Artisan::call('migrate:reset');
        //Llamamos al migrate para crear la base de datos
        Artisan::call('migrate');
        //Llamamos al seed para crear los datos
        Artisan::call('db:seed');

        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_get_user_list(): void
    {
        //En el metodo GET le podemos también pasar los headers
        $response = $this->get('/api/users');
        //Con assert podemos comprobar estado, si se ha descargado, si acceso prohibido...
        $response -> assertStatus(200);
        //Comprobamos que el array tiene las propiedades que nos interesa
        $response -> assertJsonStructure([
            ['id','name','email','email_verified_at','created_at','updated_at']
        ]);
        //valido que existe un elemento en el array con el nombre Juanjo
        $response -> assertJsonFragment([
            'name' => 'Juanjo'
        ]);
        //valido que existen 4 elementos
        $response -> assertJsonCount(4);
    }

    public function test_get_detail(): void
    {
        $response = $this->get('/api/users/1');
        $response -> assertStatus(200);
        //Comprobamos que el array tiene las propiedades que nos interesa, pero ahora no es array de usuarios si no un solo objeto
        $response -> assertJsonStructure(['id','name','email','email_verified_at','created_at','updated_at' ]);
        $response -> assertJsonFragment(['name' => 'Juanjo' ]);
    }

    //Ahora pedimos datos que NO existe
    public function test_get_non_existing_user_detail(): void   
    {
        //Comprobaos que ese usuario NO existe
        $response = $this->get('/api/users/100');
        $response -> assertStatus(404);
    }


}
