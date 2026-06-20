<?php

use Illuminate\Support\Facades\Route;

// Had l-code kay-goul l-Laravel: 
// "Ay lien y-dkhl lih l-klyan (ghir ila kan m-bdi b /api), wrih l-fichier index.html"

Route::get('/{any}', function () {
    return file_get_contents(public_path('index.html'));
})->where('any', '^(?!api).*$');