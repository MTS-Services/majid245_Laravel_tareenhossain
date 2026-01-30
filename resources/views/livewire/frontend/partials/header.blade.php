<header id="header" class="sticky top-0 z-50 bg-primary transition-all duration-300">
    <div id="headerInner"
        class="container mx-auto px-4 py-3 flex items-center justify-between transition-all duration-300 relative">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="no-underline leading-tight" title="Central Executive Transfers">
            <span class="text-white font-black tracking-wide text-lg">CENTRAL</span>
            <div class="text-second-500 text-xs tracking-widest uppercase">
                Executive Transfers
            </div>
        </a>

        <!-- Right actions -->
        <div class="flex items-center gap-3 md:gap-5">
            <a href="{{ route('booking') }}#booking" title="Central Executive Transfers | Booking Now"
                class="inline-flex bg-second-500 hover:bg-yellow-500 text-black font-semibold px-4 py-3 rounded-lg text-sm transition-all duration-300 hover:scale-105 shadow-lg">
                Book Now
            </a>

            <!-- Hamburger always visible -->
            <button id="menuBtn"
                class="text-white border border-white/30 rounded-lg px-3 py-2 text-xl hover:bg-white/10 transition"
                aria-label="Open Menu">
                ☰
            </button>
        </div>
    </div>

    <div class="container p-0 relative">
        <!-- Dropdown Navigation -->
        <nav id="mobileNav" class="hidden absolute top-full left-0 md:left-auto right-0">

            <div
                class="mx-auto px-4 py-4 space-y-1
               w-full
               md:w-md md:rounded-2xl md:mt-3
               md:border md:border-gray-800 bg-gray-900 border-t border-gray-800 shadow-2xl">

                <!-- Book Now (Highlighted & First) -->
                <a href="{{ route('booking') }}#booking" title="Central Executive Transfers | Booking Now"
                    class="block bg-second-500 text-black font-bold rounded-lg px-4 py-3 text-center hover:bg-yellow-500 transition">
                    Book Now
                </a>

                <a href="{{ route('home') }}#why" class="nav-item" title="Central Executive Transfers | Why Us">Why
                    Us</a>

                <a href="{{ route('home') }}#prices" class="nav-item"
                    title="Central Executive Transfers | Prices">Prices</a>

                <a href="{{ route('home') }}#fleet" class="nav-item"
                    title="Central Executive Transfers | Fleet">Fleet</a>

                <a href="{{ route('home') }}#reviews" class="nav-item"
                    title="Central Executive Transfers | Reviews">Reviews</a>

                <a href="{{ route('home') }}#faq" class="nav-item"
                    title="Central Executive Transfers | Frequently Asked Questions">FAQs</a>

                <a href="{{ route('gallery') }}" class="nav-item"
                    title="Central Executive Transfers | Gallery">Gallery</a>

                <a href="{{ route('home') }}#contact" class="nav-item"
                    title="Central Executive Transfers | Contact Us">Contact Us</a>
                <div class="flex gap-5 justify-center items-center">
                    <!-- Facebook -->
                    <a href="#" aria-label="Facebook"
                        class="w-14 h-14 flex items-center justify-center rounded-full border border-white/50 hover:border-second-500/40 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="w-7 h-7 fill-white/80 hover:fill-second-500">
                            <path
                                d="M22 12a10 10 0 1 0-11.6 9.9v-7H8v-3h2.4V9.5c0-2.3 1.37-3.6 3.46-3.6.99 0 2.03.18 2.03.18v2.23h-1.14c-1.13 0-1.48.7-1.48 1.42v1.7H16l-.38 3h-2.1v7A10 10 0 0 0 22 12z" />
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="#" aria-label="LinkedIn"
                        class="w-14 h-14 flex items-center justify-center rounded-full border border-white/50 hover:border-second-500/40 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="w-7 h-7 fill-white/80 hover:fill-second-500">
                            <path
                                d="M20.45 20.45h-3.55v-5.4c0-1.29-.03-2.95-1.8-2.95-1.8 0-2.07 1.4-2.07 2.85v5.5h-3.55V9h3.4v1.56h.05c.47-.9 1.62-1.85 3.34-1.85 3.57 0 4.23 2.35 4.23 5.4v6.34zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.78C.8 0 0 .77 0 1.72v20.55C0 23.23.8 24 1.78 24h20.44C23.2 24 24 23.23 24 22.27V1.72C24 .77 23.2 0 22.22 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('menuBtn');
            const mobileNav = document.getElementById('mobileNav');
            const header = document.getElementById('header');
            const headerInner = document.getElementById('headerInner');

            if (menuBtn && mobileNav) {
                menuBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    mobileNav.classList.toggle('hidden');
                });

                mobileNav.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => {
                        mobileNav.classList.add('hidden');
                    });
                });

                document.addEventListener('click', (e) => {
                    if (!header.contains(e.target)) {
                        mobileNav.classList.add('hidden');
                    }
                });
            }

            window.addEventListener('scroll', () => {
                headerInner.classList.toggle('py-2', window.scrollY > 40);
                headerInner.classList.toggle('py-3', window.scrollY <= 40);
            }, {
                passive: true
            });
        });
    </script>
@endpush
