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
        {{-- <section class="py-9 scroll-mt-[72px]" id="booking">
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
        </section> --}}

        <!-- Why Choose Section -->
        <section class="py-12 bg-bg scroll-mt-[72px]" id="why">
            <div class="container mx-auto px-5">
                <h2
                    class="font-serif text-3xl md:text-4xl font-bold mb-3 text-center scroll-animate transition-all duration-700 ease-out">
                    Why choose Central Executive Transfers
                </h2>
                <p class="text-center text-gray-600 mb-10 max-w-2xl mx-auto scroll-animate">
                    Licensed by Sheffield City Council with enhanced DBS-checked drivers, we deliver premium airport
                    transfers with unwavering professionalism
                </p>

                <!-- Trust Badges Section -->
                <div class="flex flex-wrap justify-center items-center gap-6 mb-12 scroll-animate">
                    <div
                        class="flex flex-col items-center p-4 bg-white rounded-xl shadow-md border-2 border-blue-100 hover:border-second-500 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center mb-2">
                            <svg class="w-8 h-8 text-white" fill="white" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-xs font-bold text-gray-700 text-center">Sheffield City<br>Council
                            Licensed</span>
                    </div>

                    <div
                        class="flex flex-col items-center p-4 bg-white rounded-xl shadow-md border-2 border-green-100 hover:border-second-500 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-16 h-16 bg-green-700 rounded-full flex items-center justify-center mb-2">
                            <svg class="w-8 h-8 text-white" fill="white" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-xs font-bold text-gray-700 text-center">Enhanced DBS<br>Checked Drivers</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-white rounded-xl shadow-md border-2 border-second-200 hover:border-second-500 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-16 h-16 bg-second-500 rounded-full flex items-center justify-center mb-2">
                            <svg class="w-8 h-8 fill-white" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <span class="text-xs font-bold text-gray-700 text-center">5-Star Rated<br>on Google</span>
                    </div>
                    <div
                        class="flex flex-col items-center p-4 bg-white rounded-xl shadow-md border-2 border-purple-100 hover:border-second-500 transition-all duration-300 hover:-translate-y-1">
                        <div class="w-16 h-16 bg-purple-700 rounded-full flex items-center justify-center mb-2">
                            <svg class="w-8 h-8 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                        </div>
                        <span class="text-xs font-bold text-gray-700 text-center">Professional<br>Chauffeurs</span>
                    </div>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Card 1: Licensed Drivers -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-lg min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-xl font-bold mb-2 text-gray-900">Sheffield Licensed</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">All drivers fully licensed by Sheffield
                            City Council with enhanced DBS checks for your safety and peace of mind.</p>
                    </div>

                    <!-- Card 2: Executive Vehicles -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-lg min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                <path
                                    d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-xl font-bold mb-2 text-gray-900">Premium Fleet</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Mercedes E-Class and 8-seater MPVs —
                            immaculately maintained, comfortable, and reliable executive vehicles.</p>
                    </div>

                    <!-- Card 3: Flight Tracking -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-lg min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-xl font-bold mb-2 text-gray-900">Flight Tracking</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Real-time flight monitoring with complimentary
                            waiting time — we adapt to delays so you never worry.</p>
                    </div>

                    <!-- Card 4: Fixed Prices -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-lg min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-xl font-bold mb-2 text-gray-900">Transparent Pricing</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Fixed rates quoted upfront before booking — no
                            hidden charges, no meter surprises, total clarity.</p>
                    </div>

                    <!-- Card 5: 24/7 Service -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-lg min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-xl font-bold mb-2 text-gray-900">24/7 Availability</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Round-the-clock service for early departures
                            and late arrivals — we're ready whenever you need us.</p>
                    </div>

                    <!-- Card 6: Easy Booking -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-lg min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-xl font-bold mb-2 text-gray-900">Instant Booking</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Quick online quotes with secure payment in
                            minutes — book your transfer effortlessly from any device.</p>
                    </div>

                    <!-- Card 7: Meet & Greet -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-lg min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-pink-500 to-pink-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-xl font-bold mb-2 text-gray-900">Meet & Greet</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Personal terminal meet service with name board
                            — seamless airport collection for a premium experience.</p>
                    </div>

                    <!-- Card 8: Luggage Assistance -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-lg min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="font-serif text-xl font-bold mb-2 text-gray-900">Luggage Assistance</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Complimentary help with bags and cases — our
                            chauffeurs ensure door-to-door convenience and care.</p>
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
                                <td class="p-4 font-bold">Manchester (MAN)</td>
                                <td class="p-4">£100</td>
                                <td class="p-4">£130</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">East Midlands (EMA)</td>
                                <td class="p-4">£100</td>
                                <td class="p-4">£130</td>
                            </tr>
                            <tr class="hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Leeds Bradford (LBA)</td>
                                <td class="p-4">£100</td>
                                <td class="p-4">£130</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Birmingham (BHX)</td>
                                <td class="p-4">£150</td>
                                <td class="p-4">£180</td>
                            </tr>
                            <tr class="hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Liverpool John Lennon (LPL)</td>
                                <td class="p-4">£135</td>
                                <td class="p-4">£195</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Luton (LTN)</td>
                                <td class="p-4">£250</td>
                                <td class="p-4">£280</td>
                            </tr>
                            <tr class="hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Heathrow (LHR)</td>
                                <td class="p-4">£280</td>
                                <td class="p-4">£310</td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-yellow-50 transition-all duration-300! cursor-pointer">
                                <td class="p-4 font-bold">Gatwick (LGW)</td>
                                <td class="p-4">£325</td>
                                <td class="p-4">£380</td>
                            </tr>
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
                    <a href="{{route('booking')}}"
                        class="inline-block px-6 py-4 rounded-lg no-underline font-bold bg-second-500 text-gray-900 transition-all duration-300! hover:-translate-y-1 hover:shadow-2xl shadow-lg">Reserve
                        your driver now</a>
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
                href="{{route('booking')}}">Get Quote</a>
        </div>
    </div>
</section>

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
