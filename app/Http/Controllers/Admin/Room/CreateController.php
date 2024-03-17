<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.rooms.create');
    }
}
