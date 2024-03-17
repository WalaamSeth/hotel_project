<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Room\StoreRequest;
use App\Models\Room;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Room::firstOrCreate($data);
        return redirect()->route('admin.room.index');
    }
}
