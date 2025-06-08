<?php

namespace App\Http\Controllers;

use App\Enums\RolesEnum;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $date = Carbon::now()->toDateString();
        $roomsAmount = Room::count();
        $reservationsAmount = Reservation::where('start_date', '>=',  $date)->count();
        $customersAmount = User::where('role', RolesEnum::CUSTOMER)->count();

        $lastQuarterTurnOver = 43240;

        return view('dashboard', compact('roomsAmount', 'reservationsAmount','customersAmount' ,'lastQuarterTurnOver'));
    }
}
