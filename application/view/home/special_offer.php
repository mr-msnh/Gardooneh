<div class="SpecialOffer">
    <div class="MainFrame">
        <div class="SpecialOfferTitle">
            <div class="SOTHeader">
                <p>تخفیف هیجان‌انگیز</p>
                <p>+</p>
                <p>ارسال رایگان</p>
            </div>
            <div class="SOTTimer">
                <div id="SOTSecond">۴۸</div>
                <p>:</p>
                <div id="SOTMinute">۳۴</div>
                <p>:</p>
                <div id="SOTHour">۱۲</div>
            </div>
            <div class="SOTButtom">
                <input type="button" value="مشاهده همه">
                <img src="./Asset/Icons/MenuItemsIcons/LeftArrow.png" alt="arrow">
            </div>
        </div>
        <div class="SpecialOfferContainer">
            <div class="SpecialOfferItemsList">
                <?php foreach ($parameters["OfferProducts"] as $counter=>$offerProduct) : ?>

                <div class="SpecailaOfferItems">
                    <a href="<?=PATH_URL."product/".$parameters["OfferProducts"][$counter]["id"];?>">
                        <div class="SOIProduct">
                            <img src="<?=PATH_URL_ASSET.$parameters["OfferProducts"][$counter]["cover_image"];?>" alt="<?=$parameters["OfferProducts"][$counter]["name"];?>">
                            <div class="SOIProductContent">
                                <h5><?=$parameters["OfferProducts"][$counter]["name"];?></h5>
                                <p><?=$parameters["OfferProducts"][$counter]["brand"];?></p>
                                <div class="Review">
                                    <span class="Star">
                                        <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                        <span><?=Functions::convertEngToFaNumber($parameters["OfferProducts"][$counter]["star"]);?></span>
                                    </span>
                                    <span class="OffPercent"><?=Functions::seperateDigitsBySpatialValue($parameters["OfferProducts"][$counter]["percent_off"])."٪";?></span>
                                </div>
                                <div class="AddCart">
                                    <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                    <span class="PriceType">تومان</span>
                                    <span class="OffPrice"><?=Functions::seperateDigitsBySpatialValue($parameters["OfferProducts"][$counter]["price_off"]);?></span>
                                    <span class="Price"><?=Functions::seperateDigitsBySpatialValue($parameters["OfferProducts"][$counter]["price"]);?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php endforeach; ?>
            </div>
            <span class="SpecialOfferItemsNext"></span>
            <span class="SpecialOfferItemsPrevious"></span>
        </div>
    </div>
</div>