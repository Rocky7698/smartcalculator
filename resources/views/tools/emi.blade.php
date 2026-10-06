@extends('layouts.app')

@section('content')
    <div class="gst-wrapper">

        <h1 class="page-title">EMI Calculator</h1>
        <p class="page-subtitle">
            Calculate your loan EMI instantly.
            Works for Home Loan, Personal Loan and Car Loan.
        </p>

        <div class="gst-card">

            <div class="form-group">
                <label>Loan Amount (₹)</label>
                <input type="number" id="loanAmount">

                <label>Interest Rate (% per year)</label>
                <input type="number" id="interestRate" step="0.01">

                <label>Loan Tenure (Years)</label>
                <input type="number" id="tenure">

                <div id="result" class="gst-result" style="display:none;">
                    <div class="row">
                        <div>
                            <span>Monthly EMI</span>
                            <strong>₹<span id="emi"></span></strong>
                        </div>
                        <div>
                            <span>Total Interest</span>
                            <strong>₹<span id="totalInterest"></span></strong>
                        </div>
                    </div>

                    <div class="gst-total">
                        Total Payment: ₹<span id="totalPayment"></span>
                    </div>
                </div>
            </div>

        </div>

        {{-- ================= HOW TO USE ================= --}}
        <section class="tool-section">
            <h2>How to Use EMI Calculator</h2>
            <ol>
                <li>Enter the loan amount.</li>
                <li>Enter annual interest rate.</li>
                <li>Enter loan tenure in years.</li>
                <li>EMI will be calculated instantly.</li>
            </ol>
        </section>

        {{-- ================= EMI INFO ================= --}}
        <section class="tool-section">
            <h2>What is EMI?</h2>
            <p>
                EMI (Equated Monthly Installment) is a fixed monthly payment made by a borrower
                to repay a loan. It consists of both principal and interest.
            </p>
        </section>

        {{-- ================= FAQ SECTION ================= --}}
        <section class="gst-faq container" id="emi-faq">
            <h2>Frequently Asked Questions about EMI</h2>

            <div class="faq-item">
                <h3>What is EMI?</h3>
                <p>
                    EMI is the fixed amount paid every month by a borrower to repay a loan.
                </p>
            </div>

            <div class="faq-item">
                <h3>How is EMI calculated?</h3>
                <p>
                    EMI is calculated using loan amount, interest rate and loan tenure.
                </p>
            </div>

            <div class="faq-item">
                <h3>Does EMI change during loan tenure?</h3>
                <p>
                    For fixed-rate loans, EMI remains constant.
                    For floating-rate loans, EMI may change.
                </p>
            </div>

            <div class="faq-item">
                <h3>Is this EMI calculator accurate?</h3>
                <p>
                    This calculator uses standard EMI formulas.
                    Always confirm with your bank or financial institution.
                </p>
            </div>
        </section>

        {{-- ================= DISCLAIMER ================= --}}
        <section class="tool-section disclaimer">
            <p>
                Disclaimer: This EMI calculator is for informational purposes only.
                Actual EMI may vary based on bank policies.
            </p>
        </section>

    </div>

    {{-- ================= EMI JS LOGIC ================= --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const loanEl = document.getElementById('loanAmount');
            const rateEl = document.getElementById('interestRate');
            const tenEl = document.getElementById('tenure');

            const emiEl = document.getElementById('emi');
            const intEl = document.getElementById('totalInterest');
            const totEl = document.getElementById('totalPayment');
            const resEl = document.getElementById('result');

            function money(val) {
                return Number(val).toLocaleString('en-IN', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            function calculateEMI() {

                const P = parseFloat(loanEl.value);
                const annualRate = parseFloat(rateEl.value);
                const years = parseFloat(tenEl.value);

                if (isNaN(P) || isNaN(annualRate) || isNaN(years) || P <= 0 || annualRate <= 0 || years <= 0) {
                    resEl.style.display = 'none';
                    return;
                }

                const r = annualRate / 12 / 100;
                const n = years * 12;

                const emi = (P * r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
                const totalPayment = emi * n;
                const totalInterest = totalPayment - P;

                emiEl.innerText = money(emi);
                intEl.innerText = money(totalInterest);
                totEl.innerText = money(totalPayment);

                resEl.style.display = 'block';
            }

            loanEl.addEventListener('input', calculateEMI);
            rateEl.addEventListener('input', calculateEMI);
            tenEl.addEventListener('input', calculateEMI);
        });
    </script>

    {{-- ================= EMI FAQ SCHEMA ================= --}}
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is EMI?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EMI is the fixed monthly payment made to repay a loan."
      }
    },
    {
      "@type": "Question",
      "name": "How is EMI calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "EMI is calculated using loan amount, interest rate and tenure."
      }
    },
    {
      "@type": "Question",
      "name": "Is this EMI calculator accurate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The calculator uses standard EMI formulas, but results should be verified with banks."
      }
    }
  ]
}
</script>
    @endverbatim
@endsection
