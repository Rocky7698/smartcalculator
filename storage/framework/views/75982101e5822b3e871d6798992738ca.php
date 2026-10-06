

<?php $__env->startSection('content'); ?>
    <div class="gst-wrapper">

        <h1 class="page-title">Income Tax Calculator</h1>
        <p class="page-subtitle">
            Calculate Income Tax in India under <strong>Old</strong> and <strong>New</strong> Tax Regime.
        </p>

        
        <div class="tax-tabs">
            <button class="tab-btn active" data-tab="basic">Basic Calculator</button>
            <button class="tab-btn" data-tab="advanced">Advanced Calculator</button>
        </div>

        
        <div class="gst-card">

            
            <div class="tab-content active" id="basic">

                <label>Taxpayer Category</label>
                <select id="category">
                    <option value="individual">Individual</option>
                    <option value="huf">HUF</option>
                    <option value="firm">Firm / Company</option>
                </select>

                <label>Residential Status</label>
                <select id="resident">
                    <option value="resident">Resident</option>
                    <option value="nri">Non-Resident (NRI)</option>
                </select>

                <label>Total Annual Income (₹)</label>
                <input type="number" id="income">

                <label>Deductions (Old Regime) (₹)</label>
                <input type="number" id="deductions">

            </div>

            
            <div class="tab-content" id="advanced">

                <label>HRA Exemption</label>
                <input type="number" id="hra">

                <label>80C Investment</label>
                <input type="number" id="inv80c">

                <label>Other Deductions</label>
                <input type="number" id="otherDed">

            </div>

            
            <div id="result" class="gst-result" style="display:none;">

                <div class="row">
                    <div>
                        <span>Taxable Income</span>
                        <strong>₹<span id="taxable"></span></strong>
                    </div>
                    <div>
                        <span>Old Regime Tax</span>
                        <strong>₹<span id="oldTax"></span></strong>
                    </div>
                    <div>
                        <span>New Regime Tax</span>
                        <strong>₹<span id="newTax"></span></strong>
                    </div>
                </div>

            </div>

        </div>

        
        <section class="tool-section">
            <h2>Income Tax in India</h2>
            <p>
                Income tax is levied by the Government of India based on slab rates.
                Residents are taxed on global income, whereas NRIs are taxed only on Indian income.
            </p>
        </section>

        
        <section class="tool-section disclaimer">
            <p>
                Disclaimer: Calculation is indicative only. Please consult a tax professional.
            </p>
        </section>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const income = document.getElementById('income');
            const deductions = document.getElementById('deductions');
            const hra = document.getElementById('hra');
            const inv80c = document.getElementById('inv80c');
            const otherDed = document.getElementById('otherDed');

            const taxableEl = document.getElementById('taxable');
            const oldTaxEl = document.getElementById('oldTax');
            const newTaxEl = document.getElementById('newTax');
            const result = document.getElementById('result');

            function money(v) {
                return Number(v).toLocaleString('en-IN', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            function calculate() {

                let inc = parseFloat(income.value) || 0;
                let ded = parseFloat(deductions.value) || 0;

                ded += (parseFloat(hra.value) || 0);
                ded += (parseFloat(inv80c.value) || 0);
                ded += (parseFloat(otherDed.value) || 0);

                if (inc <= 0) {
                    result.style.display = 'none';
                    return;
                }

                let taxable = Math.max(0, inc - ded);

                // OLD REGIME
                let oldTax = 0;
                if (taxable > 250000) oldTax += Math.min(taxable - 250000, 250000) * 0.05;
                if (taxable > 500000) oldTax += Math.min(taxable - 500000, 500000) * 0.20;
                if (taxable > 1000000) oldTax += (taxable - 1000000) * 0.30;

                // NEW REGIME
                let newTax = 0;
                if (inc > 300000) newTax += Math.min(inc - 300000, 300000) * 0.05;
                if (inc > 600000) newTax += Math.min(inc - 600000, 300000) * 0.10;
                if (inc > 900000) newTax += Math.min(inc - 900000, 300000) * 0.15;
                if (inc > 1200000) newTax += Math.min(inc - 1200000, 300000) * 0.20;
                if (inc > 1500000) newTax += (inc - 1500000) * 0.30;

                taxableEl.innerText = money(taxable);
                oldTaxEl.innerText = money(oldTax);
                newTaxEl.innerText = money(newTax);

                result.style.display = 'block';
            }

            document.querySelectorAll('input, select').forEach(el => {
                el.addEventListener('input', calculate);
                el.addEventListener('change', calculate);
            });

            // TAB SWITCH
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove(
                    'active'));
                    document.querySelectorAll('.tab-content').forEach(c => c.classList.remove(
                        'active'));

                    btn.classList.add('active');
                    document.getElementById(btn.dataset.tab).classList.add('active');
                    calculate();
                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/income-tax-calculator.blade.php ENDPATH**/ ?>