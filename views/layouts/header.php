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

<div id="royal_preloader"></div>
<div class="Cookies">
    <a class="Cookies__close Cookies__close-btn" href="#">
        &#215;
    </a>
    <p>
        <?= MgHelpers::getSettingTranslated('cookie_text', 'cookie text') ?>
    </p>
    <div class="text-center">
        <button class="btn btn-success btn-small Cookies__close"><?= Yii::t('db', 'ACCEPT'); ?></button>
    </div>
</div>
<div class="Top-pane">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="Select-custom">
                    <div class="Select-custom__label"><?= Yii::t('db', 'Choose language') ?></div>
                    <div class="Select-custom__selected"><?= Yii::$app->params['languagesDisplay'][Yii::$app->language] ?></div>
                    <div class="Select-custom__options">

                        <? foreach (Yii::$app->params['languagesDisplay'] as $sc => $language) : ?>
                            <div class="Select-custom__options__option" data-value="Polski">
                                <a href="<?= yii\helpers\Url::to(['/', 'language' => $sc]) ?>"
                                   class="Select-custom__options__option"><?= $language ?></a>
                            </div>
                        <? endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 text-right">
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
                <? if ($userModel = MgHelpers::getUserModel()): ?>
                    <div class="Select-custom">
                        <div class="Select-custom__label"></div>
                        <div class="Select-custom__selected">
                            <?if($userModel->file_id):?>
                            <img
                                    class="Select-custom__selected__image"
                                    src="<?= $userModel->file->getImageSrc(36,36)?>"
                            />
                            <?endif;?>
                            <div class="Select-custom__selected__label">
                                <?= MgHelpers::getUserModel() ?>
                            </div>
                        </div>
                        <div
                                class="Select-custom__options Select-custom__options--inline"
                        >
                            <a href="<?= Url::to(['site/account']) ?>" class="Select-custom__options__option">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <?= Yii::t('db', 'My account'); ?>
                            </a>
                            <?= Html::beginForm(['/site/logout'], 'post', ['id' => 'logoutForm']) ?>
                            <a href="javascript:submitLogoutForm()" class="Select-custom__options__option">
                                <i class="fa fa-power-off" aria-hidden="true"></i>
                                <?= Yii::t('db', 'Log out'); ?>
                            </a>
                            <?= Html::endForm() ?>
                        </div>
                    </div>

                <? else: ?>
                    <div class="Select-custom">
                        <div class="Select-custom__label"></div>
                        <div class="Select-custom__selected">
                            <div class="Select-custom__selected__label">
                                <?= Yii::t('db', 'Log in / Register'); ?>
                            </div>
                        </div>
                        <div
                                class="Select-custom__options Select-custom__options--inline logoutButtons"
                        >
                            <a href="javascript:openLoginPopup()" class="Select-custom__options__option">
                                <i class="fa fa-key" aria-hidden="true"></i>
                                <?= Yii::t('db', 'Log in'); ?>
                            </a>

                            <a href="<?= Url::to(['site/register']) ?>" class="Select-custom__options__option">
                                <i class="fa fa-registered" aria-hidden="true"></i>
                                <?= Yii::t('db', 'Register'); ?>
                            </a>
                        </div>
                    </div>


                <? endif ?>
            </div>
        </div>
    </div>
</div>
<div class="Menu-top-wrapper">
    <div id="nav-container" class="Menu-top">
        <div class="container">
            <div class="Menu-top__inner">
                <a href="/">
                    <img class="Menu-top__logo" src="/images/menu_logo.png"/>
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
                <<?php $form = ActiveForm::begin([
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
