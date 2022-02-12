<div class="ItemsListSingle">
    <div class="FirstRow">
        <h4>محصولات پربازدید</h4>
        <a href="<?=PATH_URL."search/";?>">مشاهده بیشتر
        </a>
        <div class="SpecialOfferItemsListNormalList">
            <?php foreach ($parameters["MostViewdProducts"] as $counter=>$product) : ?>

            <div class="SpecailaOfferItems">
                <a href="<?=PATH_URL."product/".$parameters["MostViewdProducts"][$counter]["id"];?>">
                    <div class="SOIProduct">
                        <img src="<?=PATH_URL_ASSET.$parameters["MostViewdProducts"][$counter]["cover_image"];?>" alt="<?=$parameters["MostViewdProducts"][$counter]["name"];?>">
                        <div class="SOIProductContent">
                            <h5><?=$parameters["MostViewdProducts"][$counter]["name"];?></h5>
                            <p><?=$parameters["MostViewdProducts"][$counter]["brand"];?></p>
                            <div class="Review">
                                <span class="Star">
                                    <i class="fas fa-star"></i>
                                    <span><?=Functions::convertEngToFaNumber($parameters["MostViewdProducts"][$counter]["star"]);?></span>
                                </span>
                            </div>
                            <div class="AddCart">
                                <i class="fas fa-plus-circle fa-lg"></i>
                                <span class="PriceType">تومان</span>
                                <span class="OffPrice"><?=Functions::seperateDigitsBySpatialValue($parameters["MostViewdProducts"][$counter]["price"]);?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>