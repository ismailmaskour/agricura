<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>AGRICURA</title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>/public/assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/public/assets/images/ico/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">


        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/vendors/css/charts/apexcharts.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/vendors/css/extensions/dragula.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/css/colors.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/css/components.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/css/themes/dark-layout.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/css/themes/semi-dark-layout.css">
        <!-- END: Theme CSS-->

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/app-assets/css/pages/dashboard-analytics.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/public/assets/css/style.css">
        <!-- END: Custom CSS-->




</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <?php include('include/navbar.php'); ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include('include/sidebar.php'); ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <?= view($view); ?>
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Customizer-->
    <?php //include('include/control_sidebar.php'); 
    ?>
    <!-- End: Customizer-->

    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="<?= base_url() ?>/public/app-assets/vendors/js/vendors.min.js"></script>
        <script src="<?= base_url() ?>/public/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
        <script src="<?= base_url() ?>/public/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
        <script src="<?= base_url() ?>/public/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="<?= base_url() ?>/public/app-assets/vendors/js/charts/apexcharts.min.js"></script>
        <script src="<?= base_url() ?>/public/app-assets/vendors/js/extensions/dragula.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="<?= base_url() ?>/public/app-assets/js/scripts/configs/vertical-menu-light.js"></script>
        <script src="<?= base_url() ?>/public/app-assets/js/core/app-menu.js"></script>
        <script src="<?= base_url() ?>/public/app-assets/js/core/app.js"></script>
        <script src="<?= base_url() ?>/public/app-assets/js/scripts/components.js"></script>
        <script src="<?= base_url() ?>/public/app-assets/js/scripts/footer.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="<?= base_url() ?>/public/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
        <!-- END: Page JS-->
        <script>
            $("#dashboard").addClass('active');
        </script>

    
</body>
<!-- END: Body-->

</html>