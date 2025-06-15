<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Room;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create(Request $request) {
        $room = Room::findOrFail($request->input('room_id'));


        return view('reviews.create', compact('room'));
    }

    public function store(Request $request) {
        $validated =  $request->validate([
            'room_id' =>  'required',
            'content' => 'required|min:5|max:255',
            'rating' =>  'required|numeric|min:1|max:5',
        ]);

        $validated["user_id"] = auth()->id();

        Review::create($validated);

        return redirect()->back()->with('success', "Review added successfully");
    }
}
