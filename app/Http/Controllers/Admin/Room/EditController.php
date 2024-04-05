<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;

class EditController extends Controller
{
    public function __invoke(Room $room)
    {
        return view('admin.room.edit', compact('room'));
    }
}
