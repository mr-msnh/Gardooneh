<!-- Start of html_start -->
<?php require_once "./application/view/modules/html_start.php"; ?>
<!-- End of html_start -->

    <!-- Start of Container -->
    <div class="Container">
        <!-- Start of MainLoginFrame -->
        <div class="MainLoginFrame">
            <!-- Start of Login -->
            <div class="LoginFrame">
                <div class="Login">
                    <h2>ورود بـه گـردونـه</h2>
                    <form class="SigninBox" action="Pannel" method="POST">
                        <input type="text" placeholder="ایمیل" name="txtEmail" id="txtEmail">
                        <input type="password" placeholder="رمزعبور" name="txtPassword" id="txtPassword">
                        <span class="EyePass"></span>
                        <a href="#">رمز عبورت رو فراموش کردی؟</a>
                        <input type="submit" value="وارد شوید" name="btnSignin">
                    </form>
                </div>
            </div>
            <!-- End of Login -->
            <!-- Start of CreateAccount -->
            <div class="CreateAccountFrame">
                <div class="CreateAccount">
                    <h2>ثـبت‌نـام در گـردونـه</h2>
                    <form class="SignupBox" action="Pannel" method="POST">
                        <input type="text" placeholder="نام شما" name="txtName" id="txtName">
                        <input type="text" placeholder="ایمیل" name="txtEmail" id="txtEmail">
                        <input type="password" placeholder="رمزعبور" name="txtPassword" id="txtPassword">
                        <span class="EyePass"></span>
                        <input type="submit" value="ثبت‌نام کنید" name="btnSignin">
                    </form>
                </div>
            </div>
            <!-- End of CreateAccount -->
            <!-- Start of RollController -->
            <div class="RollController">
                <div class="Logo">
                    <a href="Home"><img src="./Asset/Images/Logo/favicon.png" alt="Logo"></a>
                </div>
                <div class="Title">
                    <h2 class="TitleSignUp">سلام دوست عزیز!</h2>
                    <h2 class="TitleSignIn">خوش آمدید!</h2>
                    <p class="TitleSignUp">اطلاعات خودتو ثبت و سفرت رو با ما شروع کن.</p>
                    <p class="TitleSignIn">برای تجربه بهتر، لطفا وارد حساب خود شوید.</p>
                </div>
                <div class="ActionButton">
                    <input type="button" value="ثبت‌نام کنید" name="btnSignin">
                </div>
            </div>
            <!-- End of RollController -->
        </div>
        <!-- End of MainLoginFrame -->
        <!-- Start of ForgotPassword -->
        <div class="ForgotPassword">
            <h2>ایمیل خود را وارد کنید</h2>
            <input type="text" placeholder="ایمیل" name="txtEmail" id="txtEmail">
            <input type="button" value="تایید ایمیل" name="btnForgotPassword">
            <span></span>
        </div>
        <!-- End of ForgotPassword -->
    </div>
    <!-- End of Container -->

<!-- Start of html_end -->
<?php require_once "./application/view/modules/html_end.php"; ?>
<!-- End of html_end -->