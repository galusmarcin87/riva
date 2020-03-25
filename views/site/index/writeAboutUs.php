<?

use app\components\mgcms\MgHelpers;

if(MgHelpers::getSetting('home - piszą o nas obrazki') == ''){
    return false;
}

?>

<section class="Section text-center animatedParent">
    <div class="container fadeIn animated">
        <h2>
            <?= MgHelpers::getSettingTranslated('home - piszą o nas nagłówek', 'They write about us') ?>
        </h2>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <p>
                    <?= MgHelpers::getSettingTranslated('home - piszą o nas tekst', 'Nullam tincidunt arcu sit amet odio efficitur, a pellentesque nunc cursus. Cras eget porta diam. Donec non nisl magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin molestie est sed viverra cursus. Fusce nec augue dui.') ?>
                </p>
            </div>
        </div>
        <div class="Flex">
            <? foreach (MgHelpers::getSettingsArray('home - piszą o nas obrazki','/images/wyborcza.png,/images/times.png,/images/mirror.png,/images/rzeczpospolita.png') as $fileUrl): ?>
                <div class="Flex__col Flex__col--md-6 Flex__col--sm-12">
                    <img class="Flex__col__image" src="<?= $fileUrl ?>" alt=""/>
                </div>
            <? endforeach; ?>

        </div>
    </div>
</section>