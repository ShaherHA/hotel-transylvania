<x-app-layout>
    <div class="m-4 flex justify-between items-center">
    <h1 class="text-4xl font-extrabold">Rooms</h1>
    <button id="new-room-btn" class="bg-green-500 hover:bg-green-600 text-white text-xl font-semibold py-2 px-4 rounded-lg shadow-sm mr-2 transition duration-200">
        New Room
    </button>
    </div>
    <div class="shadow-lg rounded-lg overflow-hidden m-4 md:mx-10">
        <table class="w-full table-fixed">
            <thead>
            <tr class="bg-gray-300">
                <th class="w-1/6 py-4 px-6 text-left text-gray-600 font-bold uppercase">Room Number</th>
                <th class="w-1/6 py-4 px-6 text-left text-gray-600 font-bold uppercase">Type</th>
                <th class="w-1/6 py-4 px-6 text-left text-gray-600 font-bold uppercase">Capacity</th>
                <th class="w-1/6 py-4 px-6 text-left text-gray-600 font-bold uppercase">Price</th>
                <th class="w-1/6 py-4 px-6 text-center text-gray-600 font-bold uppercase">Status</th>
                <th class="w-2/6 py-4 px-6 text-center text-gray-600 font-bold uppercase">Actions</th>
            </tr>
            </thead>
            <tbody class="bg-white">
            @foreach($rooms as $room)
                <x-room-row :room="$room"></x-room-row>
            @endforeach
            </tbody>
        </table>
    </div>
    @php
        $roomTypes = App\Enums\RoomTypes::cases(); // Get all room types as an array
    @endphp

    <dialog closed id="room-dialog" class="p-6 bg-white rounded shadow-md">
        <form method="POST" class="space-y-4">
            @csrf
            <label for="room-number" class="block text-sm font-medium text-gray-700">Room Number:</label>
            <input type="text" id="room-number" name="room_number" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">

            <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity:</label>
            <input type="number" id="capacity" name="capacity" required min="1" step="1" max="6" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">

            <label for="base-price" class="block text-sm font-medium text-gray-700">Base Price:</label>
            <input type="number" id="base-price" name="base_price" required min="0" step="0.01" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">

            <label for="room-type" class="block text-sm font-medium text-gray-700">Room Type:</label>
            <select id="room-type" name="room_type" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">
                @foreach ($roomTypes as $type)
                    <option value="{{ $type->value }}">{{ $type->value }}</option>
                @endforeach
            </select>

            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Save</button>
        </form>
    </dialog>
</x-app-layout>
