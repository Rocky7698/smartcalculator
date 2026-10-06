

<?php $__env->startSection('content'); ?>
    
    <?php if($slug === 'gst-calculator'): ?>
        <?php echo $__env->make('tools.gst', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    
    <?php if($slug === 'emi-calculator'): ?>
        <?php echo $__env->make('tools.emi', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>


    
    <?php if($slug === 'loan-calculator'): ?>
        <?php echo $__env->make('tools.loan', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    
    <?php if($slug === 'marks-percentage'): ?>
        <?php echo $__env->make('tools.marks-percentage', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    
    <?php if($slug === 'age-calculator'): ?>
        <?php echo $__env->make('tools.age-calculator', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if($slug === 'area-calculator'): ?>
        <?php echo $__env->make('tools.area', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if($slug === 'volume-calculator'): ?>
        <?php echo $__env->make('tools.volume-calculator', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if($slug === 'bmi-calculator'): ?>
        <?php echo $__env->make('tools.bmi-calculator', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if($slug === 'data-calculator'): ?>
        <?php echo $__env->make('tools.data-calculator', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if($slug === 'discount-calculator'): ?>
        <?php echo $__env->make('tools.discount-calculator', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if($slug === 'income-tax-calculator'): ?>
        <?php echo $__env->make('tools.income-tax-calculator', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if($slug === 'currency-converter'): ?>
        <?php echo $__env->make('tools.currency', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/show.blade.php ENDPATH**/ ?>