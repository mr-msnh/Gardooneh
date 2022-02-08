<div class="MainSlide">
    <div class="SliderImage">
        <?php foreach($parameters["MainSlider"] as $counter=>$slide) : ?>

        <img src="<?=PATH_URL_ASSET.$parameters["MainSlider"][$counter]["image"];?>" alt="<?=$parameters["MainSlider"][$counter]["alt"];?>">

        <?php endforeach; ?>
    </div>
    <div class="SliderController">
        <?php foreach($parameters["MainSlider"] as $counter=>$slide) : ?>
        
        <span></span>

        <?php endforeach; ?>
    </div>
</div>