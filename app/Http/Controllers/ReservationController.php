<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

use App\Models\Room;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request) {

        $date = CarbonImmutable::now();

        if ($request->input('date')) {
            $date = CarbonImmutable::parse($request->input('date'));
        }

        $dates = [];

        for ($i = 0; $i < 14; $i++) {
            $dates[] = CarbonImmutable::parse($date->addDays($i)->toDateString());
        }

        $rooms = Room::with('reservations')->get();

        return view('reservations.index', compact('dates', 'rooms', 'date'));
    }



    // Method to update a reservation
    public function update(Request $request, Reservation $reservation)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Check for overlapping reservations, passing room_id and reservation id
        $overlapping = $this->checkOverlap($reservation->room_id, $validated['start_date'], $validated['end_date'], $reservation->id);

        if ($overlapping) {
            return redirect()->back()->withErrors('Reservation overlaps with another reservation. Did not update.');
        }

        // Update the reservation
        $reservation->update($validated);

        return redirect()->back()->with('success', 'Reservation updated successfully.');
    }


    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->back()->with('success', 'Reservation deleted successfully.');
    }

    public function checkOverlap($roomId, $start_date, $end_date, $reservationId = null) {
        $query = Reservation::where('room_id', $roomId)
            ->where(function ($query) use ($start_date, $end_date) {
                $query->whereBetween('start_date', [$start_date, $end_date])
                    ->orWhereBetween('end_date', [$start_date, $end_date])
                    ->orWhere(function ($query) use ($start_date, $end_date) {
                        $query->where('start_date', '<=', $start_date)
                            ->where('end_date', '>=', $end_date);
                    });
            });

        // Exclude the current reservation if an ID is provided
        if ($reservationId) {
            $query->where('id', '!=', $reservationId);
        }

        return $query->exists();
    }

}
