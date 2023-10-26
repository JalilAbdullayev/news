<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/mektublar.php";
rsort($mdata);
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Məktub Siyahı
                            </h4>
                            <div class="table-responsive">
                                <table class="table table-hover color-bordered-table primary-bordered-table">
                                    <thead>
                                    <tr>
                                        <th>
                                            Ad Soyad
                                        </th>
                                        <th>
                                            E-mail
                                        </th>
                                        <th>
                                            Telefon
                                        </th>
                                        <th>
                                            Mövzu
                                        </th>
                                        <th>
                                            tarix
                                        </th>
                                        <th>
                                            Əməliyyat
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i = 0; $i < count($mdata); $i++) { ?>
                                        <tr>
                                            <td>
                                                <?= $mdata[$i]["name"] ?>
                                            </td>
                                            <td>
                                                <?= $mdata[$i]["email"] ?>
                                            </td>
                                            <td>
                                                <?= $mdata[$i]["phone"] ?>
                                            </td>
                                            <td>
                                                <?= $mdata[$i]["subject"] ?>
                                            </td>
                                            <td>
                                                <?= $mdata[$i]["tarix"] ?>
                                            </td>
                                            <td>
                                                <a href="mektub-bax.php?bax=ok&id=<?= $mdata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-success">
                                                        Bax
                                                    </button>
                                                </a>
                                                <button class="btn btn-outline-danger"
                                                        onclick="DelMktb(<?= $mdata[$i]['id'] ?>)">
                                                    Sil
                                                </button>
                                            </td>
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