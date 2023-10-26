<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/mektublar.php";
?>
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Məktub
                            </h4>
                            <div class="form-group">
                                <label for="Basliq">
                                    Ad Soyad
                                </label>
                                <input type="text" class="form-control" value="<?= $bax["name"] ?>" disabled/>
                            </div>
                            <div class="form-group">
                                <label for="Basliq">
                                    Mövzu
                                </label>
                                <input type="text" class="form-control" value="<?= $bax["subject"] ?>" disabled/>
                            </div>
                            <div class="form-group">
                                <label for="mezmun">
                                    Məzmun
                                </label>
                                <textarea style="height: 300px;" class="form-control"
                                          disabled><?= $bax["text"] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->

<?php require_once "footer.php" ?>