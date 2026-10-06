

<?php $__env->startSection('content'); ?>
    <div class="gst-wrapper">

        <h1 class="page-title">Discount Calculator</h1>
        <p class="page-subtitle">
            Calculate discount amount, savings and final price instantly.
        </p>

        
        <div class="gst-card">

            <div class="form-group">
                <label>Original Price (₹)</label>
                <input type="number" id="originalPrice" placeholder="Enter original price">

                <label>Discount (%)</label>
                <input type="number" id="discountPercent" placeholder="Enter discount percentage">
            </div>

            <div id="result" class="gst-result" style="display:none;">
                <div class="row">
                    <div>
                        <span>Discount Amount</span>
                        <strong>₹<span id="discountAmount"></span></strong>
                    </div>
                    <div>
                        <span>You Save</span>
                        <strong>₹<span id="youSave"></span></strong>
                    </div>
                </div>

                <div class="gst-total">
                    Final Price: ₹<span id="finalPrice"></span>
                </div>
            </div>

        </div>

        
        <section class="tool-section">
            <h2>How to Use Discount Calculator</h2>
            <ol>
                <li>Enter the original price.</li>
                <li>Enter the discount percentage.</li>
                <li>Discount and final price will be calculated instantly.</li>
            </ol>
        </section>

        
        <section class="tool-section">
            <h2>What is Discount?</h2>
            <p>
                A discount is a reduction in the original price of a product or service.
                Discounts are commonly used in sales, offers and promotions.
            </p>
        </section>

        
        <section class="gst-faq container" id="discount-faq">
            <h2>Frequently Asked Questions about Discount</h2>

            <div class="faq-item">
                <h3>How is discount calculated?</h3>
                <p>
                    Discount = (Original Price × Discount %) ÷ 100.
                </p>
            </div>

            <div class="faq-item">
                <h3>Is this discount calculator accurate?</h3>
                <p>
                    Yes, this calculator uses standard discount calculation formulas.
                </p>
            </div>

            <div class="faq-item">
                <h3>Can I calculate flat discounts?</h3>
                <p>
                    This calculator is for percentage-based discounts.
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

            const priceEl = document.getElementById('originalPrice');
            const percentEl = document.getElementById('discountPercent');

            const discAmtEl = document.getElementById('discountAmount');
            const saveEl = document.getElementById('youSave');
            const finalEl = document.getElementById('finalPrice');
            const resultEl = document.getElementById('result');

            function calculateDiscount() {

                const price = parseFloat(priceEl.value);
                const percent = parseFloat(percentEl.value);

                if (isNaN(price) || isNaN(percent) || price <= 0 || percent < 0) {
                    resultEl.style.display = 'none';
                    return;
                }

                const discount = (price * percent) / 100;
                const finalPrice = price - discount;

                discAmtEl.innerText = discount.toFixed(2);
                saveEl.innerText = discount.toFixed(2);
                finalEl.innerText = finalPrice.toFixed(2);

                resultEl.style.display = 'block';
            }

            priceEl.addEventListener('input', calculateDiscount);
            percentEl.addEventListener('input', calculateDiscount);
        });
    </script>

    
    
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How is discount calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Discount is calculated by multiplying original price with discount percentage and dividing by 100."
      }
    },
    {
      "@type": "Question",
      "name": "Can I calculate final price after discount?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the calculator shows final price after applying the discount."
      }
    }
  ]
}
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/discount-calculator.blade.php ENDPATH**/ ?>