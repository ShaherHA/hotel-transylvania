<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\RoomTypes;
use App\Enums\RoomStatuses;
use Illuminate\Support\Facades\Storage;

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
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('room_pictures', 'public');
            $validated['picture_path'] = $picturePath;
        }

        // Remove 'picture' from validated data since we're storing 'picture_path'
        unset($validated['picture']);
        Room::create($validated);
        return redirect()->route('rooms.index')->with('success', 'Room created successfully!');
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
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Optional for updates
        ]);

        // Handle file upload for updates
        if ($request->hasFile('picture')) {
            // Delete old picture if it exists
            if ($room->picture_path && Storage::disk('public')->exists($room->picture_path)) {
                Storage::disk('public')->delete($room->picture_path);
            }

            // Store new picture
            $picturePath = $request->file('picture')->store('room_pictures', 'public');
            $validated['picture_path'] = $picturePath;
        }

        // Remove 'picture' from validated data
        unset($validated['picture']);

        $room->update($validated);
        return redirect()->route('rooms.index')->with('success', 'Room updated successfully!');
    }

    public function destroy(Room $room) {
        $room->delete();

        return redirect()->route('rooms.index')->with('status', 'Room deleted!');
    }
}
