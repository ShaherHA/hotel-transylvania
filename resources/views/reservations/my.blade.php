<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Upcoming Reservations -->
            <div class="mb-12">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 p-2 rounded-lg mr-3">
                        <i class="fas fa-calendar-alt text-blue-600"></i>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-900">Upcoming Reservations</h2>
                </div>

                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @forelse ($upcoming as $reservation)
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow duration-200">
                        <div class="relative h-48 bg-gray-300">
                            <img src="{{ asset('storage/' . $reservation->room->picture_path) }}"
                                 alt="Room picture"
                                 class="w-full h-full object-cover">
                            <div class="absolute top-3 right-3 bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                                Confirmed
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-lg font-semibold text-gray-900">Room: {{ $reservation->room->room_number }}</h3>
                                <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded">{{ $reservation->room->room_type }}</span>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar mr-2 text-gray-400"></i>
                                    <span>Check-in: {{ $reservation->start_date }}</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar-check mr-2 text-gray-400"></i>
                                    <span>Check-out: {{ $reservation->end_date }}</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-users mr-2 text-gray-400"></i>
                                    <span>Capacity: {{ $reservation->room->capacity }} guests</span>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                                    View Details
                                </button>
                                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full">
                        <div class="text-center py-12 bg-white rounded-xl border border-gray-200">
                            <div class="mx-auto h-16 w-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-calendar-plus text-gray-400 text-xl"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">No upcoming reservations</h3>
                            <p class="text-gray-500 mb-4">You don't have any upcoming hotel stays at the moment.</p>
                            <a href="{{ route('home') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                                Make a Reservation
                            </a>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Past Reservations -->
            <div>
                <div class="flex items-center mb-6">
                    <div class="bg-gray-100 p-2 rounded-lg mr-3">
                        <i class="fas fa-history text-gray-600"></i>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-900">Past Reservations</h2>
                </div>

                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @forelse($past as $pastReservation)
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow duration-200 opacity-90">
                        <div class="relative h-48 bg-gray-300">
                            <img src="{{ asset('storage/' . $pastReservation->room->picture_path) }}"
                                 alt="Room picture"
                                 class="w-full h-full object-cover">
                            <div class="absolute top-3 right-3 bg-gray-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                                Completed
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-lg font-semibold text-gray-900">{{ $pastReservation->room->room_number }}</h3>
                                <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded">{{ $pastReservation->room->room_type }}</span>
                            </div>
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-calendar mr-2 text-gray-400"></i>
                                    <span>{{ $pastReservation->start_date }} - {{ $pastReservation->end_date }}</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-users mr-2 text-gray-400"></i>
                                    <span>Capacity: {{ $pastReservation->room->capacity }} guests</span>
                                </div>
                                <div class="flex items-center text-sm text-green-600">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    <span>Stay completed</span>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-gray-100 text-gray-700 py-2 px-4 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors">
                                    View Receipt
                                </button>
                                <button class="px-4 py-2 border border-blue-300 text-blue-600 rounded-lg text-sm font-medium hover:bg-blue-50 transition-colors">
                                    <i class="fas fa-star"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full">
                        <div class="text-center py-12 bg-white rounded-xl border border-gray-200">
                            <div class="mx-auto h-16 w-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-history text-gray-400 text-xl"></i>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">No past reservations</h3>
                            <p class="text-gray-500">Your completed stays will appear here.</p>
                        </div>
                    </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
