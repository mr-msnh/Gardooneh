<div class="MainSlide">
    <div class="SliderImage">
        <?php foreach($parameters["MainSlider"] as $counter=>$slide) : ?>

        <a href="<?=PATH_URL.$parameters["MainSlider"][$counter]["url"];?>">
            <img src="<?=PATH_URL_ASSET.$parameters["MainSlider"][$counter]["image"];?>" alt="<?=$parameters["MainSlider"][$counter]["alt"];?>">
        </a>

        <?php endforeach; ?>
    </div>
    <div class="SliderController">
        <?php foreach($parameters["MainSlider"] as $counter=>$slide) : ?>
        
        <span></span>

        <?php endforeach; ?>
    </div>
</div>