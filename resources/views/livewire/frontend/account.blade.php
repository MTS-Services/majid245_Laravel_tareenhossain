<div class="container py-10">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">My Account</h1>
        <p class="text-gray-600 mt-1">
            View your bookings, invoices and personal details
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-md border overflow-hidden">
        <iframe src="https://696a0e8806cc5.trial.easytaxioffice.com/customer?site_key=7e3f3d3085b900d598bc40543d611575"
            id="eto-iframe-customer" allow="geolocation" scrolling="no" frameborder="0"
            class="w-full min-h-[600px] border-0">
        </iframe>
    </div>
</div>

<script src="https://696a0e8806cc5.trial.easytaxioffice.com/assets/plugins/iframe-resizer/iframeResizer.min.js">
</script>
<script>
    iFrameResize({
        log: false,
        checkOrigin: false,
        heightCalculationMethod: 'bodyScroll'
    }, '#eto-iframe-customer');
</script>
