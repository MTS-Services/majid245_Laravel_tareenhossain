<section>

    <a href="https://wa.me/447405172435" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"
        class="fixed right-6 bottom-6 md:right-10 md:bottom-10
          w-12 h-12 md:w-14 md:h-14
          flex items-center justify-center
          rounded-full shadow-2xl
          hover:-translate-y-1 transition-all duration-300 pulse-premium z-50">
        <img src="{{ asset('assets/icons/WhatsApp.svg.webp') }}" alt="WhatsApp">
    </a>



    <!-- Contact Section -->
    <div class="py-16 bg-black scroll-mt-[72px]" id="contact">
        <div class="container mx-auto px-5">
            <h2 class="text-3xl md:text-4xl font-semibold mb-4 text-white scroll-animate">
                Get in Touch
            </h2>
            <p class="text-gray-400 mb-8 max-w-xl scroll-animate">
                For bookings, enquiries, or urgent travel needs, contact our team anytime.
            </p>

            <div class="grid gap-6 md:grid-cols-4 scroll-animate">
                <!-- Phone -->
                <div class="bg-gray-900 rounded-2xl p-6 text-white shadow-lg">
                    <h3 class="text-lg font-semibold mb-2 text-white">Phone</h3>
                    <a href="tel:+447405172435" class="text-xl font-bold text-second-500 underline">
                        +44 7405 172435
                    </a>
                </div>

                <!-- WhatsApp -->
                <div class="bg-gray-900 rounded-2xl p-6 text-white shadow-lg">
                    <h3 class="text-lg font-semibold mb-2 text-white">WhatsApp</h3>
                    <a href="https://wa.me/447405172435" target="_blank" rel="noopener"
                        class="text-xl font-bold text-green-400 underline">
                        Message Us Instantly
                    </a>
                </div>

                <!-- Email -->
                <div class="bg-gray-900 rounded-2xl p-6 text-white shadow-lg">
                    <h3 class="text-lg font-semibold mb-2 text-white">Email</h3>
                    <a href="mailto:Admin@centralexecutivetransfers.co.uk"
                        class="text-sm font-semibold text-second-500 break-all underline">
                        Admin@centralexecutivetransfers.co.uk
                    </a>
                </div>
                <div class="bg-gray-900 rounded-2xl p-6 text-white shadow-lg flex gap-6 justify-center items-center">
                    <!-- Facebook -->
                    <a href="#" aria-label="Facebook"
                        class="w-14 h-14 flex items-center justify-center rounded-full border border-white/50 hover:border-second-500/40 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="w-7 h-7 fill-white/80 hover:fill-second-500">
                            <path
                                d="M22 12a10 10 0 1 0-11.6 9.9v-7H8v-3h2.4V9.5c0-2.3 1.37-3.6 3.46-3.6.99 0 2.03.18 2.03.18v2.23h-1.14c-1.13 0-1.48.7-1.48 1.42v1.7H16l-.38 3h-2.1v7A10 10 0 0 0 22 12z" />
                        </svg>
                    </a>

                    <!-- LinkedIn -->
                    <a href="#" aria-label="LinkedIn"
                        class="w-14 h-14 flex items-center justify-center rounded-full border border-white/50 hover:border-second-500/40 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="w-7 h-7 fill-white/80 hover:fill-second-500">
                            <path
                                d="M20.45 20.45h-3.55v-5.4c0-1.29-.03-2.95-1.8-2.95-1.8 0-2.07 1.4-2.07 2.85v5.5h-3.55V9h3.4v1.56h.05c.47-.9 1.62-1.85 3.34-1.85 3.57 0 4.23 2.35 4.23 5.4v6.34zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.78C.8 0 0 .77 0 1.72v20.55C0 23.23.8 24 1.78 24h20.44C23.2 24 24 23.23 24 22.27V1.72C24 .77 23.2 0 22.22 0z" />
                        </svg>
                    </a>
                </div>


            </div>

            <p class="text-sm text-gray-500 mt-6 scroll-animate">
                We respond promptly. For urgent bookings, please call or use WhatsApp.
            </p>
        </div>
    </div>

    {{-- <!-- Fixed Bottom Bar -->
    <div class="fixed left-0 right-0 bottom-0 bg-primary p-3 flex gap-3 justify-between z-50 shadow-2xl">
        <a class="flex-1 text-center px-2 py-1 md:px-4 md:py-3 rounded-lg font-semibold no-underline bg-gray-800 text-white transition-all duration-300! hover:bg-gray-700 hover:-translate-y-1"
            href="tel:+447405172435">Call</a>
        <a class="flex-1 text-center px-2 py-1 md:px-4 md:py-3 rounded-lg font-semibold no-underline text-white transition-all duration-300! hover:-translate-y-1"
            href="https://wa.me/447405172435" target="_blank" rel="noopener" style="background:#25D366">WhatsApp</a>
        <a class="flex-1 text-center px-2 py-1 md:px-4 md:py-3 rounded-lg font-semibold no-underline bg-second-500 text-gray-900 transition-all duration-300! hover:-translate-y-1"
            href="{{ route('booking') }}#booking">Get Quote</a>
    </div> --}}


    <!-- Footer -->
    <footer class="bg-black/90 text-center py-5 mb-5 md:mb-16">
        <p class="text-sm text-white"><strong class="text-white/60">Central Executive Transfers</strong> — "Driven by
            Excellence"</p>
        <div class="text-xs mt-1 text-white/60">&copy; 2025 Central Executive Transfers. All rights reserved.</div>
    </footer>
</section>
