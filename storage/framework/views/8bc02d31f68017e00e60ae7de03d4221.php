

<?php $__env->startSection('content'); ?>
    
    <section class="home-hero">
        <div class="container hero-grid">

            <div class="hero-text">
                <h1>
                    Smart Online <span>Calculators</span><br>
                    Made Simple
                </h1>

                <p>
                    GST, EMI, Income Tax, Percentage, Age & more calculators —
                    fast, accurate and 100% free.
                </p>

                <a href="#tools" class="btn-primary">
                    Explore Calculators
                </a>
            </div>

            <div class="hero-illustration">
                🧮
            </div>

        </div>
    </section>

    
    <section class="home-tools" id="tools">
        <div class="container">

            <h2 class="section-title">Popular Calculators</h2>

            <div class="tools-grid">
                <?php $__currentLoopData = $tools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/<?php echo e($tool->slug); ?>" class="tool-card">

                        <div class="tool-icon">
                            <?php if (isset($component)) { $__componentOriginal114a4750071386a6a5d0e0f9aca3c6cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal114a4750071386a6a5d0e0f9aca3c6cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons','data' => ['name' => $tool->icon]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tool->icon)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal114a4750071386a6a5d0e0f9aca3c6cd)): ?>
<?php $attributes = $__attributesOriginal114a4750071386a6a5d0e0f9aca3c6cd; ?>
<?php unset($__attributesOriginal114a4750071386a6a5d0e0f9aca3c6cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal114a4750071386a6a5d0e0f9aca3c6cd)): ?>
<?php $component = $__componentOriginal114a4750071386a6a5d0e0f9aca3c6cd; ?>
<?php unset($__componentOriginal114a4750071386a6a5d0e0f9aca3c6cd); ?>
<?php endif; ?>
                        </div>

                        <h3><?php echo e($tool->title); ?></h3>
                        <p><?php echo e($tool->description); ?></p>

                        <?php if($tool->category): ?>
                            <span class="tool-category"><?php echo e(ucfirst($tool->category)); ?></span>
                        <?php endif; ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
    </section>


    
    <section class="why-smartcalc">
        <div class="container">

            <h2 class="section-title">Why SmartCalc.in?</h2>

            <div class="why-grid">
                <div class="why-item">⚡ Fast & Real-Time Calculations</div>
                <div class="why-item">🎯 Accurate & Updated Formulas</div>
                <div class="why-item">📱 Mobile Friendly</div>
                <div class="why-item">🔐 No Signup Required</div>
                <div class="why-item">💯 Completely Free</div>
            </div>

        </div>
    </section>

    
    <section class="home-faq">
        <div class="container">

            <h2 class="section-title">Frequently Asked Questions</h2>

            <div class="faq-item">
                <h4>Is SmartCalc free?</h4>
                <p>Yes, all calculators are 100% free to use.</p>
            </div>

            <div class="faq-item">
                <h4>Are calculations accurate?</h4>
                <p>Yes, calculations are based on standard formulas.</p>
            </div>

            <div class="faq-item">
                <h4>Do I need to register?</h4>
                <p>No signup or login is required.</p>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/pages/home.blade.php ENDPATH**/ ?>