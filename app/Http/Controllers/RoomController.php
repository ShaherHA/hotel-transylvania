<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function index() {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'room_number' => 'required',
            'base_price' => 'required|numeric|min:1',
            'capacity' => 'required|numeric|min:1|max:6',
            'room_type' => 'required|in:single,double,suite,deluxe',
        ]);

        Room::create($validated);
        return back()->with('status', 'Room created!');
    }
}
