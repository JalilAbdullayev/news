<?php require_once "header.php"; require_once "nav.php"; require_once "../settings/code/blog.php";?>
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
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Blog Kateqoriya Əlavə</h4>
                                <form class="mt-4" method="POST" action="#">
                                    <div class="form-group">
                                    <div class="form-group">
                                        <label for="ad">Adı</label>
                                        <input type="text" manxlength="100" class="form-control" id="ad" name="ad"  placeholder="Ad daxil edin..." />
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" manxlength="255" class="form-control" id="slug" name="slug"  placeholder="Slug daxil edin..." />
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="blogkat">Əlavə Et</button>
                                </form>
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
        <!-- ============================================================== -->
        <!-- footer -->
<?php require_once "footer.php"; ?>