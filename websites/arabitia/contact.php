<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Contact Us</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>


    <!-- ***** Search Form Area ***** -->
    <div class="caviar-search-form d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'header.php'; ?>

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-4.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Contact</h2>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+1234567890">+1 234 567 890</a> <a href="tel:+1234567890">+1 234 567 890</a></p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 14 Soho Square, London, United Kingdom</p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:someone@yoursite.com">lorem.ipsum@dolor.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="caviar-contact-area d-md-flex align-items-center" id="contact">
        <div class="contact-form-area d-flex justify-content-end">
            <div class="contact-form">
                <div class="contact-form-title">
                    <p>get in touch</p>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn caviar-btn"><span></span> Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="caviar-map-area wow fadeInRightBig" data-wow-delay="0.5s">
            <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224568.30237078335!2d76.84969614007959!3d28.422885863859307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d19d582e38859%3A0x2cf5fe8e5c64b1e!2sGurugram%2C+Haryana!5e0!3m2!1sen!2sin!4v1552625339938" width="100%" height="98%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->


    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Google Maps js -->
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>