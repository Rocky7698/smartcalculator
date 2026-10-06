

<?php $__env->startSection('content'); ?>
    <div class="gst-wrapper">

        <h1 class="page-title">Currency Converter</h1>
        <p class="page-subtitle">
            Convert currencies instantly using live-style exchange rates.
        </p>

        <div class="gst-card">

            <label>Amount</label>
            <input type="number" id="amount" placeholder="Enter amount">

            <label>From Currency</label>
            <select id="from">
                <option value="INR">Indian Rupee (INR)</option>
                <option value="USD">US Dollar (USD)</option>
                <option value="EUR">Euro (EUR)</option>
                <option value="GBP">British Pound (GBP)</option>
            </select>

            <label>To Currency</label>
            <select id="to">
                <option value="USD">US Dollar (USD)</option>
                <option value="INR">Indian Rupee (INR)</option>
                <option value="EUR">Euro (EUR)</option>
                <option value="GBP">British Pound (GBP)</option>
            </select>

            <div id="result" class="gst-result" style="display:none;">
                <div class="gst-total">
                    Converted Amount: <strong><span id="converted"></span></strong>
                </div>
            </div>

        </div>

        
        <section class="tool-section">
            <h2>How to Use Currency Converter</h2>
            <ol>
                <li>Enter amount.</li>
                <li>Select source currency.</li>
                <li>Select target currency.</li>
                <li>Result updates automatically.</li>
            </ol>
        </section>

        <section class="tool-section">
            <h2>About Currency Conversion</h2>
            <p>
                Currency conversion is based on exchange rates between two currencies.
                Rates fluctuate daily due to global market conditions.
            </p>
        </section>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const amountEl = document.getElementById('amount');
            const fromEl = document.getElementById('from');
            const toEl = document.getElementById('to');
            const resultEl = document.getElementById('result');
            const convertedEl = document.getElementById('converted');

            function money(val) {
                return Number(val).toLocaleString('en-IN', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            async function convertCurrency() {

                const amount = parseFloat(amountEl.value);
                const from = fromEl.value;
                const to = toEl.value;

                if (isNaN(amount) || amount <= 0) {
                    resultEl.style.display = 'none';
                    return;
                }

                try {
                    const res = await fetch(`https://open.er-api.com/v6/latest/${from}`);
                    const data = await res.json();

                    if (data.result !== 'success') {
                        alert('Exchange rate unavailable');
                        return;
                    }

                    const rate = data.rates[to];
                    const converted = amount * rate;

                    convertedEl.innerText = money(converted) + ' ' + to;
                    resultEl.style.display = 'block';

                } catch (err) {
                    alert('Unable to fetch exchange rates');
                    console.error(err);
                }
            }

            amountEl.addEventListener('input', convertCurrency);
            fromEl.addEventListener('change', convertCurrency);
            toEl.addEventListener('change', convertCurrency);
        });
    </script>



    
    
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a currency converter?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A currency converter helps convert one currency into another using exchange rates."
      }
    },
    {
      "@type": "Question",
      "name": "Are exchange rates live?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Rates shown are indicative. Actual rates may vary based on market conditions."
      }
    }
  ]
}
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/currency.blade.php ENDPATH**/ ?>