<?php

namespace Vieweesp\StoragelinkroutePackage\Http\Controllers;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class StorageLinkController extends Command{
    

    
    public function __invoke(Filesystem $filesystem)
    {
       
        //Artisan::call('storage:link');

        //copiado codiog de vendor\laravel\framework\src\Illuminate\Foundation\Console\StorageLinkCommand.php

    

    
        //if (file_exists($link) && ! $this->isRemovableSymlink($link, $this->option('force'))) {
        if ($filesystem->exists(public_path('storage'))) {
            
            return "The public/storage directory already exists.";
            
        }

        $filesystem->link(
            storage_path('app/public'), public_path('storage')
        );

               

        //$this->info('The links have been created.');
        return 'The [public/storage] link have been linked.';

    }
}