<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/favicon.png">
    <title>Adminmart Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="/admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="/admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="/admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="/admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="/admin/dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <!-- CK Editor -->
    <script src="/assets/ckeditor/ckeditor.js"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <?= $this->include('layouts/admin/header'); ?>
        <?= $this->include('layouts/admin/sidebar'); ?>
        <div class="page-wrapper">
            <?= $this->renderSection('content'); ?>
            <?= $this->include('layouts/admin/footer'); ?>
        </div>
    </div>

    <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="/admin/dist/js/app-style-switcher.js"></script>
    <script src="/admin/dist/js/feather.min.js"></script>
    <script src="/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="/admin/assets/extra-libs/c3/d3.min.js"></script>
    <script src="/admin/assets/extra-libs/c3/c3.min.js"></script>
    <script src="/admin/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="/admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/admin/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin/dist/js/pages/dashboards/dashboard1.min.js"></script>
    <!--This page plugins -->
    <script src="/admin/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/admin/dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script src="/admin/assets/js/my-script.js"></script>


</body>

</html>