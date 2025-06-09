<x-app-layout>
    <x-message-lint></x-message-lint>
    <div class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
                <!-- Product Images -->
                <div class="relative w-full md:w-1/2 px-4 mb-8">
                    <img src="{{ asset('storage/' . $room->picture_path) }}" alt="room picture"
                         class="w-full h-auto rounded-lg shadow-md mb-4" id="mainImage">
                    <div class="absolute top-2 left-6">
                                <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $room->room_type->name }}
                                </span>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="w-full md:w-1/2 px-4">
                    <div class="mb-4">
                        <span class="text-2xl font-bold mr-2">Room: {{ $room->room_number }}</span>
                    </div>
                    <p class="text-xl mb-4">${{ $room->base_price }}</p>

                    <p class="text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="pt-4">
                        <a href="{{ route('reservations.create', ['room_id' => $room->id]) }}"
                           class="w-full bg-blue-500 text-white text-center py-3 px-4 rounded-lg font-semibold hover:bg-blue-600 transition-colors duration-300 flex items-center justify-center group">
                            <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                            Reserve Room
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
