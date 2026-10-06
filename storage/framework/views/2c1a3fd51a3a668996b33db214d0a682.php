

<?php $__env->startSection('content'); ?>
    <div class="gst-wrapper">

        <h1 class="page-title">Marks Percentage Calculator</h1>
        <p class="page-subtitle">
            Calculate percentage from obtained marks and total marks instantly.
            Useful for students, exams and results.
        </p>

        <div class="gst-card">

            <div class="form-group">
                <label>Obtained Marks</label>
                <input type="number" id="obtainedMarks" placeholder="Enter obtained marks">

                <label>Total Marks</label>
                <input type="number" id="totalMarks" placeholder="Enter total marks">

                <div id="result" class="gst-result" style="display:none;">
                    <div class="row">
                        <div>
                            <span>Obtained Marks</span>
                            <strong><span id="obtainedOut"></span></strong>
                        </div>
                        <div>
                            <span>Total Marks</span>
                            <strong><span id="totalOut"></span></strong>
                        </div>
                    </div>

                    <div class="gst-total">
                        Percentage: <span id="percentage"></span>%
                    </div>
                </div>
            </div>

        </div>

        
        <section class="tool-section">
            <h2>How to Use Marks Percentage Calculator</h2>
            <ol>
                <li>Enter the obtained marks.</li>
                <li>Enter the total marks.</li>
                <li>The percentage will be calculated automatically.</li>
            </ol>
        </section>

        
        <section class="tool-section">
            <h2>What is Marks Percentage?</h2>
            <p>
                Marks percentage represents the score obtained by a student out of the total marks,
                expressed as a percentage. It is commonly used in schools, colleges and competitive exams.
            </p>
        </section>

        
        <section class="gst-faq container" id="marks-faq">
            <h2>Frequently Asked Questions about Marks Percentage</h2>

            <div class="faq-item">
                <h3>How is marks percentage calculated?</h3>
                <p>
                    Marks percentage is calculated using the formula:
                    (Obtained Marks ÷ Total Marks) × 100.
                </p>
            </div>

            <div class="faq-item">
                <h3>Can this calculator be used for any exam?</h3>
                <p>
                    Yes, it can be used for school exams, board exams, college exams and competitive tests.
                </p>
            </div>

            <div class="faq-item">
                <h3>Is this marks percentage calculator accurate?</h3>
                <p>
                    Yes, this calculator uses standard mathematical formulas.
                </p>
            </div>
        </section>

        
        <section class="tool-section disclaimer">
            <p>
                Disclaimer: This calculator is for informational purposes only.
            </p>
        </section>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const obtainedEl = document.getElementById('obtainedMarks');
            const totalEl = document.getElementById('totalMarks');

            const obtainedOutEl = document.getElementById('obtainedOut');
            const totalOutEl = document.getElementById('totalOut');
            const percentEl = document.getElementById('percentage');
            const resultEl = document.getElementById('result');

            function calculatePercentage() {

                const obtained = parseFloat(obtainedEl.value);
                const total = parseFloat(totalEl.value);

                if (isNaN(obtained) || isNaN(total) || total <= 0 || obtained < 0 || obtained > total) {
                    resultEl.style.display = 'none';
                    return;
                }

                const percentage = (obtained / total) * 100;

                obtainedOutEl.innerText = obtained;
                totalOutEl.innerText = total;
                percentEl.innerText = percentage.toFixed(2);

                resultEl.style.display = 'block';
            }

            obtainedEl.addEventListener('input', calculatePercentage);
            totalEl.addEventListener('input', calculatePercentage);
        });
    </script>

    
    
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How is marks percentage calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Marks percentage is calculated by dividing obtained marks by total marks and multiplying by 100."
      }
    },
    {
      "@type": "Question",
      "name": "Can this calculator be used for any exam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, this calculator can be used for school, college and competitive exams."
      }
    },
    {
      "@type": "Question",
      "name": "Is this marks percentage calculator accurate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the calculator uses standard mathematical formulas."
      }
    }
  ]
}
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/marks-percentage.blade.php ENDPATH**/ ?>