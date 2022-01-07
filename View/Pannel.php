<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/Style/Libraries/FontAwesome/all.css">
    <link rel="stylesheet" href="./View/Modules/Style/HeaderFooter.css">
    <link rel="stylesheet" href="./View/Style/Pannel.css">
    <link rel="shortcut icon" type="image/png" href="./Asset/Images/Logo/favicon.png" />
    <title>پنل کاربری</title>
</head>
<body>
    <!-- Star of MainHeader -->
    <?php require_once "./View/Modules/Header.php"; ?>
    <!-- End of MainHeader -->
    <!-- Star of Container -->
    <div class="Container">
        <div class="MainFrame Extend">
            <div class="Nav-Sidebar">
                <div class="AdBanner"><img src="./Asset/Images/Banners/MiniBanner1.jpg" alt="MiniBanner"></div>
                <div class="Sidebar-Menu">
                    <div class="Menu-Profile">
                        <div class="Profile-Image">
                            <img src="./Asset/Images/Profiles/MainProfile.png" alt="Profile">
                        </div>
                        <div class="Profile-Name">
                            <span class="Name">محمد صادق نیلچی حصاری</span>
                            <span class="Phone">۰۹۰۲۶۰۹۱۲۲۸</span>
                        </div>
                        <div class="Profile-Logout">
                            <a href="#"><i class="far fa-sign-out-alt fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="Menu-Items">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-paste fa-lg fa-fw"></i>
                                    <span>سفارش‌های من</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-heart fa-lg fa-fw"></i>
                                    <span>لیست موردعلاقه</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-comments-alt fa-lg fa-fw"></i>
                                    <span>نظرات</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-map-marked fa-lg fa-fw"></i>
                                    <span>نشانی‌ها</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-gift-card fa-lg fa-fw"></i>
                                    <span>کارت‌های هدیه</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-envelope-open-text fa-lg fa-fw"></i>
                                    <span>پیغام‌ها</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-user-edit fa-lg fa-fw"></i>
                                    <span>اطلاعات حساب</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-sign-out-alt fa-lg fa-fw"></i>
                                    <span>خروج</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="Main-Section">
                <div class="Summery-Section">
                    <div class="Section-Box-Right">
                        <h4>اطلاعات شخصی</h4>
                        <div class="Section-Content">
                            <table>
                                <tr>
                                    <td>
                                        <h6>نام و نام‌خانوادگی:</h6>
                                        <p>محمد صادق نیلچی حصاری</p>
                                    </td>
                                    <td>
                                        <h6>پست الکترونیک:</h6>
                                        <p>mr.msnh.s@gmail.com</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6>شماره تلفن همراه:</h6>
                                        <p>۰۹۰۲۶۰۹۱۲۲۸</p>
                                    </td>
                                    <td>
                                        <h6>کدملی:</h6>
                                        <p>۰۳۷۲۰۷۲۸۸۷</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6>دریافت خبرناهه:</h6>
                                        <p>خیر</p>
                                    </td>
                                    <td>
                                        <h6>روش بازگشت وجه:</h6>
                                        <p>شماره کارت بانکی</p>
                                    </td>
                                </tr>
                            </table>
                            <a href="#"><i class="far fa-edit"></i>ویرایش اطلاعات شخصی</a>
                        </div>
                    </div>
                    <div class="Section-Box-Left">
                        <h4>لیست آخرین علاقه‌مندی‌ها</h4>
                        <div class="Section-Content">
                        <table>
                                <tr>
                                    <td>
                                        <img src="./Asset/Images/Products/Product1.jpeg" alt="Product1">
                                        <span>
                                            <a href="#">پک دمنوش گیاهی با عصاره خاص (خانگی)</a>
                                            <span>موجود</span>
                                        </span>
                                        <i class="far fa-trash-alt"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="./Asset/Images/Products/Product2.jpeg" alt="Product2">
                                        <span>
                                            <a href="#">پک دمنوش گیاهی با عصاره خاص (خانگی)</a>
                                            <span>موجود</span>
                                        </span>
                                        <i class="far fa-trash-alt"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="./Asset/Images/Products/Product3.jpeg" alt="Product3">
                                        <span>
                                            <a href="#">پک دمنوش گیاهی با عصاره خاص (خانگی)</a>
                                            <span>موجود</span>
                                        </span>
                                        <i class="far fa-trash-alt"></i>
                                    </td>
                                </tr>
                            </table>
                            <a href="#"><i class="far fa-edit"></i>ویرایش و مشاهده لیست علاقه‌مندی‌ها</a>
                        </div>
                    </div>
                </div>
                <div class="Rest-Section">
                    <h4>آخرین سفارش‌ها</h4>
                    <table>
                        <tr>
                            <th>#</th>
                            <th>شماره سفارش</th>
                            <th>تاریخ ثبت سفارش</th>
                            <th>مبلغ سفارش</th>
                            <th>وضعیت پرداخت</th>
                            <th>وضعیت سفارش</th>
                            <th>جزيیات</th>
                        </tr>
                        <tr>
                            <td>۱</td>
                            <td>DKC-220309489</td>
                            <td>۲۶ آذر ۱۴۰۰</td>
                            <td>۲,۱۳۴,۰۰۰ تومان</td>
                            <td>پرداخت موفق</td>
                            <td>تکمیل شده</td>
                            <td><a href="Orders"><i class="far fa-chevron-left fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>۲</td>
                            <td>DKC-207967847</td>
                            <td>۱ مرداد ۱۴۰۰</td>
                            <td>۳۱۳,۰۰۰ تومان</td>
                            <td>پرداخت موفق</td>
                            <td>تکمیل شده</td>
                            <td><a href="Orders"><i class="far fa-chevron-left fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>۳</td>
                            <td>DKC-187362621</td>
                            <td>۱۲ اردیبهشت ۱۴۰۰</td>
                            <td>۳۲,۴۲۱,۰۰۰ تومان</td>
                            <td>پرداخت موفق</td>
                            <td>تکمیل شده</td>
                            <td><a href="Orders"><i class="far fa-chevron-left fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>۴</td>
                            <td>DKC-220309489</td>
                            <td>۲۶ آذر ۱۴۰۰</td>
                            <td>۲,۱۳۴,۰۰۰ تومان</td>
                            <td>پرداخت موفق</td>
                            <td>تکمیل شده</td>
                            <td><a href="Orders"><i class="far fa-chevron-left fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>۵</td>
                            <td>DKC-207967847</td>
                            <td>۱ مرداد ۱۴۰۰</td>
                            <td>۳۱۳,۰۰۰ تومان</td>
                            <td>پرداخت موفق</td>
                            <td>تکمیل شده</td>
                            <td><a href="Orders"><i class="far fa-chevron-left fa-lg"></i></a></td>
                        </tr>
                        <tr>
                            <td>۶</td>
                            <td>DKC-187362621</td>
                            <td>۱۲ اردیبهشت ۱۴۰۰</td>
                            <td>۳۲,۴۲۱,۰۰۰ تومان</td>
                            <td>پرداخت موفق</td>
                            <td>تکمیل شده</td>
                            <td><a href="Orders"><i class="far fa-chevron-left fa-lg"></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Container -->
    <!-- Star of MainFooter -->
    <?php require_once "./View/Modules/Footer.php"; ?>
    <!-- End of MainFooter -->
</body>
<script src="./View/Script/Libraries/JQuery.js"></script>
<script src="./View/Modules/Script/HeaderFooter.js"></script>
<script src="./View/Script/Pannel.js"></script>
</html>