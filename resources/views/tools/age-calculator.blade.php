@extends('layouts.app')

@section('content')
    <div class="gst-wrapper">

        <h1 class="page-title">Age Calculator</h1>
        <p class="page-subtitle">
            Calculate your exact age in <strong>Years, Months and Days</strong>.
        </p>

        {{-- ================= CALCULATOR CARD ================= --}}
        <div class="gst-card">

            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" id="dob">

                <label>Age at Date (Optional)</label>
                <input type="date" id="today">
            </div>

            <div id="result" class="gst-result" style="display:none;">

                {{-- MAIN AGE --}}
                <div class="row">
                    <div>
                        <span>Years</span>
                        <strong><span id="years"></span></strong>
                    </div>
                    <div>
                        <span>Months</span>
                        <strong><span id="months"></span></strong>
                    </div>
                    <div>
                        <span>Days</span>
                        <strong><span id="days"></span></strong>
                    </div>
                </div>

                {{-- NEXT BIRTHDAY --}}
                <div class="gst-total">
                    🎂 Next Birthday in
                    <strong><span id="nbMonths"></span> months</strong>
                    and
                    <strong><span id="nbDays"></span> days</strong>
                </div>

                {{-- SUMMARY --}}
                <div class="tool-section">
                    <h3>Age Summary</h3>

                    <ul class="age-summary">
                        <li>Total Years: <strong><span id="tYears"></span></strong></li>
                        <li>Total Months: <strong><span id="tMonths"></span></strong></li>
                        <li>Total Weeks: <strong><span id="tWeeks"></span></strong></li>
                        <li>Total Days: <strong><span id="tDays"></span></strong></li>
                        <li>Total Hours: <strong><span id="tHours"></span></strong></li>
                        <li>Total Minutes: <strong><span id="tMinutes"></span></strong></li>
                    </ul>
                </div>

            </div>


        </div>

        {{-- ================= HOW TO USE ================= --}}
        <section class="tool-section">
            <h2>How to Use Age Calculator</h2>
            <ol>
                <li>Select your Date of Birth.</li>
                <li(Optional) Select a comparison date.</li>
                    <li>Your age will be calculated instantly.</li>
            </ol>
        </section>

        {{-- ================= INFO ================= --}}
        <section class="tool-section">
            <h2>What is Age Calculator?</h2>
            <p>
                An age calculator helps you calculate your exact age from your date of birth
                in years, months and days.
            </p>
        </section>

    </div>

    {{-- ================= REAL-TIME JS ================= --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const dobEl = document.getElementById('dob');
            const todayEl = document.getElementById('today');

            const yearsEl = document.getElementById('years');
            const monthsEl = document.getElementById('months');
            const daysEl = document.getElementById('days');

            const nbMonthsEl = document.getElementById('nbMonths');
            const nbDaysEl = document.getElementById('nbDays');

            const tYearsEl = document.getElementById('tYears');
            const tMonthsEl = document.getElementById('tMonths');
            const tWeeksEl = document.getElementById('tWeeks');
            const tDaysEl = document.getElementById('tDays');
            const tHoursEl = document.getElementById('tHours');
            const tMinutesEl = document.getElementById('tMinutes');

            const resultEl = document.getElementById('result');

            function calculateAge() {

                if (!dobEl.value) {
                    resultEl.style.display = 'none';
                    return;
                }

                const dob = new Date(dobEl.value);
                const today = todayEl.value ? new Date(todayEl.value) : new Date();

                // ---------------- MAIN AGE ----------------
                let years = today.getFullYear() - dob.getFullYear();
                let months = today.getMonth() - dob.getMonth();
                let days = today.getDate() - dob.getDate();

                if (days < 0) {
                    months--;
                    days += new Date(today.getFullYear(), today.getMonth(), 0).getDate();
                }

                if (months < 0) {
                    years--;
                    months += 12;
                }

                yearsEl.innerText = years;
                monthsEl.innerText = months;
                daysEl.innerText = days;

                // ---------------- NEXT BIRTHDAY ----------------
                let nextBirthday = new Date(today.getFullYear(), dob.getMonth(), dob.getDate());
                if (nextBirthday < today) {
                    nextBirthday.setFullYear(today.getFullYear() + 1);
                }

                let nbMonths = nextBirthday.getMonth() - today.getMonth();
                let nbDays = nextBirthday.getDate() - today.getDate();

                if (nbDays < 0) {
                    nbMonths--;
                    nbDays += new Date(today.getFullYear(), today.getMonth() + 1, 0).getDate();
                }

                if (nbMonths < 0) nbMonths += 12;

                nbMonthsEl.innerText = nbMonths;
                nbDaysEl.innerText = nbDays;

                // ---------------- SUMMARY ----------------
                const diffMs = today - dob;
                const totalDays = Math.floor(diffMs / (1000 * 60 * 60 * 24));

                tYearsEl.innerText = years;
                tMonthsEl.innerText = Math.floor(totalDays / 30.4375);
                tWeeksEl.innerText = Math.floor(totalDays / 7);
                tDaysEl.innerText = totalDays;
                tHoursEl.innerText = totalDays * 24;
                tMinutesEl.innerText = totalDays * 24 * 60;

                resultEl.style.display = 'block';
            }

            dobEl.addEventListener('change', calculateAge);
            todayEl.addEventListener('change', calculateAge);
        });
    </script>


    {{-- ================= FAQ SCHEMA ================= --}}
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How does Age Calculator work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Age calculator calculates the difference between your date of birth and the current date."
      }
    },
    {
      "@type": "Question",
      "name": "Can I calculate age in years, months and days?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, this calculator shows exact age in years, months and days."
      }
    }
  ]
}
</script>
    @endverbatim
@endsection
