<?php require_once "header.php" ?>
    <section class="echo-hero-section inner inner-2">
        <div class="echo-hero">
            <div class="container">
                <div class="echo-full-hero-content">
                    <div class="row gx-5 sticky-coloum-wrap">
                        <div class="col-xl-8 col-lg-8">
                            <?php for($i = 0, $iMax = count($BlogCategory); $i < $iMax; $i++) { ?>
                                <div class="echo-hero-baner">
                                    <div class="echo-inner-img-ct-1  img-transition-scale">
                                        <a href="xeber-<?= $BlogCategory[$i]["slug"] . "-" . $BlogCategory[$i]["id"] ?>">
                                            <img src="<?= $BlogCategory[$i]["sekil"] ?>"
                                                 alt="<?= $BlogCategory[$i]["Basliq"] ?>"/>
                                        </a>
                                    </div>
                                    <div class="echo-banner-texting">
                                        <h3 class="echo-hero-title text-capitalize font-weight-bold">
                                            <a href="xeber-<?= $BlogCategory[$i]["slug"] . "-" . $BlogCategory[$i]["id"] ?>"
                                               class="title-hover">
                                                <?= $BlogCategory[$i]["Basliq"] ?>
                                            </a>
                                        </h3>
                                        <div class="echo-hero-area-titlepost-post-like-comment-share">
                                            <div class="echo-hero-area-like-read-comment-share">
                                                <a href="xeber-<?= $BlogCategory[$i]["slug"] . "-" . $BlogCategory[$i]["id"] ?>">
                                                    <i class="fa-light fa-clock"></i> <?= substr($BlogCategory[$i]["tarix"], 0, 10) ?>
                                                </a>
                                            </div>
                                            <div class="echo-hero-area-like-read-comment-share">
                                                <a href="xeber-<?= $BlogCategory[$i]["slug"] . "-" . $BlogCategory[$i]["id"] ?>">
                                                    <i class="fa-light fa-eye"></i> <?= $BlogCategory[$i]["views"] ?>
                                                    Views
                                                </a>
                                            </div>
                                        </div>
                                        <hr/>
                                        <p class="echo-hero-discription">
                                            <?= mb_substr($BlogCategory[$i]["mezmun"], 0, 154) ?>...
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-xl-4 col-lg-4 sticky-coloum-item">
                            <div class="echo-right-ct-1">
                                <div class="echo-home-2-title">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="echo-home-2-main-title">
                                                <h5 class="text-capitalize text-center">
                                                    Categories
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="echo-popular-item">
                                    <ul class="list-unstyled text-center">
                                        <?php foreach($BlogCat as $Cat) { ?>
                                            <li class="bg-dark">
                                                <a href="blog-<?= $Cat["slug"] . "-" . $Cat["id"] ?>">
                                                    <?= $Cat["Ad"] ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="echo-home-1-hero-area-top-story">
                                    <h5 class="text-center">Latest News</h5>
                                    <?php foreach($last3CatNews as $lastNews) { ?>
                                        <div class="echo-top-story">
                                            <div class="echo-story-picture img-transition-scale">
                                                <a href="xeber-<?= $lastNews["slug"] . "-" . $lastNews["id"] ?>">
                                                    <img src="<?= $lastNews["sekil"] ?>"
                                                         alt="<?= $lastNews["Basliq"] ?>" class="img-hover"/>
                                                </a>
                                            </div>
                                            <div class="echo-story-text">
                                                <h6>
                                                    <a href="xeber-<?= $lastNews["slug"] . "-" . $lastNews["id"] ?>"
                                                       class="title-hover">
                                                        <?= $lastNews["Basliq"] ?>
                                                    </a>
                                                </h6>
                                                <a href="xeber-<?= $lastNews["slug"] . "-" . $lastNews["id"] ?>"
                                                   class="pe-none">
                                                    <i class="fa-light fa-clock"></i> <?= substr($lastNews["tarix"], 0, 10) ?>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="echo-home-1-hero-area-top-story">
                                    <h5 class="text-center">Most Read</h5>
                                    <?php foreach($mostCatRead as $read) { ?>
                                        <div class="echo-top-story">
                                            <div class="echo-story-picture img-transition-scale">
                                                <a href="xeber-<?= $read["slug"] . "-" . $read["id"] ?>">
                                                    <img src="<?= $read["sekil"] ?>"
                                                         alt="<?= $read["Basliq"] ?>" class="img-hover"/>
                                                </a>
                                            </div>
                                            <div class="echo-story-text">
                                                <h6>
                                                    <a href="xeber-<?= $read["slug"] . "-" . $read["id"] ?>"
                                                       class="title-hover">
                                                        <?= $read["Basliq"] ?>
                                                    </a>
                                                </h6>
                                                <a href="xeber-<?= $read["slug"] . "-" . $read["id"] ?>"
                                                   class="pe-none">
                                                    <i class="fa-light fa-eye"></i> <?= $read["views"] ?>
                                                    Views
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require_once "footer.php" ?>