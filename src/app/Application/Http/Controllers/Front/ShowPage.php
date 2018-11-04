<?php

namespace Torb\Application\Http\Controllers\Front;

use Torb\Application\Http\Controllers\Controller;

/**
 * Class ShowPage
 * @package Torb\Application\Http\Controllers\Front
 */
class ShowPage extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('index')
            ->with([
                'user'   => null,
                'events' => [],
            ]);
    }
}
