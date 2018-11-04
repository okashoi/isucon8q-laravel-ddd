<?php

namespace Torb\Application\Http\Controllers;

/**
 * Class Initialize
 * @package Torb\Application\Http\Controllers
 */
class Initialize extends Controller
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function __invoke()
    {
        exec(database_path('init.sh'));

        return response(null, 204);
    }
}
