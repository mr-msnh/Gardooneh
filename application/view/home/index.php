<!-- Start of html_start -->
<?php require_once "./application/view/modules/html_start.php"; ?>
<!-- End of html_start -->

    <!-- Start of Header -->
    <?php require_once "./application/view/modules/header.php"; ?>
    <!-- End of Header -->

    <!-- Star of Container -->
    <div class="Container">
        <div class="MainFrame">
            <!-- Star of MainSlide -->
            <?php require_once "./application/view/home/main_slider.php"; ?>
            <!-- End of MainSlide -->

            <!-- Star of RollBarrTools -->
            <?php require_once "./application/view/home/rollbar_tools.php"; ?>
            <!-- End of RollBarrTools -->
        </div>

        <!-- Start of SpecialOffer -->
        <?php require_once "./application/view/home/special_offer.php"; ?>
        <!-- End of SpecialOffer -->

        <div class="MainFrame">
            <!-- Start of RollBarTools-NoBorderRadius -->
            <?php require_once "./application/view/home/rollbar_tools_noborder_radius.php"; ?>
            <!-- End of RollBarTools-NoBorderRadius -->

            <!-- Start of ProductList -->
            <?php require_once "./application/view/home/product_list.php"; ?>
            <!-- End of ProductList -->

            <!-- Start of SpecialBanner -->
            <?php require_once "./application/view/home/special_banner.php"; ?>
            <!-- End of SpecialBanner -->

            <!-- Start of ItemsSingle -->
            <?php require_once "./application/view/home/items_single.php"; ?>
            <!-- End of ItemsSingle -->
        </div>
    </div>
    <!-- End of Container -->

    <!-- Start of Footer -->
    <?php require_once "./application/view/modules/footer.php"; ?>
    <!-- End of Footer -->
    
<!-- Start of html_end -->
<?php require_once "./application/view/modules/html_end.php"; ?>
<!-- End of html_end -->