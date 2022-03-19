<?php


namespace Vieweesp\StoragelinkroutePackage\Tests;

use Vieweesp\StoragelinkroutePackage\Providers\RoutestoragelinkServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
  public function setUp(): void
  {
    parent::setUp();
    // additional setup
  }

  protected function getPackageProviders($app)
  {
    
    return [
        RoutestoragelinkServiceProvider::class,
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    // perform environment setup
    
  }


}