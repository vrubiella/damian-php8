<?php

use DamianPhp\Support\Facades\Server;

/*
|--------------------------------------------------------------------------
| Routing configuration.
|--------------------------------------------------------------------------
*/

return [

    /**
     * Path of resource routes.
     *
     * @index GET/HEAD     : '/resource'
     * @create GET/HEAD    : '/resource/create'
     *   @store POST       : '/resource/create'
     * @show GET/HEAD      : '/resource/{id}'
     * @edit GET/HEAD      : '/resource/{id}/edit'
     *   @update PUT/PATCH : '/resource/{id}/edit'
     * @destroy DELETE     : '/resource/{id}/destroy'
     *
     * array
     */
    'resource_path' => [
        'index' => '',
        'create' => 'ajouter',
        'show' => '',
        'edit' => 'edit',
        'destroy' => 'supprimer',
    ],

];
