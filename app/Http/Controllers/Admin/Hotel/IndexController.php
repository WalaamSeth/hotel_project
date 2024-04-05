<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Hotel;


class IndexController extends Controller
{
    public function __invoke()
    {
        $hotels = Hotel::all();
        return view('admin.hotel.index', compact('hotels'));
    }
}
