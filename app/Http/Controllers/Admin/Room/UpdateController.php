<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\UpdateRequest;
use App\Models\Room;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Room $room)
    {
        $data = $request->validated();
        $room->update($data);
        return view('admin.room.show', compact('room'));
    }
}
