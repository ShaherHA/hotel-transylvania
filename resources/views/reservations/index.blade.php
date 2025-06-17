@php
    use Carbon\Carbon;
    $colors = [
    "bg-blue-400",
    "bg-red-400",
    "bg-green-400",
    "bg-yellow-400",
    "bg-purple-400",
    "bg-pink-400",
    "bg-indigo-400",
    "bg-teal-400",
    "bg-orange-400",
    "bg-gray-400",
    "bg-lime-400",
    "bg-cyan-400",
    "bg-emerald-400",
    "bg-fuchsia-400",
    "bg-rose-400",
    "bg-violet-400",
    "bg-sky-400",
    "bg-amber-400",
    ];
@endphp
<x-app-layout>
    @vite('resources/js/open-res-edit-form.js')
    <x-message-lint></x-message-lint>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-semibold">Room Reservations | {{ $date->toDateString() }}</h1>
                        <form action="/reservations" method="GET" class="flex items-center">
                            <input type="date" name="date" value="{{ $date->toDateString() }}" required class="border border-gray-300 rounded-md p-2 mr-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="submit" value="View" class="bg-blue-500 text-white rounded-md p-2 hover:bg-blue-600 transition duration-200">
                        </form>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                            <tr class="bg-gray-100 text-gray-700 text-xs">
                                <th class="py-2 px-4 border sticky bg-gray-100 z-10">Room</th>
                                @foreach($dates as $date)
                                    <x-reservation-head>{{ $date->shortDayName }} {{ $date->format('m-d') }}</x-reservation-head>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td class="py-2 px-4 border font-medium sticky left-0 bg-white z-10">{{ $room->room_number }}</td>

                                    @php
                                        $i = 0;
                                    @endphp

                                    @while($i < 14)
                                        @php
                                            $hasReservation = false;
                                            $colspan = 1;
                                            $reservation = null;
                                        @endphp

                                        {{-- Check if current date has a reservation --}}
                                        @foreach($room->reservations as $res)
                                            @php
                                                if ($res->start_date === $dates[$i]->toDateString()) {
                                                    $start_date = Carbon::parse($res->start_date);
                                                    $end_date = Carbon::parse($res->end_date);
                                                    $colspan = $start_date->diffInDays($end_date) + 1;
                                                    $hasReservation = true;
                                                    $reservation = $res;
                                                    break; // Exit the loop once we find a match
                                                }
                                            @endphp
                                        @endforeach

                                        @if ($hasReservation)
                                            <td class="py-2 px-4 border {{ $colors[array_rand($colors)] }} rounded-full" colspan="{{ $colspan }}">
                                                <div class="flex justify-between items-center relative">
                                                    <p class="text-s text-white">{{ $reservation->user->name }}</p>
                                                    <button class="bg-black text-white rounded-md p-2 hover:bg-gray-600 transition duration-200">Edit</button>

                                                    <!-- Form Container -->
                                                    <div class="absolute border rounded-xl left-3/4 top-10 mt-2 bg-gray-400 z-10 hidden form-container p-2">
                                                        <form class="flex justify-end" method="POST" action="/reservations/{{ $reservation->id }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold py-2 px-4 rounded-lg shadow-sm transition duration-200">
                                                                <svg
                                                                    stroke="currentColor"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    class="h-5 w-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                >
                                                                    <path
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                                        stroke-width="2"
                                                                        stroke-linejoin="round"
                                                                        stroke-linecap="round"
                                                                    ></path>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                        <form method="POST" action="/reservations/{{ $res->id }}">
                                                            @csrf
                                                            @method('PATCH')
                                                            <div class="mb-2">
                                                                <label for="start_date" class="block text-white mb-1">Start Date:</label>
                                                                <input type="date" id="start_date" name="start_date" value="{{ $res->start_date }}" required class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="end_date" class="block text-white mb-1">End Date:</label>
                                                                <input type="date" id="end_date" name="end_date" value="{{ $res->end_date }}" required class="border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                            </div>
                                                            <input type="submit" value="Submit" class="bg-blue-500 text-white rounded-md p-2 hover:bg-blue-600 transition duration-200 mt-2">
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            @php
                                                $i += $colspan; // Skip the days covered by this reservation
                                            @endphp
                                        @else
                                            <td class="py-2 px-4 border"></td>
                                            @php
                                                $i++; // Move to next day
                                            @endphp
                                        @endif
                                    @endwhile
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
