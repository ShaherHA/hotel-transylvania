<x-app-layout>
    @vite('resources/js/stars-review.js')
    <x-message-lint></x-message-lint>
    <div class="flex justify-center p-6">
        <form method="POST" action="/reviews" class="space-y-6 bg-white p-6 rounded-xl">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Place a review</h2>
            @csrf
            <input type="text" id="room_id" name="room_id" required value="{{ $room->id }}" class="hidden">

            <!-- Room number -->
            <div>
                <label for="room_number" class="block text-sm font-medium text-gray-700 mb-2">Room Number</label>
                <input value="{{ $room->room_number }}" type="text" id="room_number" name="room_number" required disabled class="w-full border border-gray-300 bg-gray-200 text-gray-600 rounded-md shadow-sm p-3 transition duration-200 cursor-not-allowed" placeholder="Room number" aria-disabled="true">
            </div>

            <!-- Review Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Review Content</label>
                <textarea id="content" name="content" rows="4" required class="w-full border border-gray-300 rounded-md shadow-sm p-3 transition duration-200" placeholder="Write your review here..."></textarea>
            </div>

            <!-- Star Rating -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                <div class="flex space-x-2" id="stars">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="flex items-center">
                            <input type="radio" id="star-{{ $i }}" name="rating" value="{{ $i }}" class="hidden" required>
                            <label for="star-{{ $i }}" class="cursor-pointer text-2xl">
                                <i id="star-icon-{{ $i }}" class="fa-duotone fa-solid fa-star text-gray-400"></i>
                            </label>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-500 text-white text-center py-3 px-4 rounded-lg font-semibold hover:bg-blue-600 transition-colors duration-300 flex items-center justify-center group">
                Place review
            </button>
        </form>
    </div>
</x-app-layout>

