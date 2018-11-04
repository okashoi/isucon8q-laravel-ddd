<?php

namespace Torb\Application\Http\Controllers\Admin;

use Torb\Application\Http\Controllers\Controller;

/**
 * Class AuthController
 * @package Torb\Application\Http\Controllers\Admin
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
