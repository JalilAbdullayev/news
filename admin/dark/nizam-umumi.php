<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/nizamlamalar.php" ?>
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
                        <h4 class="card-title">Ümumi Nizamlamalar</h4>
                        <form method="POST" action="#" enctype="multipart/form-data" class="mt-4">
                            <input type="hidden" name="nizam" value="umumi" />
                            <div class="form-group">
                                <label for="Basliq">Başlıq</label>
                                <input type="text" maxlength="255" class="form-control" name="basliq" id="Basliq" value="<?= $data["Basliq"] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="desc">Açıqlama</label>
                                <input type="text" maxlength="255" class="form-control" id="desc" name="aciqlama" value="<?= $data["Aciqlama"] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="keywords">Açar Sözlər</label>
                                <input type="text" maxlength="255" class="form-control" id="keywords" name="keywords" value="<?= $data["AcarSozler"] ?>" />
                            </div>
                            <div class="form-group">
                                <label>Robots.txt</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="robots" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">.txt fayl seçin</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="umumi">Redaktə</button>
                        </form>
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