@php use Carbon\Carbon; @endphp
<x-app-layout>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-6">Room Reservations</h1>

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

                                    @foreach($dates as $date)
                                        @php
                                            $hasReservation = false;
                                            $colspan = 1; // Default colspan
                                        @endphp

                                        @foreach($room->reservations as $reservation)
                                            @php
                                                if ($reservation->start_date === $date->toDateString()) {
                                                    echo $reservation->start_date;
                                                    echo $date->toDateString();
                                                $start_date = Carbon::parse($reservation->start_date);
                                                $end_date = Carbon::parse($reservation->end_date);
                                                $colspan = intval($start_date->diffInDays($end_date) + 1);
                                                $hasReservation = true;
                                                }
                                            @endphp
                                        @endforeach

                                        @if ($hasReservation)
                                            <td class="py-2 px-4 border bg-blue-100 rounded-full" colspan="{{ $colspan }}">
                                                <div class="text-xs">John Doe (9:00-12:00)</div>
                                            </td>
                                        @elseif (!$hasReservation || $colspan === 1)
                                            <td class="py-2 px-4 border"></td>
                                        @endif
                                    @endforeach
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
