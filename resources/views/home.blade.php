<x-app-layout>
    <script defer src="resources/js/home.js"></script>
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
                                    <i class="fa-solid fa-users mr-2"></i>
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
                                <a href="{{ route('rooms.show', ['room' => $room->id]) }}"
                                   class="w-full bg-blue-500 text-white text-center py-3 px-4 rounded-lg font-semibold hover:bg-blue-600 transition-colors duration-300 flex items-center justify-center group">
                                    View Details
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
                        <svg class="w-8 h-8 text-blue-500" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:1.91px;}</style></defs><polygon class="cls-1" points="22.5 22.5 1.5 22.5 1.5 20.59 2.46 18.68 21.55 18.68 22.5 20.59 22.5 22.5"/><path class="cls-1" d="M11.75,5.32h.49a9.3,9.3,0,0,1,9.3,9.3v.25a0,0,0,0,1,0,0H2.45a0,0,0,0,1,0,0v-.25A9.3,9.3,0,0,1,11.75,5.32Z"/><line class="cls-1" x1="12" y1="1.5" x2="12" y2="5.32"/><line class="cls-1" x1="9.14" y1="1.5" x2="14.86" y2="1.5"/><rect class="cls-1" x="5.32" y="14.86" width="13.36" height="3.82"/></svg>
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
