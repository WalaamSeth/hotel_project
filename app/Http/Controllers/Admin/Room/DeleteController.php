<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\UpdateRequest;
use App\Models\Room;

class DeleteController extends Controller
{
    public function __invoke( Room $room)
    {
        $room->delete();
        return redirect()->route('admin.room.index');
    }
}
