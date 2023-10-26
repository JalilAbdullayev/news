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
                            <h4 class="card-title">Blog Kateqoriya </h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ad</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Əməliyyat</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i = 0; $i < count($kdata); $i++) { ?>
                                        <tr class="blogcategoryedit">
                                            <td><a href="javascript:void(0)">ID #<?= $kdata[$i]["id"] ?></a></td>
                                            <td><?= $kdata[$i]["Ad"] ?></td>
                                            <td><?= $kdata[$i]["slug"] ?></td>
                                            <td><input type="checkbox"
                                                       onchange="BlogKatStatus(<?= $kdata[$i]['id'] ?>)" <?= $kdata[$i]["status"] == 1 ? "checked" : ""; ?>
                                                       class="js-switch" data-color="#33AFE3" data-size="small"/></td>
                                            <td>
                                                <button onclick="BlogKatRedakte(<?= $kdata[$i]['id'] ?>,<?= $i ?>)"
                                                        class="btn btn-outline-success btn-sm" data-toggle="modal"
                                                        data-target="#exampleModal">Redaktə Et
                                                </button>
                                                <button onclick="DelBlogKat(<?= $kdata[$i]['id'] ?>)"
                                                        class="btn btn-outline-danger btn-sm">Sil
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
                        <input type="hidden" name="id" id="id" value=""/>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="ad">Adı</label>
                                <input type="text" manxlength="100" class="form-control" id="ad" name="ad"
                                       placeholder="Ad daxil edin..."/>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" manxlength="255" class="form-control" id="slug" name="slug"
                                       placeholder="Slug daxil edin..."/>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                    <button type="submit" class="btn btn-primary" name="blogkatredakte">Redaktə Et</button>
                </div>
                </form>
            </div>
        </div>
    </div>


<?php require_once "footer.php" ?>