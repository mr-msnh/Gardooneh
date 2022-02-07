<!-- Start of html_start -->
<?php require_once "./application/view/modules/html_start.php"; ?>
<!-- End of html_start -->

    <!-- Start of Header -->
    <?php require_once "./application/view/modules/header.php"; ?>
    <!-- End of Header -->

    <!-- Star of Container -->
    <div class="Container">
        <div class="MainFrame Extend">
            <!-- S Nav-Map -->
            <?php require_once ("./application/view/card/nav_map.php"); ?>
            <!-- E Nav-Map -->

            <!-- S Main-Section -->
            <div class="Main-Section">
                <!-- S Section-Card -->
                <?php require_once ("./application/view/card/section_card.php"); ?>
                <!-- E Section-Card -->

                <!-- S Section-Information -->
                <?php require_once ("./application/view/card/section_information.php"); ?>
                <!-- E Section Information -->

                <!-- S Section-Payment -->
                <?php require_once ("./application/view/card/section_payment.php"); ?>
                <!-- E Section-Payment -->
                
                <!-- S Section-Result -->
                <?php require_once ("./application/view/card/section_result.php"); ?>
                <!-- E Section-Result -->
            </div>
            <!-- E of Main-Section -->

            <!-- S of Side-Pannel -->
            <?php require_once ("./application/view/card/side_pannel.php"); ?>
            <!-- E of Side-Pannel -->
        </div>
    </div>
    <!-- End of Container -->

    <!-- Start of Footer -->
    <?php require_once "./application/view/modules/footer.php"; ?>
    <!-- End of Footer -->

<!-- Start of html_end -->
<?php require_once "./application/view/modules/html_end.php"; ?>
<!-- End of html_end -->