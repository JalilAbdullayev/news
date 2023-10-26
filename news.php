<?php require_once "header.php" ?>
    <script>
        $(document).ready(function () {
            function updateCourseList() {
                $.ajax({
                    url: 'filter.php',
                    type: 'POST',
                    data: {
                        keyword: $('#searchInput').val(),
                        category: $('#categoryFilter').val()
                    },
                    success: function (data) {
                        // Update the courseList div with filtered results
                        $('.courseList').html(data);
                    }
                });
            }

            // Call updateCourseList when the page loads and when filters change
            updateCourseList();
            $('#searchInput, #categoryFilter').on('input', updateCourseList);
        });
    </script>
    <section class="echo-hero-section inner inner-2">
        <div class="echo-hero">
            <div class="container">
                <div class="echo-full-hero-content">
                    <div class="row gx-5 sticky-coloum-wrap">
                        <div class="col-xl-8 col-lg-8">
                            <div class="courseList"></div>
                        </div>
                        <div class="col-xl-4 col-lg-4 sticky-coloum-item">
                            <div class="echo-right-ct-1">
                                <div class="echo-popular-hl-img">
                                    <div class="echo-home-2-title">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="echo-home-2-main-title">
                                                    <label for="searchInput">
                                                        Search
                                                    </label>
                                                    <input class="form-control mb-3" type="search" id="searchInput"
                                                           placeholder="Search by name"/>
                                                    <label for="categoryFilter">
                                                        Categories
                                                    </label>
                                                    <select size="<?= count($BlogCat) + 1 ?>>"
                                                            class="select-area bg-dark overflow-hidden"
                                                            id="categoryFilter">
                                                        <option selected value="">
                                                            All Categories
                                                        </option>
                                                        <?php foreach($BlogCat as $Cat) { ?>
                                                            <option value="<?= $Cat["id"] ?>">
                                                                <?= $Cat["Ad"] ?>
                                                            </option>
                                                        <?php } ?>
                                                        <!-- Add more category options -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="echo-home-1-hero-area-top-story">
                                    <h5 class="text-center">
                                        Latest News
                                    </h5>
                                    <?php for($i = 0, $iMax = count($SonUcBlog); $i < 3; $i++) { ?>
                                        <div class="echo-top-story">
                                            <div class="echo-story-picture img-transition-scale">
                                                <a href="xeber-<?= $SonUcBlog[$i]["slug"] . "-" . $SonUcBlog[$i]["id"] ?>">
                                                    <img src="<?= $SonUcBlog[$i]["sekil"] ?>"
                                                         alt="<?= $SonUcBlog[$i]["Basliq"] ?>" class="img-hover"/>
                                                </a>
                                            </div>
                                            <div class="echo-story-text">
                                                <h6>
                                                    <a href="xeber-<?= $SonUcBlog[$i]["slug"] . "-" . $SonUcBlog[$i]["id"] ?>"
                                                       class="title-hover">
                                                        <?= $SonUcBlog[$i]["Basliq"] ?>
                                                    </a>
                                                </h6>
                                                <a href="xeber-<?= $SonUcBlog[$i]["slug"] . "-" . $SonUcBlog[$i]["id"] ?>"
                                                   class="pe-none">
                                                    <i class="fa-light fa-clock"></i> <?= substr($SonUcBlog[$i]["tarix"], 0, 10) ?>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="echo-home-1-hero-area-top-story">
                                    <h5 class="text-center">Most Read</h5>
                                    <?php foreach($mostRead as $read) { ?>
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
    <!-- Start Footer Area -->
    <!-- Start Footer Area -->
<?php require_once "footer.php" ?>