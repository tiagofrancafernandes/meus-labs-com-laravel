<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class DashboardController extends Controller
{
    public static function routes()
    {
        Route::get('/dashboard', [self::class, 'index'])->name('dashboard.index');
    }

    /**
     * function index
     *
     * @param Request $request
     * @return
     */
    public function index(Request $request)
    {
        return view('pages.dashboard.index');
        // return view('mdb-demo.mdb-dash-demo');
    }
}
