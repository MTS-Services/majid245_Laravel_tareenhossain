<div class="min-h-[calc(100vh-56px)] flex items-center justify-center p-4">
    <div class="bg-white max-w-xl w-full rounded-2xl shadow-2xl px-10 py-12 text-center">
        <div
            class="w-24 h-24 bg-emerald-500 rounded-full mx-auto mb-8 flex items-center justify-center scroll-animate">
            <div class="w-12 h-6 border-4 border-white border-t-0 border-r-0 -rotate-45"></div>
        </div>

        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
            Booking Successful! ðŸŽ‰
        </h1>

        <p class="text-gray-600 text-lg mb-3">
            Thank you for choosing Central Travels! Your taxi has been successfully booked.
        </p>
        <p class="text-gray-600 text-lg">
            A confirmation email has been sent to your registered email address with all the booking details.
        </p>
        <div class="flex flex-wrap justify-center gap-4 mt-10">
            <a href="{{ url('/') }}"
                class="bg-second-500 hover:bg-yellow-500 text-black font-semibold px-6 py-4 rounded-lg text-lg transition-all duration-300! transform hover:scale-105 hover:shadow-2xl shadow-xl scroll-animate-x-reverse">
                Back to Home
            </a>
        </div>
    </div>
</div>
