<?php

namespace Vieweesp\StoragelinkroutePackage\routes;

use Illuminate\Support\Facades\Route;
use Vieweesp\StoragelinkroutePackage\Http\Controllers\StorageLinkController;

Route::get('storage-link', StorageLinkController::class);