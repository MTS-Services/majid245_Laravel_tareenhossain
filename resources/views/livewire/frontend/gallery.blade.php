<section>
@section('meta')
    {{-- SEO PRIMARY TAGS --}}
    <meta name="title" content="Our Luxury Fleet | Central Executive Transfers">
    <meta name="description" content="View our pristine fleet of executive vehicles. Featuring Mercedes E-Class, 8-Seater Mercedes Vito MPVs, and Rolls Royce for weddings and VIP transfers in Sheffield.">
    <meta name="keywords" content="Luxury Car Fleet Sheffield, Mercedes E-Class Taxi, 8 Seater Minibus Hire Sheffield, Rolls Royce Hire Sheffield, Executive Chauffeur Cars, Wedding Cars Sheffield">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="Our Luxury Fleet | Mercedes, Rolls Royce & MPVs">
    <meta property="og:description" content="Explore our executive fleet. From the comfort of the Mercedes E-Class to the spacious 8-seater Vito and the luxury of Rolls Royce. Travel in style.">
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image:secure_url" content="{{ asset('assets/images/logo.png') }}">
    <link rel="image_src" href="{{ asset('assets/images/logo.png') }}">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Our Luxury Fleet | Mercedes, Rolls Royce & MPVs">
    <meta name="twitter:description" content="See the Central Executive Transfers fleet. Immaculately maintained Mercedes and Rolls Royce vehicles for your comfort and safety.">
    <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

<div x-data="{
    open: false,
    index: 0,
    images: @entangle('images'),

    openLightbox(i) {
        this.index = i;
        this.open = true;
    },

    close() {
        this.open = false;
    },

    next() {
        if (this.index < this.images.length - 1) this.index++;
    },

    prev() {
        if (this.index > 0) this.index--;
    }
}" class="container mx-auto px-4 py-10">
    <h1 class="text-4xl md:text-5xl font-bold mb-6 text-black scroll-animate-y-reverse ease-in!">Our Executive Fleet & Luxury Transfer Gallery</h1>

    {{-- ================= GALLERY GRID ================= --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        <template x-for="(image, i) in images" :key="image.id">

            <div x-memo="image.id" @click="openLightbox(i)"
                class="cursor-pointer transform transition-all duration-500 hover:-translate-y-1">

                <div class="relative overflow-hidden rounded-2xl shadow-lg group">

                    <img loading="eager" fetchpriority="high" decoding="async" fetchpriority="high" width="400"
                        height="400"
                        :src="image.thumb_url ?? (image.image_url ?? '{{ asset('storage') }}/' + image.image)"
                        :alt="image.alt"
                        class="w-full h-64 object-contain transition-transform duration-500 group-hover:scale-110">
                    <img :loading="i < 4 ? 'eager' : 'lazy'"
                        :fetchpriority="i < 4 ? 'high' : 'low'" decoding="async" width="400" height="300"
                        :src="image.thumb_url ?? (image.image_url ?? '{{ asset('storage') }}/' + image.image)"
                        :alt="image.alt"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent
                               opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end">
                        <div class="p-4">
                            <p class="text-sm text-white" x-text="image.alt"></p>
                        </div>
                    </div>

                </div>
            </div>

        </template>

        {{-- Empty state --}}
        <div x-show="images.length === 0" class="col-span-full text-center text-gray-500 text-lg py-20">
            No images found.
        </div>

    </div>

    {{-- ================= LIGHTBOX ================= --}}
    <div x-show="open" x-transition.opacity x-cloak
        class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center">

        {{-- Close --}}
        <button @click="close" class="absolute top-6 right-6 text-white text-4xl font-bold hover:text-second-400">
            &times;
        </button>

        {{-- Prev --}}
        <button @click="prev" class="absolute left-6 text-white text-4xl hover:text-second-400">
            &#10094;
        </button>

        {{-- Image --}}
        <div class="max-w-[90vw] max-h-[85vh]">
            {{-- UPDATED: Added :title="images[index]?.alt" --}}
            <img x-show="images.length" loading="eager" decoding="async"
                :src="images[index]?.full_url ??
                    images[index]?.image_url ??
                    '{{ asset('storage') }}/' + images[index]?.image"
                :alt="images[index]?.alt"
                :title="images[index]?.alt"
                class="max-w-full max-h-[85vh] object-contain rounded-xl shadow-2xl transition-all duration-300">
        </div>

        {{-- Next --}}
        <button @click="next" class="absolute right-6 text-white text-4xl hover:text-second-400">
            &#10095;
        </button>

    </div>

</div>
</section>
