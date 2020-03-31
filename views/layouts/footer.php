<?

use app\widgets\NobleMenu;
use yii\helpers\Html;
use app\components\mgcms\MgHelpers;

$menu = new NobleMenu(['name' => 'footer_' . Yii::$app->language, 'loginLink' => false]);

?>

<div class="Scroll-up">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
</div>
<footer>
    <div class="Footer">
        <div class="container">
            <div class="row animatedParent">
                <div class="col-lg-3 col-md-4  fadeIn animated">
                    <a href="#">
                        <img class="Footer__logo" src="/images/footer_logo.png"/>
                    </a>
                    <p>
                        <?= MgHelpers::getSettingTranslated('footer - 1', 'footer - 1') ?>
                    </p>
                    <p>
                        <a href="mailto:<?= MgHelpers::getSetting('kontakt mail', false, 'kontakt@recrowdsale.com') ?>"
                        ><?= MgHelpers::getSetting('kontakt mail', false, 'kontakt@recrowdsale.com') ?></a
                        ><br/>
                        <a href="tel:<?= MgHelpers::getSetting('telefon kontaktowy', false, '+48502502502') ?>"><?= MgHelpers::getSetting('telefon kontaktowy', false, '+48502502502') ?></a>
                    </p>
                    <div class="Social-icons">
                        <? if (MgHelpers::getSetting('facebook url')): ?>
                            <a class="Social-icons__icon" href="<?= MgHelpers::getSetting('facebook url') ?>">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        <? endif ?>
                        <? if (MgHelpers::getSetting('twitter url')): ?>
                            <a class="Social-icons__icon" href="<?= MgHelpers::getSetting('twitter url') ?>">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        <? endif ?>
                        <? if (MgHelpers::getSetting('instagram url')): ?>
                            <a class="Social-icons__icon" href="<?= MgHelpers::getSetting('instagram url') ?>">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        <? endif ?>
                        <? if (MgHelpers::getSetting('linkedin url')): ?>
                            <a class="Social-icons__icon" href="<?= MgHelpers::getSetting('linkedin url') ?>">
                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                            </a>
                        <? endif ?>
                    </div>
                </div>
                <div class="col-md-3  fadeIn animated">
                    <h3><?= Yii::t('db', 'Shortcuts'); ?></h3>
                    <ul class="Footer__menu">
                        <? foreach ($menu->getItems() as $item): ?>
                            <li class="<? if (isset($item['active']) && $item['active']): ?>menu__item--current<? endif ?>">
                                <? if (isset($item['url'])): ?>
                                    <a href="<?= \yii\helpers\Url::to($item['url']) ?>"
                                       class="Footer__menu__link"><?= $item['label'] ?></a>
                                <? endif ?>
                            </li>
                        <? endforeach ?>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-5  fadeIn animated">
                    <?= MgHelpers::getSetting('footer text ' . Yii::$app->language, true, 'footer text') ?>
                </div>
            </div>
            <div class="Footer__hr"></div>
            <div class="row animatedParent">
                <div class="col-sm-8 fadeIn animated">
                    <?= MgHelpers::getSetting('footer copyright ' . Yii::$app->language, true, '<p>
                        &#169; 2019 Real Estate Crowdsale Sp. z o.o. | 04-894 Warszawa,
                        ul. Szachowa 1
                    </p>') ?>

                </div>
                <div class="col-sm-4 text-right">
                    <a href="<?= MgHelpers::getSetting('o cookies link ' . Yii::$app->language) ?>"><?= Yii::t('db', 'About cookies'); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>
