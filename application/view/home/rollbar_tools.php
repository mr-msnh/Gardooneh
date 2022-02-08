<div class="RollBarTools">
    <ul>
        <?php foreach($parameters["RollbarTools"]["group1"] as $counter=>$rollBar) : ?>

        <li>
            <a href="<?=PATH_URL_ASSET.$parameters["RollbarTools"]["group1"][$counter]["url"];?>">
                <img src="<?=PATH_URL_ASSET.$parameters["RollbarTools"]["group1"][$counter]["image"];?>" alt="<?=$parameters["RollbarTools"]["group1"][$counter]["alt"];?>">
                <?=$parameters["RollbarTools"]["group1"][$counter]["title"];?>
            </a>
        </li>

        <?php endforeach; ?>
    </ul>
</div>