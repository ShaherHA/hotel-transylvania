@php use Carbon\Carbon; @endphp
<x-app-layout>
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
                                            <td class="py-2 px-4 border bg-blue-100 rounded-full" colspan="{{ $colspan }}">
                                                <div class="text-xs">
                                                    {{ $res->user->name }}
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

                            <!--
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border bg-blue-100 rounded-full" colspan="5">
                                    <div class="text-xs">John Doe (9:00-12:00)</div>
                                </td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                            </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
