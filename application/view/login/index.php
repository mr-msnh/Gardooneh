<!-- Start of html_start -->
<?php require_once "./application/view/modules/html_start.php"; ?>
<!-- End of html_start -->

    <!-- Start of Container -->
    <div class="Container">
        <!-- Start of MainLoginFrame -->
        <div class="MainLoginFrame">
            <!-- Start of Login -->
            <?php require_once ("./application/view/login/login.php"); ?>
            <!-- End of Login -->

            <!-- Start of CreateAccount -->
            <?php require_once ("./application/view/login/create_account.php"); ?>
            <!-- End of CreateAccount -->

            <!-- Start of RollController -->
            <?php require_once ("./application/view/login/roll_controller.php"); ?>
            <!-- End of RollController -->
        </div>
        <!-- End of MainLoginFrame -->

        <!-- Start of ForgotPassword -->
        <?php require_once ("./application/view/login/forgot_password.php"); ?>
        <!-- End of ForgotPassword -->
    </div>
    <!-- End of Container -->

<!-- Start of html_end -->
<?php require_once "./application/view/modules/html_end.php"; ?>
<!-- End of html_end -->