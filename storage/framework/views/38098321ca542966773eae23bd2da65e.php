

<?php $__env->startSection('content'); ?>
    <div class="gst-wrapper">

        <h1 class="page-title">Area Calculator</h1>
        <p class="page-subtitle">
            Calculate area of different shapes easily.
            Supports <strong>Square, Rectangle, Circle & Triangle</strong>.
        </p>

        
        <div class="gst-card">

            <div class="form-group">
                <label>Select Shape</label>
                <select id="shape">
                    <option value="">Select Shape</option>
                    <option value="square">Square</option>
                    <option value="rectangle">Rectangle</option>
                    <option value="circle">Circle</option>
                    <option value="triangle">Triangle</option>
                </select>
            </div>

            <div class="form-group" id="input1Box" style="display:none;">
                <label id="label1"></label>
                <input type="number" id="input1" placeholder="Enter value">
            </div>

            <div class="form-group" id="input2Box" style="display:none;">
                <label id="label2"></label>
                <input type="number" id="input2" placeholder="Enter value">
            </div>

            <div id="result" class="gst-result" style="display:none;">
                <div class="gst-total">
                    Area =
                    <strong><span id="area"></span></strong>
                    sq units
                </div>
            </div>

        </div>

        
        <section class="tool-section">
            <h2>How to Use Area Calculator</h2>
            <ol>
                <li>Select the shape.</li>
                <li>Enter required dimensions.</li>
                <li>Area will be calculated automatically.</li>
            </ol>
        </section>

        
        <section class="tool-section">
            <h2>What is Area?</h2>
            <p>
                Area is the measurement of the surface covered by a shape.
                It is expressed in square units like square meter, square cm, etc.
            </p>
        </section>

        
        <section class="gst-faq">
            <h2>Area Calculator FAQs</h2>

            <div class="faq-item">
                <h3>What is the formula for square area?</h3>
                <p>Side × Side</p>
            </div>

            <div class="faq-item">
                <h3>What is the formula for rectangle area?</h3>
                <p>Length × Width</p>
            </div>

            <div class="faq-item">
                <h3>What is the formula for circle area?</h3>
                <p>π × Radius × Radius</p>
            </div>

            <div class="faq-item">
                <h3>What is the formula for triangle area?</h3>
                <p>½ × Base × Height</p>
            </div>
        </section>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const shape = document.getElementById('shape');
            const input1 = document.getElementById('input1');
            const input2 = document.getElementById('input2');

            const input1Box = document.getElementById('input1Box');
            const input2Box = document.getElementById('input2Box');

            const label1 = document.getElementById('label1');
            const label2 = document.getElementById('label2');

            const areaEl = document.getElementById('area');
            const resultEl = document.getElementById('result');

            function calculateArea() {

                const v1 = parseFloat(input1.value);
                const v2 = parseFloat(input2.value);
                let area = 0;

                if (shape.value === 'square' && v1) {
                    area = v1 * v1;
                }

                if (shape.value === 'rectangle' && v1 && v2) {
                    area = v1 * v2;
                }

                if (shape.value === 'circle' && v1) {
                    area = Math.PI * v1 * v1;
                }

                if (shape.value === 'triangle' && v1 && v2) {
                    area = 0.5 * v1 * v2;
                }

                if (area > 0) {
                    areaEl.innerText = area.toFixed(2);
                    resultEl.style.display = 'block';
                } else {
                    resultEl.style.display = 'none';
                }
            }

            shape.addEventListener('change', function() {

                input1.value = '';
                input2.value = '';
                resultEl.style.display = 'none';

                if (shape.value === 'square') {
                    label1.innerText = 'Side';
                    input1Box.style.display = 'block';
                    input2Box.style.display = 'none';
                }

                if (shape.value === 'rectangle') {
                    label1.innerText = 'Length';
                    label2.innerText = 'Width';
                    input1Box.style.display = 'block';
                    input2Box.style.display = 'block';
                }

                if (shape.value === 'circle') {
                    label1.innerText = 'Radius';
                    input1Box.style.display = 'block';
                    input2Box.style.display = 'none';
                }

                if (shape.value === 'triangle') {
                    label1.innerText = 'Base';
                    label2.innerText = 'Height';
                    input1Box.style.display = 'block';
                    input2Box.style.display = 'block';
                }
            });

            input1.addEventListener('input', calculateArea);
            input2.addEventListener('input', calculateArea);
        });
    </script>

    
    
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is area?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Area is the amount of surface covered by a shape, measured in square units."
      }
    },
    {
      "@type": "Question",
      "name": "Which shapes are supported?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Square, Rectangle, Circle and Triangle."
      }
    }
  ]
}
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/area.blade.php ENDPATH**/ ?>