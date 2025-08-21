<?php
session_start();

// Agar already login ho, product.php pe redirect
if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    header("Location: product.php");
    exit();
}

// Form submit
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    if (!empty($username) && !empty($email)) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        header("Location: product.php");
        exit();
    } else {
        $error = "Please enter both username and email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card bg-secondary p-4">
        <h2 class="text-warning text-center mb-4">Login</h2>

        <?php if (isset($error)) { echo "<p class='text-danger'>$error</p>"; } ?>

        <form method="POST">
          <div class="mb-3">
            <label class="form-label text-white">Username</label>
            <input type="text" name="username" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label text-white">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <button type="submit" name="login" class="btn btn-warning w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
