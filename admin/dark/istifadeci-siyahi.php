<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/istifadeciler.php" ?>
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">İstifadəçilərin Siyahısı </h4>
                        <div class="table-responsive">
                            <a href="istifadeci-elave"><button style="float: right;" class="btn btn-outline-primary">Əlavə et</button></a>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Şəkil</th>
                                        <th>Ad Soyad</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Səlahiyyət</th>
                                        <th>Əməliyyat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($istifadeciler); $i++) { ?>
                                        <tr>
                                            <td><img style="width: 55px; height: auto;" src="<?= $istifadeciler[$i]['sekil'] ?>" alt="" /></td>
                                            <td><?= $istifadeciler[$i]['AdSoyad'] ?></td>
                                            <td><?= $istifadeciler[$i]['email'] ?></td>
                                            <td><input type="checkbox" onchange="IstStatus(<?= $istifadeciler[$i]['id'] ?>)" <?= $istifadeciler[$i]["status"] == 1 ? "checked" : ""; ?> class="js-switch" data-color="#33AFE3" data-size="small" /></td>
                                            <td>
                                                <span class="badge <?= $istifadeciler[$i]['icaze'] == 1 ? "badge-success" : "badge-danger" ?>"><?= $istifadeciler[$i]['icaze'] == 1 ? "Adminstrator" : "Moderator" ?></span>
                                            </td>
                                            <td></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once "footer.php" ?>