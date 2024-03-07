<?php

namespace PhongTran\Nails\Http\Controllers;

use Illuminate\Support\Facades\View;

class CouponController extends \App\Http\Controllers\Controller
{
    public function index($theme)
    {
        if (View::exists('nails::'. $theme .'.coupons') === false) {
            return abort(404);

        }
        return view('nails::'. $theme .'.coupons');
    }
}