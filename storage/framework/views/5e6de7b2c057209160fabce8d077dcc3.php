<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['name']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $attrs = 'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round"
class="icon-svg"';
?>

<?php switch($name):
    
    case ('gst'): ?>
        <svg <?php echo $attrs; ?>>
            <path d="M10 1v22" />
            <path d="M4 6h10a4 4 0 110 8H6a4 4 0 000 8h10" />
        </svg>
    <?php break; ?>

    
    <?php case ('emi'): ?>
        <svg <?php echo $attrs; ?>>
            <rect x="3" y="10" width="4" height="10" />
            <rect x="10" y="6" width="4" height="14" />
            <rect x="17" y="3" width="4" height="17" />
        </svg>
    <?php break; ?>

    
    <?php case ('loan'): ?>
        <svg viewBox="0 0 24 24" class="icon-svg">
            <!-- House -->
            <path d="M3 11L12 3l9 8" />
            <path d="M5 10v10h14V10" />

            <!-- Rupee sign -->
            <path d="M10 8h4" />
            <path d="M10 12h4" />
            <path d="M10 8c2.5 0 4 1.2 4 3s-1.5 3-4 3" />
            <path d="M10 15l5 5" />
        </svg>
    <?php break; ?>

    
    <?php case ('percentage'): ?>
        <svg <?php echo $attrs; ?>>
            <line x1="5" y1="19" x2="19" y2="5" />
            <circle cx="7" cy="7" r="3" />
            <circle cx="17" cy="17" r="3" />
        </svg>
    <?php break; ?>

    
    <?php case ('age'): ?>
        <svg <?php echo $attrs; ?>>
            <circle cx="12" cy="12" r="10" />
            <path d="M12 6v6l4 2" />
        </svg>
    <?php break; ?>

    
    <?php case ('area'): ?>
        <svg <?php echo $attrs; ?>>
            <rect x="4" y="4" width="16" height="16" />
        </svg>
    <?php break; ?>

    
    <?php case ('volume'): ?>
        <svg <?php echo $attrs; ?>>
            <path d="M4 7l8-4 8 4v10l-8 4-8-4z" />
        </svg>
    <?php break; ?>

    
    <?php case ('bmi'): ?>
        <svg <?php echo $attrs; ?>>
            <circle cx="12" cy="7" r="4" />
            <path d="M6 22a6 6 0 0112 0" />
        </svg>
    <?php break; ?>

    
    <?php case ('data'): ?>
        <svg <?php echo $attrs; ?>>
            <ellipse cx="12" cy="5" rx="8" ry="3" />
            <path d="M4 5v14c0 2 16 2 16 0V5" />
        </svg>
    <?php break; ?>

    
    <?php case ('discount'): ?>
        <svg <?php echo $attrs; ?>>
            <circle cx="7" cy="7" r="2" />
            <circle cx="17" cy="17" r="2" />
            <line x1="5" y1="19" x2="19" y2="5" />
        </svg>
    <?php break; ?>

    
    <?php case ('income-tax'): ?>
        <svg <?php echo $attrs; ?>>
            <path d="M3 21h18" />
            <path d="M6 21V7l6-4 6 4v14" />
        </svg>
    <?php break; ?>

    
    <?php case ('currency'): ?>
        <svg <?php echo $attrs; ?>>
            <path d="M3 12h18" />
            <path d="M7 6l-4 6 4 6" />
            <path d="M17 6l4 6-4 6" />
        </svg>
    <?php break; ?>

    
    <?php case ('marks'): ?>
        <svg <?php echo $attrs; ?>>
            <path d="M4 19h16" />
            <path d="M6 17V7" />
            <path d="M12 17V4" />
            <path d="M18 17V10" />
        </svg>
    <?php break; ?>
<?php endswitch; ?>
<?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/components/icons.blade.php ENDPATH**/ ?>