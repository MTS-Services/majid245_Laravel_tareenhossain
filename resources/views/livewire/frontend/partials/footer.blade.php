{{-- <footer class="bg-bg-tertiary">
    <div class="container px-4 py-10 sm:py-12">
        <div class="grid grid-cols-3 xxs:grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-6 sm:gap-8">
            <!-- Brand Section -->
            <div class="col-span-3 md:col-span-2">
                <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2 sm:gap-3">
                    <div
                        class="w-8 h-8 xxs:w-10 xxs:h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14 xl:w-16 xl:h-16 rounded-full btn-gradient flex items-center justify-center">
                        <span class="text-white font-bold text-xl lg:text-2xl xl:text-3xl">{{ __('DG') }}</span>
                    </div>
                    <span
                        class="text-xl lg:text-2xl xl:text-3xl font-bold font-playfair text-text-primary">{{ __('DiodioGlow') }}</span>
                </a>
                <p
                    class="text-xs xxs:text-sm sm:text-base text-text-secondary mt-2 sm:mt-3 md:pr-10 lg:pr-20 xl:pr-50 leading-relaxed">
                    {{ __('Curating viral skincare trends and AI-powered product recommendations for natural, glowing skin.') }}
                </p>
            </div>

            <!-- Explore Section -->
            <div class="col-span-1">
                <h3 class="text-text-primary font-playfair font-semibold text-base sm:text-lg mb-3 sm:mb-4">
                    {{ __('Explore') }}
                </h3>
                <ul class="space-y-1">
                    <li><a href="{{ route('home') }}" title="{{ __('Home') }}" wire:navigate
                            class="text-text-secondary hover:text-second-500 transition-colors text-sm sm:text-base">{{ __('Home') }}</a>
                    </li>
                </ul>
            </div>

            <div class="col-span-1">
                <h3 class="text-text-primary font-playfair font-semibold text-base sm:text-lg mb-3 sm:mb-4">
                    {{ __('Connect') }}
                </h3>
                <ul class="space-y-1">
                    <li><a href="{{ route('home') }}" title="{{ __('TikTok') }}" wire:navigate
                            rel="noopener noreferrer"
                            class="text-text-secondary hover:text-second-500 transition-colors text-sm sm:text-base">{{ __('TikTok') }}</a>
                    </li>
                    <li><a href="{{ route('home') }}" title="{{ __('Instagram') }}" wire:navigate
                            rel="noopener noreferrer"
                            class="text-text-secondary hover:text-second-500 transition-colors text-sm sm:text-base">{{ __('Instagram') }}</a>
                    </li>
                    <li><a href="{{ route('home') }}" title="{{ __('YouTube') }}" wire:navigate
                            rel="noopener noreferrer"
                            class="text-text-secondary hover:text-second-500 transition-colors text-sm sm:text-base">{{ __('YouTube') }}</a>
                    </li>
                </ul>
            </div>

            <!-- Legal Section -->
            <div class="col-span-1">
                <h3 class="text-text-primary font-playfair font-semibold text-base sm:text-lg mb-3 sm:mb-4">
                    {{ __('Legal') }}
                </h3>
              
            </div>
        </div>
    </div>
</footer> --}}

<!-- Footer -->
<footer class="bg-black text-white py-12">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-2xl font-bold gold-gradient bg-clip-text text-transparent heading-font mb-4">
                    CENTRAL</h3>
                <p class="text-gray-400 mb-4">Executive Transfers</p>
                <p class="text-gray-400 text-sm">Premium airport transfer service across South Yorkshire,
                    providing luxury chauffeur-driven vehicles 24/7.</p>
            </div>
            <div>
                <h4 class="font-bold mb-4 text-yellow-500">Quick Links</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="#services" class="hover:text-yellow-500 transition">Services</a></li>
                    <li><a href="#fleet" class="hover:text-yellow-500 transition">Our Fleet</a></li>
                    <li><a href="#pricing" class="hover:text-yellow-500 transition">Pricing</a></li>
                    <li><a href="#reviews" class="hover:text-yellow-500 transition">Reviews</a></li>
                    <li><a href="#booking" class="hover:text-yellow-500 transition">Book Now</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4 text-yellow-500">Services</h4>
                <ul class="space-y-2 text-gray-400">
                    <li>Airport Transfers</li>
                    <li>Corporate Travel</li>
                    <li>Event Transportation</li>
                    <li>Long Distance Journeys</li>
                    <li>Cruise Port Transfers</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4 text-yellow-500">Contact Us</h4>
                <ul class="space-y-3 text-gray-400">
                    <li><i class="fas fa-phone text-yellow-500 mr-2"></i>0114 123 4567</li>
                    <li><i class="fas fa-envelope text-yellow-500 mr-2"></i>info@centralexec.co.uk</li>
                    <li><i class="fas fa-map-marker-alt text-yellow-500 mr-2"></i>Sheffield, South Yorkshire
                    </li>
                    <li class="flex gap-4 mt-4">
                        <a href="#" class="text-2xl hover:text-yellow-500 transition"><i
                                class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:text-yellow-500 transition"><i
                                class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-yellow-500 transition"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
            <p>&copy; 2026 Central Executive Transfers. All rights reserved. | <a href="#"
                    class="hover:text-yellow-500">Privacy Policy</a> | <a href="#"
                    class="hover:text-yellow-500">Terms & Conditions</a></p>
        </div>
    </div>
</footer>
