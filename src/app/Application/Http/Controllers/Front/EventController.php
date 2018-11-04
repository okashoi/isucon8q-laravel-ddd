<?php

namespace Torb\Application\Http\Controllers\Front;

use Torb\Application\Http\Controllers\Controller;

/**
 * Class EventController
 * @package Torb\Application\Http\Controllers\Front
 */
class EventController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([]);
    }

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
    public function reserve()
    {
        return response()->json([], 202);
    }

    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function cancelReservation()
    {
        return response(null, 204);
    }
}
