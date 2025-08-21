

<?php 

include 'connection.php'; 


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

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./banner1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-warning text-uppercase mb-4 animated slideInDown">Unleash the
                                Power of RC Performance</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-map-marker-alt text-warning me-3"></i>Gulsan Iqbal</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-phone-alt text-warning me-3"></i>+92 3198985406</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./banner2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-warning text-uppercase mb-4 animated slideInDown">Speed. Control.
                                Adrenaline</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-map-marker-alt text-warning me-3"></i>Gulsan Iqbal</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-phone-alt text-warning me-3"></i>+92 3198985406</h4>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="./banner2.jpg" alt=""
                            style="border: 3px solid white;">

                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-bloc text-center text-uppercase py-1 px-8">About Us</p>
                    <h1 class="text-uppercase mb-4">More Than Just RC Cars – It’s a Lifestyle</h1>
                    <p>At [Your Brand Name], we’re passionate about bringing the thrill of speed and precision into your
                        hands. Specializing in high-performance remote control cars, we combine cutting-edge technology
                        with sleek design to deliver an experience that’s as exciting as it is reliable.

                        Whether you’re a hobbyist, a collector, or a competitive racer, our mission is to fuel your
                        passion with RC cars that offer unmatched control, durability, and style. Every model is
                        carefully tested to ensure top-tier performance — because we believe every race should feel
                        unforgettable.

                        Join our community of RC enthusiasts and discover why we’re more than just a store — we’re your
                        partner in every lap, drift, and victory.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">50+ Customers</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-uppercase">What We Provide</h1>
            </div>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card bg-secondary text-center h-100 border-0">
                        <img src="./banner1.jpg" class="card-img-top" alt="RC Car">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">RC Speedster</h5>
                            <p class="text-warning fw-bold mb-2">Rs.4000</p>
                            <p class="card-text">High-speed RC car with precision control.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card bg-secondary text-center h-100 border-0">
                        <img src="./img/bike.webp" class="card-img-top" alt="RC Car">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Monster Bike</h5>
                            <p class="text-warning fw-bold mb-2">Rs.3000</p>
                            <p class="card-text">Off-road RC car built for rough terrains.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card bg-secondary text-center h-100 border-0">
                        <img src="./img/pro2.jpg" class="card-img-top" alt="RC Car">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Rc Drifter</h5>
                            <p class="text-warning fw-bold mb-2">Rs.4000</p>
                            <p class="card-text">Perfect for smooth drifts and stunts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Service End -->


    <!-- Price Start -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-warning py-1 px-4 me-auto">Our Prices</p>
                        <h1 class="text-uppercase mb-4">Check Out Our RC Models And Prices</h1>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Car</h6>
                                <span class="text-uppercase text-warning">Rs.2500</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Helicopter</h6>
                                <span class="text-uppercase text-warning">Rs.3000</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Aeroplane</h6>
                                <span class="text-uppercase text-warning">Rs.2500</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Bike</h6>
                                <span class="text-uppercase text-warning">Rs.3500</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Jeep</h6>
                                <span class="text-uppercase text-warning">Rs.3500</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Bus</h6>
                                <span class="text-uppercase text-warning">Rs.4000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="./img/pro2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Price End -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-warning py-1 px-4">Our Videos</p>
                <h1 class="text-uppercase">RC Models In Action</h1>
            </div>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card bg-secondary border-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/CFWEFG_kj-c" title="RC Car Racing"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase">RC Car Racing</h5>
                            <p class="card-text">Experience high-speed racing latest RC cars.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card bg-secondary border-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/CFWEFG_kj-c" title="RC Helicopter Flight"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase">RC Helicopter</h5>
                            <p class="card-text">Smooth aerial stunts with precision control.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card bg-secondary border-0">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/CFWEFG_kj-c" title="RC Boat Adventure"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase">RC Boat</h5>
                            <p class="card-text">Powerful RC boats for thrilling water rides.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
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


        <!-- Floating WhatsApp Button -->
        <a href="https://wa.me/923001234567" target="_blank" class="whatsapp_float">
            <img src="./img/what.webp" alt="WhatsApp" width="50">
        </a>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>