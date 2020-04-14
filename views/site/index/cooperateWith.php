<?

use app\components\mgcms\MgHelpers;

if (MgHelpers::getSetting('home - wspolpracujemy obrazki') == '') {
    return false;
}

?>

<section class="Section Partners animatedParent">
    <div class="container fadeIn animated">
        <h4>
            <?= Yii::t('db', 'We cooperate with'); ?>
        </h4>
        <div class="Partners__carousel owl-carousel">
            <? foreach (MgHelpers::getSettingsArray('home - wspolpracujemy obrazki',false) as $fileUrl): ?>
                <div class="item Partners__item">
                    <a class="Partners__item__link" href="#">
                        <img src="<?=$fileUrl?>"/>
                    </a>
                </div>
            <? endforeach; ?>

        </div>
    </div>
</section>
