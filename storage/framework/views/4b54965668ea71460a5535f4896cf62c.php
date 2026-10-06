

<?php $__env->startSection('content'); ?>
    <div class="gst-wrapper">

        <h1 class="page-title">Volume Calculator</h1>
        <p class="page-subtitle">
            Calculate volume of 3D shapes easily.
            Supports <strong>Cube, Cuboid, Cylinder, Sphere & Cone</strong>.
        </p>

        
        <div class="gst-card">

            <div class="form-group">
                <label>Select Shape</label>
                <select id="shape">
                    <option value="">Select Shape</option>
                    <option value="cube">Cube</option>
                    <option value="cuboid">Cuboid</option>
                    <option value="cylinder">Cylinder</option>
                    <option value="sphere">Sphere</option>
                    <option value="cone">Cone</option>
                </select>
            </div>

            <div class="form-group" id="input1Box" style="display:none;">
                <label id="label1"></label>
                <input type="number" id="input1">
            </div>

            <div class="form-group" id="input2Box" style="display:none;">
                <label id="label2"></label>
                <input type="number" id="input2">
            </div>

            <div class="form-group" id="input3Box" style="display:none;">
                <label id="label3"></label>
                <input type="number" id="input3">
            </div>

            <div id="result" class="gst-result" style="display:none;">
                <div class="gst-total">
                    Volume =
                    <strong><span id="volume"></span></strong>
                    cubic units
                </div>
            </div>

        </div>

        
        <section class="tool-section">
            <h2>How to Use Volume Calculator</h2>
            <ol>
                <li>Select a 3D shape.</li>
                <li>Enter required dimensions.</li>
                <li>Volume will be calculated instantly.</li>
            </ol>
        </section>

        
        <section class="tool-section">
            <h2>What is Volume?</h2>
            <p>
                Volume is the amount of space occupied by a three-dimensional object.
                It is measured in cubic units such as m³, cm³, etc.
            </p>
        </section>

        
        <section class="gst-faq">
            <h2>Volume Calculator FAQs</h2>

            <div class="faq-item">
                <h3>What is volume of a cube?</h3>
                <p>Side × Side × Side</p>
            </div>

            <div class="faq-item">
                <h3>What is volume of a cylinder?</h3>
                <p>π × Radius² × Height</p>
            </div>

            <div class="faq-item">
                <h3>What is volume of a sphere?</h3>
                <p>4⁄3 × π × Radius³</p>
            </div>
        </section>

    </div>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const shape = document.getElementById('shape');

            const input1 = document.getElementById('input1');
            const input2 = document.getElementById('input2');
            const input3 = document.getElementById('input3');

            const box1 = document.getElementById('input1Box');
            const box2 = document.getElementById('input2Box');
            const box3 = document.getElementById('input3Box');

            const label1 = document.getElementById('label1');
            const label2 = document.getElementById('label2');
            const label3 = document.getElementById('label3');

            const volumeEl = document.getElementById('volume');
            const resultEl = document.getElementById('result');

            function calculateVolume() {

                const a = parseFloat(input1.value);
                const b = parseFloat(input2.value);
                const c = parseFloat(input3.value);
                let volume = 0;

                if (shape.value === 'cube' && a) {
                    volume = a * a * a;
                }

                if (shape.value === 'cuboid' && a && b && c) {
                    volume = a * b * c;
                }

                if (shape.value === 'cylinder' && a && b) {
                    volume = Math.PI * a * a * b;
                }

                if (shape.value === 'sphere' && a) {
                    volume = (4 / 3) * Math.PI * Math.pow(a, 3);
                }

                if (shape.value === 'cone' && a && b) {
                    volume = (1 / 3) * Math.PI * a * a * b;
                }

                if (volume > 0) {
                    volumeEl.innerText = volume.toFixed(2);
                    resultEl.style.display = 'block';
                } else {
                    resultEl.style.display = 'none';
                }
            }

            shape.addEventListener('change', function() {

                input1.value = '';
                input2.value = '';
                input3.value = '';
                resultEl.style.display = 'none';

                box1.style.display = box2.style.display = box3.style.display = 'none';

                if (shape.value === 'cube') {
                    label1.innerText = 'Side';
                    box1.style.display = 'block';
                }

                if (shape.value === 'cuboid') {
                    label1.innerText = 'Length';
                    label2.innerText = 'Width';
                    label3.innerText = 'Height';
                    box1.style.display = box2.style.display = box3.style.display = 'block';
                }

                if (shape.value === 'cylinder') {
                    label1.innerText = 'Radius';
                    label2.innerText = 'Height';
                    box1.style.display = box2.style.display = 'block';
                }

                if (shape.value === 'sphere') {
                    label1.innerText = 'Radius';
                    box1.style.display = 'block';
                }

                if (shape.value === 'cone') {
                    label1.innerText = 'Radius';
                    label2.innerText = 'Height';
                    box1.style.display = box2.style.display = 'block';
                }
            });

            input1.addEventListener('input', calculateVolume);
            input2.addEventListener('input', calculateVolume);
            input3.addEventListener('input', calculateVolume);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\RINKESH\smartcalc\smartcalc\resources\views/tools/volume-calculator.blade.php ENDPATH**/ ?>