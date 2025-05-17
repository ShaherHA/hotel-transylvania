<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold mb-6">Room Reservations</h1>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                            <tr class="bg-gray-100 text-gray-700 text-xs">
                                <th class="py-2 px-4 border sticky left-0 bg-gray-100 z-10">Room</th>
                                <th class="py-2 px-4 border">8:00</th>
                                <th class="py-2 px-4 border">9:00</th>
                                <th class="py-2 px-4 border">10:00</th>
                                <th class="py-2 px-4 border">11:00</th>
                                <th class="py-2 px-4 border">12:00</th>
                                <th class="py-2 px-4 border">13:00</th>
                                <th class="py-2 px-4 border">14:00</th>
                                <th class="py-2 px-4 border">15:00</th>
                                <th class="py-2 px-4 border">16:00</th>
                                <th class="py-2 px-4 border">17:00</th>
                                <th class="py-2 px-4 border">18:00</th>
                                <th class="py-2 px-4 border">19:00</th>
                                <th class="py-2 px-4 border">20:00</th>
                                <th class="py-2 px-4 border">21:00</th>
                                <th class="py-2 px-4 border">22:00</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Room 101 -->
                            <tr>
                                <td class="py-2 px-4 border font-medium sticky left-0 bg-white z-10">101</td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border bg-blue-100" colspan="5">
                                    <div class="text-xs">John Doe (9:00-12:00)</div>
                                </td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border bg-green-100" colspan="4">
                                    <div class="text-xs">Alice Smith (15:00-19:00)</div>
                                </td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                            </tr>

                            <!-- Room 102 -->
                            <tr>
                                <td class="py-2 px-4 border font-medium sticky left-0 bg-white z-10">102</td>
                                <td class="py-2 px-4 border bg-purple-100" colspan="5">
                                    <div class="text-xs">Mary Johnson (8:00-13:00)</div>
                                </td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border bg-yellow-100" colspan="3">
                                    <div class="text-xs">Robert Brown (16:00-19:00)</div>
                                </td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                            </tr>

                            <!-- Room 103 -->
                            <tr>
                                <td class="py-2 px-4 border font-medium sticky left-0 bg-white z-10">103</td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border bg-red-100" colspan="6">
                                    <div class="text-xs">David Wilson (12:00-18:00)</div>
                                </td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border bg-indigo-100" colspan="3">
                                    <div class="text-xs">Sarah Lee (20:00-23:00)</div>
                                </td>
                            </tr>

                            <!-- Room 104 -->
                            <tr>
                                <td class="py-2 px-4 border font-medium sticky left-0 bg-white z-10">104</td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border bg-orange-100" colspan="4">
                                    <div class="text-xs">James Taylor (10:00-14:00)</div>
                                </td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border bg-teal-100" colspan="5">
                                    <div class="text-xs">Jennifer Clark (17:00-22:00)</div>
                                </td>
                            </tr>

                            <!-- Room 105 -->
                            <tr>
                                <td class="py-2 px-4 border font-medium sticky left-0 bg-white z-10">105</td>
                                <td class="py-2 px-4 border bg-pink-100" colspan="8">
                                    <div class="text-xs">Michael Adams (8:00-16:00)</div>
                                </td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                                <td class="py-2 px-4 border"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
