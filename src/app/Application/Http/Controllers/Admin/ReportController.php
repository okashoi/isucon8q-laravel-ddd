<?php

namespace Torb\Application\Http\Controllers\Admin;

use Torb\Application\Http\Controllers\Controller;

/**
 * Class ReportController
 * @package Torb\Application\Http\Controllers\Admin
 */
class ReportController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export()
    {
        return response()
            ->download(
                '',
                'report.csv',
                ['Content-Type' => 'text/csv; charset=UTF-8']
            )
            ->deleteFileAfterSend();
    }

    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function exportAll()
    {
        return response()
            ->download(
                '',
                'report.csv',
                ['Content-Type' => 'text/csv; charset=UTF-8']
            )
            ->deleteFileAfterSend();
    }
}
