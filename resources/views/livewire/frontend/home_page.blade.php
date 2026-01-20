@push('styles')
    <style>
        .animate-fade-in-up {
            animation: fadeIn 0.8s ease-in;
        }
    </style>
@endpush
<section>
    <div>
        <!-- Hero Section -->
        <section class="relative h-screen md:h-[60vh] flex items-center justify-center overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0 z-0 scroll-animate">
                <img src="https://centraltravels.co.uk/assets/airport-transfer.jpeg" alt="Luxury Car"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-black/45 to-black/70"></div>
            </div>

            <!-- Content -->
            <div class="container relative z-10 px-6 text-white animate-fade-in-up">
                <div>
                    <!-- Main Heading -->
                    <h1 class="font-serif text-4xl md:text-5xl font-bold mb-6 text-white scroll-animate">
                        Executive Airport Transfers —
                        <span class="block mt-2 text-white">Covering All of South Yorkshire</span>
                    </h1>

                    <!-- Sub Heading -->
                    <p class="text-lg md:text-xl mb-8 text-white scroll-animate">
                        Fixed prices • Flight tracking • 24/7 service
                    </p>

                    <!-- Rating Badge -->
                    <div
                        class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/30 rounded-md px-6 py-3 mb-8 hover:bg-white/20 scroll-animate">
                        <svg class="w-6 h-6 text-second-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="font-semibold text-lg text-white">5-Star Rated Service on Google</span>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4 scroll-animate">
                        <a href="#booking"
                            class="bg-second-500 hover:bg-yellow-500 text-black font-semibold px-8 py-4 rounded-lg text-lg transition-all duration-300! transform hover:scale-105 hover:shadow-2xl shadow-xl">
                            Get Instant Quote
                        </a>
                        <a href="tel:+447405172435"
                            class="bg-transparent hover:bg-white/20 border-2 border-white text-white font-semibold px-8 py-4 rounded-lg text-lg transition-all duration-300! backdrop-blur-sm">
                            Call 07405 172435
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Booking Section -->
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

        <!-- Why Choose Section -->
        <section class="py-9 bg-bg scroll-mt-[72px]" id="why">
            <div class="container mx-auto px-5">
                <h2 class="font-serif text-3xl font-bold mb-6 scroll-animate transition-all duration-700 ease-out">
                    Why choose Central Executive Transfers
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Professional Drivers</h3>
                        <p class="m-0">Polite, licensed chauffeurs focused on safety and service.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Executive Vehicles</h3>
                        <p class="m-0">Mercedes E‑Class and 8‑seater MPVs — spotless, comfortable, reliable.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Flight Tracking</h3>
                        <p class="m-0">We monitor arrivals and include complimentary waiting.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Fixed Prices</h3>
                        <p class="m-0">Transparent pricing before you confirm — no surprises.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">24/7 Availability</h3>
                        <p class="m-0">Early morning or late night, we're ready when you are.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Easy Online Booking</h3>
                        <p class="m-0">Instant quotes and secure payment in minutes.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Prices Section -->
        <section class="py-9 scroll-mt-[72px]" id="prices">
            <div class="container mx-auto px-5">
                <h2
                    class="font-serif text-3xl font-bold text-center mb-6 scroll-animate transition-all duration-700 ease-out">
                    Transparent Airport Prices
                </h2>
                <div
                    class="overflow-x-auto shadow-lg scroll-animate rounded-xl opacity-0 transition-all duration-700 ease-out">
                    <table class="w-full border-collapse bg-white rounded-xl overflow-hidden border border-gray-200">
                        <thead>
                            <tr>
                                <th class="bg-primary text-white font-bold border-b-2 border-second-500 p-4 text-left">
                                    Route<br><span class="block text-sm text-white font-bold mt-0">(Sheffield ↔)</span>
                                </th>
                                <th class="bg-primary text-white font-bold border-b-2 border-second-500 p-4 text-left">
                                    Executive Saloon
                                </th>
                                <th class="bg-primary text-white font-bold border-b-2 border-second-500 p-4 text-left">
                                    8‑Seater
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Birmingham Airport</td>
                                <td class="p-4">£145</td>
                                <td class="p-4">£175</td>
                            </tr>

                            <tr class="bg-gray-50 hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Luton Airport</td>
                                <td class="p-4">£250</td>
                                <td class="p-4">£290</td>
                            </tr>

                            <tr class="hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Heathrow Airport</td>
                                <td class="p-4">£280</td>
                                <td class="p-4">£330</td>
                            </tr>

                            <tr class="bg-gray-50 hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Gatwick Airpor</td>
                                <td class="p-4">£350</td>
                                <td class="p-4">£420</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Fleet Section -->
        <section class="py-9 bg-bg scroll-mt-[72px]" id="fleet">
            <div class="container mx-auto px-5">
                <h2 class="font-serif text-3xl font-bold mb-6 scroll-animate">Fleet</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2 group">
                        <div class="overflow-hidden rounded-lg mb-2 bg-gray-100">
                            <img class="w-full h-[100px] object-contain transition-transform duration-300! group-hover:scale-110"
                                src="https://centraltravels.co.uk/assets/merc-c.webp" alt="Executive">
                        </div>
                        <h3 class="font-serif text-lg font-bold mb-2">Executive</h3>
                        <p class="m-0">Mercedes E‑Class or similar — 4 passengers • 2 suitcases • 2 hand carry.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2 group">
                        <div class="overflow-hidden rounded-lg mb-2 bg-gray-100">
                            <img class="w-full h-[100px] object-contain transition-transform duration-300! group-hover:scale-110"
                                src="https://centraltravels.co.uk/assets/mercedes-benz-vito.webp" alt="Minibus">
                        </div>
                        <h3 class="font-serif text-lg font-bold mb-2">Minibus</h3>
                        <p class="m-0">8‑seater MPV — 8 passengers • 8 suitcases • 3 hand carry.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2 group">
                        <div class="overflow-hidden rounded-lg mb-2 bg-gray-100">
                            <img class="w-full h-[100px] object-contain transition-transform duration-300! group-hover:scale-110"
                                src="https://centraltravels.co.uk/assets/rolls-royce.png" alt="Luxury">
                        </div>
                        <h3 class="font-serif text-lg font-bold mb-2">Luxury</h3>
                        <p class="m-0">Rolls‑Royce or similar — 3 passengers • 2 suitcases • 2 hand carry.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Section -->
        <section class="py-9 scroll-mt-[72px]" id="reviews">
            <div class="container mx-auto px-5">
                <h2 class="font-serif text-3xl font-bold mb-6 scroll-animate">
                    Reviews</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">"Reliable and professional"</h3>
                        <p class="m-0">Great communication, spotless car and on time for both legs. Will use again.
                        </p>
                        <p class="text-sm text-gray-600 mt-2">— Google Review</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">"Smooth airport run"</h3>
                        <p class="m-0">Driver tracked our flight and waited — stress free after a long day.</p>
                        <p class="text-sm text-gray-600 mt-2">— Google Review</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">"Executive service"</h3>
                        <p class="m-0">Mercedes E‑Class, bottled water, and a calm ride. 5 stars.</p>
                        <p class="text-sm text-gray-600 mt-2">— Google Review</p>
                    </div>
                </div>
                <p class="text-sm text-gray-600 mt-3 scroll-animate">
                    See all reviews on <a href="https://g.co/kgs/CQqsY6t" target="_blank" rel="noopener"
                        class="font-bold underline hover:text-yellow-600 transition-colors">our Google profile</a>.
                </p>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-9 scroll-mt-[72px]" id="faq">
            <div class="container mx-auto px-5">
                <h2 class="font-serif text-3xl font-bold mb-6 scroll-animate">
                    FAQs</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">How do I pick a pickup time?</h3>
                        <p class="m-0">For departures arrive 2–3 hours before take‑off; for arrivals use your
                            landing time — we include waiting.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Do you work 24/7?</h3>
                        <p class="m-0">Yes — early mornings and late nights covered.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Do you charge for delays?</h3>
                        <p class="m-0">No, we track flights and adjust.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Do you include waiting time for arrivals?</h3>
                        <p class="m-0">Yes. We track your flight and include complimentary waiting after landing.
                        </p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Are child seats available?</h3>
                        <p class="m-0">Yes — request at booking (subject to availability) so we can prepare the
                            correct seat.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">What areas do you cover?</h3>
                        <p class="m-0">All of South Yorkshire for pickups, and any UK airport or destination for
                            drop‑offs.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Corporate accounts</h3>
                        <p class="m-0">We welcome business accounts with consolidated billing and priority support.
                        </p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Can I change or cancel?</h3>
                        <p class="m-0">Yes — contact us as soon as possible. Changes are free; cancellation policy
                            applies.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Meet & Greet</h3>
                        <p class="m-0">Your driver can meet you in the terminal with a name board; add this in the
                            notes.</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Payment methods</h3>
                        <p class="m-0">Card, Apple Pay/Google Pay, and Cash (cash requires a 10% deposit first).</p>
                    </div>
                    <div
                        class="bg-white border border-gray-200 rounded-2xl p-4 shadow-lg min-h-44 scroll-animate hover:shadow-2xl transition-all duration-300! hover:border-second-500 hover:-translate-y-2">
                        <h3 class="font-serif text-lg font-bold mb-2">Last‑minute bookings</h3>
                        <p class="m-0">Message us on WhatsApp for urgent requests — we'll confirm availability fast.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-white text-center py-12 scroll-animate">
            <div class="container mx-auto px-5">
                <h2 class="font-serif text-3xl font-bold text-black mb-3 scroll-animate">Ready when you are</h2>
                <p class="text-black mb-3 scroll-animate">Reserve now with a <strong>10% deposit</strong> and secure
                    your driver.</p>
                <p class="scroll-animate">
                    <a href="#booking"
                        class="inline-block px-6 py-4 rounded-lg no-underline font-bold bg-second-500 text-gray-900 transition-all duration-300! hover:-translate-y-1 hover:shadow-2xl shadow-lg">Book
                        Now</a>
                </p>
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
                href="#booking">Get Quote</a>
        </div>
    </div>
</section>

{{-- <script>
    const scrollElements = document.querySelectorAll('.scroll-animate');

    const scrollObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    entry.target.style.transitionDelay = `${index * 100}ms`;
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    scrollObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        }
    );

    scrollElements.forEach(el => scrollObserver.observe(el));
</script> --}}

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
