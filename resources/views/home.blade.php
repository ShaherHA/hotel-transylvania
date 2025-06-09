<x-app-layout>
    @vite('resources/js/home.js')

    <!-- Hero Section -->
    <div class="relative h-screen text-white overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftravelji.com%2Fwp-content%2Fuploads%2FHotel-Tips.jpg&f=1&nofb=1&ipt=a7a2f8eb63c2ae8e24873ec46a0e108ede344c65d2121ac2e0b2e2c27bad58c0" alt="Background Image" class="object-cover object-center w-full h-full" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
            <h1 class="text-5xl font-bold leading-tight mb-4">Welcome to Hotel Transylvania</h1>
            <p class="text-xl text-white mb-8">Experience luxury and comfort in the heart of one of Europe's most enchanting regions. Where modern elegance meets timeless hospitality.</p>
            <a href="#rooms" class="bg-blue-500 text-white hover:bg-blue-700 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Explore Rooms</a>
        </div>
    </div>

    <!-- Rooms Section -->
    <section id="rooms" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Luxurious Rooms</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover comfort and elegance in every room, designed to provide you with an unforgettable stay experience.</p>
            </div>

            <!-- Room Type Filters -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button class="room-filter active border border-gray-300 bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 hover:text-white transition-colors" data-type="all">
                    All Rooms
                </button>
                @foreach($roomTypes as $type)
                    <button class="room-filter bg-white text-gray-700 border border-gray-300 px-6 py-2 rounded-full hover:bg-blue-600 hover:text-white transition-colors" data-type="{{ $type->value }}">
                        {{ $type->name }}
                    </button>
                @endforeach
            </div>

            <!-- Rooms Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="rooms-grid">
                @foreach($rooms as $room)
                    <div class="room-card bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300" data-type="{{ $room->room_type->value }}">
                        <!-- Room Image -->
                        <div class="relative h-64 overflow-hidden">
                            @if($room->picture_path)
                                <img src="{{ asset('storage/' . $room->picture_path) }}"
                                     alt="{{ $room->name }}"
                                     class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                            @else
                                <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            @endif

                            <!-- Room Type Badge -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $room->room_type->name }}
                                </span>
                            </div>
                        </div>

                        <!-- Room Details -->
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $room->name }}</h3>
                                    <p class="text-gray-600 text-sm">Room {{ $room->room_number }}</p>
                                </div>
                                <div class="text-right">
                                    <div class="text-2xl font-bold text-blue-600">
                                        €{{ number_format($room->base_price, 2) }}
                                    </div>
                                    <div class="text-sm text-gray-500">per night</div>
                                </div>
                            </div>

                            @if($room->description)
                                <p class="text-gray-600 mb-4 line-clamp-3">{{ $room->description }}</p>
                            @endif

                            <!-- Room Features -->
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                                    </svg>
                                    {{ $room->capacity ?? 2 }} Guests
                                </span>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $room->size ?? 25 }}m²
                                </span>
                            </div>

                            <!-- Reserve Button -->
                            <div class="pt-4 border-t border-gray-200">
                                <a href="#"
                                   class="w-full bg-blue-500 text-white text-center py-3 px-4 rounded-lg font-semibold hover:bg-blue-600 transition-colors duration-300 flex items-center justify-center group">
                                    <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    Reserve Room
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($rooms->isEmpty())
                <div class="text-center py-12">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">No rooms available</h3>
                    <p class="text-gray-600">Please check back later for available rooms.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Why Choose Hotel Transylvania?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Premium Service</h3>
                    <p class="text-gray-600">24/7 concierge service and personalized attention to every guest.</p>
                </div>

                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 010 2H4a1 1 0 01-1-1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Perfect Location</h3>
                    <p class="text-gray-600">Located in the heart of Transylvania with easy access to all attractions.</p>
                </div>

                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Luxury Amenities</h3>
                    <p class="text-gray-600">Spa, fitness center, fine dining, and all modern comforts you need.</p>
                </div>
            </div>
        </div>
    </section>

    <x-footer></x-footer>
</x-app-layout>
