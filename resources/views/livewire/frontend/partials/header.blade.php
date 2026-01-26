<header id="header" class="sticky top-0 z-50 bg-primary transition-all duration-300">
    <div id="headerInner"
        class="container mx-auto px-4 py-3 flex items-center justify-between transition-all duration-300 relative">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="no-underline leading-tight">
            <span class="text-white font-black tracking-wide text-lg">CENTRAL</span>
            <div class="text-second-500 text-xs tracking-widest uppercase">
                Executive Transfers
            </div>
        </a>

        <!-- Right actions -->
        <div class="flex items-center gap-3 md:gap-5">
            <a href="{{ route('booking') }}#booking"
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
                <a href="{{ route('booking') }}#booking"
                    class="block bg-second-500 text-black font-bold rounded-lg px-4 py-3 text-center hover:bg-yellow-500 transition">
                    Book Now
                </a>

                <a href="{{ route('home') }}#why" class="nav-item">Why Us</a>

                <a href="{{ route('home') }}#prices" class="nav-item">Prices</a>

                <a href="{{ route('home') }}#fleet" class="nav-item">Fleet</a>

                <a href="{{ route('home') }}#reviews" class="nav-item">Reviews</a>

                <a href="{{ route('home') }}#faq" class="nav-item">FAQs</a>

                <a href="{{ route('gallery') }}" class="nav-item">Gallery</a>

                <a href="{{ route('home') }}#contact" class="nav-item">Contact Us</a>
            </div>
        </nav>
    </div>
</header>

<script>
    const menuBtn = document.getElementById('menuBtn');
    const mobileNav = document.getElementById('mobileNav');
    const header = document.getElementById('header');

    if (menuBtn && mobileNav) {

        // Toggle on button click
        menuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileNav.classList.toggle('hidden');
        });

        // Close when clicking a nav link
        mobileNav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileNav.classList.add('hidden');
            });
        });

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (
                !header.contains(e.target) &&
                !mobileNav.classList.contains('hidden')
            ) {
                mobileNav.classList.add('hidden');
            }
        });
    }
</script>



<script>
    // Toggle menu
    const menuBtn = document.getElementById('menuBtn');
    const mobileNav = document.getElementById('mobileNav');

    menuBtn?.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden');
    });

    // Close menu on link click + smooth scroll
    document.querySelectorAll('#mobileNav a[href^="#"]').forEach(link => {
        link.addEventListener('click', e => {
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                e.preventDefault();
                mobileNav.classList.add('hidden');
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Header shrink
    const headerInner = document.getElementById('headerInner');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            headerInner.classList.add('py-2');
            headerInner.classList.remove('py-3');
        } else {
            headerInner.classList.remove('py-2');
            headerInner.classList.add('py-3');
        }
    }, {
        passive: true
    });

    // dataLayer events
    window.dataLayer = window.dataLayer || [];
    const pushEvt = (name, params = {}) => {
        try {
            dataLayer.push({
                event: name,
                ...params
            });
        } catch {}
    };

    document.querySelectorAll('a[href^="tel:"]').forEach(a =>
        a.addEventListener('click', () => pushEvt('phone_click'))
    );
    document.querySelectorAll('a[href^="https://wa.me"]').forEach(a =>
        a.addEventListener('click', () => pushEvt('whatsapp_click'))
    );
    document.querySelectorAll('a[href="#booking"]').forEach(a =>
        a.addEventListener('click', () => pushEvt('start_booking'))
    );
</script>
