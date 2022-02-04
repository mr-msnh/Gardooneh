<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/Style/Libraries/FontAwesome/all.css">
    <link rel="stylesheet" href="./View/Modules/Style/HeaderFooter.css">
    <link rel="stylesheet" href="./View/Style/Card.css">
    <link rel="shortcut icon" type="image/png" href="./Asset/Images/Logo/favicon.png" />
    <title>ثبت سفارش</title>
</head>
<body>
    <!-- Star of MainHeader -->
    <?php require_once "./View/Modules/Header.php"; ?>
    <!-- End of MainHeader -->
    <!-- Star of Container -->
    <div class="Container">
        <div class="MainFrame Extend">
            <!-- S Nav-Map -->
            <div class="Nav-Map">
                <div class="Map-Item">
                    <div class="Map-Section Map-Section-Active">
                        <p>سبد خرید</p>
                        <span></span>
                    </div>
                    <div class="Map-Section">
                        <p>اطلاعات ارسال</p>
                        <span></span>
                    </div>
                    <div class="Map-Section">
                        <p>ثبت و پرداخت</p>
                        <span></span>
                    </div>
                    <div class="Map-Section">
                        <p>نتیجه سفارش</p>
                        <span></span>
                    </div>
                </div>
                <div class="Map-Line">
                    <span>
                        <span class="Fill-Color"></span>
                    </span>
                </div>
            </div>
            <!-- E Nav-Map -->
            <!-- S Main-Section -->
            <div class="Main-Section">
                <!-- S Section-Card -->
                <div class="Section-Card" style="display: block">
                    <div class="Section-Title">
                        <p>سبد خرید</p>
                    </div>
                    <div class="Section-Content">
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
                <!-- E Section-Card -->
                <!-- S Section-Information -->
                <div class="Section-Information">
                    <div class="Section-Title">
                        <p>ثبت مشخصات و آدرس تحویل</p>
                    </div>
                    <div class="Section-Content">
                        <p>آدرس خود را وارد کنید.</p>
                        <div class="Content-Box">
                            <span>نام و نام‌خانوادگی گیرنده سفارش:</span>
                            <input type="text" name="txtReciverName">
                        </div>
                        <div class="Content-Box Small-Box">
                            <span>انتخاب استان:</span>
                            <input type="text" name="txtReciverName">
                        </div>
                        <div class="Content-Box Small-Box">
                            <span>انتخاب شهر</span>
                            <input type="text" name="txtReciverName">
                        </div>
                        <div class="Content-Box">
                            <span>نشانی دقیق پستی:</span>
                            <input type="text" name="txtReciverName">
                        </div>
                        <div class="Content-Box Small-Box">
                            <span>کد پستی:</span>
                            <input type="text" name="txtReciverName">
                        </div>
                        <div class="Content-Box Small-Box">
                            <span>تلفن همراه گیرنده:</span>
                            <input type="text" name="txtReciverName">
                        </div>
                        <input type="button" value="تایید آدرس تحویل">
                    </div>
                </div>
                <!-- E Section Information -->
                <!-- S Section-Payment -->
                <div class="Section-Payment">
                    <div class="Section-Title">
                        <p>ثبت و پرداخت</p>
                    </div>
                    <div class="Section-Content">
                        <p>لطفا شیوه پرداخت را انتخاب کنید.</p>
                        <div class="Payment-Options">
                            <div class="Option-Pay">
                                <div class="Option-Select">
                                    <input type="radio" name="rbPayOption">
                                    <i class="far fa-credit-card fa-2x fa-fw"></i>
                                </div>
                                <div class="Option-Title">
                                    <p>پرداخت اینترنتی</p>
                                    <span>آنلاین با تمامی کارت‌های بانکی</span>
                                </div>
                            </div>
                            <div class="Option-Pay">
                                <div class="Option-Select">
                                    <input type="radio" name="rbPayOption">
                                    <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
                                </div>
                                <div class="Option-Title">
                                    <p>پرداخت در محل با کارت بانکی</p>
                                    <span>پرداخت پس از دریافت سفارش با تمامی کارتهای بانکی</span>
                                </div>
                            </div>
                            <div class="Option-Pay">
                                <div class="Option-Select">
                                    <input type="radio" name="rbPayOption">
                                    <i class="fas fa-wallet fa-2x fa-fw"></i>
                                </div>
                                <div class="Option-Title">
                                    <p>استفاده از اعتبار کیف پول</p>
                                    <span>موجودی: ۲۰۰,۰۰۰ تومان</span>
                                </div>
                            </div>
                        </div>
                        <div class="Payment-Note">
                            <i class="fas fa-info-circle fa-lg"></i>
                            <p>برای کاستن از احتمال انتقال ویروس کرونا پیشنهاد می‌کنیم از شیوه پرداخت اینترنتی استفاده کنید. در صورت انتخاب روش پرداخت در محل تنها امکان پرداخت با دستگاه کارتخوان مقدور است.</p>
                        </div>
                        <div class="Payment-Action">
                            <input type="button" value="ثبت و پرداخت">
                        </div>
                    </div>
                </div>
                <!-- E Section-Payment -->
                <!-- S Section-Result -->
                <div class="Section-Result">
                    <div class="Section-Title">
                        <p>نتیجه سفارش</p>
                    </div>
                    <div class="Section-Content">
                        <p>سفارش شما ثبت گردید.</p>
                         <div class="Result-Detail">
                             <div class="Detail-Box">
                                 <span class="Field">شماره سفارش:</span>
                                 <span class="Value">DKC-242175455</span>
                             </div>
                             <p>سفارش شما در حال پردازش می‌باشد.</p>
                             <i class="far fa-clipboard-check fa-3x"></i>
                         </div>
                         <div class="Result-Reference">
                             <p>جزییات پرداخت</p>
                             <table>
                                 <tr>
                                     <th>ردیف</th>
                                     <th>درگاه پرداخت</th>
                                     <th>شماره پیگری</th>
                                     <th>زمان</th>
                                     <th>تاریخ</th>
                                     <th>وضعیت</th>
                                 </tr>
                                 <tr>
                                     <td>۱</td>
                                     <td>بانک ملت</td>
                                     <td>۱۷۴۹۰۹۴۰۶</td>
                                     <td>۰۷:۰۷:۴۷</td>
                                     <td>۱۳ دی ۱۴۰۰</td>
                                     <td>انجام شده</td>
                                 </tr>
                             </table>
                         </div>
                    </div>
                </div>
                <!-- E Section-Result -->
            </div>
            <!-- E of Main-Section -->
            <!-- S of Side-Pannel -->
            <div class="Side-Pannel">
                <div class="Pannel-Title">
                    <p>صورتحساب</p>
                </div>
                <div class="Pannel-Content">
                    <div class="Main-Price">
                        <div class="Content-Price">
                            <span class="Field">قیمت محصولات:</span>
                            <span class="Value">۱۰۰,۰۰۰ تومان</span>
                        </div>
                        <div class="Content-Off">
                            <span class="Field">تخفیف محصولات:</span>
                            <span class="Value">۵,۰۰۰ تومان</span>
                        </div>
                    </div>
                    <div class="Shipment-Price">
                        <div class="Content-Price">
                            <span class="Field">هزینه ارسال:</span>
                            <span class="Value">۱۵,۰۰۰ تومان</span>
                        </div>
                    </div>
                    <div class="Final-Price">
                        <div class="Content-Price">
                            <span class="Field">مبلغ قابل پرداخت</span>
                            <span class="Value">۱۱۰,۰۰۰ تومان</span>
                        </div>
                    </div>
                    <div class="Note">
                        <i class="far fa-check-circle fa-lg"></i>
                        <span>تضمین رضایت: بازگشت کالا و پول شما تا ۷ روز</span>
                    </div>
                </div>
            </div>
            <!-- E of Side-Pannel -->
        </div>
    </div>
    <!-- End of Container -->
    <!-- Star of MainFooter -->
    <?php require_once "./View/Modules/Footer.php"; ?>
    <!-- End of MainFooter -->
</body>
<script src="./View/Script/Libraries/JQuery.js"></script>
<script src="./View/Modules/Script/HeaderFooter.js"></script>
<script src="./View/Script/Card.js"></script>
</html>