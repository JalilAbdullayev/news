<?php require_once "admin/settings/code/front/front.php"; ?>
<!DOCTYPE html>
<html lang="az" data-theme="dark">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        <?= $Title[0] ?>
    </title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon"/>

    <link rel="stylesheet preload" href="assets/css/plugins/fontawesome-5.css" as="style"/>
    <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style"/>
    <link rel="stylesheet preload" href="assets/css/vendor/swiper.css" as="style"/>
    <link rel="stylesheet preload" href="assets/css/vendor/metismenu.css" as="style"/>
    <link rel="stylesheet preload" href="assets/css/vendor/magnific-popup.css" as="style"/>
    <link rel="stylesheet preload" href="assets/css/style.css" as="style"/>
    <script src="assets/js/vendor/jquery.min.js"></script>
</head>

<body class="home-one home-three">
<!-- Start Top Header Area -->
<!-- Start Top Header Area -->
<header class="echo-header-area header-three">
    <!-- Start Home-1 Menu & Site Logo & Social Media -->
    <div class="echo-home-1-menu header-three">
        <div class="echo-site-main-logo-menu-social">
            <div class="container header-container">
                <div class="echo-site-main">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-6">
                            <div class="echo-site-logo">
                                <a href="index.php">
                                    <img src="assets/images/home-1/site-logo/site-logo-w.svg" alt="Echo"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 d-none d-lg-block">
                            <nav>
                                <div class="echo-home-1-menu">
                                    <ul class="list-unstyled echo-desktop-menu">
                                        <li class="menu-item">
                                            <a href="index.php" class="echo-dropdown-main-element">
                                                Home
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="news.php" class="echo-dropdown-main-element">
                                                News
                                            </a>
                                        </li>
                                        <?php for($i = 0, $iMax = count($BlogCat); $i < $iMax; $i++) { ?>
                                            <li class="menu-item">
                                                <a href="blog-<?= $BlogCat[$i]["slug"] . "-" . $BlogCat[$i]["id"] ?>"
                                                   class="echo-dropdown-main-element">
                                                    <?= $BlogCat[$i]["Ad"] ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <li class="menu-item">
                                            <a href="contact.php" class="echo-dropdown-main-element">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6">
                            <div class="echo-home-1-social-media-icons">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="<?= $Nizam["fb"] ?>">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $Nizam["tw"] ?>">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $Nizam["link"] ?>">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $Nizam["ins"] ?>">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="rts-darkmode">
                                    <a id="rts-data-toggle" class="rts-dark-light">
                                        <i class="rts-go-dark fal fa-moon"></i>
                                        <i class="rts-go-light far fa-sun"></i>
                                    </a>
                                </div>
                                <div class="echo-header-top-menu-bar echo-off-canvas menu-btn">
                                    <a href="javascript:void(0)">
                                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.526001 0.953461H20V3.11724H0.526001V0.953461ZM7.01733 8.52668H20V10.6905H7.01733V8.52668ZM0.526001 16.0999H20V18.2637H0.526001V16.0999Z"
                                                  fill="#5E5E5E"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home-1 Menu & Site Logo & Social Media -->
</header>
<!-- End Top Header Area -->

<!-- side bar for desktop -->
<div id="side-bar" class="side-bar header-one">
    <div class="inner">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk d-none d-lg-block">
            <div class="thumbnail">
                <img src="assets/images/sidemenu-logo.svg" alt="echo"/>
            </div>
            <div class="inner-content">
                <div class="category-menu-area">
                    <ul class="category-area">
                        <li class="item">
                            <div class="image-area">
                                <a href="#">
                                    <img src="assets/images/category-style-1/1.png" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <div class="recent-post-title">
                                    <a href="#">The incident began as an argument among.</a>
                                </div>
                                <p class="desc"><a href="#"><i class="fa-light fa-user"></i>Asley Graham</a></p>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-area"><a href="#"><img src="assets/images/category-style-1/2.png" alt=""></a>
                            </div>
                            <div class="content">
                                <div class="recent-post-title">
                                    <a href="#">The incident began as an argument among.</a>
                                </div>
                                <p class="desc"><a href="#"><i class="fa-light fa-user"></i>Emily Dicingson</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu d-block d-lg-none">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu" id="mobile-menu-active">
                <li class="has-droupdown">
                    <a href="#" class="main">Home</a>
                    <ul class="submenu">
                        <li><a class="mobile-menu-link" href="index.html">Home 01 - Main</a></li>
                        <li><a class="mobile-menu-link" href="index-two.html">Home 02 - Fashion</a></li>
                        <li><a class="mobile-menu-link" href="index.html">Home 03 - Technology</a></li>
                        <li><a class="mobile-menu-link" href="index-four.html">Home 04 - Gamming</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a class="main mobile-menu-link" href="about.html">About</a></li>
                <li class="has-droupdown">
                    <a href="#" class="main">Category</a>
                    <ul class="submenu">
                        <li><a class="mobile-menu-link" href="category-style-1.html">Category Style 1</a></li>
                        <li><a class="mobile-menu-link" href="category-style-2.html">Category Style 2</a></li>
                        <li><a class="mobile-menu-link" href="news-category.php">Category Style 3</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Features</a>
                    <ul class="submenu">
                        <li><a class="mobile-menu-link" href="author.html">Author</a></li>
                        <li><a class="mobile-menu-link" href="team.html">Team</a></li>
                        <li><a class="mobile-menu-link" href="404.php">Error Page</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Post</a>
                    <ul class="submenu">
                        <li><a class="mobile-menu-link" href="post-style-1.html">Post Style 1</a></li>
                        <li><a class="mobile-menu-link" href="post-style-2.html">Post Style 2</a></li>
                        <li><a class="mobile-menu-link" href="news-details.php">Post Style 3</a></li>
                        <li><a class="mobile-menu-link" href="post-details.html">Post Details</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a class="main mobile-menu-link" href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="social-wrapper-one">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->