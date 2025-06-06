<x-app-layout>
    <div class="max-w-6xl mx-auto p-6">
        <!-- Header and Delete Button -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-extrabold text-gray-800">Room Form</h2>
            @if ($action == "PATCH")
                <form class="inline" method="POST" action="/rooms/{{ $room->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 hover:bg-red-600 text-white text-sm font-semibold py-2 px-4 rounded-lg shadow-sm transition duration-200">
                        Delete Room
                    </button>
                </form>
            @endif
        </div>

        <!-- Main Content: Form and Image Side by Side -->
        <div class="flex gap-3">
            <!-- Room Form -->
            <div class="w-full bg-white p-6 rounded-lg shadow-md">
                <form id="room-form"
                      method="POST"
                      action="@if ($action == 'PATCH')/rooms/{{ $room->id }}@else/rooms/@endif"
                      enctype="multipart/form-data"
                      class="space-y-6">
                    @csrf
                    @if ($action == "PATCH")
                        @method('PATCH')
                    @endif

                    <!-- Room Number -->
                    <div>
                        <label for="room-number" class="block text-sm font-medium text-gray-700 mb-2">
                            Room Number:
                        </label>
                        <input @if($action == "PATCH") value="{{ $room->room_number }}" @endif
                        type="text"
                               id="room-number"
                               name="room_number"
                               required
                               class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition duration-200">
                        @error('room_number')
                        <x-error-p>{{ $message }}</x-error-p>
                        @enderror
                    </div>

                    <!-- Base Price -->
                    <div>
                        <label for="base-price" class="block text-sm font-medium text-gray-700 mb-2">
                            Base Price:
                        </label>
                        <input @if($action == "PATCH") value="{{ $room->base_price }}" @endif
                        type="number"
                               id="base-price"
                               name="base_price"
                               required
                               min="0"
                               step="0.01"
                               class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition duration-200">
                        @error('base_price')
                        <x-error-p>{{ $message }}</x-error-p>
                        @enderror
                    </div>

                    <!-- Capacity -->
                    <div>
                        <label for="capacity" class="block text-sm font-medium text-gray-700 mb-2">
                            Capacity:
                        </label>
                        <input @if($action == "PATCH") value="{{ $room->capacity }}" @endif
                        type="number"
                               id="capacity"
                               name="capacity"
                               required
                               min="1"
                               step="1"
                               max="6"
                               class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition duration-200">
                        @error('capacity')
                        <x-error-p>{{ $message }}</x-error-p>
                        @enderror
                    </div>

                    <!-- Picture upload -->
                    <div>
                        <label for="picture" class="block text-sm font-medium text-gray-700 mb-2">
                            Room Picture:
                        </label>
                        <input type="file"
                               id="picture"
                               name="picture"
                               @if($action == "POST") required @endif
                               accept="image/*"
                               class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition duration-200">
                        @if($action == "PATCH")
                            <p class="text-sm text-gray-500 mt-1">Leave empty to keep current image</p>
                        @endif
                        @error('picture')
                        <x-error-p>{{ $message }}</x-error-p>
                        @enderror
                    </div>

                    <!-- Room Type -->
                    <div>
                        <label for="room-type" class="block text-sm font-medium text-gray-700 mb-2">
                            Room Type:
                        </label>
                        <select id="room-type"
                                name="room_type"
                                required
                                class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition duration-200">
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
                    </div>

                    <!-- Room Status -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-2">
                            Room Status:
                        </label>
                        <select id="status"
                                name="status"
                                required
                                class="w-full border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 p-3 transition duration-200">
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
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="w-full bg-blue-600 text-white font-semibold py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-200">
                        @if ($action == "PATCH") Update Room @else Create Room @endif
                    </button>
                </form>
            </div>

            <!-- Room Image -->
            <div class="w-4/5 flex align-middle">
                <img class=" object-cover rounded-lg shadow-md"
                     @if(isset($room))
                         src="/storage/{{ $room->picture_path }}"
                     @else
                         src="https://placehold.co/1200x1200"
                     @endif
                     alt="Room Picture">
            </div>
        </div>
    </div>
</x-app-layout>
