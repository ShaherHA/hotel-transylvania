<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contact page
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-col md:flex-row">
                    <!-- Left Side - Contact Form -->
                    <div class="flex-1 mr-4 mb-4">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h3>

                        <form class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="How can we help you?" required></textarea>
                            </div>

                            <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-150 font-medium">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Right Side - Contact Information -->
                    <div class="flex-1 md:ml-4">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Get in Touch</h3>

                        <div class="space-y-8">
                            <!-- Address -->
                            <div class="flex items-start space-x-4">
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Address</h4>
                                    <p class="text-gray-600">
                                        123 Castle Avenue<br>
                                        Brasov, Transylvania<br>
                                        Romania, 500123
                                    </p>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start space-x-4">
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Phone</h4>
                                    <p class="text-gray-600">
                                        +40 268 555 0123
                                    </p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start space-x-4">
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Email</h4>
                                    <p class="text-gray-600">
                                        info@hoteltransylvania.ro
                                    </p>
                                </div>
                            </div>

                            <!-- Hours -->
                            <div class="flex items-start space-x-4">
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-2">Reception Hours</h4>
                                    <p class="text-gray-600">
                                        24/7 Front Desk Service<br>
                                        Concierge: 8:00 AM - 10:00 PM
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-app-layout>
