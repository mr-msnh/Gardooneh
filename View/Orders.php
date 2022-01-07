<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/Style/Libraries/FontAwesome/all.css">
    <link rel="stylesheet" href="./View/Modules/Style/HeaderFooter.css">
    <link rel="stylesheet" href="./View/Style/Orders.css">
    <link rel="shortcut icon" type="image/png" href="./Asset/Images/Logo/favicon.png" />
    <title>Orders</title>
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
                <div class="Header-Order">
                    <div class="Order-Title">
                        <div class="Title-Info">
                            <h2>جزییات سفارش</h2>
                            <span class="Order-Date">۱۰ فروردین ۱۴۰۰</span>
                            <i class="fas fa-circle"></i>
                            <span class="Order-Code">DKC-۱۷۶۷۵۸۰۴۸</span>
                        </div>
                        <i class="far fa-ellipsis-v fa-lg"></i>
                    </div>
                    <div class="Order-Address">
                        <div class="Address-Field-Contact">
                            <span class="Field">تحویل‌گیرنده:</span>
                            <span class="Value">محمد صادق نیلچی حصاری</span>
                        </div>
                        <div class="Address-Field-Contact">
                            <span class="Field">شماره تماس:</span>
                            <span class="Value">۰۹۰۲۶۰۹۱۲۲۸</span>
                        </div>
                        <div class="Address-Field-Address">
                            <span class="Field">ارسال به:</span>
                            <span class="Value">قم، پردیسان، انتهای بلوار شهروند، خیابان البرز، ساختمان آرمان، طبقه سوم، واحد ۸</span>
                        </div>
                    </div>
                    <div class="Order-Price">
                        <span class="Field">مبلغ کل:</span>
                        <span class="Value">۳۲,۴۲۱,۰۰۰ تومان</span>
                    </div>
                </div>
                <div class="List-Order">
                    <div class="Order-Item">
                        <div class="Item-Image">
                            <img src="./Asset/Images/Products/Product1.jpeg" alt="Product1">
                        </div>
                        <div class="Item-Title">
                            <p>دمنوش گیاهی هفت‌ گل</p>
                            <span>
                                <i class="fas fa-circle"></i>
                                <span>چند رنگ</span>
                            </span>
                            <span>
                                <i class="far fa-shield-check"></i>
                                <span>ضمانت کیفیت و اصالت</span>
                            </span>
                            <span>
                                <i class="far fa-store-alt"></i>
                                <span>فروشگاه عطار</span>
                            </span>
                        </div>
                        <div class="Item-Rest">
                            <i class="far fa-ellipsis-v fa-lg"></i>
                            <span class="Field">قیمت واحد:</span>
                            <span class="Value">۶۵۴,۲۰۰ تومان</span>
                        </div>
                    </div>
                    <div class="Order-Item">
                        <div class="Item-Image">
                            <img src="./Asset/Images/Products/Product1.jpeg" alt="Product1">
                        </div>
                        <div class="Item-Title">
                            <p>دمنوش گیاهی هفت‌ گل</p>
                            <span>
                                <i class="fas fa-circle"></i>
                                <span>چند رنگ</span>
                            </span>
                            <span>
                                <i class="far fa-shield-check"></i>
                                <span>ضمانت کیفیت و اصالت</span>
                            </span>
                            <span>
                                <i class="far fa-store-alt"></i>
                                <span>فروشگاه عطار</span>
                            </span>
                        </div>
                        <div class="Item-Rest">
                            <i class="far fa-ellipsis-v fa-lg"></i>
                            <span class="Field">قیمت واحد:</span>
                            <span class="Value">۶۵۴,۲۰۰ تومان</span>
                        </div>
                    </div>
                    <div class="Order-Item">
                        <div class="Item-Image">
                            <img src="./Asset/Images/Products/Product1.jpeg" alt="Product1">
                        </div>
                        <div class="Item-Title">
                            <p>دمنوش گیاهی هفت‌ گل</p>
                            <span>
                                <i class="fas fa-circle"></i>
                                <span>چند رنگ</span>
                            </span>
                            <span>
                                <i class="far fa-shield-check"></i>
                                <span>ضمانت کیفیت و اصالت</span>
                            </span>
                            <span>
                                <i class="far fa-store-alt"></i>
                                <span>فروشگاه عطار</span>
                            </span>
                        </div>
                        <div class="Item-Rest">
                            <i class="far fa-ellipsis-v fa-lg"></i>
                            <span class="Field">قیمت واحد:</span>
                            <span class="Value">۶۵۴,۲۰۰ تومان</span>
                        </div>
                    </div>
                    <div class="Order-Item">
                        <div class="Item-Image">
                            <img src="./Asset/Images/Products/Product1.jpeg" alt="Product1">
                        </div>
                        <div class="Item-Title">
                            <p>دمنوش گیاهی هفت‌ گل</p>
                            <span>
                                <i class="fas fa-circle"></i>
                                <span>چند رنگ</span>
                            </span>
                            <span>
                                <i class="far fa-shield-check"></i>
                                <span>ضمانت کیفیت و اصالت</span>
                            </span>
                            <span>
                                <i class="far fa-store-alt"></i>
                                <span>فروشگاه عطار</span>
                            </span>
                        </div>
                        <div class="Item-Rest">
                            <i class="far fa-ellipsis-v fa-lg"></i>
                            <span class="Field">قیمت واحد:</span>
                            <span class="Value">۶۵۴,۲۰۰ تومان</span>
                        </div>
                    </div>
                    <div class="Order-Item">
                        <div class="Item-Image">
                            <img src="./Asset/Images/Products/Product1.jpeg" alt="Product1">
                        </div>
                        <div class="Item-Title">
                            <p>دمنوش گیاهی هفت‌ گل</p>
                            <span>
                                <i class="fas fa-circle"></i>
                                <span>چند رنگ</span>
                            </span>
                            <span>
                                <i class="far fa-shield-check"></i>
                                <span>ضمانت کیفیت و اصالت</span>
                            </span>
                            <span>
                                <i class="far fa-store-alt"></i>
                                <span>فروشگاه عطار</span>
                            </span>
                        </div>
                        <div class="Item-Rest">
                            <i class="far fa-ellipsis-v fa-lg"></i>
                            <span class="Field">قیمت واحد:</span>
                            <span class="Value">۶۵۴,۲۰۰ تومان</span>
                        </div>
                    </div>
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
<script src="./View/Script/Orders.js"></script>
</html>