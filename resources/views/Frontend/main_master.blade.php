<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.css') }}" />

    <title>Responsive portfolio website -Subash Danuwar</title>
</head>

<body>
    <!--==================== HEADER Starts====================-->
    @include('Frontend.body.header')
    <!--==================== HEADER Ends====================-->


    <!--==================== MAIN ====================-->
    <main class="main">
        @yield('Frontend')

    </main>

    <!--==================== FOOTER Start ====================-->
    @include('Frontend.body.footer')

    <!--==================== FOOTER Ends====================-->


    <!--========== SCROLL UP ==========-->

    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="{{ asset('frontend/assets/js/scrollreveal.min.js') }} "></script>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--=============== EMAIL JS ===============-->

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('frontend/assets/js/main.js') }} "></script>
</body>

</html>
