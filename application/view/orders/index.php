<!-- Start of html_start -->
<?php require_once "./application/view/modules/html_start.php"; ?>
<!-- End of html_start -->

    <!-- Start of Header -->
    <?php require_once "./application/view/modules/header.php"; ?>
    <!-- End of Header -->

    <!-- Star of Container -->
    <div class="Container">
        <div class="MainFrame Extend">
            <div class="Nav-Sidebar">
                <!-- S Add Banner -->
                <?php require_once ("./application/view/orders/ad_banner.php"); ?>
                <!-- E Add Banner -->

                <!-- S Sidebar Menu -->
                <div class="Sidebar-Menu">
                    <!-- S Menu Profile -->
                    <?php require_once ("./application/view/orders/menu_profile.php"); ?>
                    <!-- E Menu Profile -->

                    <!-- S Menu Items -->
                    <?php require_once ("./application/view/orders/menu_items.php"); ?>
                    <!-- E Menu Items -->
                </div>
                <!-- E Sidebar Menu -->
            </div>
            <div class="Main-Section">
                <!-- S Header Orders -->
                <?php require_once ("./application/view/orders/header_orders.php"); ?>
                <!-- E Header Orders -->

                <!-- S List Order -->
                <?php require_once ("./application/view/orders/list_orders.php"); ?>
                <!-- E List Order -->
            </div>
        </div>
    </div>
    <!-- End of Container -->

    <!-- Start of Footer -->
    <?php require_once "./application/view/modules/footer.php"; ?>
    <!-- End of Footer -->

<!-- Start of html_end -->
<?php require_once "./application/view/modules/html_end.php"; ?>
<!-- End of html_end -->