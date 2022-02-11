<div class="ProductList">
    <div class="FirstRow">
        <h4>محصولات پرفروش</h4>
        <a href="<?=PATH_URL."search/";?>">مشاهده بیشتر</a>
        <div class="SpecialOfferItemsListNormalList">
            <?php foreach ($parameters["Products"] as $counter=>$product) : ?>

            <div class="SpecailaOfferItems">
                <a href="<?=PATH_URL."product/".$parameters["Products"][$counter]["id"];?>">
                    <div class="SOIProduct">
                        <img src="<?=PATH_URL_ASSET.$parameters["Products"][$counter]["cover_image"];?>" alt="<?=$parameters["Products"][$counter]["name"];?>">
                        <div class="SOIProductContent">
                            <h5><?=$parameters["Products"][$counter]["name"];?></h5>
                            <p><?=$parameters["Products"][$counter]["brand"];?></p>
                            <div class="Review">
                                <span class="Star">
                                    <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                    <span><?=Functions::convertEngToFaNumber($parameters["Products"][$counter]["star"]);?></span>
                                </span>
                            </div>
                            <div class="AddCart">
                                <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                <span class="PriceType">تومان</span>
                                <span class="OffPrice"><?=Functions::seperateDigitsBySpatialValue($parameters["Products"][$counter]["price"]);?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
    <div class="FirstRow">
        <h4>محصولات تازه</h4>
        <a href="<?=PATH_URL."search/";?>">مشاهده بیشتر</a>
        <div class="SpecialOfferItemsListNormalList">
            <?php foreach ($parameters["Products"] as $counter=>$product) : ?>

            <div class="SpecailaOfferItems">
                <a href="<?=PATH_URL."product/".$parameters["Products"][$counter]["id"];?>">
                    <div class="SOIProduct">
                        <img src="<?=PATH_URL_ASSET.$parameters["Products"][$counter]["cover_image"];?>" alt="<?=$parameters["Products"][$counter]["name"];?>">
                        <div class="SOIProductContent">
                            <h5><?=$parameters["Products"][$counter]["name"];?></h5>
                            <p><?=$parameters["Products"][$counter]["brand"];?></p>
                            <div class="Review">
                                <span class="Star">
                                    <img src="./Asset/Icons/ProductIcons/StarIcon.png" alt="StarIcon">
                                    <span><?=Functions::convertEngToFaNumber($parameters["Products"][$counter]["star"]);?></span>
                                </span>
                            </div>
                            <div class="AddCart">
                                <img src="./Asset/Icons/ProductIcons/AddIcon.png" alt="AddIcon">
                                <span class="PriceType">تومان</span>
                                <span class="OffPrice"><?=Functions::seperateDigitsBySpatialValue($parameters["Products"][$counter]["price"]);?></span>
                                <!-- <span class="Price">۱۴۹.۰۰۰</span> -->
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>