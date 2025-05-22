<x-app-layout>
    <div class="flex justify-evenly mt-2">
        <h2 class="text-xl font-extrabold">Room form</h2>
        @if ($action == "PATCH")
                <form class="inline" method="POST" action="/rooms/{{ $room->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold py-2 px-4 rounded-lg shadow-sm transition duration-200">
                        Delete
                    </button>
                </form>
        @endif
    </div>
    <div class="flex justify-center">
        <form id="room-form" method="POST" @if ($action == "PATCH") action="/rooms/{{ $room->id }}" @else action="/rooms" @endif class="space-y-4">
            @csrf
            @if ($action == "PATCH")
                @method('PATCH')
            @endif
            <label for="room-number" class="block text-sm font-medium text-gray-700">Room Number:</label>
            <input @if($action == "PATCH") value="{{ $room->room_number }}" @endif type="text" id="room-number" name="room_number" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">
            @error('room_number')
            <x-error-p>{{ $message }}</x-error-p>
            @enderror

            <label for="base-price" class="block text-sm font-medium text-gray-700">Base Price:</label>
            <input @if($action == "PATCH") value="{{ $room->base_price }}" @endif type="number" id="base-price" name="base_price" required min="0" step="0.01" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">
            @error('base_price')
            <x-error-p>{{ $message }}</x-error-p>
            @enderror

            <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity:</label>
            <input @if($action == "PATCH") value="{{ $room->capacity }}" @endif type="number" id="capacity" name="capacity" required min="1" step="1" max="6" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">
            @error('capacity')
            <x-error-p>{{ $message }}</x-error-p>
            @enderror

            <label for="room-type" class="block text-sm font-medium text-gray-700">Room Type:</label>
            <select id="room-type" name="room_type" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">
                @foreach ($roomTypes as $type)
                    @if ($action == "PATCH")
                        @if ($room->room_type == $type)
                            <option value="{{ $type->value }}" selected>{{ $type->value }}</option>
                        @else
                            <option value="{{ $type->value }}">{{ $type->value }}</option>
                        @endif
                    @else
                        <option value="{{ $type->value }}">{{ $type->value }}</option>
                    @endif
                @endforeach
            </select>
            @error('room_type')
            <x-error-p>{{ $message }}</x-error-p>
            @enderror

            <label for="status" class="block text-sm font-medium text-gray-700">Room Status:</label>
            <select id="status" name="status" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 p-2">
                @foreach ($roomStatuses as $status)
                    @if ($action == "PATCH")
                        @if ($room->status == $status)
                            <option value="{{ $status->value }}" selected>{{ $status->value }}</option>
                        @else
                            <option value="{{ $status->value }}">{{ $status->value }}</option>
                        @endif
                    @else
                    <option value="{{ $status->value }}">{{ $status->value }}</option>
                    @endif
                @endforeach
            </select>
            @error('status')
            <x-error-p>{{ $message }}</x-error-p>
            @enderror

            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Save</button>
        </form>
    </div>

</x-app-layout>
