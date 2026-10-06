@extends('layouts.app')

@section('content')
    {{-- GST CALCULATOR --}}
    @if ($slug === 'gst-calculator')
        @include('tools.gst')
    @endif

    {{-- EMI CALCULATOR --}}
    @if ($slug === 'emi-calculator')
        @include('tools.emi')
    @endif


    {{-- LOAN CALCULATOR --}}
    @if ($slug === 'loan-calculator')
        @include('tools.loan')
    @endif

    {{-- percentage calculator --}}
    @if ($slug === 'marks-percentage')
        @include('tools.marks-percentage')
    @endif

    {{-- age calculator --}}
    @if ($slug === 'age-calculator')
        @include('tools.age-calculator')
    @endif

    @if ($slug === 'area-calculator')
        @include('tools.area')
    @endif

    @if ($slug === 'volume-calculator')
        @include('tools.volume-calculator')
    @endif

    @if ($slug === 'bmi-calculator')
        @include('tools.bmi-calculator')
    @endif

    @if ($slug === 'data-calculator')
        @include('tools.data-calculator')
    @endif

    @if ($slug === 'discount-calculator')
        @include('tools.discount-calculator')
    @endif

    @if ($slug === 'income-tax-calculator')
        @include('tools.income-tax-calculator')
    @endif

    @if ($slug === 'currency-converter')
        @include('tools.currency')
    @endif
@endsection
