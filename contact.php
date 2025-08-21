
<?php


include 'connection.php';

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HairCut - Hair Salon HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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



    <!-- Contact Start -->
     
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <p class="d-inline-block bg-dark text-warning py-1 px-3 rounded">Contact Us</p>
            <h1 class="text-uppercase">Have Any Query? Please Contact Us!</h1>
        </div>

        <div class="row g-4 align-items-start">

            <!-- Contact Form -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-secondary p-4 rounded-4 shadow-sm">
                    
                    <!-- Quick Info Cards -->
                   <div class="d-flex gap-3 mb-4 flex-wrap">
    <div class="bg-dark text-warning p-3 rounded shadow-sm text-center flex-fill">
        <i class="fa fa-phone fa-2x mb-2"></i>
        <p class="mb-0"><a href="tel:+923333361120" class="text-warning text-decoration-none">+92 3333361120</a></p>
    </div>
    <div class="bg-dark text-warning p-3 rounded shadow-sm text-center flex-fill">
        <i class="fa fa-envelope fa-2x mb-2"></i>
        <p class="mb-0"><a href="mailto:usama1011@gmail.com" class="text-warning text-decoration-none">usama1011@gmail.com</a></p>
    </div>
    <div class="bg-dark text-warning p-3 rounded shadow-sm text-center flex-fill">
        <i class="fa fa-map-marker-alt fa-2x mb-2"></i>
        <p class="mb-0"><a href="https://goo.gl/maps/your-location-link" target="_blank" class="text-warning text-decoration-none">Gulshan Iqbal, Karachi</a></p>
    </div>
</div>

                    <!-- Form -->
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control rounded-pill bg-dark text-light border-0 px-4 py-2" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control rounded-pill bg-dark text-light border-0 px-4 py-2" placeholder="Your Email">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control rounded-pill bg-dark text-light border-0 px-4 py-2" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control rounded-3 bg-dark text-light border-0 px-4 py-2" placeholder="Your Message" rows="5"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning rounded-pill w-100 py-2 fw-bold" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>

                   
                </div>
            </div>

            <!-- Google Map -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="h-100 rounded-4 overflow-hidden shadow-sm" style="min-height: 400px;">
                    <iframe class="google-map w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="border:0;"></iframe>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/923001234567" target="_blank" class="position-fixed" style="bottom:20px; right:20px; z-index:1000;">
    <img src="./img/what.webp" alt="WhatsApp" width="60">
</a>


    <!-- Contact End -->





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