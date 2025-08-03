<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
  <style>
    .container {
      position: relative;
      align-items: center;
      justify-items: center;
      top: 20px;
    }
   input[type="checkbox"]{
      font-size: 22px;
      position: relative;
      left: 10px;
   }
  </style>
</head>
<body>
  <h1>
    <center>Calculator Discount</center>
  </h1>
  <div class="shadow-lg p-3 mb-5 bg-body rounded">
    <div class="card border-dark">
      <form method="post">
        <div class="card-header">
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <label for="productName" class="form-label ">Product Name</label>
              <input type="text" id="productName" class="form-control shadow-sm p-2  mp1 bg-body rounded" name="productName">
            </div>
            <div class="col-md-6">
              <label for="price" class="form-label">Price ($)</label>
              <input type="number" id="price"step="any" class="form-control shadow-sm p-2  mp1 bg-body rounded" name="price">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="quantity" class="form-label">Quantity</label>
              <input type="number" id="quantity" class="form-control shadow-sm p-2  mp1 bg-body rounded" name="quantity">
            </div>
            <div class="col-md-6">
                <label for="discount" class="form-label">Discount (%)</label>
                <input type="number" id="discount" class="form-control shadow-sm p-2  mp1 bg-body rounded" name="discount">
            </div>
          </div>
          <div class="col-12">
            <center>
            <label for="totalAfterDiscount" class="form-label">Total After Discount:</label>
            <textarea type="number" id="totalAfterDiscount" class="form-control shadow-sm p-2  mp1 bg-body rounded" name="totalAfterDiscount"></textarea>
            </center>
          </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto mb-4">
        <button class="btn btn-outline-success" type="button" onclick="calculateTotal()">Submit</button>
        </div>
      </form>
    </div>

  <div id="productSummary">
    <h2>Product</h2>
    <p id="productNameDisplay">Product Name: <span id="productNameValue"></span></p>
    <p id="priceDisplay">Price: $<span id="priceValue"></span></p>
    <p id="quantityDisplay">Quantity: <span id="quantityValue"></span></p>
    <p id="discountDisplay">Discount: <span id="discountValue"></span>%</p>
    <p id="discountAmountDisplay">Discount Amount: $<span id="discountAmountValue"></span></p>
    <h1><p id="totalAfterDiscountDisplay">Total After Discount: $<span id="totalAfterDiscountValue"></span></p><h1>
  </div>

  <script>
    function calculateTotal() {
      // Get values from form fields
      const price = parseFloat(document.getElementById("price").value);
      const quantity = parseFloat(document.getElementById("quantity").value);
      const   
 discountPercentage = parseFloat(document.getElementById("discount").value);

      // Calculate total and discount amount
      const totalBeforeDiscount = price * quantity;
      const discountAmount = (totalBeforeDiscount * discountPercentage) / 100;
      const totalAfterDiscount = totalBeforeDiscount - discountAmount;

      // Display results in the form and summary
      document.getElementById("totalAfterDiscount").value = totalAfterDiscount.toFixed(2);
      document.getElementById("productNameValue").textContent = document.getElementById("productName").value;
      document.getElementById("priceValue").textContent = price.toFixed(2);
      document.getElementById("quantityValue").textContent = quantity;
      document.getElementById("discountValue").textContent = discountPercentage.toFixed(2);
      document.getElementById("discountAmountValue").textContent = discountAmount.toFixed(2);
      document.getElementById("totalAfterDiscountValue").textContent = totalAfterDiscount.toFixed(2);
    }
  </script>

  
</body>
</html><?php /**PATH C:\wamp64\www\WP\st15\resources\views/calculator.blade.php ENDPATH**/ ?>