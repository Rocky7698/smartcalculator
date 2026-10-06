<!DOCTYPE html>
<html lang="en">
<head>

    <!-- BASIC META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO META -->
    <title><?php echo $__env->yieldContent('title', 'SmartCalc.in – Online Calculators & Tools'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Fast & accurate online calculators and utility tools for daily use.'); ?>">

    <!-- SEO EXTRA -->
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">

    <!-- CSS -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

</head>
<body>

<!-- HEADER -->
<header>
    <div class="container">
        <a href="<?php echo e(url('/')); ?>" class="logo">SmartCalc.in</a>

        <nav>
            <a href="<?php echo e(url('/')); ?>">Home</a>
            <a href="<?php echo e(url('/gst-calculator')); ?>">GST</a>
            <a href="<?php echo e(url('/emi-calculator')); ?>">EMI</a>
            <a href="<?php echo e(url('/about-us')); ?>">About</a>
            <a href="<?php echo e(url('/contact-us')); ?>">Contact</a>
        </nav>
    </div>
</header>

<!-- TOP ADS PLACEHOLDER -->
<div class="ads ads-top">
    <!-- Google AdSense Top -->
</div>

<!-- MAIN CONTENT -->
<main class="container">
    <?php echo $__env->yieldContent('content'); ?>
</main>

<!-- BOTTOM ADS PLACEHOLDER -->
<div class="ads ads-bottom">
    <!-- Google AdSense Bottom -->
</div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <p>© <?php echo e(date('Y')); ?> SmartCalc.in. All Rights Reserved.</p>

        <div class="footer-links">
            <a href="<?php echo e(url('/privacy-policy')); ?>">Privacy Policy</a>
            <a href="<?php echo e(url('/terms-conditions')); ?>">Terms</a>
        </div>
    </div>
</footer>

</body>
</html>
<?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/layouts/app.blade.php ENDPATH**/ ?>