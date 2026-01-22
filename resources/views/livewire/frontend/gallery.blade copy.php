<div x-data="{
    selectedCategory: 'all',
    showModal: false,
    currentIndex: 0,
    filteredImages: [],

    init() {
        this.filterImages();
        this.initScrollAnimation();
    },

    initScrollAnimation() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.scroll-animate').forEach(el => observer.observe(el));
    },

    filterImages() {
        const images = @js($images);
        if (this.selectedCategory === 'all') {
            this.filteredImages = images;
        } else {
            this.filteredImages = images.filter(img => img.category_id == this.selectedCategory);
        }
    },

    selectCategory(category) {
        this.selectedCategory = category;
        this.filterImages();
    },

    openModal(index) {
        this.currentIndex = index;
        this.showModal = true;
        document.body.style.overflow = 'hidden';
    },

    closeModal() {
        this.showModal = false;
        document.body.style.overflow = '';
    },

    nextImage() {
        this.currentIndex = (this.currentIndex + 1) % this.filteredImages.length;
    },

    prevImage() {
        this.currentIndex = (this.currentIndex - 1 + this.filteredImages.length) % this.filteredImages.length;
    }
}" @keydown.escape.window="closeModal()" @keydown.arrow-right.window="showModal && nextImage()"
    @keydown.arrow-left.window="showModal && prevImage()">

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

            .scroll-animate {
                opacity: 0;
                transform: translateY(30px);
                transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            }

            .scroll-animate.show {
                opacity: 1;
                transform: translateY(0);
            }

            [x-cloak] {
                display: none !important;
            }

            .lightbox {
                display: none;
                position: fixed;
                z-index: 9999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.95);
                backdrop-filter: blur(5px);
            }

            .lightbox.active {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .lightbox-content {
                position: relative;
                max-width: 90%;
                max-height: 90%;
            }

            .lightbox-img {
                max-width: 100%;
                max-height: 85vh;
                object-fit: contain;
                border-radius: 0.5rem;
            }

            .lightbox-close {
                position: absolute;
                top: -50px;
                right: 0;
                color: white;
                font-size: 40px;
                font-weight: bold;
                cursor: pointer;
                background: none;
                border: none;
                transition: color 0.3s;
            }

            .lightbox-close:hover {
                color: #fbbf24;
            }

            .lightbox-prev,
            .lightbox-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                color: white;
                font-size: 40px;
                font-weight: bold;
                cursor: pointer;
                background: rgba(0, 0, 0, 0.5);
                border: none;
                padding: 10px 20px;
                border-radius: 0.5rem;
                transition: all 0.3s;
            }

            .lightbox-prev {
                left: -80px;
            }

            .lightbox-next {
                right: -80px;
            }

            .lightbox-prev:hover,
            .lightbox-next:hover {
                background: rgba(251, 191, 36, 0.8);
            }

            @media (max-width: 768px) {
                .lightbox-prev {
                    left: 10px;
                }

                .lightbox-next {
                    right: 10px;
                }
            }
        </style>
    @endpush

    <section>
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
                    <button @click="selectCategory('all')"
                        :class="selectedCategory === 'all' ? 'bg-second-500 text-gray-900' :
                            'bg-gray-200 text-gray-700 hover:bg-second-500 hover:text-gray-900'"
                        class="px-6 py-2 rounded-lg font-semibold transition-all duration-500">
                        All
                    </button>

                    @foreach ($categories as $category)
                        <button @click="selectCategory({{ $category->id }})"
                            :class="selectedCategory === {{ $category->id }} ? 'bg-second-500 text-gray-900' :
                                'bg-gray-200 text-gray-700 hover:bg-second-500 hover:text-gray-900'"
                            class="px-6 py-2 rounded-lg font-semibold transition-all duration-500">
                            {{ $category->name }}
                        </button>
                    @endforeach
                </div>

                <!-- Gallery Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <template x-for="(image, index) in filteredImages" :key="image.id">
                        <div class="gallery-item scroll-animate translate-y-8 show">
                            <div @click="openModal(index)"
                                class="relative overflow-hidden rounded-2xl shadow-lg cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl group">
                                <img :src="image.image_url || 'https://placehold.co/600x400'"
                                    :alt="image.title || 'Gallery image'"
                                    class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                                    <div class="p-4 text-white">
                                        <h3 class="font-serif text-xl font-bold text-white"
                                            x-text="image.title || 'Gallery Image'"></h3>
                                        <p class="text-sm text-white"
                                            x-text="image.category?.name || 'Premium Service'"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- No Images Message -->
                <div x-show="filteredImages.length === 0" class="text-center py-16">
                    <p class="text-gray-500 text-lg">No images found in this category.</p>
                </div>
            </div>
        </section>

        <!-- Lightbox -->
        <div x-show="showModal" x-cloak x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="lightbox active" @click.self="closeModal()">
            <div class="lightbox-content">
                <button class="lightbox-close" @click="closeModal()">&times;</button>
                <button class="lightbox-prev" @click="prevImage()">&#10094;</button>
                <template x-if="filteredImages[currentIndex]">
                    <img class="lightbox-img"
                        :src="filteredImages[currentIndex].image_url || 'https://placehold.co/600x400'"
                        :alt="filteredImages[currentIndex].title || 'Gallery image'">
                </template>
                <button class="lightbox-next" @click="nextImage()">&#10095;</button>
            </div>
        </div>
    </section>

    @push('scripts')
    @endpush
</div>
