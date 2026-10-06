

<?php $__env->startSection('content'); ?>
    <div class="gst-wrapper">

        <h1 class="page-title">GST Calculator</h1>
        <p class="page-subtitle">
            Calculate GST for goods and services in India.
            Supports <strong>Inclusive</strong> and <strong>Exclusive</strong> GST.
        </p>

        <div class="gst-card">

            <div class="form-group">
                <label>Amount (₹)</label>
                <input type="number" id="amount">

                <select id="gst">
                    <option value="">Select GST %</option>
                    <option value="5">5%</option>
                    <option value="12">12%</option>
                    <option value="18">18%</option>
                    <option value="28">28%</option>
                </select>

                <select id="type">
                    <option value="exclusive">Exclusive of GST</option>
                    <option value="inclusive">Inclusive of GST</option>
                </select>

                <div id="result" style="display:none;">
                    Base: ₹<span id="base"></span><br>
                    GST: ₹<span id="gstAmount"></span><br>
                    CGST: ₹<span id="cgst"></span><br>
                    SGST: ₹<span id="sgst"></span><br>
                    Total: ₹<span id="total"></span>
                </div>


                

                <div id="result" class="gst-result" style="display:none;">
                    <div class="row">
                        <div>
                            <span>Base Amount</span>
                            <strong>₹<span id="base"></span></strong>
                        </div>
                        <div>
                            <span>GST Amount</span>
                            <strong>₹<span id="gstAmount"></span></strong>
                        </div>
                        <div>
                            <span>CGST</span>
                            <strong>₹<span id="cgst"></span></strong>
                        </div>
                        <div>
                            <span>SGST</span>
                            <strong>₹<span id="sgst"></span></strong>
                        </div>
                    </div>

                    <div class="gst-total">
                        Total Amount: ₹<span id="total"></span>
                    </div>
                </div>


            </div>

        </div>

        
        <section class="tool-section">
            <h2>How to Use GST Calculator</h2>
            <ol>
                <li>Enter the amount of goods or services.</li>
                <li>Select the applicable GST percentage.</li>
                <li>Choose whether the amount is Inclusive or Exclusive of GST.</li>
                <li>Click on Calculate GST to get detailed results.</li>
            </ol>
        </section>

        
        <section class="tool-section">
            <h2>What is GST?</h2>
            <p>
                Goods and Services Tax (GST) is an indirect tax introduced in India on
                <strong>1 July 2017</strong>. It replaced multiple indirect taxes such as VAT,
                Service Tax and Excise Duty with a single unified tax system.
            </p>
        </section>

        
        <section class="gst-faq container" id="gst-faq">
            <h2>Frequently Asked Questions about GST</h2>

            <div class="faq-item">
                <h3>What is GST?</h3>
                <p>
                    GST (Goods and Services Tax) is an indirect tax introduced in India on
                    1 July 2017. It replaced multiple indirect taxes like VAT, Service Tax,
                    and Excise Duty.
                </p>
            </div>

            <div class="faq-item">
                <h3>What is Inclusive GST?</h3>
                <p>
                    Inclusive GST means the tax amount is already included in the final price
                    of goods or services.
                </p>
            </div>

            <div class="faq-item">
                <h3>What is Exclusive GST?</h3>
                <p>
                    Exclusive GST means GST is calculated separately and added to the base price.
                </p>
            </div>

            <div class="faq-item">
                <h3>How is CGST and SGST calculated?</h3>
                <p>
                    For intra-state transactions, GST is divided equally into CGST and SGST,
                    each being 50% of the total GST amount.
                </p>
            </div>

            <div class="faq-item">
                <h3>Is this GST calculator accurate?</h3>
                <p>
                    This calculator uses standard GST formulas and current rates.
                    For official filing or compliance, always consult a tax professional.
                </p>
            </div>
        </section>

        
        <section class="tool-section">
            <h2>Types of GST in India</h2>

            <p><strong>CGST:</strong> Central Goods and Services Tax collected by the Central Government.</p>
            <p><strong>SGST:</strong> State Goods and Services Tax collected by the State Government.</p>
            <p><strong>IGST:</strong> Integrated GST applied on inter-state transactions.</p>
            <p><strong>UTGST:</strong> Union Territory GST for UT regions.</p>
        </section>

        
        <section class="tool-section">
            <h2>GST Government Rules</h2>
            <p>
                GST is governed by the GST Council under the Government of India.
                All official notifications are published on the GST portal.
            </p>
            <p>
                Official website:
                <a href="https://www.gst.gov.in" target="_blank">https://www.gst.gov.in</a>
            </p>
        </section>

        
        <section class="tool-section disclaimer">
            <p>
                Disclaimer: This GST calculator is for informational purposes only.
                For official filing and compliance, always refer to the GST portal
                or consult a qualified tax professional.
            </p>
        </section>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const amountEl = document.getElementById('amount');
            const gstEl = document.getElementById('gst');
            const typeEl = document.getElementById('type');

            const baseEl = document.getElementById('base');
            const gstAmtEl = document.getElementById('gstAmount');
            const cgstEl = document.getElementById('cgst');
            const sgstEl = document.getElementById('sgst');
            const totalEl = document.getElementById('total');
            const resultEl = document.getElementById('result');

            /* ✅ Indian currency formatter */
            function money(val) {
                return Number(val).toLocaleString('en-IN', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            function calculateGST() {

                const amount = parseFloat(amountEl.value);
                const rate = parseFloat(gstEl.value);
                const type = typeEl.value;

                if (isNaN(amount) || isNaN(rate) || amount <= 0) {
                    resultEl.style.display = 'none';
                    return;
                }

                let baseAmount = 0;
                let gstAmount = 0;
                let total = 0;

                if (type === 'inclusive') {
                    baseAmount = amount / (1 + rate / 100);
                    gstAmount = amount - baseAmount;
                    total = amount;
                } else {
                    baseAmount = amount;
                    gstAmount = amount * rate / 100;
                    total = amount + gstAmount;
                }

                /* ✅ formatted output */
                baseEl.innerText = money(baseAmount);
                gstAmtEl.innerText = money(gstAmount);
                cgstEl.innerText = money(gstAmount / 2);
                sgstEl.innerText = money(gstAmount / 2);
                totalEl.innerText = money(total);

                resultEl.style.display = 'block';
            }

            /* ✅ real-time calculation */
            amountEl.addEventListener('input', calculateGST);
            gstEl.addEventListener('change', calculateGST);
            typeEl.addEventListener('change', calculateGST);
        });
    </script>
        
    
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is GST?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "GST is an indirect tax introduced in India on 1 July 2017 that replaced VAT, Service Tax and Excise Duty."
      }
    },
    {
      "@type": "Question",
      "name": "What is Inclusive GST?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Inclusive GST means tax is already included in the product price."
      }
    },
    {
      "@type": "Question",
      "name": "What is Exclusive GST?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Exclusive GST means tax is calculated separately and added to the base price."
      }
    }
  ]
}
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/gst.blade.php ENDPATH**/ ?>