<footer class="echo-footer-area" id="footer">
    <div class="container">
        <div class="echo-row">
            <div class="echo-footer-content-1">
                <div class="echo-get-in-tuch">
                    <h4 class="text-capitalize">Get In Touch</h4>
                </div>
                <div class="echo-footer-address">
                    <span class="text-capitalize">
                        <i class="fa-regular fa-map"></i> <?= $Nizam["unvan"] ?>
                    </span>
                    <span class="text-capitalize">
                        <i class="fa-regular fa-phone"></i> <?= $Nizam["tel"] ?>
                    </span>
                    <span class="text">
                        <i class="fa-sharp fa-regular fa-envelope"></i> <?= $Nizam["email"] ?>
                    </span>
                    <div class="echo-footer-social-media">
                        <a href="<?= $Nizam["fb"] ?>">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="<?= $Nizam["tw"] ?>">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="<?= $Nizam["link"] ?>">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="<?= $Nizam["ins"] ?>">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="echo-footer-content-2">
                <div class="echo-get-in-tuch">
                    <h4 class="text-capitalize">Most Popular</h4>
                </div>
                <div class="echo-footer-most-popular">
                    <ul class="list-unstyled">
                        <?php foreach($mostRead as $News) { ?>
                            <li>
                                <a href="<?= $News["slug"] . "-" . $News["id"] ?>">
                                    <?= $News["Basliq"] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="echo-footer-content-3">
                <div class="echo-get-in-tuch">
                    <h4 class="text-capitalize">
                        Categories
                    </h4>
                </div>
                <div class="echo-footer-help">
                    <ul class="list-unstyled">
                        <?php foreach($BlogCat as $Cat) { ?>
                            <li>
                                <a href="<?= $Cat["slug"] . "-" . $Cat["id"] ?>">
                                    <?= $Cat["Ad"] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="echo-footer-copyright-area">
            <div class="copyright-area-inner">
                <div class="footer-logo"><a href="index.html"><img src="assets/images/home-1/site-logo/site-logo-w.svg"
                                                                   alt="logo"></a></div>
                <div class="copyright-content">
                    <h5 class="title">
                        Copyright © <?= date('Y') === "2023" ? "2023" : "2023 - " . date("Y") ?> ECHO NEWS. Bütün
                        hüquqlarımız qorunur.
                    </h5>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->
<!-- End Footer Area -->

<!-- Start Scricpt Area -->

<!--scroll top button-->
<button class="scroll-top-btn">
    <i class="fa-regular fa-angles-up"></i>
</button>
<!--scroll top button end-->

<div id="anywhere-home"></div>

<script src="assets/js/plugins/audio.js" defer></script>
<script src="assets/js/vendor/bootstrap.min.js" defer></script>
<script src="assets/js/vendor/swiper.js" defer></script>
<script src="assets/js/vendor/metisMenu.min.js" defer></script>
<script src="assets/js/plugins/audio.js" defer></script>
<script src="assets/js/plugins/magnific-popup.js" defer></script>
<script src="assets/js/plugins/contact-form.js" defer></script>
<script src="assets/js/plugins/resize-sensor.min.js" defer></script>
<script src="assets/js/plugins/theia-sticky-sidebar.min.js" defer></script>

<!-- main js file -->
<script src="assets/js/main.js" defer></script>
<!-- End Footer Area -->

</body>


<!-- Mirrored from html.themewant.com/echo/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Sep 2023 17:22:20 GMT -->
</html>
