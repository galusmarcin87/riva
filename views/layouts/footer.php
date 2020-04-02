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
            <div class="animatedParent Footer__top">
                <div class="fadeIn animated">
                    <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             xml:space="preserve"
                             version="1.1"
                             style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                             viewBox="0 0 8303.83 3232.89"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:xodm="http://www.corel.com/coreldraw/odm/2003" class="Footer__logo">
                  <use xlink:href="#Warstwa_x0020_1"/>
                </svg>
                    </a>
                </div>
                <div class="fadeIn animated">
                    <p class="Footer__text">
                        <?= MgHelpers::getSettingTranslated('footer - 1', 'footer - 1') ?>
                    </p>
                </div>
                <div class="fadeIn animated">
                    <p class="Footer__text">
                        <?= MgHelpers::getSettingTranslated('footer - 2', 'footer - 2') ?>
                    </p>
                </div>
            </div>
            <div class="animatedParent">
                <ul class="Footer__menu text-center fadeIn animated">
                    <? foreach ($menu->getItems() as $item): ?>
                        <li class="Footer__menu__item">
                            <? if (isset($item['url'])): ?>
                                <a href="<?= \yii\helpers\Url::to($item['url']) ?>"
                                   class="Footer__menu__link <? if (isset($item['active']) && $item['active']): ?>Footer__menu__link--active<? endif ?>"><?= $item['label'] ?></a>
                            <? endif ?>
                        </li>
                    <? endforeach ?>
                </ul>
            </div>
            <div class="animatedParent">
                <div class="fadeIn animated text-center">

                    <?= MgHelpers::getSetting('footer copyright ' . Yii::$app->language, true, '<p>
                        &#169; 2020 Riva Finance Crowdsale Platform - tokenizacja nieruchomości | 04-894 Warszawa, ul.
                        Szachowa 1 
                        </p>') ?>

                    <?= MgHelpers::getSetting('footer realisation ' . Yii::$app->language, true, ' <p>
                        Realizacja <a class="Footer__link" target="_blank" href="https://www.vertesdesign.pl/">Vertes
                            Desing</a>
                        </p>') ?>


                </div>
            </div>
        </div>
    </div>
</footer>