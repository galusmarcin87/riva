<?

use app\widgets\NobleMenu;
use yii\helpers\Html;
use \app\components\mgcms\MgHelpers;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$isHomePage = $this->context->id == 'site' && $this->context->action->id == 'index';

$menu = new NobleMenu(['name' => 'header_' . Yii::$app->language, 'loginLink' => false]);

?>


<div class="Cookies">
    <div class="container relative">
        <a class="Cookies__close Cookies__close-btn" href="#">
            &#215;
        </a>
        <p>
            <?= MgHelpers::getSettingTranslated('cookie_text', 'cookie text') ?>
            <a class="Cookies__more-btn"
               href="<?= MgHelpers::getSettingTranslated('cookie_article_url', '#') ?>"><?= Yii::t('db', 'Find out more'); ?></a>
        </p>
    </div>
</div>

<div class="Top-pane">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
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
                    <? if (MgHelpers::getSetting('linkedin url')): ?>
                        <a class="Social-icons__icon" href="<?= MgHelpers::getSetting('linkedin url') ?>">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    <? endif ?>
                    <? if (MgHelpers::getSetting('instagram url')): ?>
                        <a class="Social-icons__icon" href="<?= MgHelpers::getSetting('instagram url') ?>">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    <? endif ?>
                </div>
            </div>
            <div class="col-sm-10 text-right">
                <ul class="List-custom">
                    <li class="List-custom__item">
                        <a href="<?= MgHelpers::getSetting('header top first link', false, '#') ?>">
                            <?= MgHelpers::getSetting('header top first link text', false, 'header top first link text') ?>
                        </a>
                    </li>
                    <li class="List-custom__item">
                    <? if (Yii::$app->user->isGuest): ?>
                        <a href="<?= yii\helpers\Url::to(['/site/login']) ?>" class="Menu-top__login-btn btn btn-primary"> <?= Yii::t('db', 'Login'); ?> </a>
                    <? else: ?>
                        <a href="<?= yii\helpers\Url::to(['/site/account']) ?>" class="Menu-top__login-btn btn btn-primary"> <?= Yii::t('db', 'My account'); ?> </a>
                    <? endif; ?>
                    </li>
                </ul>
                <div class="Select-custom">
                    <div class="Select-custom__selected"><?= strtoupper(Yii::$app->language) ?></div>
                    <div class="Select-custom__options">
                        <? foreach (Yii::$app->params['languagesDisplay'] as $language) : ?>
                            <div class="Select-custom__options__option" data-value="<?= $language ?>">
                                <a href="<?= yii\helpers\Url::to(['/', 'language' => $language]) ?>"
                                   class="Select-custom__options__option"><?= strtoupper($language) ?></a>
                            </div>
                        <? endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="Menu-top-wrapper">
    <div id="nav-container" class="Menu-top">
        <div class="container">
            <div class="Menu-top__inner">
                <a href="/">
                    <svg
                            id="Logo"
                            class="Menu-top__logo"
                            xmlns="http://www.w3.org/2000/svg"
                            xml:space="preserve"
                            version="1.1"
                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            viewBox="0 0 8303.83 3232.89"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:xodm="http://www.corel.com/coreldraw/odm/2003"
                    >
                <g id="Warstwa_x0020_1">
                    <metadata id="CorelCorpID_0Corel-Layer"/>
                    <g id="_1799795967264">
                        <path
                                class="fil0"
                                d="M99.49 1879.15l224.64 0c56.09,0 102,-18.93 137.92,-56.84 36.97,-39.04 55.41,-86.74 55.41,-142.98 0,-56.35 -17.48,-102.76 -52.57,-139.28 -35.1,-36.49 -81.95,-54.66 -140.75,-54.66l-224.64 0 -99.49 -1.51 0 -93.78 309.95 0c86.03,0 158.38,27.22 216.83,81.75 60.13,56.12 90.25,126.04 90.25,209.74 0,84.58 -30.12,154.96 -90.25,211.07 -52.71,49.17 -116.62,76.15 -191.7,80.96l297.59 383.29 -133.64 0 -283.42 -382.46 -116.1 0 0 382.46 -99.49 0 0 -478.97 99.49 1.21z"
                        />
                        <polygon
                                class="fil0"
                                points="773.35,2356.95 872.83,2356.95 872.83,1390.12 773.35,1390.12 "
                        />
                        <polygon
                                class="fil0"
                                points="993.72,1390.1 1101.74,1390.1 1432.98,2169.22 1762.86,1390.1 1870.95,1390.1 1432.98,2415.17 "
                        />
                        <polygon
                                class="fil0"
                                points="2153.8,1556.46 1836.75,2356.98 1728.78,2356.98 2153.8,1323.21 2577.48,2356.98 2469.46,2356.98 "
                        />
                        <polygon
                                class="fil0"
                                points="3181.67,1482.5 3181.67,1826.57 3642.33,1826.57 3642.33,1920.37 3181.67,1920.37 3181.67,2356.91 3082.17,2356.91 3082.17,1390.1 3656.55,1390.1 3656.55,1482.5 "
                        />
                        <polygon
                                class="fil0"
                                points="3791.53,2356.95 3891.02,2356.95 3891.02,1390.12 3791.53,1390.12 "
                        />
                        <polygon
                                class="fil0"
                                points="4104.35,2356.95 4203.87,2356.95 4203.87,1644.61 4746.88,2416.6 4746.88,1390.12 4647.43,1390.12 4647.43,2100.95 4104.35,1328.96 "
                        />
                        <polygon
                                class="fil0"
                                points="5292.93,1556.46 4975.73,2356.98 4867.64,2356.98 5292.93,1323.21 5716.45,2356.98 5608.39,2356.98 "
                        />
                        <polygon
                                class="fil0"
                                points="5837.32,2356.95 5936.88,2356.95 5936.88,1644.61 6480.03,2416.6 6480.03,1390.12 6380.36,1390.12 6380.36,2100.95 5837.32,1328.96 "
                        />
                        <path
                                class="fil0"
                                d="M7403.99 2285.11c-82.33,57.29 -173.02,85.94 -271.48,85.94 -133.99,0 -248.24,-49.25 -342.78,-147.79 -92.88,-96.9 -139.2,-213.13 -139.2,-348.37 0,-67.24 12.35,-131.06 36.94,-191.24 24.63,-60.12 58.8,-112.98 102.26,-158.5 94.54,-98.61 208.78,-147.82 342.78,-147.82 98.85,0 188.97,28.16 270.21,84.56 81.06,56.39 139.83,130.56 176.24,222.52l-109.64 0c-52.22,-95.92 -130.14,-159.15 -233.74,-189.81 -33.68,-9.95 -72.81,-14.95 -117.37,-14.95 -44.51,0 -89.97,10.6 -136.46,31.99 -46.46,21.31 -86.98,50.04 -121.51,86.04 -73.52,76.5 -110.17,168.92 -110.17,277.21 0,107.37 36.66,199.34 110.17,275.77 75.51,78.78 166.3,118.1 272.27,118.1 72.03,0 137.99,-18.98 198.24,-56.91 60.29,-37.9 106.88,-88.11 140.14,-150.75l109.37 0c-35.89,92.49 -94.58,167.17 -176.28,224z"
                        />
                        <polygon
                                class="fil0"
                                points="7729.58,2356.95 7729.58,1390.12 8303.83,1390.12 8303.83,1482.5 7829.11,1482.5 7829.11,1826.57 8289.75,1826.57 8289.75,1920.37 7829.11,1920.37 7829.11,2264.45 8303.83,2264.45 8303.83,2356.95 "
                        />
                        <path
                                class="fil0"
                                d="M7729.58 1252.47c-387.01,-75.05 -1816.94,-539.6 -3065.99,-542.09 -1248.97,-2.47 -2792.64,438.26 -2792.64,438.26 0,0 1637.28,-608.12 2889.17,-587.32 1380.82,22.97 2969.46,691.15 2969.46,691.15z"
                        />
                        <path
                                class="fil0"
                                d="M5312.28 510.59c-1097.72,-343.68 -1485.96,-500.94 -2504.9,-510.59l-100.39 0c33.16,7.74 468.59,113.11 564.34,329.95 -91.46,244.32 -1465.6,634.07 -1710.26,659.75 -275.12,12.65 -919.64,-252.79 -919.64,-252.79 0,0 482.43,430.56 246.71,454.13 165.03,188.03 2581.2,-934.38 4424.13,-680.44z"
                        />
                        <path
                                class="fil0"
                                d="M5656.77 1169.72c-20.46,-9.61 -97.87,0.07 -104.42,-3.73 0.92,-56.6 -319.82,-309.59 -503.31,-325.42 280.8,28.42 502.01,185.41 607.73,329.15z"
                        />
                        <path
                                class="fil0"
                                d="M5846.12 1169.72c-20.41,-9.61 -97.83,0.07 -104.31,-3.73 0.99,-56.6 -319.81,-309.59 -503.27,-325.42 280.69,28.42 502.04,185.41 607.58,329.15z"
                        />
                        <path
                                class="fil0"
                                d="M6048.44 1169.72c-20.38,-9.61 -97.8,0.07 -104.2,-3.73 0.88,-56.6 -336.77,-316.5 -520.22,-332.3 280.76,28.33 518.77,192.29 624.42,336.03z"
                        />
                        <path
                                class="fil0"
                                d="M7062.7 1149.09c-51.9,5.18 -205.64,-18.81 -230.37,17.52 -48.58,-54.91 -113.97,-68.52 -230.37,-115.8 170.5,18.22 327.42,48.03 460.74,98.28z"
                        />
                    </g>
                    <path
                            class="fil0"
                            d="M177.62 2696.24c46.04,0 84.18,12.28 114.43,36.83 30.26,24.55 48.88,57.44 55.9,98.65l-63.14 0c-4.38,-25.87 -16.33,-46.15 -35.85,-60.84 -19.51,-14.68 -43.73,-22.02 -72.66,-22.02 -21.05,0 -40.23,4.82 -57.55,14.46 -17.32,9.65 -31.24,24.44 -41.76,44.39 -10.52,19.95 -15.78,44.61 -15.78,73.99 0,29.38 5.26,54.04 15.78,73.99 10.52,19.95 24.44,34.75 41.76,44.39 17.32,9.65 36.5,14.47 57.55,14.47 28.94,0 53.16,-7.45 72.66,-22.37 19.52,-14.9 31.46,-35.29 35.85,-61.16l63.14 0c-7.02,41.65 -25.65,74.65 -55.9,98.98 -30.25,24.33 -68.39,36.5 -114.43,36.5 -34.64,0 -65.33,-7.45 -92.07,-22.36 -26.75,-14.91 -47.68,-36.29 -62.8,-64.13 -15.13,-27.84 -22.7,-60.61 -22.7,-98.32 0,-37.7 7.56,-70.59 22.7,-98.65 15.12,-28.05 36.06,-49.54 62.8,-64.45 26.74,-14.9 57.43,-22.36 92.07,-22.36zm428.63 77.6c11.83,-24.98 29.16,-44.39 51.95,-58.2 22.8,-13.81 49.98,-20.71 81.55,-20.71l0 65.1 -18.41 0c-33.76,0 -61.38,8.67 -82.86,25.99 -21.48,17.31 -32.22,45.93 -32.22,85.82l0 190.06 -59.85 0 0 -361.05 59.85 0 0 72.99zm476.64 -77.6c34.64,0 65.65,7.45 93.06,22.36 27.4,14.91 48.88,36.4 64.45,64.45 15.57,28.06 23.34,60.95 23.34,98.65 0,37.71 -7.77,70.48 -23.34,98.32 -15.57,27.84 -37.05,49.21 -64.45,64.13 -27.41,14.9 -58.42,22.36 -93.06,22.36 -34.63,0 -65.65,-7.45 -93.05,-22.36 -27.4,-14.91 -48.99,-36.29 -64.78,-64.13 -15.79,-27.84 -23.68,-60.61 -23.68,-98.32 0,-37.7 7.89,-70.59 23.68,-98.65 15.79,-28.05 37.38,-49.54 64.78,-64.45 27.4,-14.9 58.42,-22.36 93.05,-22.36zm0 52.61c-21.48,0 -41.32,4.82 -59.52,14.46 -18.19,9.65 -32.89,24.44 -44.06,44.39 -11.18,19.95 -16.77,44.61 -16.77,73.99 0,28.94 5.59,53.39 16.77,73.34 11.17,19.95 25.87,34.74 44.06,44.39 18.19,9.64 38.03,14.46 59.52,14.46 21.48,0 41.32,-4.82 59.52,-14.46 18.2,-9.65 32.89,-24.44 44.07,-44.39 11.17,-19.95 16.77,-44.4 16.77,-73.34 0,-29.38 -5.6,-54.04 -16.77,-73.99 -11.18,-19.95 -25.87,-34.74 -44.07,-44.39 -18.19,-9.64 -38.03,-14.46 -59.52,-14.46zm875.19 -48.01l-103.91 361.05 -64.45 0 -99.31 -293.98 -99.96 293.98 -65.1 0 -102.6 -361.05 60.51 0 76.95 303.83 99.96 -303.83 62.47 0 100.63 303.18 77.6 -303.18 57.22 0zm324.06 -4.6c35.08,0 64.78,8.77 89.11,26.31 24.34,17.53 41.33,40.99 50.97,70.37l0 -217.68 59.85 0 0 486.66 -59.85 0 0 -92.07c-9.64,29.38 -26.63,52.84 -50.97,70.37 -24.33,17.54 -54.03,26.31 -89.11,26.31 -32,0 -60.5,-7.45 -85.49,-22.36 -24.99,-14.91 -44.61,-36.29 -58.86,-64.13 -14.24,-27.84 -21.37,-60.61 -21.37,-98.32 0,-37.7 7.13,-70.59 21.37,-98.65 14.25,-28.05 33.87,-49.54 58.86,-64.45 24.99,-14.9 53.49,-22.36 85.49,-22.36zm17.1 53.27c-36.83,0 -66.32,11.73 -88.45,35.18 -22.15,23.46 -33.21,55.79 -33.21,97.01 0,41.21 11.06,73.55 33.21,97.01 22.14,23.46 51.62,35.18 88.45,35.18 23.68,0 44.83,-5.48 63.47,-16.44 18.63,-10.96 33.21,-26.42 43.74,-46.37 10.52,-19.95 15.78,-43.08 15.78,-69.38 0,-26.31 -5.26,-49.54 -15.78,-69.71 -10.53,-20.17 -25.1,-35.62 -43.74,-46.37 -18.63,-10.74 -39.79,-16.12 -63.47,-16.12zm511.51 -53.27c40.78,0 73.55,10.63 98.32,31.89 24.77,21.26 39.79,49.88 45.05,85.82l-57.22 0c-2.63,-21.48 -11.5,-39.13 -26.64,-52.94 -15.12,-13.81 -35.4,-20.72 -60.83,-20.72 -21.48,0 -38.25,5.16 -50.31,15.46 -12.06,10.31 -18.08,24.22 -18.08,41.76 0,13.15 4.05,23.79 12.17,31.89 8.1,8.11 18.19,14.25 30.25,18.41 12.06,4.17 28.6,8.67 49.66,13.49 26.74,6.14 48.33,12.38 64.77,18.74 16.45,6.36 30.48,16.56 42.09,30.58 11.61,14.03 17.43,32.89 17.43,56.57 0,29.38 -11.07,53.27 -33.22,71.68 -22.14,18.41 -51.62,27.62 -88.45,27.62 -42.97,0 -78.04,-10.3 -105.23,-30.91 -27.18,-20.6 -43.19,-49.33 -48,-86.15l57.87 0c2.2,21.92 11.72,39.68 28.6,53.28 16.88,13.59 39.14,20.38 66.76,20.38 20.6,0 36.72,-5.26 48.33,-15.78 11.62,-10.53 17.43,-24.34 17.43,-41.44 0,-14.02 -4.16,-25.2 -12.5,-33.54 -8.32,-8.32 -18.63,-14.68 -30.91,-19.07 -12.28,-4.38 -29.16,-8.99 -50.64,-13.81 -26.74,-6.14 -48.11,-12.28 -64.12,-18.41 -16.01,-6.14 -29.6,-15.9 -40.77,-29.27 -11.18,-13.38 -16.78,-31.46 -16.78,-54.26 0,-30.25 11.18,-54.69 33.55,-73.33 22.36,-18.63 52.83,-27.95 91.41,-27.95zm495.06 0c35.08,0 64.78,8.77 89.11,26.31 24.34,17.53 41.33,40.99 50.97,70.37l0 -92.07 59.85 0 0 361.05 -59.85 0 0 -92.07c-9.64,29.38 -26.63,52.84 -50.97,70.37 -24.33,17.54 -54.03,26.31 -89.11,26.31 -32,0 -60.5,-7.45 -85.49,-22.36 -24.99,-14.91 -44.61,-36.29 -58.86,-64.13 -14.24,-27.84 -21.37,-60.61 -21.37,-98.32 0,-37.7 7.13,-70.59 21.37,-98.65 14.25,-28.05 33.87,-49.54 58.86,-64.45 24.99,-14.9 53.49,-22.36 85.49,-22.36zm17.1 53.27c-36.83,0 -66.32,11.73 -88.45,35.18 -22.15,23.46 -33.21,55.79 -33.21,97.01 0,41.21 11.06,73.55 33.21,97.01 22.14,23.46 51.62,35.18 88.45,35.18 23.68,0 44.83,-5.48 63.47,-16.44 18.63,-10.96 33.21,-26.42 43.74,-46.37 10.52,-19.95 15.78,-43.08 15.78,-69.38 0,-26.31 -5.26,-49.54 -15.78,-69.71 -10.53,-20.17 -25.1,-35.62 -43.74,-46.37 -18.63,-10.74 -39.79,-16.12 -63.47,-16.12zm458.24 -174.27l0 486.66 -59.85 0 0 -486.66 59.85 0zm548.33 286.08c0,12.71 -0.88,23.67 -2.64,32.88l-288.71 0c1.31,41.21 13.05,72.12 35.18,92.73 22.15,20.6 49.21,30.91 81.22,30.91 28.95,0 53.17,-7.35 72.67,-22.03 19.51,-14.68 31.46,-34.31 35.85,-58.86l63.79 0c-4.38,24.99 -14.13,47.36 -29.27,67.09 -15.12,19.73 -34.74,35.07 -58.85,46.04 -24.12,10.96 -51.3,16.44 -81.55,16.44 -34.64,0 -65.33,-7.45 -92.07,-22.36 -26.75,-14.91 -47.68,-36.29 -62.8,-64.13 -15.13,-27.84 -22.7,-60.61 -22.7,-98.32 0,-37.7 7.56,-70.59 22.7,-98.65 15.12,-28.05 36.06,-49.54 62.8,-64.45 26.74,-14.9 57.43,-22.36 92.07,-22.36 35.07,0 65.65,7.45 91.74,22.36 26.09,14.91 46.04,34.86 59.85,59.85 13.81,24.99 20.72,52.61 20.72,82.87zm-60.51 3.94c1.31,-26.75 -3.07,-49.1 -13.15,-67.08 -10.09,-17.98 -23.9,-31.35 -41.43,-40.12 -17.54,-8.78 -36.62,-13.16 -57.22,-13.16 -32.89,0 -60.51,10.2 -82.86,30.58 -22.37,20.39 -34.42,50.32 -36.18,89.77l230.84 0zm620.67 -169.02c32,0 60.51,7.45 85.49,22.36 24.99,14.91 44.61,36.4 58.86,64.45 14.25,28.06 21.37,60.95 21.37,98.65 0,37.71 -7.12,70.48 -21.37,98.32 -14.25,27.84 -33.87,49.21 -58.86,64.13 -24.98,14.9 -53.49,22.36 -85.49,22.36 -35.07,0 -64.78,-8.88 -89.11,-26.64 -24.33,-17.75 -41.1,-41.1 -50.31,-70.04l0 263.06 -59.85 0 0 -532.05 59.85 0 0 92.07c9.21,-28.94 25.98,-52.28 50.31,-70.04 24.33,-17.76 54.04,-26.64 89.11,-26.64zm-17.1 53.27c-23.24,0 -44.28,5.38 -63.14,16.12 -18.85,10.74 -33.54,26.2 -44.06,46.37 -10.52,20.17 -15.79,43.4 -15.79,69.71 0,26.31 5.27,49.44 15.79,69.38 10.52,19.95 25.21,35.4 44.06,46.37 18.86,10.96 39.9,16.44 63.14,16.44 37.27,0 66.98,-11.72 89.11,-35.18 22.15,-23.46 33.22,-55.79 33.22,-97.01 0,-41.21 -11.07,-73.55 -33.22,-97.01 -22.14,-23.45 -51.84,-35.18 -89.11,-35.18zm441.14 -174.27l0 486.66 -59.85 0 0 -486.66 59.85 0zm364.18 121.01c35.08,0 64.78,8.77 89.11,26.31 24.34,17.53 41.33,40.99 50.97,70.37l0 -92.07 59.85 0 0 361.05 -59.85 0 0 -92.07c-9.64,29.38 -26.63,52.84 -50.97,70.37 -24.33,17.54 -54.03,26.31 -89.11,26.31 -32,0 -60.5,-7.45 -85.49,-22.36 -24.99,-14.91 -44.61,-36.29 -58.86,-64.13 -14.24,-27.84 -21.37,-60.61 -21.37,-98.32 0,-37.7 7.13,-70.59 21.37,-98.65 14.25,-28.05 33.87,-49.54 58.86,-64.45 24.99,-14.9 53.49,-22.36 85.49,-22.36zm17.1 53.27c-36.83,0 -66.32,11.73 -88.45,35.18 -22.15,23.46 -33.21,55.79 -33.21,97.01 0,41.21 11.06,73.55 33.21,97.01 22.14,23.46 51.62,35.18 88.45,35.18 23.68,0 44.83,-5.48 63.47,-16.44 18.63,-10.96 33.21,-26.42 43.74,-46.37 10.52,-19.95 15.78,-43.08 15.78,-69.38 0,-26.31 -5.26,-49.54 -15.78,-69.71 -10.53,-20.17 -25.1,-35.62 -43.74,-46.37 -18.63,-10.74 -39.79,-16.12 -63.47,-16.12zm570.7 259.77l0 52.61 -44.72 0c-36.83,0 -64.34,-8.77 -82.54,-26.31 -18.19,-17.53 -27.29,-46.91 -27.29,-88.13l0 -194.66 -53.93 0 0 -51.95 53.93 0 0 -90.1 60.51 0 0 90.1 93.38 0 0 51.95 -93.38 0 0 195.99c0,23.23 4.27,39.13 12.82,47.68 8.56,8.55 23.35,12.82 44.4,12.82l36.83 0zm353 -393.93c-32,-0.44 -54.26,5.03 -66.76,16.44 -12.5,11.39 -18.75,31.13 -18.75,59.18l0 9.87 85.5 0 0 52.61 -85.5 0 0 308.44 -59.85 0 0 -308.44 -51.95 0 0 -52.61 51.95 0 0 -14.47c0,-86.36 48.45,-127.59 145.35,-123.63l0 52.61zm349.06 80.89c34.64,0 65.65,7.45 93.06,22.36 27.4,14.91 48.88,36.4 64.45,64.45 15.57,28.06 23.34,60.95 23.34,98.65 0,37.71 -7.77,70.48 -23.34,98.32 -15.57,27.84 -37.05,49.21 -64.45,64.13 -27.41,14.9 -58.42,22.36 -93.06,22.36 -34.63,0 -65.65,-7.45 -93.05,-22.36 -27.4,-14.91 -48.99,-36.29 -64.78,-64.13 -15.79,-27.84 -23.68,-60.61 -23.68,-98.32 0,-37.7 7.89,-70.59 23.68,-98.65 15.79,-28.05 37.38,-49.54 64.78,-64.45 27.4,-14.9 58.42,-22.36 93.05,-22.36zm0 52.61c-21.48,0 -41.32,4.82 -59.52,14.46 -18.19,9.65 -32.89,24.44 -44.06,44.39 -11.18,19.95 -16.77,44.61 -16.77,73.99 0,28.94 5.59,53.39 16.77,73.34 11.17,19.95 25.87,34.74 44.06,44.39 18.19,9.64 38.03,14.46 59.52,14.46 21.48,0 41.32,-4.82 59.52,-14.46 18.2,-9.65 32.89,-24.44 44.07,-44.39 11.17,-19.95 16.77,-44.4 16.77,-73.34 0,-29.38 -5.6,-54.04 -16.77,-73.99 -11.18,-19.95 -25.87,-34.74 -44.07,-44.39 -18.19,-9.64 -38.03,-14.46 -59.52,-14.46zm439.16 24.98c11.83,-24.98 29.16,-44.39 51.95,-58.2 22.8,-13.81 49.98,-20.71 81.55,-20.71l0 65.1 -18.41 0c-33.76,0 -61.38,8.67 -82.86,25.99 -21.48,17.31 -32.22,45.93 -32.22,85.82l0 190.06 -59.85 0 0 -361.05 59.85 0 0 72.99zm756.81 -78.91c42.08,0 75.95,13.48 101.61,40.45 25.65,26.96 38.47,65.87 38.47,116.73l0 209.79 -59.85 0 0 -204.53c0,-35.51 -8.67,-62.69 -25.98,-81.55 -17.32,-18.86 -41.11,-28.27 -71.36,-28.27 -31.56,0 -56.89,10.41 -75.96,31.23 -19.07,20.83 -28.6,51.41 -28.6,91.75l0 191.37 -59.85 0 0 -204.53c0,-35.51 -8.77,-62.69 -26.31,-81.55 -17.53,-18.86 -41.21,-28.27 -71.03,-28.27 -32,0 -57.54,10.41 -76.62,31.23 -19.07,20.83 -28.6,51.41 -28.6,91.75l0 191.37 -59.85 0 0 -361.05 59.85 0 0 82.2c8.77,-28.49 24.44,-50.31 47.02,-65.43 22.59,-15.12 48.56,-22.69 77.93,-22.69 30.7,0 57.33,7.78 79.91,23.35 22.59,15.57 38.69,38.47 48.34,68.72 10.08,-29.38 26.96,-52.06 50.64,-68.07 23.68,-16 50.42,-24 80.24,-24z"
                    />
                </g>
              </svg>
                </a>
                <ul class="Menu-top__list">
                    <? foreach ($menu->getItems() as $item): ?>
                        <li class="<? if (isset($item['active']) && $item['active']): ?>menu__item--current<? endif ?>">
                            <? if (isset($item['url'])): ?>
                                <a href="<?= \yii\helpers\Url::to($item['url']) ?>"
                                   class="Menu-top__link <? if (!$isHomePage || !preg_match('/.*#.*/', $item['url'])): ?>external<? endif ?>"><?= $item['label'] ?></a>
                            <? endif ?>
                        </li>
                    <? endforeach ?>
                </ul>
                <a href="#" class="Menu-top__search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>


                <a href="#" class="Menu-top__toggle-btn">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="Search-box">
            <div class="container">
                <?php $form = ActiveForm::begin([
                    'id' => 'search-form',
                    'class' => 'Form',
                    'action' => Url::to('/site/search'),
                    'method' => 'GET'
                ]); ?>
                <div class="Search-box__form-wrpper">
                    <input
                            class="Search-box__input Form__input"
                            placeholder="&nbsp;"
                            name="q"
                    />
                    <label class="Form__label" for="phone"><?= Yii::t('app', 'Enter the search phrase') ?></label>
                    <button class="Search-box__submit" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <a href="#" class="Search-box__close">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>


<?= $this->render('_loginForm') ?>


<script type="text/javascript">
    function submitLogoutForm() {
        $('#logoutForm').submit();
    }

    function openLoginPopup() {
        $.magnificPopup.open({
            items: {
                src: "#Login-box"
            }
        });
    }
</script>
