<!DOCTYPE html>
<html lang="en">
<head>

    <!-- BASIC META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO META -->
    <title>@yield('title', 'SmartCalc.in – Online Calculators & Tools')</title>
    <meta name="description" content="@yield('meta_description', 'Fast & accurate online calculators and utility tools for daily use.')">

    <!-- SEO EXTRA -->
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<!-- HEADER -->
<header>
    <div class="container">
        <a href="{{ url('/') }}" class="logo">SmartCalc.in</a>

        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/gst-calculator') }}">GST</a>
            <a href="{{ url('/emi-calculator') }}">EMI</a>
            <a href="{{ url('/about-us') }}">About</a>
            <a href="{{ url('/contact-us') }}">Contact</a>
        </nav>
    </div>
</header>

<!-- TOP ADS PLACEHOLDER -->
<div class="ads ads-top">
    <!-- Google AdSense Top -->
</div>

<!-- MAIN CONTENT -->
<main class="container">
    @yield('content')
</main>

<!-- BOTTOM ADS PLACEHOLDER -->
<div class="ads ads-bottom">
    <!-- Google AdSense Bottom -->
</div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <p>© {{ date('Y') }} SmartCalc.in. All Rights Reserved.</p>

        <div class="footer-links">
            <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
            <a href="{{ url('/terms-conditions') }}">Terms</a>
        </div>
    </div>
</footer>

</body>
</html>
