<div class="Main-Product">
    <div class="Product-Gallery">
        <div class="Main-Image"><img src="<?=PATH_URL_ASSET.$parameters["Product"][0]["cover_image"];?>" alt="<?=$parameters["Product"][0]["name"];?>" /></div>
        <div class="Other-Image">
            <ul>
                <li><img src="<?=PATH_URL_ASSET;?>images/products/product2.jpeg" alt="Slide1"></li>
                <li><img src="<?=PATH_URL_ASSET;?>images/products/product3.jpeg" alt="Slide2"></li>
                <li><img src="<?=PATH_URL_ASSET;?>images/products/product4.jpeg" alt="Slide3"></li>
                <li><i class="far fa-ellipsis-h"></i></li>
            </ul>
        </div>
    </div>
    <div class="Product-Intro">
        <h2><?=$parameters["Product"][0]["name"];?></h2>
        <div class="Quick-Review">
            <div class="Review-Item">
                <i class="far fa-receipt"></i>
                <span><?=Functions::convertEngToFaNumber($parameters["Product"][0]["total_sale"]);?>+ فروش</span>
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
            <?php if (isset($parameters["Product"][0]["price_off"]) && !empty($parameters["Product"][0]["price_off"])) { ?>

            <span class="Off-Price"><?=Functions::seperateDigitsBySpatialValue($parameters["Product"][0]["price"]);?> تومان</span>
            <span class="Main-Price"><?=Functions::seperateDigitsBySpatialValue($parameters["Product"][0]["price_off"]);?> تومان</span>
            
            <?php } else {?>

            <span class="Off-Price"></span>
            <span class="Main-Price"><?=Functions::seperateDigitsBySpatialValue($parameters["Product"][0]["price"]);?> تومان</span>

            <?php } ?>

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
            <li><i class="far fa-store fa-lg"></i><?=$parameters["Product"][0]["brand"];?></li>
            <li><i class="far fa-shield-check fa-lg"></i>ضمانت اصالت محصول</li>
            <li><i class="far fa-inventory fa-lg"></i>موجود در انبار گردونه</li>
            <li><i class="far fa-tags fa-lg"></i>بهترین قیمت ۳۰ روز گذشته</li>
        </ul>
        <span><i class="far fa-eye"></i>۱۰ نفر در حال بازدید این کالا می‌باشند</span>
        <p>فروشنده برگزیده<i class="far fa-star"></i></p>
    </div>
</div>