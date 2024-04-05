<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;
use App\Models\Room;

class DeleteController extends Controller
{
    public function __invoke( Room $room)
    {
        $room->delete();
        return redirect()->route('admin.hotel.index');
    }
}
