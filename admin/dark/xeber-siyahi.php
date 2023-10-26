<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/blog.php" ?>
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
                            <h4 class="card-title">Blog Siyahı </h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Şəkil</th>
                                        <th>Kateqoriyası</th>
                                        <th>Başlıq</th>
                                        <th>tarix</th>
                                        <th>Status</th>
                                        <th>Əməliyyat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i = 0; $i < count($bdata); $i++) { ?>
                                        <tr>
                                            <td>
                                                <img style="width:50px; height:50px;"
                                                     src="../../<?= $bdata[$i]["sekil"] ?>" alt="Sekil"/>
                                            </td>
                                            <td>
                                                <?= $Blog->Select("blog_kat", 0, "where id=" . $bdata[$i]["kat_id"] . "")["Ad"] ?>
                                            </td>
                                            <td>
                                                <?= $bdata[$i]["Basliq"] ?>
                                            </td>
                                            <td>
                                                <?= $bdata[$i]["tarix"] ?>
                                            </td>
                                            <td></td>
                                            <td>
                                                <a href="blog-bax.php?bax=ok&id=<?= $bdata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-success">Bax</button>
                                                </a>
                                                <a href="blog-redakte.php?rdk=ok&id=<?= $bdata[$i]["id"] ?>">
                                                    <button class="btn btn-outline-info">Redaktə</button>
                                                </a>
                                                <button class="btn btn-outline-danger">Sil</button>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kateqoriya Redaktə</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="mt-4" method="POST" action="#">
                        <input type="hidden" name="id" id="portkatid" value=""/>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="ad">Adı</label>
                                <input type="text" manxlength="100" class="form-control" id="portkatad" name="ad"
                                       placeholder="Ad daxil edin..."/>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" manxlength="255" class="form-control" id="portkatslug" name="slug"
                                       placeholder="Slug daxil edin..."/>
                            </div>
                            <div class="form-group">
                                <label for="slug">Sıra</label>
                                <select name="sira" class="form-control" id="portkatPortfolioSira"></select>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                    <button type="submit" class="btn btn-primary" name="portkatredakte">Redaktə Et</button>
                </div>
                </form>
            </div>
        </div>
    </div>


<?php require_once "footer.php" ?>