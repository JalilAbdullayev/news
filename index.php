<?php require_once "header.php" ?>
    <!-- End Top Header Area -->
    <!-- Start Hero Area -->
    <section class="echo-hero-section home-three">
        <div class="echo-hero">
            <div class="container">
                <div class="echo-hero-inner">
                    <div class="row">
                        <div class="col-lg-7">
                            <?php for($i = 0, $iMax = count($SonUcBlog); $i < 1; $i++) { ?>
                                <div class="banner-content">
                                    <div class="contents">
                                        <h2 class="content-title1"><a
                                                    href="xeber-<?= $SonUcBlog[$i]["slug"] . "-" . $SonUcBlog[$i]["id"] ?>">
                                                <?= $SonUcBlog[$i]["Basliq"] ?>
                                            </a>
                                        </h2>
                                        <p class="desc">
                                            <?= substr($SonUcBlog[$i]["mezmun"], 0, "162") . "..." ?>
                                        </p>
                                        <div class="content-bottom-info mb--25">
                                            <ul>
                                                <li>
                                                    <i class="fa-light fa-clock"></i> <?= substr($SonUcBlog[$i]["tarix"], 0, 10) ?>
                                                </li>
                                                <li>
                                                    <i class="fa-light fa-eye"></i> <?= $SonUcBlog[$i]["views"] ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="echo-button-wrapper">
                                            <a href="xeber-<?= $SonUcBlog[$i]["slug"] . "-" . $SonUcBlog[$i]["id"] ?>"
                                               class="rts-btn btn-secondary">
                                                Read More <i class="fa-light fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-5">
                            <div class="echo-hero-right-side">
                                <div class="right-side-inner">
                                    <h3 class="sub-title">Top Stories</h3>
                                    <div class="content-box">
                                        <ul>
                                            <?php for($i = 0, $iMax = count($mostRead); $i < 3; $i++) { ?>
                                                <li class="wrapper">
                                                    <div class="image-area img-transition-scale">
                                                        <a href="xeber-<?= $mostRead[$i]["slug"] . "-" . $mostRead[$i]["id"] ?>">
                                                            <img src="<?= $mostRead[$i]["sekil"] ?>"
                                                                 alt="xeber-<?= $mostRead[$i]["slug"] . "-" . $mostRead[$i]["id"] ?>"/>
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h4 class="content-title1">
                                                            <a href="xeber-<?= $mostRead[$i]["slug"] . "-" . $mostRead[$i]["id"] ?>">
                                                                <?= $mostRead[$i]["Basliq"] ?>
                                                            </a>
                                                        </h4>
                                                        <div class="content-bottom-info">
                                                            <ul>
                                                                <li>
                                                                    <i class="fa-light fa-clock"></i> <?= substr($mostRead[$i]["tarix"], 0, 10) ?>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Latest News Slider -->
    <section class="echo-latest-news-area home-three">
        <div class="echo-latest-news-content">
            <div class="container">
                <h6 class="sub-title">Latest News <span>/</span></h6>
                <div class="echo-latest-news-full-content">
                    <div class="row">
                        <?php for($i = 0, $iMax = count($SonUcBlog); $i < 3; $i++) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="echo-latest-news-main-content">
                                    <div class="echo-latest-news-img img-transition-scale">
                                        <a href="xeber-<?= $SonUcBlog[$i]["slug"] . "-" . $SonUcBlog[$i]["id"] ?>">
                                            <img src="<?= $SonUcBlog[$i]["sekil"] ?>" alt="Echo"
                                                 class="img-hover"/>
                                        </a>
                                    </div>
                                    <div class="echo-latest-news-single-title">
                                        <h5>
                                            <a href="xeber-<?= $SonUcBlog[$i]["slug"] . "-" . $SonUcBlog[$i]["id"] ?>"
                                               class="text-capitalize title-hover">
                                                <?= $SonUcBlog[$i]["Basliq"] ?>
                                            </a>
                                        </h5>
                                    </div>
                                    <div class="echo-latest-news-time-views">
                                        <a href="xeber-<?= $SonUcBlog[$i]["slug"] . "-" . $SonUcBlog[$i]["id"] ?>"
                                           class="pe-none">
                                            <i class="fa-light fa-clock"></i> <?= substr($SonUcBlog[$i]["tarix"], 0, 10) ?>
                                        </a>
                                        <a href="xeber-<?= $SonUcBlog[$i]["slug"] . "-" . $SonUcBlog[$i]["id"] ?>"
                                           class="pe-none">
                                            <i class="fa-light fa-eye"></i> <?= $SonUcBlog[$i]["views"] ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Latest News Slider -->

    <!-- Start Feature Area -->
    <section class="echo-feature-area home-three">
        <div class="echo-feature-area-content">
            <div class="container">
                <h2 class="section-title">Editor's Pick /</h2>
                <div class="echo-feature-full-content">
                    <div class="row gx-6">
                        <div class="col-xl-8 col-lg-8">
                            <div class="echo-feature-area-site-title">
                                <div class="echo-feature-area-last-news">
                                    <div class="row gy-5">
                                        <div class="col-lg-12">
                                            <div class="echo-feature-area-last-content">
                                                <div class="echo-feature-area-last-content-img img-transition-scale">
                                                    <a href="post-details.html"> <img
                                                                src="assets/images/home-1/feature-left/item-5.png"
                                                                alt="Echo"
                                                                class="img-hover"></a>
                                                </div>
                                                <div class="echo-feature-area-last-content-text">
                                                    <a href="catagory-details2.html"
                                                       class="content-catagory-tag">Gadget</a>
                                                    <h3 class="text-capitalize"><a href="post-details.html"
                                                                                   class="title-hover">14 Hidden iPhone
                                                            Features You Should Really...</a></h3>
                                                    <div class="echo-feature-area-last-content-read-view">
                                                        <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06
                                                            minute read</a>
                                                        <a href="#" class="pe-none"><i class="fa-light fa-eye"></i> 3.5k
                                                            Views</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="right-side-content">
                                <div class="echo-feature-area-right-site-follower">
                                    <h5>Follow Us</h5>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-facebook"></i>20K Fans</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-twitter"></i>10K Followers</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-instagram"></i>50K Followers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-brands fa-linkedin"></i>30K Followers
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Area -->

    <!-- Start Catagories Area -->
    <section class="echo-catagories-area">
        <div class="echo-catagories-area-content">
            <div class="container">
                <div class="title-area">
                    <h2 class="section-title">Discover Catagories /</h2>
                    <div class="swiper-btn">
                        <div class="swiper-button-prev"><i class="fa-regular fa-arrow-left"></i></div>
                        <div class="swiper-button-next"><i class="fa-regular fa-arrow-right"></i></div>
                    </div>
                </div>
                <div class="echo-catagories-inner">
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <?php foreach($BlogCat as $Cat) { ?>
                                <div class="swiper-slide">
                                    <a href="blog-<?= $Cat["slug"] . "-" . $Cat["id"] ?>">
                                        <div class="echo-latest-news-main-content">
                                            <div class="echo-latest-news-img img-transition-scale">
                                                <img src="assets/images/home-1/de-category/item-10.png"
                                                     alt="blog-<?= $Cat["slug"] . "-" . $Cat["id"] ?>"/>
                                                <div class="image-content">
                                                    <h5 class="title">
                                                        <?= $Cat["Ad"] ?>
                                                    </h5>
                                                    <p class="desc">
                                                        100+ Articles
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Catagories Area -->

    <!-- Start Video Area-->
<?php for($i = 0, $iMax = count($mostRead); $i < 1; $i++) { ?>
    <section class="echo-video-area home-three" style="background-color: var(--bg-dark-three)">
        <div class="container">
            <div class="echo-video-area-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content">
                            <div class="contents">
                                <h2 class="content-title1">
                                    <a href="xeber-<?= $mostRead[$i]["slug"] . "-" . $mostRead[$i]["id"] ?>">
                                        <?= $mostRead[$i]["Basliq"] ?>
                                    </a>
                                </h2>
                                <p class="desc">
                                    <?= substr($mostRead[$i]["mezmun"], 0, 306) . "..." ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
    <!-- End Video Area -->

    <!-- Start Footer Area -->
<?php require_once "footer.php" ?>