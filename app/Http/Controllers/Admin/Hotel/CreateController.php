<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.hotel.create');
    }
}
