

<?php $__env->startSection('content'); ?>
    <div class="gst-wrapper">

        <h1 class="page-title">BMI Calculator</h1>
        <p class="page-subtitle">
            Calculate your <strong>Body Mass Index (BMI)</strong> and check your health status.
        </p>

        
        <div class="gst-card">

            <div class="form-group">
                <label>Weight (kg)</label>
                <input type="number" id="weight" placeholder="Enter weight in kg">

                <label>Height (cm)</label>
                <input type="number" id="height" placeholder="Enter height in cm">
            </div>

            <div id="result" class="gst-result" style="display:none;">
                <div class="row">
                    <div>
                        <span>BMI Value</span>
                        <strong><span id="bmi"></span></strong>
                    </div>
                    <div>
                        <span>Health Status</span>
                        <strong><span id="status"></span></strong>
                    </div>
                </div>

                <div class="gst-total">
                    Healthy BMI Range: 18.5 – 24.9
                </div>
            </div>

        </div>

        
        <section class="tool-section">
            <h2>How to Use BMI Calculator</h2>
            <ol>
                <li>Enter your weight in kilograms.</li>
                <li>Enter your height in centimeters.</li>
                <li>Your BMI and health status will be shown instantly.</li>
            </ol>
        </section>

        
        <section class="tool-section">
            <h2>What is BMI?</h2>
            <p>
                Body Mass Index (BMI) is a value derived from a person's weight and height.
                It is used to categorize a person as underweight, normal weight, overweight or obese.
            </p>
        </section>

        
        <section class="gst-faq container" id="bmi-faq">
            <h2>Frequently Asked Questions about BMI</h2>

            <div class="faq-item">
                <h3>What is a healthy BMI?</h3>
                <p>
                    A healthy BMI range for adults is between 18.5 and 24.9.
                </p>
            </div>

            <div class="faq-item">
                <h3>Is BMI accurate for everyone?</h3>
                <p>
                    BMI is a general guideline. Athletes and muscular individuals may have a higher BMI
                    without having excess body fat.
                </p>
            </div>

            <div class="faq-item">
                <h3>Is this BMI calculator accurate?</h3>
                <p>
                    Yes, this calculator uses the standard BMI formula.
                    For medical advice, consult a healthcare professional.
                </p>
            </div>
        </section>

        
        <section class="tool-section disclaimer">
            <p>
                Disclaimer: BMI is a screening tool and not a diagnostic measure.
                Always consult a medical professional for health-related decisions.
            </p>
        </section>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const weightEl = document.getElementById('weight');
            const heightEl = document.getElementById('height');

            const bmiEl = document.getElementById('bmi');
            const statusEl = document.getElementById('status');
            const resultEl = document.getElementById('result');

            function calculateBMI() {

                const weight = parseFloat(weightEl.value);
                const heightCm = parseFloat(heightEl.value);

                if (isNaN(weight) || isNaN(heightCm) || weight <= 0 || heightCm <= 0) {
                    resultEl.style.display = 'none';
                    return;
                }

                const heightM = heightCm / 100;
                const bmi = weight / (heightM * heightM);

                let status = '';

                if (bmi < 18.5) {
                    status = 'Underweight';
                } else if (bmi < 25) {
                    status = 'Normal weight';
                } else if (bmi < 30) {
                    status = 'Overweight';
                } else {
                    status = 'Obese';
                }

                bmiEl.innerText = bmi.toFixed(2);
                statusEl.innerText = status;

                resultEl.style.display = 'block';
            }

            weightEl.addEventListener('input', calculateBMI);
            heightEl.addEventListener('input', calculateBMI);
        });
    </script>

    
    
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is BMI?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "BMI stands for Body Mass Index and is a measure of body fat based on height and weight."
      }
    },
    {
      "@type": "Question",
      "name": "What is a healthy BMI range?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A healthy BMI range for adults is between 18.5 and 24.9."
      }
    },
    {
      "@type": "Question",
      "name": "Is BMI calculator accurate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "BMI is a general guideline and may not be accurate for athletes or muscular individuals."
      }
    }
  ]
}
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/bmi-calculator.blade.php ENDPATH**/ ?>