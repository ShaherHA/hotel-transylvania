{{-- resources/views/components/hotel-footer.blade.php --}}
<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            {{-- About Section --}}
            <div>
                <h3 class="text-lg font-semibold mb-4">About Hotel Transylvania</h3>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">About Us</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Amenities</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Wellness & Spa</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Events</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Weddings</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                </ul>
            </div>

            {{-- Services Section --}}
            <div>
                <h3 class="text-lg font-semibold mb-4">Services</h3>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white transition-colors">Activities</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Restaurant</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Business Services</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Local Tours</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                </ul>
            </div>

            {{-- Reservations Section --}}
            <div>
                <h3 class="text-lg font-semibold mb-4">Reservations</h3>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white transition-colors">Book a Room</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Restaurant</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Spa Treatments</a></li>
                    <li><a href="#}" class="hover:text-white transition-colors">Gift Cards</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Special Offers</a></li>
                </ul>
            </div>

            {{-- Customer Service Section --}}
            <div>
                <h3 class="text-lg font-semibold mb-4">Customer Service</h3>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><a href="#" class="hover:text-white transition-colors">Contact Us</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Cancellation Policy</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Reviews</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Support</a></li>
                </ul>
            </div>
        </div>

        {{-- Social Media Section --}}
        <div class="border-t border-gray-800 mt-8 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h4 class="text-sm font-semibold mb-2">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="Facebook">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="Instagram">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C24.014 5.367 18.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.39-3.398-1.177-.95-.784-1.672-1.824-2.167-3.122-.495-1.297-.495-2.672 0-3.969.495-1.297 1.217-2.338 2.167-3.122.95-.787 2.101-1.177 3.398-1.177s2.448.39 3.398 1.177c.95.784 1.672 1.825 2.167 3.122.495 1.297.495 2.672 0 3.969-.495 1.298-1.217 2.338-2.167 3.122-.95.787-2.101 1.177-3.398 1.177z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="Twitter">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors" aria-label="LinkedIn">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Contact Info --}}
                <div class="text-sm text-gray-300 text-center md:text-right">
                    <p class="mb-1">📞 +40 268 555 0123 </p>
                    <p>📧  info@hoteltransylvania.ro</p>
                </div>
            </div>
        </div>

        {{-- Bottom Section --}}
        <div class="border-t border-gray-800 mt-8 pt-6">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
                <div class="mb-4 md:mb-0">
                    <p>&copy; {{ date('Y') }} {{ config('app.name', 'Hotel Name') }}. All rights reserved.</p>
                </div>
                <div class="flex flex-wrap justify-center md:justify-end space-x-4">
                    <a href="#" class="hover:text-white transition-colors">Terms & Conditions</a>
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Disclaimer</a>
                    <a href="#" class="hover:text-white transition-colors">Best Price Guarantee</a>
                </div>
            </div>
        </div>
    </div>
</footer>
