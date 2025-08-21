<?php
session_start();
include 'connection.php';

// Login check
if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Agar cart se product aya hai
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_name'], $_POST['price'])) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
} else {
    // direct access ho to product.php redirect
    header("Location: product.php");
    exit();
}

// Form submit hone ke baad (Place Order)
if (isset($_POST['place_order'])) {
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $adress = $_POST['adress'];

    $sql = "INSERT INTO orders (username, email, adress, product_name, price) 
            VALUES ('$username', '$email', '$adress', '$product_name', '$price')";

    if ($connection->query($sql) === TRUE) {
        echo "<script>alert('🎉 Order placed successfully!'); window.location.href='product.php';</script>";
    } else {
        echo "<script>alert('❌ Something went wrong: " . $connection->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

<div class="container py-5">
  <div class="text-center mb-5">
      <h1 class="text-warning text-uppercase">Checkout</h1>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card bg-secondary border-0 p-4">
        
        <!-- Product Details -->
        <h5 class="text-white">Product: <?php echo $product_name; ?></h5>
        <h6 class="text-warning mb-4">Price: $<?php echo $price; ?></h6>

        <!-- Checkout Form -->
        <form method="POST">
          <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
          <input type="hidden" name="price" value="<?php echo $price; ?>">

          <div class="mb-3">
            <label class="form-label text-white">Address</label>
            <textarea class="form-control" name="adress" rows="3" required></textarea>
          </div>

          <button type="submit" name="place_order" class="btn btn-warning w-100">Place Order</button>
        </form>

      </div>
    </div>
  </div>
</div>

</body>
</html>
