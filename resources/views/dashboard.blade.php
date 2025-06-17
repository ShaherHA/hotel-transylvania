<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold">Dashboard Overview</h3>
                    <div class="mt-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-blue-100 p-4 rounded-lg shadow">
                                <h4 class="font-semibold">Total Rooms</h4>
                                <p class="text-2xl">{{ $roomsAmount }}</p>
                            </div>
                            <div class="bg-green-100 p-4 rounded-lg shadow">
                                <h4 class="font-semibold">Upcoming Reservations</h4>
                                <p class="text-2xl">{{ $reservationsAmount }}</p>
                            </div>
                            <div class="bg-yellow-100 p-4 rounded-lg shadow">
                                <h4 class="font-semibold">Total Customers</h4>
                                <p class="text-2xl">{{ $customersAmount }}</p>
                            </div>
                            <div class="bg-red-100 p-4 rounded-lg shadow">
                                <h4 class="font-semibold">Rooms Out Of Service</h4>
                                <p class="text-2xl">{{ $amountOutOfService }}</p>
                            </div>
                            <div class="bg-yellow-100 p-4 rounded-lg shadow">
                                <h4 class="font-semibold">Rooms Need Cleaning</h4>
                                <p class="text-2xl">{{ $amountCleaning }}</p>
                            </div>
                            <div class="bg-green-100 p-4 rounded-lg shadow">
                                <h4 class="font-semibold">Available Rooms</h4>
                                <p class="text-2xl">{{ $amountAvailable }}</p>
                            </div>
                            <div class="bg-purple-100 p-4 rounded-lg shadow col-span-1 md:col-span-3">
                                <h4 class="font-semibold">Last Quarter Turnover</h4>
                                <p class="text-2xl">${{ number_format($lastQuarterTurnOver, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
