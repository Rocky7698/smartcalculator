@props(['name'])

@php
    $attrs = 'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round"
class="icon-svg"';
@endphp

@switch($name)
    {{-- GST --}}
    @case('gst')
        <svg {!! $attrs !!}>
            <path d="M10 1v22" />
            <path d="M4 6h10a4 4 0 110 8H6a4 4 0 000 8h10" />
        </svg>
    @break

    {{-- EMI --}}
    @case('emi')
        <svg {!! $attrs !!}>
            <rect x="3" y="10" width="4" height="10" />
            <rect x="10" y="6" width="4" height="14" />
            <rect x="17" y="3" width="4" height="17" />
        </svg>
    @break

    {{-- Loan --}}
    @case('loan')
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
    @break

    {{-- Percentage --}}
    @case('percentage')
        <svg {!! $attrs !!}>
            <line x1="5" y1="19" x2="19" y2="5" />
            <circle cx="7" cy="7" r="3" />
            <circle cx="17" cy="17" r="3" />
        </svg>
    @break

    {{-- Age --}}
    @case('age')
        <svg {!! $attrs !!}>
            <circle cx="12" cy="12" r="10" />
            <path d="M12 6v6l4 2" />
        </svg>
    @break

    {{-- Area --}}
    @case('area')
        <svg {!! $attrs !!}>
            <rect x="4" y="4" width="16" height="16" />
        </svg>
    @break

    {{-- Volume --}}
    @case('volume')
        <svg {!! $attrs !!}>
            <path d="M4 7l8-4 8 4v10l-8 4-8-4z" />
        </svg>
    @break

    {{-- BMI --}}
    @case('bmi')
        <svg {!! $attrs !!}>
            <circle cx="12" cy="7" r="4" />
            <path d="M6 22a6 6 0 0112 0" />
        </svg>
    @break

    {{-- Data --}}
    @case('data')
        <svg {!! $attrs !!}>
            <ellipse cx="12" cy="5" rx="8" ry="3" />
            <path d="M4 5v14c0 2 16 2 16 0V5" />
        </svg>
    @break

    {{-- Discount --}}
    @case('discount')
        <svg {!! $attrs !!}>
            <circle cx="7" cy="7" r="2" />
            <circle cx="17" cy="17" r="2" />
            <line x1="5" y1="19" x2="19" y2="5" />
        </svg>
    @break

    {{-- Income Tax --}}
    @case('income-tax')
        <svg {!! $attrs !!}>
            <path d="M3 21h18" />
            <path d="M6 21V7l6-4 6 4v14" />
        </svg>
    @break

    {{-- Currency --}}
    @case('currency')
        <svg {!! $attrs !!}>
            <path d="M3 12h18" />
            <path d="M7 6l-4 6 4 6" />
            <path d="M17 6l4 6-4 6" />
        </svg>
    @break

    {{-- Marks --}}
    @case('marks')
        <svg {!! $attrs !!}>
            <path d="M4 19h16" />
            <path d="M6 17V7" />
            <path d="M12 17V4" />
            <path d="M18 17V10" />
        </svg>
    @break
@endswitch
