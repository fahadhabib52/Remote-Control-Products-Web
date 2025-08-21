

<?php 

include 'connection.php'; 

session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

?>






<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <title>RC World</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<body class="bg-dark text-light">

    <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
    data-wow-delay="0.1s">
    <a href="index.html" target="_blank" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="mb-0 text-white text-uppercase"><i class="fa fa-car me-3"></i>RC World</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" target="_blank" class="nav-item nav-link">Home</a>
            <a href="about.php" target="_blank" class="nav-item nav-link">About</a>
            <div class="nav-item dropdown">
                <a href="product.php" target="_blank" class="nav-link dropdown-toggle" data-bs-toggle="">Products</a>
                <div class="dropdown-menu m-0">
                    <a href="price.html" target="_blank" class="dropdown-item">Car</a>
                    <a href="team.html" target="_blank" class="dropdown-item">Bike</a>
                    <a href="open.html" target="_blank" class="dropdown-item">Aeroplane</a>
                </div>
            </div>
            <a href="contact.php" target="_blank" class="nav-item nav-link">Contact</a>
        </div>
        <a href="" target="_blank" class="btn btn-warning rounded-0 py-2 px-lg-4 d-none d-lg-block">Contact 
            <i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>
    <!-- Navbar End -->



    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="./banner1.jpg" class="d-block w-100" alt="New Arrivals">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-white fw-bold">🚀 New Arrivals RC Cars</h2>
                    <p class="text-white">Check out the latest collection</p>
                    <a href="shop.html" class="btn btn-warning">Shop Now</a>
                </div>
            </div>
            <!-- Slide 2 -->
        </div>










        <!-- Products Section Start -->
       <div class="container py-5">
  <div class="text-center mb-5">
    <p class="d-inline-block bg-secondary text-warning py-1 px-4">Our Collection</p>
    <h1 class="text-uppercase text-white">Explore Our RC Products</h1>
  </div>

  <div class="row g-4">

    <!-- Product 1: RC Car -->
    <div class="col-lg-4 col-md-6">
      <div class="card bg-secondary border-0 h-100 text-center">
        <img src="./img/pro1.jpg" class="card-img-top" alt="RC Car" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-white text-uppercase">Speedster Car</h5>
          <p class="card-text">High-speed RC car designed for racing on smooth tracks.</p>
          <h6 class="fw-bold text-warning">$75</h6>
          <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="Speedster Car">
            <input type="hidden" name="price" value="75">
            <input type="hidden" name="image" value="./img/pro1.jpg">
            <button type="submit" class="btn btn-warning mt-2">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Product 2: RC Jeep -->
    <div class="col-lg-4 col-md-6">
      <div class="card bg-secondary border-0 h-100 text-center">
        <img src="./img/pro2.jpg" class="card-img-top" alt="RC Jeep" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-white text-uppercase">Adventure Jeep</h5>
          <p class="card-text">Built for off-road trails with powerful suspension.</p>
          <h6 class="fw-bold text-warning">$89</h6>
          <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="Adventure Jeep">
            <input type="hidden" name="price" value="89">
            <input type="hidden" name="image" value="./img/pro2.jpg">
            <button type="submit" class="btn btn-warning mt-2">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Product 3: RC Truck -->
    <div class="col-lg-4 col-md-6">
      <div class="card bg-secondary border-0 h-100 text-center">
        <img src="./img/tru.webp" class="card-img-top" alt="RC Truck" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-white text-uppercase">Power Truck</h5>
          <p class="card-text">Heavy-duty truck perfect for carrying loads in play mode.</p>
          <h6 class="fw-bold text-warning">$95</h6>
          <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="Power Truck">
            <input type="hidden" name="price" value="95">
            <input type="hidden" name="image" value="./img/tru.webp">
            <button type="submit" class="btn btn-warning mt-2">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Product 4: RC Helicopter -->
    <div class="col-lg-4 col-md-6">
      <div class="card bg-secondary border-0 h-100 text-center">
        <img src="./img/hel.jpg" class="card-img-top" alt="RC Helicopter" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-white text-uppercase">Sky Chopper</h5>
          <p class="card-text">Fly high with this stable and easy-to-control RC helicopter.</p>
          <h6 class="fw-bold text-warning">$110</h6>
          <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="Sky Chopper">
            <input type="hidden" name="price" value="110">
            <input type="hidden" name="image" value="./img/hel.jpg">
            <button type="submit" class="btn btn-warning mt-2">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Product 5: RC Aeroplane -->
    <div class="col-lg-4 col-md-6">
      <div class="card bg-secondary border-0 h-100 text-center">
        <img src="./img/aero.jpg" class="card-img-top" alt="RC Aeroplane" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-white text-uppercase">Aero Jet</h5>
          <p class="card-text">Fast and sleek RC aeroplane for thrilling flights.</p>
          <h6 class="fw-bold text-warning">$130</h6>
          <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="Aero Jet">
            <input type="hidden" name="price" value="130">
            <input type="hidden" name="image" value="./img/aero.jpg">
            <button type="submit" class="btn btn-warning mt-2">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Product 6: RC Bike -->
    <div class="col-lg-4 col-md-6">
      <div class="card bg-secondary border-0 h-100 text-center">
        <img src="./img/bike.webp" class="card-img-top" alt="RC Bike" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-white text-uppercase">Racer Bike</h5>
          <p class="card-text">Two-wheel stunt bike for drift and wheelie tricks.</p>
          <h6 class="fw-bold text-warning">$65</h6>
          <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="Racer Bike">
            <input type="hidden" name="price" value="65">
            <input type="hidden" name="image" value="./img/bike.webp">
            <button type="submit" class="btn btn-warning mt-2">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Product 7: RC Bus -->
    <div class="col-lg-4 col-md-6">
      <div class="card bg-secondary border-0 h-100 text-center">
        <img src="./img/bus.jfif" class="card-img-top" alt="RC Bus" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-white text-uppercase">City Bus</h5>
          <p class="card-text">Miniature RC bus for realistic city rides and fun playtime.</p>
          <h6 class="fw-bold text-warning">$80</h6>
          <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="City Bus">
            <input type="hidden" name="price" value="80">
            <input type="hidden" name="image" value="./img/bus.jfif">
            <button type="submit" class="btn btn-warning mt-2">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Product 8: RC Drift Car -->
    <div class="col-lg-4 col-md-6">
      <div class="card bg-secondary border-0 h-100 text-center">
        <img src="./banner1.jpg" class="card-img-top" alt="RC Drift Car" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5 class="card-title text-white text-uppercase">Drift King</h5>
          <p class="card-text">Perfect for smooth drifts and stylish stunts on the track.</p>
          <h6 class="fw-bold text-warning">$120</h6>
          <form action="cart.php" method="POST">
            <input type="hidden" name="product_name" value="Drift King">
            <input type="hidden" name="price" value="120">
            <input type="hidden" name="image" value="./banner1.jpg">
            <button type="submit" class="btn btn-warning mt-2">Add to Cart</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

        <!-- Products Section End -->







        <!-- Customer Reviews Start -->
        <div class="container my-5">
            <h2 class="text-center text-white mb-4">What Our Customers Say</h2>
            <div class="row g-4">
                <!-- Review 1 -->
                <div class="col-md-6">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2 text-warning">⭐⭐⭐⭐⭐</span>
                            <small class="text-muted">– Ahmed</small>
                        </div>
                        <p class="mb-0">Amazing speed & durable quality! Totally worth it.</p>
                    </div>
                </div>
                <!-- Review 2 -->
                <div class="col-md-6">
                    <div class="card shadow-sm p-3">
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2 text-warning">⭐⭐⭐⭐</span>
                            <small class="text-muted">– Sara</small>
                        </div>
                        <p class="mb-0">Good battery backup and smooth control, my kids love it!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customer Reviews End -->




        <!-- Floating WhatsApp Button -->
        <a href="https://wa.me/923001234567" target="_blank" class="whatsapp_float">
            <img src="./img/what.webp" alt="WhatsApp" width="50">
        </a>



























        <!-- Footer Start -->

        <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">

                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-uppercase text-white mb-4">Get In Touch</h4>

                        <!-- Location (Red like Google Maps pin) -->
                        <div class="d-flex align-items-center mb-2">
                            <div class="btn-square bg-dark flex-shrink-0 me-3">
                                <span class="fa fa-map-marker-alt" style="color:#E74C3C;"></span>
                            </div>
                            <span>Gulshan Iqbal, Karachi, Pakistan</span>
                        </div>

                        <!-- Phone (Green like calling/WhatsApp color) -->
                        <div class="d-flex align-items-center mb-2">
                            <div class="btn-square bg-dark flex-shrink-0 me-3">
                                <span class="fa fa-phone-alt" style="color:#25D366;"></span>
                            </div>
                            <span>+92 3333361120</span>
                        </div>

                        <!-- Email (Orange like Gmail) -->
                        <div class="d-flex align-items-center">
                            <div class="btn-square bg-dark flex-shrink-0 me-3">
                                <span class="fa fa-envelope-open" style="color:#EA4335;"></span>
                            </div>
                            <span>usama1011@gmail.com</span>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-uppercase text-white mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="">Home</a>
                        <a class="btn btn-link" href="">About</a>
                        <a class="btn btn-link" href="">Products</a>
                        <a class="btn btn-link" href="">Contact</a>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                        <div class="position-relative mb-4">
                            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-warning py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                        <div class="d-flex pt-1 m-n1">

                            <!-- Facebook -->
                            <a class="btn btn-lg-square m-1" href="" style="background-color:#1877F2; color:white;">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <!-- WhatsApp -->
                            <a class="btn btn-lg-square m-1" href="" style="background-color:#25D366; color:white;">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                            <!-- Instagram -->
                            <a class="btn btn-lg-square m-1" href=""
                                style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); color:white;">
                                <i class="fab fa-instagram"></i>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://www.facebook.com/">Web Mint Studio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer End -->


        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>