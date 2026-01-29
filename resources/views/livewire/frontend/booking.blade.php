


<section>
    @section('meta')
        {{-- SEO PRIMARY TAGS --}}
        <meta name="title" content="Book Executive Airport Transfer | Instant Quote Sheffield">
        <meta name="description" content="Get an instant fixed-price quote for executive airport transfers in Sheffield. Book your Mercedes or 8-seater MPV online in minutes. Secure payment & 24/7 availability.">
        <meta name="keywords" content="Book Airport Transfer Sheffield, Online Taxi Booking, Executive Car Hire Quote, Airport Transfer Prices Sheffield, Manchester Airport Taxi Quote, Central Executive Transfers Booking">
    
        {{-- Open Graph / Facebook --}}
        <meta property="og:type" content="website">
        <meta property="og:title" content="Book Executive Airport Transfer | Instant Quote Sheffield">
        <meta property="og:description" content="Reserve your luxury chauffeur today. Instant online quotes for transfers to Manchester, Heathrow, Gatwick, and more. No hidden fees.">
        <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image:secure_url" content="{{ asset('assets/images/logo.png') }}">
        <link rel="image_src" href="{{ asset('assets/images/logo.png') }}">
    
        {{-- Twitter --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Book Executive Airport Transfer | Instant Quote Sheffield">
        <meta name="twitter:description" content="Get a fixed price quote for your next airport transfer. 24/7 online booking for luxury Mercedes and MPV travel from Sheffield.">
        <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
    
        {{-- Canonical URL --}}
        <link rel="canonical" href="{{ url()->current() }}">
    @endsection
    <section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/images/home_page/airport-transfer.jpeg') }}" alt="Book Executive Airport Transfer | Gallery Hero" title="Book Executive Airport Transfer | Gallery Hero"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/80"></div>
        </div>

        <div class="container relative z-10 px-6 text-white text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-second-500 scroll-animate-y-reverse ease-in!">
                Reserve your driver now
            </h1>
            <p class="text-lg md:text-xl text-white max-w-2xl mx-auto scroll-animate-x ease-in!">
                Search, choose your vehicle/price, then complete details & payment in one flow.
            </p>
        </div>
    </section>


    <section class="py-9 scroll-mt-[72px]" id="booking">
        <div class="container mx-auto px-5">
            <h2 class="text-3xl font-bold text-center mb-6 scroll-animate">
                Book Instantly</h2>
            <p class="text-center text-sm text-gray-600 -mt-1 mb-5 scroll-animate">
                Search, choose your vehicle/price, then complete details & payment in one flow.
            </p>
            <div class="overflow-visible mt-5 scroll-animate">
                <div
                    class="bg-gradient-to-br from-blue-50 to-yellow-50 rounded-2xl p-8 shadow-xl border-2 border-second-500/20">
                    <iframe class="w-full h-full" title="Book Now!" src="{{ config('services.easytaxi.booking_page') }}"
                        id="eto-iframe-booking" allow="geolocation" scrolling="yes" frameborder="0"
                        style="width:1px; min-width:100%; border:0;">
                    </iframe>
                    <script src="https://696a0e8806cc5.trial.easytaxioffice.com/assets/plugins/iframe-resizer/iframeResizer.min.js">
                    </script>
                    <script>
                        iFrameResize({
                            log: false,
                            targetOrigin: '*',
                            checkOrigin: false
                        }, "iframe#eto-iframe-booking");
                    </script>
                </div>
            </div>
        </div>
    </section>

</section>
