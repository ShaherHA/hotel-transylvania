<x-app-layout>
    <x-message-lint></x-message-lint>
    <div class="flex justify-center p-6">
        <div class="bg-white p-6 rounded-xl">
            <div class="flex justify-between">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Reserve your room</h2>
                <form class="flex justify-end" method="POST" action="/reservations/{{ $reservation->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-sm transition duration-200">
                        Cancel reservation
                    </button>
                </form>
            </div>

        <form method="POST" action="/reservations/{{ $reservation->id }}" class="space-y-6">
            @csrf
            @method('PATCH')
            <input type="text" id="room_id" name="room_id" required value="{{ $room->id }}" class="hidden">

            <!-- User name -->
            <div>
                <label for="user_name" class="block text-sm font-medium text-gray-700 mb-2">Your name</label>
                <input value="{{ auth()->user()->name }}" type="text" id="user_name" name="user_name" required disabled class="w-full border border-gray-300 bg-gray-200 text-gray-600 rounded-md shadow-sm p-3 transition duration-200 cursor-not-allowed" placeholder="Your name" aria-disabled="true">
            </div>

            <!-- Room number -->
            <div>
                <label for="room_number" class="block text-sm font-medium text-gray-700 mb-2">Room Number</label>
                <input value="{{ $room->room_number }}" type="text" id="room_number" name="room_number" required disabled class="w-full border border-gray-300 bg-gray-200 text-gray-600 rounded-md shadow-sm p-3 transition duration-200 cursor-not-allowed" placeholder="Room number" aria-disabled="true">
            </div>

            <!-- Start Date -->
            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-700 mb-2">Start Date:</label>
                <input value="{{ $reservation->start_date }}" type="date" id="start_date" name="start_date" required class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition duration-200">
            </div>

            <!-- End Date -->
            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-700 mb-2">End Date:</label>
                <input value="{{ $reservation->end_date }}" type="date" id="end_date" name="end_date" required class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition duration-200">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white text-center py-3 px-4 rounded-lg font-semibold hover:bg-blue-600 transition-colors duration-300 flex items-center justify-center group">
                <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                </svg>
                Confirm changes
            </button>
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">Be Warned</p>
                <p>Please be aware that this is not a real hotel, your reservation is purely fictional</p>
            </div>
        </form>
        </div>

    </div>
</x-app-layout>
