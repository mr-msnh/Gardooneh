<!-- Start of html_start -->
<?php require_once "./application/view/modules/html_start.php"; ?>
<!-- End of html_start -->

    <!-- Start of Header -->
    <?php require_once "./application/view/modules/header.php"; ?>
    <!-- End of Header -->

    <!-- Star of Container -->
    <div class="Container">
        <div class="MainFrame">
            <!-- Star of SideBar -->
            <div class="SideBar">
                <?php require_once ("./application/view/search/sidebar.php"); ?>
            </div>
            <!-- End of SideBar -->

            <!-- Star of ProductSearch -->
            <div class="ProductSearch">
                <!-- S Top Controller -->
                <?php require_once ("./application/view/search/top_controller.php"); ?>
                <!-- E Top Controller -->

                <!-- S Product List -->
                <?php require_once ("./application/view/search/product_list.php"); ?>
                <!-- E Product List -->
            </div>
            <!-- End of ProductSearch -->
        </div>
    </div>
    <!-- End of Container -->

    <!-- Start of Footer -->
    <?php require_once "./application/view/modules/footer.php"; ?>
    <!-- End of Footer -->

<!-- Start of html_end -->
<?php require_once "./application/view/modules/html_end.php"; ?>
<!-- End of html_end -->