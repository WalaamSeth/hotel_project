<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Hotel\UpdateRequest;
use App\Models\Hotel;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Hotel $hotel)
    {
        $data = $request->validated();
        $hotel->update($data);
        return view('admin.hotel.show', compact('hotel'));
    }
}
