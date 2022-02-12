<div class="ProductList">
    <div class="FirstRow">
        <h4>محصولات پرفروش</h4>
        <a href="<?=PATH_URL."search/";?>">مشاهده بیشتر</a>
        <div class="SpecialOfferItemsListNormalList">
            <?php foreach ($parameters["MostSalesProducts"] as $counter=>$product) : ?>

            <div class="SpecailaOfferItems">
                <a href="<?=PATH_URL."product/".$parameters["MostSalesProducts"][$counter]["id"];?>">
                    <div class="SOIProduct">
                        <img src="<?=PATH_URL_ASSET.$parameters["MostSalesProducts"][$counter]["cover_image"];?>" alt="<?=$parameters["MostSalesProducts"][$counter]["name"];?>">
                        <div class="SOIProductContent">
                            <h5><?=$parameters["MostSalesProducts"][$counter]["name"];?></h5>
                            <p><?=$parameters["MostSalesProducts"][$counter]["brand"];?></p>
                            <div class="Review">
                                <span class="Star">
                                    <i class="fas fa-star"></i>
                                    <span><?=Functions::convertEngToFaNumber($parameters["MostSalesProducts"][$counter]["star"]);?></span>
                                </span>
                            </div>
                            <div class="AddCart">
                                <i class="fas fa-plus-circle fa-lg"></i>
                                <span class="PriceType">تومان</span>
                                <span class="OffPrice"><?=Functions::seperateDigitsBySpatialValue($parameters["MostSalesProducts"][$counter]["price"]);?></span>
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
            <?php foreach ($parameters["NewestProducts"] as $counter=>$product) : ?>

            <div class="SpecailaOfferItems">
                <a href="<?=PATH_URL."product/".$parameters["NewestProducts"][$counter]["id"];?>">
                    <div class="SOIProduct">
                        <img src="<?=PATH_URL_ASSET.$parameters["NewestProducts"][$counter]["cover_image"];?>" alt="<?=$parameters["NewestProducts"][$counter]["name"];?>">
                        <div class="SOIProductContent">
                            <h5><?=$parameters["NewestProducts"][$counter]["name"];?></h5>
                            <p><?=$parameters["NewestProducts"][$counter]["brand"];?></p>
                            <div class="Review">
                                <span class="Star">
                                    <i class="fas fa-star"></i>
                                    <span><?=Functions::convertEngToFaNumber($parameters["NewestProducts"][$counter]["star"]);?></span>
                                </span>
                            </div>
                            <div class="AddCart">
                                <i class="fas fa-plus-circle fa-lg"></i>
                                <span class="PriceType">تومان</span>
                                <span class="OffPrice"><?=Functions::seperateDigitsBySpatialValue($parameters["NewestProducts"][$counter]["price"]);?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>