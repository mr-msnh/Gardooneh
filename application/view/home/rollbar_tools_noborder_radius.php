<div class="RollBarTools NoBorderRadius">
    <ul>
        <?php foreach($parameters["RollbarTools"]["group2"] as $counter=>$rollBar) : ?>

        <li>
            <a href="<?=PATH_URL_ASSET.$parameters["RollbarTools"]["group2"][$counter]["url"];?>">
                <img src="<?=PATH_URL_ASSET.$parameters["RollbarTools"]["group2"][$counter]["image"];?>" alt="<?=$parameters["RollbarTools"]["group2"][$counter]["alt"];?>">
                <?=$parameters["RollbarTools"]["group2"][$counter]["title"];?>
            </a>
        </li>

        <?php endforeach; ?>
    </ul>
</div>