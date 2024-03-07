<?php

namespace PhongTran\Nails\Http\Controllers;

use Illuminate\Support\Facades\View;

class GalleryController extends \App\Http\Controllers\Controller
{
    public function index($theme)
    {
        if (View::exists('nails::'. $theme .'.gallery') === false) {
            return abort(404);
        }

        return view('nails::'. $theme .'.gallery');
    }
}