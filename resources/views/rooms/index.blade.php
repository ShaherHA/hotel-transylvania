<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h1 class="font-semibold text-4xl text-gray-800 leading-tight">Rooms</h1>
            <a href="{{ route('rooms.create') }}" id="new-room-btn" class="bg-green-500 hover:bg-green-600 text-white text-xl font-semibold py-2 px-4 rounded-lg shadow-sm mr-2 transition duration-200">
                New Room
            </a>
        </div>
    </x-slot>

    <div class="shadow-lg rounded-lg overflow-hidden m-4 md:mx-10 text-center">
        <table class="w-full">
            <thead>
            <tr class="bg-gray-300">
                <th class="w-1/6 py-4 px-6 text-gray-600 font-bold uppercase">Picture</th>
                <th class="w-1/6 py-4 px-6 text-gray-600 font-bold uppercase">Room Number</th>
                <th class="w-1/6 py-4 px-6 text-gray-600 font-bold uppercase">Price</th>
                <th class="w-1/6 py-4 px-6 text-gray-600 font-bold uppercase">Capacity</th>
                <th class="w-1/6 py-4 px-6 text-gray-600 font-bold uppercase">Type</th>
                <th class="w-1/6 py-4 px-6 text-gray-600 font-bold uppercase">Status</th>
                <th class="w-2/6 py-4 px-6 text-gray-600 font-bold uppercase">Actions</th>
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
