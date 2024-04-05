<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Hotel\StoreRequest;
use App\Models\Hotel;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Hotel::firstOrCreate($data);
        return redirect()->route('admin.hotel.index');
    }
}
