<?php

namespace PhongTran\Nails\Http\Controllers;

use Illuminate\Support\Facades\View;

class ServiceController extends \App\Http\Controllers\Controller
{
    public function index($theme)
    {
        if (View::exists('nails::'. $theme .'.service') === false) {
            return abort(404);
        }

        return view('nails::'. $theme .'.service');
    }
}