<?php require_once "header.php" ?>
    <!-- End Top Header Area -->
    <section class="echo-hero-section inner inner-post inner-post-2">
        <div class="echo-hero">
            <div class="container">
                <div class="echo-full-hero-content">
                    <div class="row gx-5 sticky-coloum-wrap">
                        <div class="col-xl-8 col-lg-8">
                            <div class="echo-hero-baner">
                                <a href="blog-<?= $kat_slug . "-" . $Blog["kat_id"] ?>">
                                    <span class="content-catagory-tag">
                                        <?= $kat_ad ?>
                                    </span>
                                </a>
                                <h2 class="echo-hero-title text-capitalize font-weight-bold">
                                    <a href="xeber-<?= $Blog["slug"] . "-" . $Blog["id"] ?>"
                                       class="title-hover">
                                        <?= $Blog['Basliq'] ?>
                                    </a>
                                </h2>
                                <div class="echo-hero-area-titlepost-post-like-comment-share">
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="xeber-<?= $Blog["slug"] . "-" . $Blog["id"] ?>">
                                            <i class="fa-light fa-clock"></i> <?= substr($Blog['tarix'], 0, 10) ?>
                                        </a>
                                    </div>
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="xeber-<?= $Blog["slug"] . "-" . $Blog["id"] ?>">
                                            <i class="fa-light fa-eye"></i> <?= $Blog['views'] ?> Views
                                        </a>
                                    </div>
                                </div>
                                <div class="echo-inner-img-ct-1  img-transition-scale">
                                    <a href="xeber-<?= $Blog["slug"] . "-" . $Blog["id"] ?>">
                                        <img src="<?= $Blog['sekil'] ?>" alt="<?= $Blog['Basliq'] ?>"
                                             class="echo-post-style-3-hero-banner"/>
                                    </a>
                                </div>
                                <p class="echo-hero-discription">
                                    <?= $Blog['mezmun'] ?>
                                </p>
                                <div class="mb-5">
                                    <div class="details-tag">
                                        <h6>Tags:</h6>
                                        <?= $tags ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($morePosts)) { ?>
                            <div class="echo-more-news-area">
                                <h3 class="title">You Might Also Like</h3>
                                <div class="inner">
                                    <div class="row">
                                        <?php foreach($morePosts as $post) { ?>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="echo-top-story">
                                                    <div class="echo-story-picture img-transition-scale">
                                                        <a href="xeber-<?= $post["slug"] . "-" . $post["id"] ?>">
                                                            <img src="<?= $post['sekil'] ?>" alt="Echo"
                                                                 class="img-hover"/>
                                                        </a>
                                                    </div>
                                                    <div class="echo-story-text">
                                                        <h6>
                                                            <a href="xeber-<?= $post["slug"] . "-" . $post["id"] ?>"
                                                               class="title-hover">
                                                                <?= $post['Basliq'] ?>
                                                            </a>
                                                        </h6>
                                                        <a href="#" class="pe-none">
                                                            <i class="fa-light fa-clock"></i> <?= substr($post['tarix'], 0, 10) ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Footer Area -->
    <!-- Start Footer Area -->
<?php require_once "footer.php" ?>