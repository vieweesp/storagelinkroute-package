<?php

namespace Vieweesp\StoragelinkroutePackage\Tests\Feature;

use Illuminate\Filesystem\Filesystem;

class RoutestoragelinkTest extends \Vieweesp\StoragelinkroutePackage\Tests\TestCase{

    /** @test */
    function can_create_the_storage_link_from_a_route(){

        //deshabilitar excepciones
        $this->withoutExceptionHandling();
        
        //falsear el filesystem para que simule crearlo. con spy
        $spy = $this->spy(Filesystem::class);

        //la ruta se encuentra
        //$this->get('storage-link')->assertSuccessful();

        //verificar el mensaje
        $this->get('storage-link')->assertSee('The [public/storage] link have been linked.');

        //simple
        //$spy->shouldHaveReceived('link');

        //cambiar los parametros src\Http\Controllers\StorageLinkController.php
        $spy->shouldHaveReceived('link')->with(
            storage_path('app/public'), public_path('storage')
        );

        //verificar que se llama al metodo exist del src\Http\Controllers\StorageLinkController.php
        $spy->shouldHaveReceived('exists')->with(
            public_path('storage')
        );
    }

    /** @test */
    function cannot_try_to_create_the_storage_link_twice(){

        $this->mock(Filesystem::class)->shouldReceive('exists')->andReturn(true);

        //verificar que se recibe el mensaje de src\Http\Controllers\StorageLinkController.php
        $this->get('storage-link')->assertSee('The public/storage directory already exists.');
        
    }
}