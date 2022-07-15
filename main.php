<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- SEO Meta Tags -->
        <meta name="Inventory" content="Inventory Management">
        <meta name="Suryansh" content="website">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Homepage</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/swiper.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <!-- Favicon  -->
        <link rel="icon" href="assets/img/logo1.png">
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">

        <!-- Navigation -->
        <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
            <div class="container">

                <!-- Image Logo -->
                <a class="navbar-brand logo-image" href="index.html"><img src="assets/img/logo.png" alt="alternative"></a>

                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#details">Details</a>
                        </li>


                    </ul>
                    <span class="nav-item">
                        <a class="btn-outline-sm" href="index.php">Log in</a>
                        <a class="btn-outline-sm" href="register.php">Sign-up</a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->


        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="h1-large">Inventory for<span class="replace-me">Small business, Large business, Godowns</span></h1>
                            <p class="p-large">“We want to turn our inventory faster than our people.”
                                -James Sinegal</p>
                            <a class="btn-solid-lg" href="pages-register.html">Sign up for free</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="assets/img/header-illustration.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Inventory application is packed with <span>awesome features</span></h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Management lists</h4>
                                <p>Management is a set of principles relating to the functions of planning, organizing, directing, and controlling, and the applications of these principles in harnessing physical, financial,
                                  human, and informational resources efficiently and effectively to achieve organizational goals</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon green">
                                <span class="far fa-clipboard"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Sales Tracking</h4>
                                <p>Sales tracking is the process of collecting essential sales metrics, analyzing them, and using them to refine your process. When done correctly, sales tracking gives you insight about each
                                  piece of the sales process, and helps you understand exactly how that relates to your goals and quota attainment</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon blue">
                                <span class="far fa-comments"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Reporting Tool</h4>
                                <p>There’s no point getting fancy new inventory management software if you have to manually extract all your data each month. After all, the whole point of any software system is to reduce admin and make operating at scale more efficient.</p>
                            </div>
                        </div>
                        <!-- end of card -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of services -->


        <!-- Details 1 -->
        <div id="details" class="basic-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h2>Manage your inflow and outflow of product in the organisation </h2>
                            <p>The maintenance and upkeep of our inventory are important to ensure that the right amount of inventory is available at the right time and in the right quantity.</p>

                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <img class="img-fluid" src="assets/img/details-1.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of details 1 -->





        <!-- Invitation -->
        <div class="basic-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Inventory Management change the way you think about Management for ordering, storing, tracking, and controlling inventory due to it’s advanced tools and integrated functionalities</h4>
                        <a class="btn-outline-lg page-scroll" href="pages-register.html">Sign up for free</a>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-3 -->
        <!-- end of invitation -->


       <br><br>


        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-col first">
                            <h6>About Website</h6>
                            <p class="p-small">An online inventory management system is an organised and systematic process for controlling the inflow and outflow of our product in the organisation. The maintenance and upkeep of our inventory are
                              important to ensure that the right amount of inventory is available at the right time and in the right quantity.</p>
                        </div> <!-- end of footer-col -->
                        <div class="footer-col second">

                        </div> <!-- end of footer-col -->
                        <div class="footer-col third">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/ishant.chaudhary.92">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://twitter.com/Suryansh_2001">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="https://github.com/Suryansh-Codes2209">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x"></i>
                                </a>
                            </span>

                            <span class="fa-stack">
                                <a href="https://www.instagram.com/chaudhary_suryansh/">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <p class="p-small">Suryansh Chaudhary <a href="mailto:contact@site.com"><strong>suryansh.codes2001@gmail.com</strong></a></p>
                        </div> <!-- end of footer-col -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="p-small">Copyright © <a href="#your-link">Inventory Management System</a></p>
                    </div> <!-- end of col -->

                    <div class="col-lg-6">
                        <p class="p-small">Designed by <a href="https://www.linkedin.com/in/suryansh-chaudhary-2209/"> Suryansh Chaudhary</a></p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->


        <!-- Back To Top Button -->
        <button onclick="topFunction()" id="myBtn">
            <img src="assets/img/up-arrow.png" alt="alternative">
        </button>
        <!-- end of back to top button -->

        <!-- Scripts -->
        <script src="assets/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
        <script src="assets/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
        <script src="assets/js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="assets/js/replaceme.min.js"></script> <!-- ReplaceMe for rotating text -->
        <script src="assets/js/scripts.js"></script> <!-- Custom scripts -->


    </body>
</html>



