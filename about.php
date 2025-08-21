


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




    <!-- About Start -->

    <div class="container-xxl py-5">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.3s">


                    
                    <h1 class="text-uppercase mb-4">Driven by Passion, Powered by Innovation</h1>

                    <h3 class="text-warning mb-3 fs-3">Our Mission</h3>
                    <p class="fs-5">
                        Our mission is to deliver high-performance, durable, and stylish remote control cars
                        that ignite passion and excitement in every enthusiast. We are committed to combining
                        innovation with quality so that each model offers unmatched speed, precision, and fun —
                        whether you’re racing for leisure or competition.
                        <br><br>
                        We believe in creating products that inspire creativity, connect communities, and push
                        the boundaries of what RC technology can achieve. Every model we design reflects our
                        dedication to performance and the joy of racing.
                    </p>

                    <h3 class="text-warning mb-3 mt-4 fs-3">Our Vision</h3>
                    <p class="fs-5">
                        Our vision is to become the leading global brand for RC enthusiasts by building a strong
                        community driven by passion, creativity, and innovation. We aim to shape the future of
                        RC technology, making it more accessible, sustainable, and thrilling for generations to come.
                        <br><br>
                        We envision a world where RC cars are not just a hobby, but a lifestyle — uniting people
                        of all ages through speed, style, and unforgettable experiences on and off the track.
                    </p>




                </div>
            </div>
        </div>
    </div>


    <!-- About End -->



    <div class="row mt-5 text-center">
        <div class="col-md-3">
            <h2 class="text-white">10+</h2>
            <p class="mb-0">Years of Experience</p>
        </div>
        <div class="col-md-3">
            <h2 class="text-white">5000+</h2>
            <p class="mb-0">Happy Customers</p>
        </div>
        <div class="col-md-3">
            <h2 class="text-white">50+</h2>
            <p class="mb-0">RC Models</p>
        </div>
        <div class="col-md-3">
            <h2 class="text-white">100%</h2>
            <p class="mb-0">Customer Satisfaction</p>
        </div>
    </div>


    <div class="container my-5 py-4 text-center">
        <h3 class="text-white mb-3">Why Choose Us?</h3>
        <ul class="list-unstyled fs-5">
            <li class="mb-2">✔️ High-quality, durable RC cars</li>
            <li class="mb-2">✔️ Affordable pricing with great value</li>
            <li class="mb-2">✔️ Friendly support & community-driven brand</li>
            <li class="mb-2">✔️ Passionate about innovation & performance</li>
        </ul>
    </div>



    <div class="container my-5">
        <div class="row justify-content-center g-4">
            <!-- Card 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0" style="width: 100%;">
                    <img src="./img/pro2.jpg" class="card-img-top" alt="RC Car 1"
                        style="height: 200px; object-fit: cover;">
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0" style="width: 100%;">
                    <img src="./img/pro.avif" class="card-img-top" alt="RC Car 2"
                        style="height: 200px; object-fit: cover;">
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