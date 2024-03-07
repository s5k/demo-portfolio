<?php

namespace PhongTran\Nails\Http\Controllers;

use Illuminate\Support\Facades\View;

class ContactController extends \App\Http\Controllers\Controller
{
    public function index($theme)
    {
        if (View::exists('nails::'. $theme .'.contact') === false) {
            return abort(404);
        }

        return view('nails::'. $theme .'.contact');
    }
}