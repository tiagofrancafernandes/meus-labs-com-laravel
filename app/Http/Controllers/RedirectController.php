<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * function toDashboard
     *
     * @param Request $request
     * @return
     */
    public function toDashboard(Request $request)
    {
        return redirect()->route('dashboard.index');
    }
}
