<section>
    @push('styles')
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@700&display=swap"
            rel="stylesheet">
        <style>
            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'Inter', sans-serif;
            }

            .font-serif {
                font-family: 'Playfair Display', serif;
            }

            .bg-primary {
                background-color: #1e3a8a;
            }

            .bg-second-500 {
                background-color: #fbbf24;
            }

            .bg-bg {
                background-color: #f9fafb;
            }

            /* Lightbox Styles */
            .lightbox {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.95);
                z-index: 9999;
                justify-content: center;
                align-items: center;
            }

            .lightbox.active {
                display: flex;
            }

            .lightbox-content {
                max-width: 90%;
                max-height: 90%;
                position: relative;
            }

            .lightbox-img {
                max-width: 100%;
                max-height: 90vh;
                object-fit: contain;
            }

            .lightbox-close {
                position: absolute;
                top: -40px;
                right: 0;
                color: white;
                font-size: 40px;
                cursor: pointer;
                background: none;
                border: none;
            }

            .lightbox-prev,
            .lightbox-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                color: white;
                font-size: 50px;
                cursor: pointer;
                background: rgba(0, 0, 0, 0.5);
                border: none;
                padding: 20px;
                transition: all 0.3s;
            }

            .lightbox-prev:hover,
            .lightbox-next:hover {
                background: rgba(251, 191, 36, 0.8);
            }

            .lightbox-prev {
                left: 20px;
            }

            .lightbox-next {
                right: 20px;
            }
        </style>
    @endpush
    <div>
        <!-- Hero Section -->
        <section class="relative h-[40vh] flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/images/gallery/airport-transfer.jpeg') }}" alt="Gallery Hero"
                    class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/80"></div>
            </div>

            <div class="container relative z-10 px-6 text-white text-center">
                <h1 class="font-serif text-4xl md:text-5xl font-bold mb-4 text-white">
                    Our Gallery
                </h1>
                <p class="text-lg md:text-xl text-white max-w-2xl mx-auto">
                    Take a look at our premium fleet and professional service in action
                </p>
            </div>
        </section>

        <!-- Gallery Categories -->
        <section class="py-9">
            <div class="container mx-auto px-5">
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <button
                        class="gallery-filter px-6 py-2 rounded-lg font-semibold transition-all duration-500 bg-second-500 text-gray-900"
                        data-filter="all">All</button>
                    <button
                        class="gallery-filter px-6 py-2 rounded-lg font-semibold transition-all duration-500 bg-gray-200 text-gray-700 hover:bg-second-500 hover:text-gray-900"
                        data-filter="executive">Executive</button>
                    <button
                        class="gallery-filter px-6 py-2 rounded-lg font-semibold transition-all duration-500 bg-gray-200 text-gray-700 hover:bg-second-500 hover:text-gray-900"
                        data-filter="luxury">Luxury</button>
                    <button
                        class="gallery-filter px-6 py-2 rounded-lg font-semibold transition-all duration-500 bg-gray-200 text-gray-700 hover:bg-second-500 hover:text-gray-900"
                        data-filter="minibus">Minibus</button>
                    <button
                        class="gallery-filter px-6 py-2 rounded-lg font-semibold transition-all duration-500 bg-gray-200 text-gray-700 hover:bg-second-500 hover:text-gray-900"
                        data-filter="service">Service</button>
                </div>

                <!-- Gallery Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <!-- Executive Cars -->
                    <div class="gallery-item executive scroll-animate  translate-y-8" data-index="0">
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
                            <img src="{{ asset('assets/images/gallery/20251016_194825.jpg') }}" alt="Mercedes E-Class"
                                class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0   group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                                <div class="p-4 text-white">
                                    <h3 class="font-serif text-xl font-bold text-white">Mercedes E-Class</h3>
                                    <p class="text-sm text-white">Executive Saloon</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item executive scroll-animate  translate-y-8" data-index="1">
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
                            <img src="{{ asset('assets/images/gallery/1000062004.jpg') }}"
                                alt="Airport Transfer Service"
                                class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0   group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                                <div class="p-4 text-white">
                                    <h3 class="font-serif text-xl font-bold text-white">Airport Transfer</h3>
                                    <p class="text-sm text-white">Premium Service</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Luxury Cars -->
                    <div class="gallery-item luxury scroll-animate  translate-y-8" data-index="2">
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
                            <img src="{{ asset('assets/images/gallery/1000062052.jpg') }}" alt="Rolls-Royce"
                                class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0   group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                                <div class="p-4 text-white">
                                    <h3 class="font-serif text-xl font-bold text-white">Rolls-Royce</h3>
                                    <p class="text-sm text-white">Ultimate Luxury</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Minibus -->
                    <div class="gallery-item minibus scroll-animate  translate-y-8" data-index="3">
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
                            <img src="{{ asset('assets/images/gallery/1000062076.jpg') }}" alt="Mercedes Vito Minibus"
                                class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0   group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                                <div class="p-4 text-white">
                                    <h3 class="font-serif text-xl font-bold text-white">Mercedes Vito</h3>
                                    <p class="text-sm text-white">8-Seater MPV</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Service Images (Placeholder - Add more real images as needed) -->
                    <div class="gallery-item service executive scroll-animate  translate-y-8" data-index="4">
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
                            <img src="{{ asset('assets/images/gallery/1000062092.jpg') }}" alt="Professional Chauffeur"
                                class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0   group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                                <div class="p-4 text-white">
                                    <h3 class="font-serif text-xl font-bold text-white">Professional Service</h3>
                                    <p class="text-sm text-white">Licensed Chauffeurs</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item service scroll-animate  translate-y-8" data-index="5">
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
                            <img src="{{ asset('assets/images/gallery/1000062096.jpg') }}" alt="Meet and Greet"
                                class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0  group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                                <div class="p-4">
                                    <h3 class="font-serif text-xl font-bold text-white text-white">Meet & Greet</h3>
                                    <p class="text-sm text-white">Terminal Service</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item executive scroll-animate  translate-y-8" data-index="6">
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
                            <img src="{{ asset('assets/images/gallery/1000062139.jpg') }}" alt="Executive Interior"
                                class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0   group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                                <div class="p-4 text-white">
                                    <h3 class="font-serif text-xl font-bold text-white">Luxury Interior</h3>
                                    <p class="text-sm text-white">Comfort & Style</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-item minibus scroll-animate  translate-y-8" data-index="7">
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
                            <img src="https://centraltravels.co.uk/assets/mercedes-benz-vito.webp" alt="Group Transfer"
                                class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0   group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                                <div class="p-4 text-white">
                                    <h3 class="font-serif text-xl font-bold text-white">Group Travel</h3>
                                    <p class="text-sm text-white">Spacious & Comfortable</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Lightbox -->
        <div id="lightbox" class="lightbox">
            <div class="lightbox-content">
                <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
                <button class="lightbox-prev" onclick="changeImage(-1)">&#10094;</button>
                <img id="lightbox-img" class="lightbox-img" src="" alt="">
                <button class="lightbox-next" onclick="changeImage(1)">&#10095;</button>
            </div>
        </div>
    </div>
</section>
