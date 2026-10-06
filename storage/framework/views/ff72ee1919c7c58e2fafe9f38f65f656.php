

<?php $__env->startSection('content'); ?>
    <div class="gst-wrapper">

        <h1 class="page-title">Data Calculator</h1>
        <p class="page-subtitle">
            Convert data sizes between <strong>KB, MB, GB and TB</strong> instantly.
        </p>

        
        <div class="gst-card">

            <div class="form-group">
                <label>Enter Value</label>
                <input type="number" id="dataValue" placeholder="Enter data value">

                <label>From Unit</label>
                <select id="fromUnit">
                    <option value="KB">KB</option>
                    <option value="MB">MB</option>
                    <option value="GB">GB</option>
                    <option value="TB">TB</option>
                </select>

                <label>To Unit</label>
                <select id="toUnit">
                    <option value="KB">KB</option>
                    <option value="MB">MB</option>
                    <option value="GB">GB</option>
                    <option value="TB">TB</option>
                </select>
            </div>

            <div id="result" class="gst-result" style="display:none;">
                <div class="data-total">
                    Result:
                    <strong><span id="output"></span></strong>
                </div>
            </div>

        </div>

        
        <section class="tool-section">
            <h2>How to Use Data Calculator</h2>
            <ol>
                <li>Enter the data value.</li>
                <li>Select the source unit.</li>
                <li>Select the target unit.</li>
                <li>Converted result will appear instantly.</li>
            </ol>
        </section>

        
        <section class="tool-section">
            <h2>What is Data Size?</h2>
            <p>
                Data size represents the amount of digital information stored or transferred.
                Common units include Kilobyte (KB), Megabyte (MB), Gigabyte (GB) and Terabyte (TB).
            </p>
        </section>

        
        <section class="data-faq container" id="data-faq">
            <h2>Frequently Asked Questions about Data Calculator</h2>

            <div class="faq-item">
                <h3>What is 1 GB equal to?</h3>
                <p>
                    1 GB is equal to 1024 MB.
                </p>
            </div>

            <div class="faq-item">
                <h3>Is this data calculator accurate?</h3>
                <p>
                    Yes, this calculator uses standard binary conversion (base 1024).
                </p>
            </div>
        </section>

        
        <section class="tool-section disclaimer">
            <p>
                Disclaimer: This data calculator is for informational purposes only.
            </p>
        </section>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const valueEl = document.getElementById('dataValue');
            const fromEl = document.getElementById('fromUnit');
            const toEl = document.getElementById('toUnit');
            const outEl = document.getElementById('output');
            const resEl = document.getElementById('result');

            const units = {
                KB: 1,
                MB: 1024,
                GB: 1024 * 1024,
                TB: 1024 * 1024 * 1024
            };

            function convertData() {

                const value = parseFloat(valueEl.value);
                if (isNaN(value) || value < 0) {
                    resEl.style.display = 'none';
                    return;
                }

                const from = fromEl.value;
                const to = toEl.value;

                const result = (value * units[from]) / units[to];

                outEl.innerText = result.toFixed(4) + ' ' + to;
                resEl.style.display = 'block';
            }

            valueEl.addEventListener('input', convertData);
            fromEl.addEventListener('change', convertData);
            toEl.addEventListener('change', convertData);
        });
    </script>

    
    
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is data size?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Data size represents the amount of digital information stored or transferred."
      }
    },
    {
      "@type": "Question",
      "name": "How many MB are in 1 GB?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "1 GB is equal to 1024 MB."
      }
    }
  ]
}
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/data-calculator.blade.php ENDPATH**/ ?>