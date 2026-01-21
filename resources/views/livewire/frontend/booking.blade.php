

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
                        <iframe class="w-full h-full" title="Book Now!"
                            src="{{ config('services.easytaxi.booking_page') }}" id="eto-iframe-booking"
                            allow="geolocation" scrolling="yes" frameborder="0"
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

        <!-- Contact Section -->
        <section class="py-9 bg-second-500 scroll-mt-[72px]" id="contact">
            <div class="container mx-auto px-5">
                <h2 class="font-serif text-3xl font-bold mb-6 text-gray-900 scroll-animate">
                    Contact</h2>
                <div class="scroll-animate">
                    <p class="text-gray-900">
                        <strong>Phone:</strong> <a href="tel:+447405172435"
                            class="text-gray-900 font-bold underline hover:text-gray-700 transition-colors">+44 7405
                            172435</a><br>
                        <strong>WhatsApp:</strong> <a href="https://wa.me/447405172435" target="_blank"
                            rel="noopener"
                            class="text-gray-900 font-bold underline hover:text-gray-700 transition-colors">Message
                            us</a><br>
                        <strong>Email:</strong> <a href="mailto:admin@centraltravels.co.uk"
                            class="text-gray-900 font-bold underline hover:text-gray-700 transition-colors">admin@centraltravels.co.uk</a>
                    </p>
                    <p class="text-sm text-gray-900 mt-2">We respond quickly — for urgent bookings, call or WhatsApp.
                    </p>
                </div>
            </div>
        </section>

        <!-- Fixed Bottom Bar -->
        <div class="fixed left-0 right-0 bottom-0 bg-primary p-3 flex gap-3 justify-between z-50 shadow-2xl">
            <a class="flex-1 text-center px-4 py-3 rounded-lg font-semibold no-underline bg-gray-800 text-white transition-all duration-300! hover:bg-gray-700 hover:-translate-y-1"
                href="tel:+447405172435">Call</a>
            <a class="flex-1 text-center px-4 py-3 rounded-lg font-semibold no-underline text-white transition-all duration-300! hover:-translate-y-1"
                href="https://wa.me/447405172435" target="_blank" rel="noopener"
                style="background:#25D366">WhatsApp</a>
            <a class="flex-1 text-center px-4 py-3 rounded-lg font-semibold no-underline bg-second-500 text-gray-900 transition-all duration-300! hover:-translate-y-1"
                href="{{route('booking')}}">Get Quote</a>
        </div>

        <script>
            const elements = document.querySelectorAll('.scroll-animate');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15
            });

            elements.forEach(el => observer.observe(el));
        </script>
        </section>

