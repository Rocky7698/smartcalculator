@extends('layouts.app')

@section('content')
    {{-- ================= HERO ================= --}}
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

    {{-- ================= TOOLS ================= --}}
    <section class="home-tools" id="tools">
        <div class="container">

            <h2 class="section-title">Popular Calculators</h2>

            <div class="tools-grid">
                @foreach ($tools as $tool)
                    <a href="/{{ $tool->slug }}" class="tool-card">

                        <div class="tool-icon">
                            <x-icons :name="$tool->icon" />
                        </div>

                        <h3>{{ $tool->title }}</h3>
                        <p>{{ $tool->description }}</p>

                        @if ($tool->category)
                            <span class="tool-category">{{ ucfirst($tool->category) }}</span>
                        @endif

                    </a>
                @endforeach

            </div>

        </div>
    </section>


    {{-- ================= WHY ================= --}}
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

    {{-- ================= FAQ ================= --}}
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
@endsection
