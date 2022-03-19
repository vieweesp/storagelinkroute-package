<?php

namespace Vieweesp\StoragelinkroutePackage\Providers;

use Illuminate\Support\ServiceProvider;

class RoutestoragelinkServiceProvider extends ServiceProvider {

    public function boot(){
        $this->loadRoutesFrom( __DIR__ . '/../../' . 'routes/web.php');
    }
}