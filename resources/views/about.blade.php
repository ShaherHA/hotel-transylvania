<x-app-layout>

        <!-- Main Content -->
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-10">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Nestled in the picturesque landscapes of Transylvania, our hotel has been a beacon of
                            hospitality since 1952. What began as a family-owned establishment has evolved into
                            a premier destination that seamlessly blends contemporary luxury with regional charm.
                        </p>
                        <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                            Our commitment to excellence extends beyond comfortable accommodations. We pride ourselves
                            on creating memorable experiences that showcase the rich culture, stunning natural beauty,
                            and warm hospitality that defines this remarkable region.
                        </p>
                        <p class="mb-2 text-lg text-gray-600 leading-relaxed">
                            Every guest is treated as family, and every stay is crafted to exceed expectations.
                        </p>
                    </div>
                    <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                        <img src="/storage/hotel-outside.jpg" class="text-gray-500" alt="hotel exterior image">
                    </div>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10">
                    <div class="text-center p-8 bg-blue-50 rounded-lg">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Premium Accommodations</h3>
                        <p class="text-gray-600">Luxuriously appointed rooms and suites with modern amenities and stunning views.</p>
                    </div>

                    <div class="text-center p-8 bg-green-50 rounded-lg">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">24/7 Service</h3>
                        <p class="text-gray-600">Round-the-clock concierge and room service to ensure your comfort at all times.</p>
                    </div>

                    <div class="text-center p-8 bg-purple-50 rounded-lg">
                        <div class="w-16 h-16 bg-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="h-8 w-8" style="color: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M565.6 36.2C572.1 40.7 576 48.1 576 56V392c0 10-6.2 18.9-15.5 22.4l-168 64c-5.2 2-10.9 2.1-16.1 .3L192.5 417.5l-160 61c-7.4 2.8-15.7 1.8-22.2-2.7S0 463.9 0 456V120c0-10 6.1-18.9 15.5-22.4l168-64c5.2-2 10.9-2.1 16.1-.3L383.5 94.5l160-61c7.4-2.8 15.7-1.8 22.2 2.7zM48 136.5V421.2l120-45.7V90.8L48 136.5zM360 422.7V137.3l-144-48V374.7l144 48zm48-1.5l120-45.7V90.8L408 136.5V421.2z" fill="white"></path></svg>                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Prime Location</h3>
                        <p class="text-gray-600">Perfectly situated to explore historic castles, scenic mountains, and charming villages.</p>
                    </div>
                </div>

                <!-- Amenities Section -->
                <div class="bg-gray-50 rounded-2xl p-8 lg:p-12">
                    <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">World-Class Amenities</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Spa & Wellness Center</h4>
                                    <p class="text-gray-600">Full-service spa with massage therapy, sauna, and fitness facilities</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Fine Dining Restaurant</h4>
                                    <p class="text-gray-600">Award-winning cuisine featuring local ingredients and international flavors</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Conference Facilities</h4>
                                    <p class="text-gray-600">Modern meeting rooms and event spaces for business and celebrations</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Outdoor Pool & Gardens</h4>
                                    <p class="text-gray-600">Heated pool surrounded by landscaped gardens and mountain views</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Valet Parking</h4>
                                    <p class="text-gray-600">Complimentary valet service and secure underground parking</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mt-1">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Tour Concierge</h4>
                                    <p class="text-gray-600">Expert local guides and customized excursion planning</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<x-footer></x-footer>
</x-app-layout>
