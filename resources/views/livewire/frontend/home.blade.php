<section>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 100%);
        }

        .gold-gradient {
            background: linear-gradient(135deg, #d4af37 0%, #f4d03f 100%);
        }

        .scroll-smooth {
            scroll-behavior: smooth;
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .review-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .review-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            transition: transform 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1);
        }

        .pricing-table {
            backdrop-filter: blur(10px);
        }

        .cta-pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.7);
            }

            50% {
                box-shadow: 0 0 0 15px rgba(212, 175, 55, 0);
            }
        }
    </style>
    <div>
        <!-- Hero Section -->
        <section class="relative h-screen flex items-center justify-center"
            style="background: url('https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=1920') center/cover; margin-top: 80px;">
            <div class="absolute inset-0 hero-gradient"></div>
            <div class="relative z-10 text-center px-4 max-w-5xl mx-auto animate-fade-in">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 heading-font leading-tight">
                    Executive Airport Transfers<br />
                    <span class="gold-gradient bg-clip-text! text-transparent">Covering All of South Yorkshire</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8">
                    Premium chauffeur service • Fixed pricing • Available 24/7
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                    <div class="bg-white/10 backdrop-blur-md px-6 py-3 rounded-full border border-yellow-500/50">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <span class="text-white ml-2 font-semibold">5 Star Rated Service on Google</span>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#booking"
                        class="gold-gradient text-black px-8 py-4 rounded-full font-bold text-lg hover:opacity-90 transition cta-pulse inline-flex items-center justify-center">
                        <i class="fas fa-calendar-check mr-2"></i> Get Instant Quote
                    </a>
                    <a href="tel:+441234567890"
                        class="bg-white/20 backdrop-blur-md text-white border-2 border-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-black transition inline-flex items-center justify-center">
                        <i class="fas fa-phone mr-2"></i> Call: 0114 123 4567
                    </a>
                </div>
            </div>
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <a href="#booking">
                    <i class="fas fa-chevron-down text-white text-3xl"></i>
                </a>
            </div>
        </section>

        <!-- Booking Form Section -->
        <section id="booking" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 heading-font">Book Your Transfer</h2>
                <p class="text-center text-gray-600 mb-12 text-lg">Get an instant quote for your journey across South
                    Yorkshire</p>

                <div class="w-full h-full">
                    <iframe class="w-full min-h-[400px] h-auto" title="Book Now!"
                        src="{{ config('services.easytaxi.booking_page') }}" id="eto-iframe-booking" allow="geolocation"
                        scrolling="yes" frameborder="0" style="width:1px; min-width:100%; border:0;">
                    </iframe>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section id="services" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 heading-font">Why Choose Central Executive
                    Transfers?</h2>
                <p class="text-center text-gray-600 mb-16 text-lg">Premium chauffeur service across Sheffield & South
                    Yorkshire</p>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="feature-card text-center p-8 rounded-xl hover:shadow-xl transition">
                        <div
                            class="feature-icon w-20 h-20 gold-gradient rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-user-tie text-3xl text-black"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Professional Chauffeurs</h3>
                        <p class="text-gray-600">Fully licensed, DBS-checked drivers with extensive local knowledge and
                            impeccable service standards.</p>
                    </div>

                    <div class="feature-card text-center p-8 rounded-xl hover:shadow-xl transition">
                        <div
                            class="feature-icon w-20 h-20 gold-gradient rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-car text-3xl text-black"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Executive Vehicles</h3>
                        <p class="text-gray-600">Mercedes E-Class and S-Class fleet. Immaculate condition, comfortable,
                            and equipped with modern amenities.</p>
                    </div>

                    <div class="feature-card text-center p-8 rounded-xl hover:shadow-xl transition">
                        <div
                            class="feature-icon w-20 h-20 gold-gradient rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-map-marked-alt text-3xl text-black"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Flight Tracking</h3>
                        <p class="text-gray-600">Real-time flight monitoring ensures we're always on time, with
                            complimentary waiting for delays.</p>
                    </div>

                    <div class="feature-card text-center p-8 rounded-xl hover:shadow-xl transition">
                        <div
                            class="feature-icon w-20 h-20 gold-gradient rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-pound-sign text-3xl text-black"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Fixed Pricing</h3>
                        <p class="text-gray-600">Transparent pricing with no hidden fees. What you're quoted is what
                            you pay, guaranteed.</p>
                    </div>

                    <div class="feature-card text-center p-8 rounded-xl hover:shadow-xl transition">
                        <div
                            class="feature-icon w-20 h-20 gold-gradient rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-clock text-3xl text-black"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">24/7 Availability</h3>
                        <p class="text-gray-600">Round-the-clock service for early morning flights, late night
                            arrivals, and everything in between.</p>
                    </div>

                    <div class="feature-card text-center p-8 rounded-xl hover:shadow-xl transition">
                        <div
                            class="feature-icon w-20 h-20 gold-gradient rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-mobile-alt text-3xl text-black"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Easy Online Booking</h3>
                        <p class="text-gray-600">Simple, secure online booking system with instant confirmation and
                            flexible payment options.</p>
                    </div>

                    <div class="feature-card text-center p-8 rounded-xl hover:shadow-xl transition">
                        <div
                            class="feature-icon w-20 h-20 gold-gradient rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-briefcase text-3xl text-black"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Corporate Accounts</h3>
                        <p class="text-gray-600">Tailored business travel solutions with monthly invoicing and
                            dedicated account management.</p>
                    </div>

                    <div class="feature-card text-center p-8 rounded-xl hover:shadow-xl transition">
                        <div
                            class="feature-icon w-20 h-20 gold-gradient rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-shield-alt text-3xl text-black"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Fully Insured</h3>
                        <p class="text-gray-600">Comprehensive insurance coverage for complete peace of mind on every
                            journey.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-gradient-to-br from-gray-900 to-black text-white">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 heading-font text-white">Transparent Airport
                    Prices
                </h2>
                <p class="text-center text-gray-300 mb-16 text-lg">Fixed rates with no hidden charges</p>

                <div class="overflow-x-auto">
                    <table class="w-full bg-white/10 backdrop-blur-md rounded-xl overflow-hidden">
                        <thead class="gold-gradient text-black">
                            <tr>
                                <th class="px-6 py-4 text-left font-bold text-white">Route</th>
                                <th class="px-6 py-4 text-center font-bold text-white">Executive Saloon</th>
                                <th class="px-6 py-4 text-center font-bold text-white">6-Seater MPV</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-6 py-4 font-semibold text-white">Manchester Airport (MAN)</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£100</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£140</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-6 py-4 font-semibold text-white">East Midlands (EMA)</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£120</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£160</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-6 py-4 font-semibold text-white">Leeds Bradford (LBA)</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£100</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£140</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-6 py-4 font-semibold text-white">Doncaster (DSA)</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£70</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£95</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-6 py-4 font-semibold text-white">Liverpool John Lennon (LPL)</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£135</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£180</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-6 py-4 font-semibold text-white">London Luton (LTN)</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£225</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£280</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-6 py-4 font-semibold text-white">Heathrow (LHR)</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£250</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£310</td>
                            </tr>
                            <tr class="hover:bg-white/5 transition">
                                <td class="px-6 py-4 font-semibold text-white">Gatwick (LGW)</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£265</td>
                                <td class="px-6 py-4 text-center text-yellow-400 font-bold">£330</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-8 text-center">
                    <p class="text-gray-300 mb-4"><i class="fas fa-info-circle text-yellow-500 mr-2"></i>All prices
                        are per vehicle, not per person. Includes meet & greet and 60 minutes free waiting time.</p>
                    <a href="#booking"
                        class="gold-gradient text-black px-8 py-4 rounded-full font-bold inline-flex items-center hover:opacity-90 transition">
                        <i class="fas fa-calculator mr-2"></i>Get Custom Quote
                    </a>
                </div>
            </div>
        </section>

        <!-- Fleet Section -->
        <section id="fleet" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 heading-font">Our Executive Fleet</h2>
                <p class="text-center text-gray-600 mb-16 text-lg">Luxury vehicles for every occasion</p>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                        <div class="h-64 bg-gradient-to-br from-gray-800 to-gray-600 flex items-center justify-center">
                            <i class="fas fa-car text-8xl text-yellow-500"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-3">Executive Saloon</h3>
                            <p class="text-gray-600 mb-4">Mercedes E-Class or similar – Perfect for 1-3 passengers with
                                2 medium cases and 2 hand luggage.</p>
                            <ul class="space-y-2 text-gray-700">
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Air conditioning</li>
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Leather interior</li>
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Phone chargers</li>
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Bottled water</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                        <div class="h-64 bg-gradient-to-br from-gray-800 to-gray-600 flex items-center justify-center">
                            <i class="fas fa-shuttle-van text-8xl text-yellow-500"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-3">Executive MPV</h3>
                            <p class="text-gray-600 mb-4">Mercedes V-Class – Spacious for 4-6 passengers with ample
                                luggage space for family trips.</p>
                            <ul class="space-y-2 text-gray-700">
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Extra legroom</li>
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Premium comfort</li>
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Group travel</li>
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Large boot space</li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition border-2 border-yellow-500">
                        <div class="gold-gradient text-black text-center py-2 font-bold">
                            PREMIUM CHOICE
                        </div>
                        <div class="h-64 bg-gradient-to-br from-gray-900 to-black flex items-center justify-center">
                            <i class="fas fa-gem text-8xl text-yellow-500"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-3">Luxury Premium</h3>
                            <p class="text-gray-600 mb-4">Mercedes S-Class – Ultimate luxury for VIP clients and
                                special occasions with premium amenities.</p>
                            <ul class="space-y-2 text-gray-700">
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Executive seating</li>
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Premium sound</li>
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>Privacy glass</li>
                                <li><i class="fas fa-check text-yellow-600 mr-2"></i>VIP treatment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reviews Section -->
        <section id="reviews" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 heading-font">What Our Customers Say</h2>
                <p class="text-center text-gray-600 mb-4 text-lg">Trusted by hundreds of satisfied clients across South
                    Yorkshire</p>
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 bg-yellow-50 px-6 py-3 rounded-full">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <span class="font-bold text-gray-800 ml-2">5.0 on Google Reviews</span>
                    </div>
                </div>

                <div id="reviewCarousel" class="grid md:grid-cols-3 gap-8">
                    <!-- Review cards will be populated by JavaScript -->
                </div>

                <div class="text-center mt-12">
                    <a href="#" target="_blank"
                        class="text-yellow-600 hover:text-yellow-700 font-semibold inline-flex items-center">
                        See all reviews on Google <i class="fas fa-external-link-alt ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 heading-font">Frequently Asked Questions
                </h2>
                <p class="text-center text-gray-600 mb-16 text-lg">Everything you need to know about our service</p>

                <div class="space-y-4">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button onclick="toggleFAQ(1)"
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center hover:bg-gray-50 transition">
                            <span>How do I book an airport transfer?</span>
                            <i class="fas fa-chevron-down transition-transform" id="icon-1"></i>
                        </button>
                        <div id="faq-1" class="hidden px-6 py-4 border-t border-gray-200 text-gray-700">
                            Simply fill out our online booking form with your pickup/drop-off locations, date, and time.
                            You'll receive an instant quote and can confirm your booking in minutes. Alternatively, call
                            us on 0114 123 4567 for immediate assistance.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button onclick="toggleFAQ(2)"
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center hover:bg-gray-50 transition">
                            <span>Are your chauffeurs licensed and insured?</span>
                            <i class="fas fa-chevron-down transition-transform" id="icon-2"></i>
                        </button>
                        <div id="faq-2" class="hidden px-6 py-4 border-t border-gray-200 text-gray-700">
                            Yes, all our chauffeurs are fully licensed by the local authority, hold enhanced DBS checks,
                            and have extensive experience. All vehicles are comprehensively insured for your complete
                            peace of mind.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button onclick="toggleFAQ(3)"
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center hover:bg-gray-50 transition">
                            <span>Do you monitor flight times?</span>
                            <i class="fas fa-chevron-down transition-transform" id="icon-3"></i>
                        </button>
                        <div id="faq-3" class="hidden px-6 py-4 border-t border-gray-200 text-gray-700">
                            Absolutely. We track all flight arrivals in real-time, so if your flight is delayed or
                            arrives early, your chauffeur will adjust accordingly. We include 60 minutes free waiting
                            time for airport pickups and 15 minutes for other locations.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button onclick="toggleFAQ(4)"
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center hover:bg-gray-50 transition">
                            <span>What's included in the price?</span>
                            <i class="fas fa-chevron-down transition-transform" id="icon-4"></i>
                        </button>
                        <div id="faq-4" class="hidden px-6 py-4 border-t border-gray-200 text-gray-700">
                            Our fixed prices include all parking fees, tolls, fuel, and taxes. There are no hidden
                            charges. Your chauffeur will also provide complimentary bottled water and help with luggage.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button onclick="toggleFAQ(5)"
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center hover:bg-gray-50 transition">
                            <span>Can I book for corporate/business travel?</span>
                            <i class="fas fa-chevron-down transition-transform" id="icon-5"></i>
                        </button>
                        <div id="faq-5" class="hidden px-6 py-4 border-t border-gray-200 text-gray-700">
                            Yes! We offer dedicated corporate accounts with monthly invoicing, priority booking, and
                            account management. Contact us to discuss your business travel requirements.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button onclick="toggleFAQ(6)"
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center hover:bg-gray-50 transition">
                            <span>What is your cancellation policy?</span>
                            <i class="fas fa-chevron-down transition-transform" id="icon-6"></i>
                        </button>
                        <div id="faq-6" class="hidden px-6 py-4 border-t border-gray-200 text-gray-700">
                            We offer free cancellation up to 24 hours before your scheduled pickup time. Cancellations
                            made within 24 hours may incur a charge. Please refer to our terms and conditions for full
                            details.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button onclick="toggleFAQ(7)"
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center hover:bg-gray-50 transition">
                            <span>Do you cover areas outside Sheffield?</span>
                            <i class="fas fa-chevron-down transition-transform" id="icon-7"></i>
                        </button>
                        <div id="faq-7" class="hidden px-6 py-4 border-t border-gray-200 text-gray-700">
                            Yes, we cover all of South Yorkshire including Sheffield, Rotherham, Doncaster, and
                            Barnsley, as well as transfers to all major UK airports. For longer journeys or custom
                            routes, please contact us for a quote.
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <button onclick="toggleFAQ(8)"
                            class="w-full px-6 py-4 text-left font-semibold flex justify-between items-center hover:bg-gray-50 transition">
                            <span>What payment methods do you accept?</span>
                            <i class="fas fa-chevron-down transition-transform" id="icon-8"></i>
                        </button>
                        <div id="faq-8" class="hidden px-6 py-4 border-t border-gray-200 text-gray-700">
                            We accept all major credit and debit cards, bank transfers, and cash payments. For corporate
                            accounts, we offer invoicing with flexible payment terms.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Coverage Area Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-4 heading-font">Coverage Across South
                    Yorkshire</h2>
                <p class="text-center text-gray-600 mb-16 text-lg">Serving all major towns and cities with premium
                    airport transfer services</p>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gray-50 p-6 rounded-lg text-center hover:shadow-lg transition">
                        <i class="fas fa-map-marker-alt text-4xl text-yellow-600 mb-4"></i>
                        <h3 class="font-bold text-xl mb-2">Sheffield</h3>
                        <p class="text-gray-600">City Centre, Ecclesall, Dore, Bradway, Totley</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg text-center hover:shadow-lg transition">
                        <i class="fas fa-map-marker-alt text-4xl text-yellow-600 mb-4"></i>
                        <h3 class="font-bold text-xl mb-2">Rotherham</h3>
                        <p class="text-gray-600">Town Centre, Wickersley, Maltby, Wath upon Dearne</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg text-center hover:shadow-lg transition">
                        <i class="fas fa-map-marker-alt text-4xl text-yellow-600 mb-4"></i>
                        <h3 class="font-bold text-xl mb-2">Doncaster</h3>
                        <p class="text-gray-600">Town Centre, Bessacarr, Cantley, Armthorpe</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg text-center hover:shadow-lg transition">
                        <i class="fas fa-map-marker-alt text-4xl text-yellow-600 mb-4"></i>
                        <h3 class="font-bold text-xl mb-2">Barnsley</h3>
                        <p class="text-gray-600">Town Centre, Penistone, Wombwell, Hoyland</p>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-lg text-gray-700 mb-4">We also serve surrounding areas including Chesterfield,
                        Worksop, and the Peak District</p>
                    <a href="#booking"
                        class="gold-gradient text-black px-8 py-3 rounded-full font-bold inline-flex items-center hover:opacity-90 transition">
                        <i class="fas fa-route mr-2"></i>Check Your Area
                    </a>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-20 bg-gradient-to-r from-yellow-600 to-yellow-500 text-black">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 heading-font">Ready to Travel in Comfort?</h2>
                <p class="text-xl mb-8">Book your executive airport transfer today and experience premium chauffeur
                    service</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#booking"
                        class="bg-black text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-900 transition inline-flex items-center justify-center">
                        <i class="fas fa-calendar-check mr-2"></i>Book Online Now
                    </a>
                    <a href="tel:+441234567890"
                        class="bg-white text-black px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition inline-flex items-center justify-center">
                        <i class="fas fa-phone mr-2"></i>Call: 0114 123 4567
                    </a>
                </div>
                <p class="mt-8 text-sm">Available 24/7 • Fixed Prices • Professional Service</p>
            </div>
        </section>

        <script>
            // Mobile menu toggle
            function toggleMenu() {
                const menu = document.getElementById('mobileMenu');
                menu.classList.toggle('hidden');
            }

            // FAQ toggle
            function toggleFAQ(num) {
                const content = document.getElementById('faq-' + num);
                const icon = document.getElementById('icon-' + num);
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            }

            // Review carousel
            const reviews = [{
                    name: "Sarah Johnson",
                    rating: 5,
                    text: "Absolutely fantastic service! The driver was punctual, professional, and the Mercedes was immaculate. Made our trip to Manchester Airport stress-free. Highly recommended!",
                    date: "2 weeks ago"
                },
                {
                    name: "David Thompson",
                    rating: 5,
                    text: "I use Central Executive for all my business trips. Always reliable, comfortable vehicles, and the drivers are very knowledgeable about the local area. Worth every penny.",
                    date: "1 month ago"
                },
                {
                    name: "Emma Williams",
                    rating: 5,
                    text: "Booked a transfer for my parents' anniversary trip. The service was exceptional - on time, courteous driver, and they even helped with heavy luggage. Five stars!",
                    date: "3 weeks ago"
                },
                {
                    name: "Michael Brown",
                    rating: 5,
                    text: "Used them for a 4am airport run. Driver was waiting early, car was spotless and comfortable. Great communication throughout. Will definitely use again.",
                    date: "1 week ago"
                },
                {
                    name: "Lisa Anderson",
                    rating: 5,
                    text: "Professional from start to finish. Online booking was easy, price was transparent, and the journey was smooth. Best airport transfer service in Sheffield!",
                    date: "2 months ago"
                },
                {
                    name: "James Roberts",
                    rating: 5,
                    text: "Flight was delayed by 2 hours, but the driver tracked it and was there waiting when we landed. No stress, no extra charges. Exceptional service!",
                    date: "3 weeks ago"
                }
            ];

            let currentReviewSet = 0;

            function displayReviews() {
                const carousel = document.getElementById('reviewCarousel');
                const start = currentReviewSet * 3;
                const reviewsToShow = reviews.slice(start, start + 3);

                carousel.innerHTML = reviewsToShow.map(review => `
                <div class="review-card bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            ${review.name.charAt(0)}
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold">${review.name}</h4>
                            <div class="text-yellow-500">
                                ${'<i class="fas fa-star"></i>'.repeat(review.rating)}
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-3">"${review.text}"</p>
                    <p class="text-sm text-gray-500">${review.date}</p>
                </div>
            `).join('');
            }

            function rotateReviews() {
                currentReviewSet = (currentReviewSet + 1) % 2;
                displayReviews();
            }

            // Initial display
            displayReviews();

            // Rotate reviews every 5 seconds
            setInterval(rotateReviews, 5000);

            // Smooth scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        // Close mobile menu if open
                        document.getElementById('mobileMenu').classList.add('hidden');
                    }
                });
            });

            // Add animation on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('section').forEach(section => {
                observer.observe(section);
            });
        </script>
    </div>
</section>
