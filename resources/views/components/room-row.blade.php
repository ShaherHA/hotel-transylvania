<tr class="hover:bg-gray-50">
    <td class="py-4 px-6 border-b border-gray-200">{{ $room->room_number }}</td>
    <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $room->room_type }}</td>
    <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $room->capacity }}</td>
    <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $room->base_price }}</td>
    <td class="py-4 px-6 border-b border-gray-200 text-center">
        @switch($room->status->value)
            @case("out of service")
                <span class="bg-red-600 text-white py-1 px-3 rounded-full font-medium inline-block">{{ $room->status }}</span>
                @break
            @case("available")
                <span class="bg-green-500 text-white py-1 px-3 rounded-full font-medium inline-block">{{ $room->status }}</span>
                @break
            @case("needs cleaning")
                <span class="bg-yellow-500 text-white py-1 px-3 rounded-full font-medium inline-block">{{ $room->status }}</span>
                @break
            @case("occupied")
                <span class="bg-red-400 text-white py-1 px-3 rounded-full font-medium inline-block">{{ $room->status }}</span>
                @break

        @endswitch
    </td>
    <td class="py-4 px-6 border-b border-gray-200 text-center">
        <button class="bg-blue-500 hover:bg-blue-600 text-white text-xs font-semibold py-2 px-4 rounded-lg shadow-sm mr-2 transition duration-200">
            View
        </button>
        <button class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-semibold py-2 px-4 rounded-lg shadow-sm mr-2 transition duration-200">
            Edit
        </button>
        <button class="bg-red-500 hover:bg-red-600 text-white text-xs font-semibold py-2 px-4 rounded-lg shadow-sm transition duration-200">
            Delete
        </button>
    </td>
</tr>
