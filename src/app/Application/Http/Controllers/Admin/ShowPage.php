<?php

namespace Torb\Application\Http\Controllers\Admin;

use Torb\Application\Http\Controllers\Controller;

/**
 * Class ShowPage
 * @package Torb\Application\Http\Controllers\Admin
 */
class ShowPage extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('admin')
            ->with([
                'administrator' => null,
                'events'        => [],
            ]);
    }
}
