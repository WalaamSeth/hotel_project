<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Hotel;

class ShowController extends Controller
{
    public function __invoke(Hotel $hotel)
    {
        return view('admin.hotel.show', compact('hotel'));
    }
}
