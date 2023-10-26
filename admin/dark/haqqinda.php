<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/haqqinda.php";
require_once "tinymce.php" ?>
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
                        <h4 class="card-title">Haqqında</h4>
                        <form method="POST" action="#" enctype="multipart/form-data" class="mt-4">
                            <input type="hidden" name="k_sekil" value="../../<?= $data["img"] ?>" />
                            <div class="form-group">
                                <label for="Basliq">Cari Şəkil</label>
                                <img style="height: 100px;" src="../../<?= $data['img'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="Basliq">Başlıq</label>
                                <input type="text" maxlength="255" class="form-control" name="basliq" id="Basliq" value="<?= $data["Basliq"] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="mezmun">Məzmun</label>
                                <textarea style="height: 200px" name="mezmun" id="mezmun" class="form-control"><?= $data["Mezmun"] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Şəkil</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="sekil" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">(PNG,JPEG,GIF) fayl seçin</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="haqqinda">Redaktə</button>
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