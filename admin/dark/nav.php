<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    <img src="<?= $_SESSION["user_sekil"] ?>" alt="user-img" class="img-circle"/>
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                       data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <?= $_SESSION["user_AdSoyad"] ?><span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="profil.php" class="dropdown-item">
                            <i class="ti-user"></i> Profil
                        </a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="logout.php" class="dropdown-item">
                            <i class="fas fa-power-off"></i> Çıxış
                        </a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php if($_SESSION["user_icaze"] == 1) { ?>
                    <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                    class="icon-user"></i><span class="hide-menu">İstifadəçilər </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="istifadeci-siyahi.php">
                                    Siyahı
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-speedometer"></i> <span class="hide-menu">Nizamlamalar </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li>
                                <a href="nizam-umumi.php">
                                    Ümumi Nizamlamalar
                                </a>
                            </li>
                            <li>
                                <a href="nizam-elaqe.php">
                                    Əlaqə Nizamlamaları
                                </a>
                            </li>
                            <li>
                                <a href="haqqinda.php">
                                    Haqqında
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                class="ti-write"></i> <span class="hide-menu">Xəbər</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="xeber-kateqoriya-siyahi.php">
                                Xəbər Kateqoriya Siyahı
                            </a>
                        </li>
                        <li>
                            <a href="xeber-kateqoriya-elave.php">
                                Xəbər Kateqoriya Əlavə
                            </a>
                        </li>
                        <li>
                            <a href="xeber-elave.php">
                                Xəbər Əlavə
                            </a>
                        </li>
                        <li>
                            <a href="xeber-siyahi.php">
                                Xəbər Siyahı
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mektub-siyahi.php">
                        <i class="ti-email"></i> Məktublar
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->