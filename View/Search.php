<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/Modules/Style/HeaderFooter.css">
    <link rel="stylesheet" href="./View/Style/Search.css">
    <link rel="shortcut icon" type="image/png" href="./Asset/Images/Logo/favicon.png" />
    <title>جستجو</title>
</head>
<body>
    <!-- Star of MainHeader -->
    <?php require_once "./View/Modules/Header.php"; ?>
    <!-- End of MainHeader -->
    <!-- Star of Container -->
    <div class="Container">
        <div class="MainFrame">
            <!-- Star of SlideBar -->
            <div class="SideBar">
                <div class="FilterBoxFrame">
                    <div class="FilterBox">
                        <div class="FBHeader">
                            <p>فیلترهای اعمال‌شده</p>
                            <a href="#">پاک کردن</a>
                        </div>
                        <div class="FBContent">
                            <p>دسته‌بندی:</p>
                            <div class="FilterItemsHolder">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="FilterBoxFrame">
                    <div class="FilterBox">
                        <div class="FBHeader">
                            <p>جستجو دقیق‌تر</p>
                            <span></span>
                        </div>
                        <div class="FBContent">
                            <div class="FilterCheckbox" data-num="1">
                                <span><input type="checkbox"></span>
                                <p class="CheckBox-Title">تالبو معرف</p>
                                <p>
                                    <span>(۱۷۲)</span>
                                </p>
                            </div>
                            <div class="FilterCheckbox" data-num="2">
                                <span><input type="checkbox"></span>
                                <p class="CheckBox-Title">صنایع دستی</p>
                                <p>
                                    <span>(۳۲)</span>
                                </p>
                            </div>
                            <div class="FilterCheckbox" data-num="3">
                                <span><input type="checkbox"></span>
                                <p class="CheckBox-Title">کوزه و سفال</p>
                                <p>
                                    <span>(۴۲)</span>
                                </p>
                            </div>
                            <div class="FilterCheckbox" data-num="4">
                                <span><input type="checkbox"></span>
                                <p class="CheckBox-Title">معرق‌کاری</p>
                                <p>
                                    <span>(۱۲)</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="FilterBoxFrame">
                    <div class="FilterBox">
                        <div class="FBHeader">
                            <p>ویژگی خاص</p>
                            <span></span>
                        </div>
                        <div class="FBContent">
                            <div class="FilterSwichItems">
                                <div class="FilterSwitch">
                                    <input type="checkbox">
                                    <span></span>
                                </div>
                                <p>ارسال رایگان</p>
                            </div>
                            <div class="FilterSwichItems">
                                <div class="FilterSwitch">
                                    <input type="checkbox">
                                    <span></span>
                                </div>
                                <p>موجود در انبار</p>
                            </div>
                            <div class="FilterSwichItems">
                                <div class="FilterSwitch">
                                    <input type="checkbox">
                                    <span></span>
                                </div>
                                <p>تخفیف‌دار</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="FilterBoxFrame">
                    <div class="FilterBox">
                        <div class="FBHeader">
                            <p>محدودیت قمیت</p>
                            <a href="#">پاک کردن</a>
                        </div>
                        <div class="FBContent">
                            <p>دسته‌بندی:</p>
                            <div class="FilterItems">
                                معرق کاری
                                <span></span>
                            </div>
                            <div class="FilterItems">
                                ارسال رایگان
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- End of SlideBar -->
            </div>
            <!-- Star of ProductSearch -->
            <div class="ProductSearch">
                <div class="TopController">
                    <div class="ControllerTitle">
                        <span></span>
                        <p>مرتب‌سازی براساس:</p>
                    </div>
                    <ul>
                        <li><a href="#">مرتبط‌ترین</a></li>
                        <li><a href="#">ارزان‌ترین</a></li>
                        <li><a href="#">گران‌ترین</a></li>
                        <li><a href="#">پرفروش‌ترین</a></li>
                        <li><a href="#">تازه‌ترین</a></li>
                    </ul>
                </div>
                <div class="SpecialOfferItemsList">
                    <div class="SpecailaOfferItems">
                        <a href="Product">
                            <div class="SOIProduct">
                                <img src="./Asset/Images/Products/Product1.jpeg" alt="Product1">
                                <div class="SOIProductContent">
                                    <h5>پک دمنوش</h5>
                                    <p>بنارویه: قنادی و خشکبار</p>
                                    <div class="Review">
                                        <span class="Star">
                                            <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                            <span>۴.۷</span>
                                        </span>
                                        <span class="OffPercent">۱۳٪</span>
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۱۲۰.۰۰۰</span>
                                        <span class="Price">۱۴۹.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="SpecailaOfferItems">
                        <a href="Product">
                            <div class="SOIProduct">
                                <img src="./Asset/Images/Products/Product2.jpeg" alt="Product1">
                                <div class="SOIProductContent">
                                    <h5>جهبه هدیه</h5>
                                    <p>تهران‌پارس: نگه‌دارنده</p>
                                    <div class="Review">
                                        <span class="Star">
                                            <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                            <span>۳.۲</span>
                                        </span>
                                        <span class="OffPercent">۳۰٪</span>
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۲۴۰.۰۰۰</span>
                                        <span class="Price">۲۹۰.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="SpecailaOfferItems">
                        <a href="Product">
                            <div class="SOIProduct">
                                <img src="./Asset/Images/Products/Product3.jpeg" alt="Product1">
                                <div class="SOIProductContent">
                                    <h5>بادام محلی</h5>
                                    <p>بنارویه: قنادی و خشکبار</p>
                                    <div class="Review">
                                        <span class="Star">
                                            <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                            <span>۴.۷</span>
                                        </span>
                                        <span class="OffPercent">۸٪</span>
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۸۰.۰۰۰</span>
                                        <span class="Price">۱۲۰.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="SpecailaOfferItems">
                        <a href="Product">
                            <div class="SOIProduct">
                                <img src="./Asset/Images/Products/Product4.jpeg" alt="Product1">
                                <div class="SOIProductContent">
                                    <h5>آبمیوه ساز</h5>
                                    <p>کنوود: لوازم خانگی</p>
                                    <div class="Review">
                                        <span class="Star">
                                            <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                            <span>۲.۷</span>
                                        </span>
                                        <span class="OffPercent">۲۳٪</span>
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۸۵۰.۰۰۰</span>
                                        <span class="Price">۹۸۵.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="SpecailaOfferItems">
                        <a href="Product">
                            <div class="SOIProduct">
                                <img src="./Asset/Images/Products/Product1.jpeg" alt="Product1">
                                <div class="SOIProductContent">
                                    <h5>پک دمنوش</h5>
                                    <p>بنارویه: قنادی و خشکبار</p>
                                    <div class="Review">
                                        <span class="Star">
                                            <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                            <span>۴.۷</span>
                                        </span>
                                        <span class="OffPercent">۱۳٪</span>
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۱۲۰.۰۰۰</span>
                                        <span class="Price">۱۴۹.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="SpecailaOfferItems">
                        <a href="Product">
                            <div class="SOIProduct">
                                <img src="./Asset/Images/Products/Product2.jpeg" alt="Product1">
                                <div class="SOIProductContent">
                                    <h5>جهبه هدیه</h5>
                                    <p>تهران‌پارس: نگه‌دارنده</p>
                                    <div class="Review">
                                        <span class="Star">
                                            <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                            <span>۳.۲</span>
                                        </span>
                                        <span class="OffPercent">۳۰٪</span>
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۲۴۰.۰۰۰</span>
                                        <span class="Price">۲۹۰.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="SpecailaOfferItems">
                        <a href="Product">
                            <div class="SOIProduct">
                                <img src="./Asset/Images/Products/Product3.jpeg" alt="Product1">
                                <div class="SOIProductContent">
                                    <h5>بادام محلی</h5>
                                    <p>بنارویه: قنادی و خشکبار</p>
                                    <div class="Review">
                                        <span class="Star">
                                            <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                            <span>۴.۷</span>
                                        </span>
                                        <span class="OffPercent">۸٪</span>
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۸۰.۰۰۰</span>
                                        <span class="Price">۱۲۰.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="SpecailaOfferItems">
                        <a href="Product">
                            <div class="SOIProduct">
                                <img src="./Asset/Images/Products/Product4.jpeg" alt="Product1">
                                <div class="SOIProductContent">
                                    <h5>آبمیوه ساز</h5>
                                    <p>کنوود: لوازم خانگی</p>
                                    <div class="Review">
                                        <span class="Star">
                                            <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                            <span>۲.۷</span>
                                        </span>
                                        <span class="OffPercent">۲۳٪</span>
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۸۵۰.۰۰۰</span>
                                        <span class="Price">۹۸۵.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End of ProductSearch -->
        </div>
    </div>
    <!-- End of Container -->
    <!-- Star of MainFooter -->
    <?php require_once "./View/Modules/Footer.php"; ?>
    <!-- End of MainFooter -->
</body>
<script src="./View/Script/Libraries/JQuery.js"></script>
<script src="./View/Modules/Script/HeaderFooter.js"></script>
<script src="./View/Script/Search.js"></script>
</html>