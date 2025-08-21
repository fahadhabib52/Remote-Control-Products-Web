<?php
// cart.php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_name'], $_POST['price'], $_POST['image'])) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
} else {
    // direct access hone pe redirect
    header("Location: product.php");
    exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Cart</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

<div class="container py-5">
  <div class="text-center mb-5">
      <h1 class="text-warning text-uppercase">🛒 Your Cart</h1>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card bg-secondary border-0 text-center">
        <img src="<?php echo $image; ?>" class="card-img-top" alt="<?php echo $product_name; ?>" 
             style="height:250px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-white text-uppercase">
            <?php echo $product_name; ?>
          </h5>
          <h6 class="fw-bold text-warning">$<?php echo $price; ?></h6>
          <p class="text-light">This product has been added to your cart successfully.</p>
          
          <!-- Continue Shopping -->
          <a href="product.php" class="btn btn-light">Continue Shopping</a>
          
          <!-- Proceed to Checkout (Form ke through data bhejna) -->
    <form action="checkout.php" method="POST" class="d-inline">
      <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
      <input type="hidden" name="price" value="<?php echo $price; ?>">
      <button type="submit" class="btn btn-warning">Proceed to Checkout</button>
    </form>

        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
