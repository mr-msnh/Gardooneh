<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/Style/Libraries/FontAwesome/all.css">
    <link rel="stylesheet" href="./View/Modules/Style/HeaderFooter.css">
    <link rel="stylesheet" href="./View/Style/Product.css">
    <link rel="shortcut icon" type="image/png" href="./Asset/Images/Logo/favicon.png" />
    <title>صفحه محصول</title>
</head>
<body>
    <!-- Star of MainHeader -->
    <?php require_once "./View/Modules/Header.php"; ?>
    <!-- End of MainHeader -->
    <!-- Star of Container -->
    <div class="Container">
        <div class="MainFrame">
            <div class="Product-Category-Navigator">
                <ul>
                    <li><a href="#">خانه</a><i class="far fa-chevron-left fa-sm"></i></li>
                    <li><a href="#">صنایع دستی</a><i class="far fa-chevron-left fa-sm"></i></li>
                    <li><a href="#">گل و گلدان</a><i class="far fa-chevron-left fa-sm"></i></li>
                </ul>
            </div>
            <div class="Main-Product">
                <div class="Product-Gallery">
                    <div class="Main-Image"><img src="./Asset/Images/Products/Product1.jpeg" alt="Slide1" /></div>
                    <div class="Other-Image">
                        <ul>
                            <li><img src="./Asset/Images/Products/Product2.jpeg" alt="Slide1"></li>
                            <li><img src="./Asset/Images/Products/Product3.jpeg" alt="Slide2"></li>
                            <li><img src="./Asset/Images/Products/Product4.jpeg" alt="Slide3"></li>
                            <li><i class="far fa-ellipsis-h"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="Product-Intro">
                    <h2>دمنوش گیاهی</h2>
                    <div class="Quick-Review">
                        <div class="Review-Item">
                            <i class="far fa-receipt"></i>
                            <span>۳۰+ فروش</span>
                        </div>
                        <div class="Review-Item">
                            <i class="far fa-box-open"></i>
                            <span>آماده ارسال</span>
                        </div>
                        <div class="Review-Item">
                            <i class="far fa-map-marker-alt"></i>
                            <span>از تهران</span>
                        </div>
                    </div>
                    <div class="Quick-Note">
                        <i class="fal fa-truck"></i>
                        <span>ارسال رایگان</span>
                        <p>به ســراســر ایرانـــــ</p>
                    </div>
                    <form action="Card" method="POST" class="AddCart">
                        <span class="Off-Price">۷۵۰.۰۰۰</span>
                        <span class="Main-Price">۵۴۰.۰۰۰ تومان</span>
                        <input type="submit" value="خرید">
                    </form>
                    <div class="Quick-Message">
                        <a href="#"><i class="far fa-comments fa-lg"></i>برای خرید این محصول به <strong>صورت عمده</strong> با غرفه‌دار صحبت کنید</a>
                    </div>
                    <div class="Product-Warranty">
                        <div class="Warranty-Item">
                            <i class="fal fa-calendar-alt fa-2x"></i>
                            <span>۷ روز ضمانت بازگشت وجه</span>
                        </div>
                        <div class="Warranty-Item">
                            <i class="fal fa-hands-heart fa-2x"></i>
                            <span>محصول باکیفیت و خانگی</span>
                        </div>
                        <div class="Warranty-Item">
                            <i class="fal fa-user-headset fa-2x"></i>
                            <span>ارتباط مستقیم با قرفه‌دار</span>
                        </div>
                    </div>
                </div>
                <div class="Store-Intro">
                    <h5>نگاه کلی محصول</h5>
                    <ul>
                        <li><i class="far fa-store fa-lg"></i>محصولات عطاری</li>
                        <li><i class="far fa-shield-check fa-lg"></i>ضمانت اصالت محصول</li>
                        <li><i class="far fa-inventory fa-lg"></i>موجود در انبار گردونه</li>
                        <li><i class="far fa-tags fa-lg"></i>بهترین قیمت ۳۰ روز گذشته</li>
                    </ul>
                    <span><i class="far fa-eye"></i>۱۰ نفر در حال بازدید این کالا می‌باشند</span>
                    <p>فروشنده برگزیده<i class="far fa-star"></i></p>
                </div>
            </div>
            <div class="Product-Information">
                <div class="Vendor-Info">
                    <div class="Vendor-Profile">
                        <div class="Profile-Image"><img src="./Asset/Images/Profiles/MainProfile.png" alt="Profile"></div>
                        <div class="Profile-Text">
                            <h6>فروشگاه عطار</h6>
                            <p>۲ سال در گردونه | ۳۱ محصول</p>
                        </div>
                    </div>
                    <div class="Vendor-Description">اولین ارائه دهنده محصولات عطاری و عرقیجات گیاهی خانگی با کیفیت فوق‌العاده. اولین ارائه دهنده محصولات عطاری و عرقیجات گیاهی خانگی با کیفیت فوق‌العاده.اولین ارائه دهنده محصولات عطاری و عرقیجات گیاهی خانگی با کیفیت فوق‌العاده.</div>
                    <div class="Vendor-Review">
                        <div class="Star-Box">
                            <i class="fas fa-star fa-lg"></i>
                            <i class="fas fa-star fa-lg"></i>
                            <i class="fas fa-star fa-lg"></i>
                            <i class="far fa-star fa-lg"></i>
                            <i class="far fa-star fa-lg"></i>
                        </div>
                    </div>
                    <div class="Vendor-Chat">
                        <div class="Last-Activity">
                            <p>آخرین فعالیت</p>
                            <span>۱۶ ساعت پیش</span>
                        </div>
                        <div class="Chat-Button">
                            <button>
                                <i class="fas fa-comments-alt fa-lg"></i>
                                <span>گفت‌وگو</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="Product-Info">
                    <div class="Info-Section">
                        <h4><i class="far fa-angle-double-left"></i>ویژگی‌های محصول</h4>
                        <table>
                            <tr>
                                <td>وزن خالص:</td>
                                <td>۲۰۰ گرم</td>
                            </tr>
                            <tr>
                                <td>رنگ:</td>
                                <td>پارچه ترمه</td>
                            </tr>
                            <tr>
                                <td>ابعاد:</td>
                                <td>۲ متر و عرض ۷۰ سانتی‌متر</td>
                            </tr>
                            <tr>
                                <td>:تعداد تکه‌ها</td>
                                <td>۷ تکه</td>
                            </tr>
                            <tr>
                                <td>قابلیت شستشو:</td>
                                <td>بله</td>
                            </tr>
                            <tr>
                                <td>تراکم بافت:</td>
                                <td>۱۵۰</td>
                            </tr>
                            <tr>
                                <td>مناسب برای:</td>
                                <td>منزل و باغ رستوران، تخت و ...</td>
                            </tr>
                            <tr>
                                <td>سایر توضیحات:</td>
                                <td>دارای رنگ‌بندی و ارسال ویژه به تهران</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="Semiular-Product">
                <div class="FirstRow">
                    <h4>محصولات مشابه</h4>
                    <a href="#">مشاهده بیشتر</a>
                    <div class="SpecialOfferItemsListNormalList">
                        <div class="SpecailaOfferItems">
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
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۱۲۰.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SpecailaOfferItems">
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
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۲۴۰.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SpecailaOfferItems">
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
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۸۰.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SpecailaOfferItems">
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
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۸۵۰.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="SpecailaOfferItems">
                            <div class="SOIProduct">
                                <img src="./Asset/Images/Products/Product6.jpeg" alt="Product1">
                                <div class="SOIProductContent">
                                    <h5>ترشی مخصوص</h5>
                                    <p>ترشیجات: مواد غذایی</p>
                                    <div class="Review">
                                        <span class="Star">
                                            <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                            <span>۳.۴</span>
                                        </span>
                                    </div>
                                    <div class="AddCart">
                                        <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                        <span class="PriceType">تومان</span>
                                        <span class="OffPrice">۴۳.۰۰۰</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Product-Review">
                <p>نظر مشتریان <span>(۵ نظر)</span></p>
                <div class="Review-Section">
                    <div class="Review-Item">
                        <div class="Review-Profile"><img src="./Asset/Images/Profiles/MainProfile.png" alt="Profile"></div>
                        <div class="Review-Content">
                            <div class="Review-Info">
                                <div class="Name">بهاره جعفری</div>
                                <div class="Date"> ۱۲ آذر ۱۴۰۰</div>
                            </div>
                            <div class="Review-Text">محصول بسیار خوب و مطعنی بود. من که از خریدم بسیار راضی هستم.</div>
                            <div class="Review-Cons">
                                <span>کیفیت بالا</span>
                                <span>بسته‌بندی مناسب</span>
                                <span>پشتیبانی عالی</span>
                            </div>
                            <div class="Review-Answer">
                                <i class="far fa-share-all fa-lg"></i>
                                خواهش می‌کنم نظر لطفتون می‌باشد.
                                
                            </div>
                        </div>
                    </div>
                    <div class="Review-Item">
                        <div class="Review-Profile"><img src="./Asset/Images/Profiles/MainProfile.png" alt="Profile"></div>
                        <div class="Review-Content">
                            <div class="Review-Info">
                                <div class="Name">بهاره جعفری</div>
                                <div class="Date"> ۱۲ آذر ۱۴۰۰</div>
                            </div>
                            <div class="Review-Text">محصول بسیار خوب و مطعنی بود. من که از خریدم بسیار راضی هستم.</div>
                            <div class="Review-Cons">
                                <span>کیفیت بالا</span>
                                <span>بسته‌بندی مناسب</span>
                                <span>پشتیبانی عالی</span>
                            </div>
                        </div>
                    </div>
                    <div class="Review-Item">
                        <div class="Review-Profile"><img src="./Asset/Images/Profiles/MainProfile.png" alt="Profile"></div>
                        <div class="Review-Content">
                            <div class="Review-Info">
                                <div class="Name">بهاره جعفری</div>
                                <div class="Date"> ۱۲ آذر ۱۴۰۰</div>
                            </div>
                            <div class="Review-Text">محصول بسیار خوب و مطعنی بود. من که از خریدم بسیار راضی هستم.</div>
                            <div class="Review-Cons">
                                <span>کیفیت بالا</span>
                                <span>بسته‌بندی مناسب</span>
                                <span>پشتیبانی عالی</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Write-Review">
                    <form action="" method="POST">
                        <h3>نظر خود را وارد کنید:</h3>
                        <input type="text" placeholder="ایمیل" name="txtEmail" id="txtEmail">
                        <textarea name="" id="" cols="30" rows="10" placeholder="نظر خود را وارد کنید ..."></textarea>
                        <input type="submit" value="ثبت نظر" name="btnSignin">
                    </form>
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
<script src="./View/Script/Product.js"></script>
</html>