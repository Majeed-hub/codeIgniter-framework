<?php include('top.php') ?>
<body>

    <div class="container mt-2">
        <h2>Update product</h2>
        <form action="<?= base_url('Product/update?id=' . $product->id) ?>" method="post" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="pname">Product Name</label>:</label>
                <input type="text" class="form-control" id="pname" value="<?php echo $product->product_name ?>" name="product_name" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="standard_cost">Standard Cost</label>:</label>
                <input type="text" class="form-control" id="standard_cost" value="<?php echo $product->standard_cost ?>" name="standard_cost" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="list_price">List price:</label>
                <input type="number" class="form-control" id="list_price" value="<?php echo $product->list_price ?>" name="list_price" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" id="category" value="<?php echo $product->category ?>" name="category" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>


            <button type="submit" class="btn btn-primary float-right">Submit</button>
            <a href="<?= base_url('Product') ?>"><button type="button" class="btn btn-success float-right mr-2">Cancel</button></a>
        </form>
    </div>

    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>