<!-- Start of html_start -->
<?php require_once "./application/view/modules/html_start.php"; ?>
<!-- End of html_start -->

    <!-- Start of Header -->
    <?php require_once "./application/view/modules/header.php"; ?>
    <!-- End of Header -->

    <!-- Star of Container -->
    <div class="Container">
        <div class="MainFrame">
            <!-- S Product Category Navigator -->
            <?php require_once ("./application/view/product/product_category_nav.php"); ?>
            <!-- E Product Categroy Navigator -->

            <!--S Main Product  -->
            <?php require_once ("./application/view/product/main_product.php"); ?>
            <!-- E Main Product -->

            <!-- S Product Information -->
            <div class="Product-Information">
                <!-- S Vendor Info -->
                <?php require_once ("./application/view/product/vendor_info.php"); ?>
                <!-- E Vendor Info -->

                <!-- S Product Info -->
                <?php require_once ("./application/view/product/product_info.php"); ?>
                <!-- E Product Info -->
            </div>
            <!-- E Product Information -->

            <!-- S Semiular Product -->
            <?php require_once ("./application/view/product/semiular_product.php"); ?>
            <!-- E Semiular Product -->

            <!-- S Product Review -->
            <?php require_once ("./application/view/product/product_review.php"); ?>
            <!-- E Product Review -->
        </div>
    </div>
    <!-- End of Container -->

    <!-- Start of Footer -->
    <?php require_once "./application/view/modules/footer.php"; ?>
    <!-- End of Footer -->

<!-- Start of html_end -->
<?php require_once "./application/view/modules/html_end.php"; ?>
<!-- End of html_end -->