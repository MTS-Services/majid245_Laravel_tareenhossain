{{-- <header x-data="{ mobileMenuOpen: false }" x-cloak class="sticky top-0 z-50 bg-white">
    <div class="container-wide flex items-center justify-between py-3 px-6">
        <!-- Logo Section -->
        <a href="{{ route('home') }}" title="{{ __('DiodioGlow') }}" wire:navigate class="flex items-center gap-2">
            <div
                class="w-10 lg:w-14 h-10 lg:h-14 xl:w-16 xl:h-16 rounded-full btn-gradient flex items-center justify-center">
                <span class="text-white font-bold text-lg lg:text-2xl xl:text-3xl">{{ __('DG') }}</span>
            </div>
            <span
                class="text-lg lg:text-2xl xl:text-3xl font-bold font-playfair text-text-primary">{{ __('DiodioGlow') }}</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="{{ route('home') }}" title="{{ __('Home') }}" wire:navigate
                class="text-text-muted font-inter transition-colors {{ request()->routeIs('home') ? 'text-second-500! border-b-2 border-second-500' : 'hover:text-second-500! hover:border-b-2 hover:border-second-500' }}">
                {{ __('Home') }}
            </a>
        </nav>

        <div class="hidden md:block">
            <x-language />
        </div>


        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-text-muted"
            aria-label="{{ __('Toggle menu') }}">
            <flux:icon name="menu" class="w-6 h-6" />
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2" class="md:hidden border-t border-gray-200 bg-white">
        <nav class="container mx-auto px-6 py-4 flex flex-col gap-4">
            <a href="{{ route('home') }}" title="{{ __('Home') }}" wire:navigate
                class="text-text-muted font-medium font-inter transition-colors {{ request()->routeIs('home') ? 'text-second-500!! underline ' : 'hover:text-second-500!' }}">
                {{ __('Home') }}
            </a>
            <x-language />
        </nav>
    </div>
</header> --}}

<nav class="fixed w-full top-0 z-50 bg-black/90 backdrop-blur-md border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex flex-col">
                <span class="text-2xl font-bold gold-gradient bg-clip-text! text-transparent heading-font">CENTRAL</span>
                <span class="text-white text-md uppercase">Executive Transfers</span>
            </div>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#services" class="text-gray-300 hover:text-yellow-500 transition">Services</a>
                <a href="#fleet" class="text-gray-300 hover:text-yellow-500 transition">Fleet</a>
                <a href="#pricing" class="text-gray-300 hover:text-yellow-500 transition">Pricing</a>
                <a href="#reviews" class="text-gray-300 hover:text-yellow-500 transition">Reviews</a>
                <a href="tel:+441234567890"
                    class="gold-gradient text-black px-6 py-2 rounded-full font-semibold hover:opacity-90 transition">
                    <i class="fas fa-phone mr-2"></i>Call Now
                </a>
            </div>
            <button class="md:hidden text-white" onclick="toggleMenu()">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-black/95 px-4 py-6 space-y-4">
        <a href="#services" class="block text-gray-300 hover:text-yellow-500 transition">Services</a>
        <a href="#fleet" class="block text-gray-300 hover:text-yellow-500 transition">Fleet</a>
        <a href="#pricing" class="block text-gray-300 hover:text-yellow-500 transition">Pricing</a>
        <a href="#reviews" class="block text-gray-300 hover:text-yellow-500 transition">Reviews</a>
        <a href="tel:+441234567890"
            class="block gold-gradient text-black px-6 py-3 rounded-full font-semibold text-center">
            Call Now
        </a>
    </div>
</nav>
