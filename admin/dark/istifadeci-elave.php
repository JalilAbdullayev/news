<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/istifadeciler.php"; ?>
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
                        <h4 class="card-title">İstifadəçi Əlavə</h4>
                        <form method="POST" action="#" class="mt-4">
                            <div class="form-group">
                                <label for="AdSoyad">Ad Soyad</label>
                                <input type="text" maxlength="100" class="form-control" name="AdSoyad" id="AdSoyad" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" maxlength="150" class="form-control" name="email" id="email" />
                            </div>
                            <div class="form-group">
                                <label for="sifre">Şifrə</label>
                                <input type="text" maxlength="150" readonly="readonly"  class="form-control" name="sifre" id="sifre" />
                                <button type="button" onclick="SifreAl()" class="btn btn-outline-primary btn-sm">Şifrə Ver</button>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Səlahiyyət</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio11" name="icaze" value="1" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio11">Admistrator</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio22" name="icaze" value="2" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio22">Moderator</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="ist_qeyd">Əlavə Et</button>
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