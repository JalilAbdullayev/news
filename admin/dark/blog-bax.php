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
                            <div class="form-group">
                                <label for="Basliq">Şəkil</label>
                                <img width="250" height="150" src="../../<?= $bax["sekil"] ?>" alt="" />
                            </div>
                            <div class="form-group">
                                <label for="Basliq">Kateqoriya</label>
                                <input type="text" class="form-control" value="<?= $Blog->Select("blog_kat",0,"where id=".$bax["kat_id"])["Ad"] ?>" disabled="disabled" />
                            </div>
                            <div class="form-group">
                                <label for="Basliq">Başlıq</label>
                                <input type="text" class="form-control" value="<?= $bax["Basliq"] ?>" disabled="disabled" />
                            </div>
                            <div class="form-group">
                                <label for="mezmun">Məzmun</label>
                                <textarea style="height: 300px;" class="form-control" ><?= $bax["mezmun"] ?></textarea>
                            </div>
                            <div class="tags-default">
                                <input type="text" value="<?= $tags ?>" name="tags" data-role="tagsinput" disabled="disabled" />
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