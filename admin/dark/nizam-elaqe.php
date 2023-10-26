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
                        <h4 class="card-title">Əlaqə Nizamlamaları</h4>
                        <form method="POST" action="#" enctype="multipart/form-data" class="mt-4">
                            <input type="hidden" name="nizam" value="elaqe" />
                            <div class="form-group">
                                <label for="tel">Telefon</label>
                                <input type="tel" maxlength="30" class="form-control" name="tel" id="tel" value="<?= $data["tel"] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" maxlength="255" class="form-control" id="email" name="email" value="<?= $data["email"] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="fb">Facebook</label>
                                <input type="url" maxlength="255" class="form-control" id="fb" name="fb" value="<?= $data["fb"] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="ins">İnstagram</label>
                                <input type="url" maxlength="255" class="form-control" id="ins" name="ins" value="<?= $data["ins"] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="link">Linkedin</label>
                                <input type="url" maxlength="255" class="form-control" id="link" name="link" value="<?= $data["link"] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="tw">Twitter</label>
                                <input type="url" maxlength="255" class="form-control" id="tw" name="tw" value="<?= $data["tw"] ?>" />
                            </div>
                            <button type="submit" class="btn btn-primary" name="elaqe">Redaktə</button>
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
<script src="sweet.js"></script>
<script>
    let st = `<?= @$_GET["status"] ?>`;

    if (st == "ok") {
        swal({
            title: "Əla!",
            text: "Əməliyyat uğurla icra edildi!",
            icon: "success",
            button: "Ok!",

        });
        setTimeout(Yonlendir, 1300);
    }
    if (st == "no") {
        swal({
            title: "Xəta!",
            text: "Əməliyyat icra edilmədi!",
            icon: "error",
            button: "Ok!",
        });
        setTimeout(Yonlendir, 1300);
    }

    function Yonlendir() {
        location.href = "nizam-elaqe.php";
    }
</script>
<?php require_once "footer.php" ?>