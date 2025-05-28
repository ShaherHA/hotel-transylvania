<?php

namespace App\Http\Controllers;

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

        // for each room display the reservations in a date range
        // date range is two weeks from current date OR user submitted date

        return view('reservations.index', compact('dates', 'rooms'));
    }
}
