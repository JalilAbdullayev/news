<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/blog.php";
require_once "tinymce.php";
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
                        <h4 class="card-title">Blog Ətraflı</h4>
                        <form method="POST" action="#" enctype="multipart/form-data">
                            <input type="hidden" value="<?= $rdk["id"] ?>" name="id" />
                            <input type="hidden" value="../../<?= $rdk["sekil"] ?>" name="ksekil" />
                            <div class="form-group">
                                <label for="Basliq">Şəkil</label>
                                <img width="250" height="150" src="../../<?= $rdk["sekil"] ?>" alt="" />
                            </div>
                            <div class="form-group">
                                <label for="kateqoriya">Kateqoriya</label>
                                <select class="form-control" name="kateqoriya" id="kateqoriya">
                                    <?php for ($i = 0; $i < count($kdata); $i++) { ?>
                                        <option value="<?= $kdata[$i]["id"] ?>" <?= $kdata[$i]["id"] == $rdk["kat_id"] ? 'selected="selected"' : ""; ?>><?= $kdata[$i]["Ad"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Basliq">Başlıq</label>
                                <input type="text" required="required" value="<?= $rdk["Basliq"] ?>" maxlength="255" class="form-control" name="basliq" id="Basliq" />
                            </div>
                            <div class="form-group">
                                <label for="mezmun">Məzmun</label>
                                <textarea style="height: 200px" name="mezmun" id="mezmun" class="form-control"><?= $rdk["mezmun"] ?></textarea>
                            </div>
                            <div class="tags-default">
                                <input type="text" value="<?= $tags ?>" name="tags" data-role="tagsinput" />
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
                            <button type="submit" class="btn btn-primary" name="blog_redakte">Redaktə Et</button>
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