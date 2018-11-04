<?php

namespace Torb\Application\Http\Controllers\Front;

use Torb\Application\Http\Controllers\Controller;

/**
 * Class AuthController
 * @package Torb\Application\Http\Controllers\Front
 */
class AuthController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        return response()->json([]);
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function logout()
    {
        return response(null, 204);
    }
}
