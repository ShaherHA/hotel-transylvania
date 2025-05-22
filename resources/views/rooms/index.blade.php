<x-app-layout>
    <div class="m-4 flex justify-between items-center">
    <h1 class="text-4xl font-extrabold">Rooms</h1>
    <a href="{{ route('rooms.create') }}" id="new-room-btn" class="bg-green-500 hover:bg-green-600 text-white text-xl font-semibold py-2 px-4 rounded-lg shadow-sm mr-2 transition duration-200">
        New Room
    </a>
    </div>
    <div class="shadow-lg rounded-lg overflow-hidden m-4 md:mx-10">
        <table class="w-full table-fixed">
            <thead>
            <tr class="bg-gray-300">
                <th class="w-1/6 py-4 px-6 text-left text-gray-600 font-bold uppercase">Room Number</th>
                <th class="w-1/6 py-4 px-6 text-left text-gray-600 font-bold uppercase">Price</th>
                <th class="w-1/6 py-4 px-6 text-left text-gray-600 font-bold uppercase">Capacity</th>
                <th class="w-1/6 py-4 px-6 text-left text-gray-600 font-bold uppercase">Type</th>
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
</x-app-layout>
