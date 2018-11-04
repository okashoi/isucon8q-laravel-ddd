<?php

namespace Torb\Application\Http\Controllers\Front;

use Torb\Application\Http\Controllers\Controller;

/**
 * Class UserController
 * @package Torb\Application\Http\Controllers\Front
 */
class UserController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function show()
    {
        return response()->json([]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        return response()->json([], 201);
    }
}
