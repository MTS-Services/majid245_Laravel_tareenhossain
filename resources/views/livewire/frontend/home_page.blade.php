<section>
    <div>
        <!-- Hero Section -->
        <section class="relative h-[calc(100vh-70px)] md:h-[60vh] flex items-center justify-center overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0 z-0 scroll-animate-y">
                <img src="{{ asset('assets/images/home_page/airport-transfer.jpeg') }}" alt="Luxury Car"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-black/45 to-black/70"></div>
            </div>

            <!-- Content -->
            <div class="container relative z-10 px-6 text-white animate-fade-in-up">
                <div>
                    <!-- Main Heading -->
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white scroll-animate-y-reverse ease-in!">
                        Executive Airport Transfers —
                        <span class="block mt-2 text-second-500 scroll-animate-x ease-in!">Covering All of South
                            Yorkshire</span>
                    </h1>

                    <!-- Sub Heading -->
                    <p class="text-lg md:text-xl mb-8 text-white scroll-animate-y-reverse ease-in-out!">
                        Fixed prices • Flight tracking • 24/7 service
                    </p>

                    <!-- Rating Badge -->
                    <div
                        class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/30 rounded-md px-3 md:px-6 py-3 mb-8 hover:bg-white/20 scroll-animate-y-reverse ease-in-out!">
                        <svg class="w-6 h-6 fill-second-500" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="font-semibold text-lg text-white">5-Star Rated Service on Google</span>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col md:flex-row gap-4 text-center">
                        <a href="{{ route('booking') }}#booking"
                            class="bg-second-500 hover:bg-yellow-500 text-black font-semibold px-6 py-4 md:px-8 md:py-6 rounded-lg text-lg transition-all duration-300! transform hover:scale-105 hover:shadow-2xl shadow-xl scroll-animate-x-reverse pulse-premium">
                            Get Instant Quote
                        </a>
                        <a href="tel:+447405172435"
                            class="bg-transparent hover:bg-white/20 border-2 border-white text-white font-semibold px-6 py-4 md:px-8 md:py-6 rounded-lg text-lg transition-all backdrop-blur-sm scroll-animate-x">Call
                            Us Now</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Why Choose Section -->
        <section class="py-12 bg-bg scroll-mt-[72px] max-h-[100vh-200px] md:h-full" id="why">
            <div class="container mx-auto px-5">
                <h2
                    class="text-3xl md:text-4xl font-bold mb-3 text-center scroll-animate transition-all duration-700 ease-out">
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
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-sm min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Sheffield Licensed</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">All drivers fully licensed by Sheffield
                            City Council with enhanced DBS checks for your safety and peace of mind.</p>
                    </div>

                    <!-- Card 2: Executive Vehicles -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-sm min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                <path
                                    d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Premium Fleet</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Mercedes E-Class and 8-seater MPVs —
                            immaculately maintained, comfortable, and reliable executive vehicles.</p>
                    </div>

                    <!-- Card 3: Flight Tracking -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-sm min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Flight Tracking</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Real-time flight monitoring with complimentary
                            waiting time — we adapt to delays so you never worry.</p>
                    </div>

                    <!-- Card 4: Fixed Prices -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-sm min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
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
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Transparent Pricing</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Fixed rates quoted upfront before booking — no
                            hidden charges, no meter surprises, total clarity.</p>
                    </div>

                    <!-- Card 5: 24/7 Service -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-sm min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900">24/7 Availability</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Round-the-clock service for early departures
                            and late arrivals — we're ready whenever you need us.</p>
                    </div>

                    <!-- Card 6: Easy Booking -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-sm min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Instant Booking</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Quick online quotes with secure payment in
                            minutes — book your transfer effortlessly from any device.</p>
                    </div>

                    <!-- Card 7: Meet & Greet -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-sm min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-pink-500 to-pink-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Meet & Greet</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Personal terminal meet service with name board
                            — seamless airport collection for a premium experience.</p>
                    </div>

                    <!-- Card 8: Luggage Assistance -->
                    <div
                        class="bg-white border-2 border-gray-200 rounded-2xl p-6 shadow-sm min-h-56 scroll-animate hover:shadow-2xl transition-all duration-500 hover:border-second-500 hover:-translate-y-2 group  flex flex-col justify-center items-center">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-white" fill="white" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-900">Luggage Assistance</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Complimentary help with bags and cases — our
                            chauffeurs ensure door-to-door convenience and care.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Prices Section -->
        <section class="py-9 scroll-mt-[72px]" id="prices">
            <div class="container mx-auto px-5">
                <h2 class="text-3xl font-bold text-center mb-6 scroll-animate transition-all duration-700 ease-out">
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
                            @forelse ($airportPrices as $airportPrice)
                                <tr
                                    class="hover:bg-yellow-50 transition-all duration-300 cursor-pointer border-b border-gray-200 shadow-sm scroll-animate">
                                    <td class="p-4 font-bold border-r border-gray-200 shadow">
                                        {{ $airportPrice->route_from }}
                                    </td>
                                    <td class="p-4 border-r border-gray-200 shadow-sm">
                                        £{{ round($airportPrice->executive_saloon_price) }}
                                    </td>
                                    <td class="p-4 shadow-sm">
                                        £{{ round($airportPrice->eight_seater_price) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3"
                                        class="p-4 text-center text-gray-500 border-t border-gray-200 shadow-sm">
                                        No airport prices found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Fleet Section -->
        <section class="py-9 bg-bg scroll-mt-[72px]" id="fleet">
            <div class="container mx-auto px-5">
                <h2 class="text-3xl font-bold mb-6 scroll-animate">Fleet</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <a href="{{ route('booking') }}#boking" wire:navigate class="cursor-pointer">
                        <div
                            class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm min-h-[180px] scroll-animate
                           transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
                            <div class="overflow-hidden rounded-lg mb-2 bg-white">
                                <img class="w-full h-[100px] object-contain transition-transform duration-300! group-hover:scale-110"
                                    src="{{ asset('assets/images/home_page/Executive.png') }}" alt="Executive">
                            </div>
                            <h3 class="text-lg font-bold mb-2">Executive</h3>
                            <p class="m-0">Mercedes E‑Class or similar — 4 passengers • 2 suitcases • 2 hand carry.
                            </p>
                        </div>
                    </a>
                    <a href="{{ route('booking') }}#boking" wire:navigate class="cursor-pointer">
                        <div
                            class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm min-h-[180px] scroll-animate
                           transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
                            <div class="overflow-hidden rounded-lg mb-2 bg-white">
                                <img class="w-full h-[100px] object-contain transition-transform duration-300! group-hover:scale-110"
                                    src="{{ asset('assets/images/home_page/Minibus.png') }}" alt="Minibus">
                            </div>
                            <h3 class="text-lg font-bold mb-2">Minibus</h3>
                            <p class="m-0">8‑seater MPV — 8 passengers • 8 suitcases • 3 hand carry.</p>
                        </div>
                    </a>
                    <a href="{{ route('booking') }}#boking" wire:navigate class="cursor-pointer">
                        <div
                            class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm min-h-[180px] scroll-animate
                           transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
                            <div class="overflow-hidden rounded-lg mb-2 bg-white">
                                <img class="w-full h-[100px] object-contain transition-transform duration-300! group-hover:scale-110"
                                    src="{{ asset('assets/images/home_page/Luxury.png') }}" alt="Luxury">
                            </div>
                            <h3 class="text-lg font-bold mb-2">Luxury</h3>
                            <p class="m-0">Rolls‑Royce or similar — 3 passengers • 2 suitcases • 2 hand carry.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <section class="py-12 scroll-mt-[72px] bg-gray-50" id="reviews">
            <div class="container mx-auto px-5 relative">

                <div class="flex items-end justify-between mb-8">
                    <div>
                        <h2 class="text-3xl font-bold scroll-animate">Reviews</h2>
                        <p class="text-gray-600 mt-1">What our community says about us.</p>
                    </div>

                    <div class="hidden md:flex gap-2">
                        <button
                            class="swiper-prev-btn w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-white hover:shadow-md transition-all active:scale-95">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button
                            class="swiper-next-btn w-10 h-10 rounded-full border border-gray-300 flex items-center justify-center hover:bg-white hover:shadow-md transition-all active:scale-95">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="swiper reviewSwiper !pb-8">
                    <div class="swiper-wrapper">
                        @forelse ($reviews as $review)
                            <div class="swiper-slide h-auto">
                                <div
                                    class="bg-white border border-gray-200 rounded-3xl p-8 shadow-sm h-full min-h-80 flex flex-col justify-between transition-all duration-300 hover:shadow-lg">
                                    <div class="flex-grow">
                                        <h3 class="text-lg font-bold mb-3 text-gray-900 leading-tight">
                                            "{{ $review['author_name'] }}"</h3>
                                        <p class="text-gray-600 leading-relaxed italic text-sm md:text-base">
                                            {{ Str::limit($review['text'], 200) }}
                                        </p>
                                    </div>

                                    <div class="mt-6 pt-4 border-t border-gray-100">
                                        <a href="{{ $review['author_url'] }}" target="_blank"
                                            class="text-xs font-semibold tracking-wide uppercase text-gray-400 hover:text-yellow-600 transition-colors">
                                            — Verified Google Review
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>

                    <div class="swiper-pagination md:hidden"></div>
                </div>

                <div class="text-center md:text-left mt-2">
                    <a href="https://g.co/kgs/CQqsY6t" target="_blank" rel="noopener"
                        class="text-sm font-medium text-gray-500 hover:text-yellow-600 underline decoration-gray-300 transition-all">
                        See all reviews on Google
                    </a>
                </div>
            </div>
        </section>
        <section class="py-14 scroll-mt-[72px] bg-gray-50" id="faq">
            <div class="container mx-auto px-5">
                <h2 class="text-3xl md:text-4xl font-semibold text-gray-900 mb-3 scroll-animate">
                    Frequently Asked Questions
                </h2>
                <p class="text-gray-600 mb-8 max-w-2xl scroll-animate">
                    Clear answers to common questions about our executive transfer services.
                </p>

                <!-- FAQ List -->
                <div class="w-full space-y-4">
                    @foreach ($faqs as $index => $faq)
                        <div
                            class="collapse collapse-plus bg-white border border-gray-200 rounded-2xl
                                    transition-all duration-300 hover:shadow-md scroll-animate">

                            <input type="radio" name="faq-accordion" {{ $index == 0 ? 'checked' : '' }} />

                            <div class="collapse-title text-base font-semibold text-gray-900 scroll-animate">
                                {{ $faq->question }}
                            </div>

                            <div class="collapse-content text-sm text-gray-600 leading-relaxed scroll-animate">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>



        <!-- CTA Section -->
        <section class="bg-white text-center py-12 scroll-animate">
            <div class="container mx-auto px-5">
                <h2 class="text-3xl font-bold text-black mb-3 scroll-animate">Ready when you are</h2>
                <p class="text-black mb-3 scroll-animate"> Book now and secure your driver</p>
                <p class="scroll-animate">
                    <a href="{{ route('booking') }}#booking"
                        class="inline-block px-6 py-4 rounded-lg no-underline font-bold bg-second-500 text-gray-900 transition-all duration-300! hover:-translate-y-1 hover:shadow-2xl shadow-lg">Reserve
                        your driver now</a>
                </p>
            </div>
        </section>
    </div>
</section>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.reviewSwiper', {
            slidesPerView: 1.2, // Shows a peek of the next card on mobile
            spaceBetween: 16,
            centeredSlides: false,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-next-btn',
                prevEl: '.swiper-prev-btn',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.2,
                    spaceBetween: 16,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            }
        });
    </script>
@endpush
