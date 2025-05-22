<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\RoomTypes;
use App\Enums\RoomStatuses;

class RoomController extends Controller
{
    public function index() {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create() {

        $roomTypes = RoomTypes::cases(); // Get all room types as an array
        $roomStatuses = RoomStatuses::cases(); // Get all room types as an array
        $action = "POST";

        return view('rooms.form', compact('roomTypes', 'roomStatuses','action'));
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'room_number' => 'required',
            'base_price' => 'required|numeric|min:1',
            'capacity' => 'required|numeric|min:1|max:6',
            'room_type' => 'required|in:' . implode(',', RoomTypes::values()),
            'status' => 'required|in:' . implode(',', RoomStatuses::values()),
        ]);

        Room::create($validated);
        return redirect()->route('rooms.index')->with('success', 'Room created!');
    }

    public function edit(Room $room) {
        $roomTypes = RoomTypes::cases(); // Get all room types as an array
        $roomStatuses = RoomStatuses::cases(); // Get all room types as an array
        $action = "PATCH";

        return view('rooms.form', compact('room', 'roomTypes', 'roomStatuses', 'action'));
    }

    public function update(Request $request, Room $room) {

        $validated = $request->validate([
            'room_number' => 'required',
            'base_price' => 'required|numeric|min:1',
            'capacity' => 'required|numeric|min:1|max:6',
            'room_type' => 'required|in:' . implode(',', RoomTypes::values()),
            'status' => 'required|in:' . implode(',', RoomStatuses::values()),
        ]);

        $room->update($validated);

        return redirect()->route('rooms.index')->with('status', 'Room updated!');
    }

    public function destroy(Room $room) {
        $room->delete();

        return redirect()->route('rooms.index')->with('status', 'Room deleted!');
    }
}
