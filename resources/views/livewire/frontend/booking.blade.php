<section>
    <section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://centraltravels.co.uk/assets/airport-transfer.jpeg" alt="Gallery Hero"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/80"></div>
        </div>

        <div class="container relative z-10 px-6 text-white text-center">
            <h1 class="font-serif text-4xl md:text-5xl font-bold mb-4 text-white">
                Reserve your driver now
            </h1>
            <p class="text-lg md:text-xl text-white max-w-2xl mx-auto">
                Search, choose your vehicle/price, then complete details & payment in one flow.
            </p>
        </div>
    </section>


    <section class="py-9 scroll-mt-[72px]" id="booking">
        <div class="container mx-auto px-5">
            <h2 class="font-serif text-3xl font-bold text-center mb-6 scroll-animate">
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
