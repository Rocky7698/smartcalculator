@extends('layouts.app')

@section('content')
    <div class="gst-wrapper">

        <h1 class="page-title">Loan Calculator</h1>
        <p class="page-subtitle">
            Calculate loan interest and total repayment amount easily.
            Useful for Personal Loan, Business Loan and Short-term Loans.
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
                            <span>Principal Amount</span>
                            <strong>₹<span id="principal"></span></strong>
                        </div>
                        <div>
                            <span>Total Interest</span>
                            <strong>₹<span id="interest"></span></strong>
                        </div>
                    </div>

                    <div class="gst-total">
                        Total Repayment: ₹<span id="total"></span>
                    </div>
                </div>
            </div>

        </div>

        {{-- ================= HOW TO USE ================= --}}
        <section class="tool-section">
            <h2>How to Use Loan Calculator</h2>
            <ol>
                <li>Enter the loan amount.</li>
                <li>Enter annual interest rate.</li>
                <li>Enter loan tenure in years.</li>
                <li>Loan interest and total repayment will be calculated instantly.</li>
            </ol>
        </section>

        {{-- ================= LOAN INFO ================= --}}
        <section class="tool-section">
            <h2>What is a Loan?</h2>
            <p>
                A loan is a financial agreement where a lender provides money to a borrower,
                which must be repaid with interest over a specified period.
            </p>
        </section>

        {{-- ================= FAQ SECTION ================= --}}
        <section class="gst-faq container" id="loan-faq">
            <h2>Frequently Asked Questions about Loan</h2>

            <div class="faq-item">
                <h3>What is loan interest?</h3>
                <p>
                    Loan interest is the extra amount charged by the lender for borrowing money.
                </p>
            </div>

            <div class="faq-item">
                <h3>How is loan interest calculated?</h3>
                <p>
                    Loan interest is calculated using loan amount, interest rate and tenure.
                </p>
            </div>

            <div class="faq-item">
                <h3>Is this loan calculator accurate?</h3>
                <p>
                    This calculator uses standard formulas.
                    Actual loan terms may vary by bank or lender.
                </p>
            </div>
        </section>

        {{-- ================= DISCLAIMER ================= --}}
        <section class="tool-section disclaimer">
            <p>
                Disclaimer: This loan calculator is for informational purposes only.
                Actual loan amounts and interest may vary.
            </p>
        </section>

    </div>

    {{-- ================= LOAN JS LOGIC ================= --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const loanEl = document.getElementById('loanAmount');
            const rateEl = document.getElementById('interestRate');
            const tenEl = document.getElementById('tenure');

            const principalEl = document.getElementById('principal');
            const interestEl = document.getElementById('interest');
            const totalEl = document.getElementById('total');
            const resultEl = document.getElementById('result');

            function money(val) {
                return Number(val).toLocaleString('en-IN', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            function calculateLoan() {

                const P = parseFloat(loanEl.value);
                const R = parseFloat(rateEl.value);
                const T = parseFloat(tenEl.value);

                if (isNaN(P) || isNaN(R) || isNaN(T) || P <= 0 || R <= 0 || T <= 0) {
                    resultEl.style.display = 'none';
                    return;
                }

                // Simple Interest Formula
                const interest = (P * R * T) / 100;
                const total = P + interest;

                principalEl.innerText = money(P);
                interestEl.innerText = money(interest);
                totalEl.innerText = money(total);

                resultEl.style.display = 'block';
            }

            loanEl.addEventListener('input', calculateLoan);
            rateEl.addEventListener('input', calculateLoan);
            tenEl.addEventListener('input', calculateLoan);
        });
    </script>

    {{-- ================= LOAN FAQ SCHEMA ================= --}}
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a loan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A loan is money borrowed from a lender that must be repaid with interest."
      }
    },
    {
      "@type": "Question",
      "name": "How is loan interest calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Loan interest is calculated using loan amount, interest rate and tenure."
      }
    },
    {
      "@type": "Question",
      "name": "Is this loan calculator accurate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The calculator uses standard formulas, but actual loan terms may vary."
      }
    }
  ]
}
</script>
    @endverbatim
@endsection
