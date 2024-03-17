<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;

class IndexController extends Controller
{
    public function __invoke()
    {
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));
    }
}
