<tr class="hover:bg-gray-50">
    <td class="px-2 py-2 border-b border-gray-200"><img src="/storage/{{ $room->picture_path }}" alt="room-picture"> </td>
    <td class="py-4 px-6 border-b border-gray-200">{{ $room->room_number }}</td>
    <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $room->base_price }}</td>
    <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $room->capacity }}</td>
    <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $room->room_type }}</td>
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
        <a href="/rooms/{{ $room->id }}/edit" class="room-edit-btn bg-yellow-500 hover:bg-yellow-600 text-white text-s font-semibold py-2 px-4 rounded-lg shadow-sm mr-2 transition duration-200">
            Edit
        </a>
    </td>
</tr>
