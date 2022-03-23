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
                            <a href="<?= yii\helpers\Url::to(['/site/login']) ?>"
                               class="Menu-top__login-btn btn btn-primary"> <?= Yii::t('db', 'Login'); ?> </a>
                        <? else: ?>
                            <a href="<?= yii\helpers\Url::to(['/site/account']) ?>"
                               class="Menu-top__login-btn btn btn-primary"> <?= Yii::t('db', 'My account'); ?> </a>
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
                    <img
                            id="Logo"
                            class="Menu-top__logo"
                            src="/images/logo Riva Token.svg"
                    />

                </a>
                <ul class="Menu-top__list">
                    <? foreach ($menu->getItems() as $item): ?>
                        <li class="<? if (isset($item['active']) && $item['active']): ?>menu__item--current<? endif ?> <? if (isset($item['items'])): ?> dropdown<? endif ?>">

                            <? if (isset($item['items'])): ?>
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    <?= $item['label'] ?>
                                </a>

                                <div class="dropdown-menu">
                                    <? foreach ($item['items'] as $subItem): ?>
                                        <? if (isset($subItem['url'])): ?>
                                            <a class="dropdown-item" href="<?= \yii\helpers\Url::to($subItem['url']) ?>"><?= $subItem['label'] ?></a>
                                        <? endif ?>
                                    <? endforeach ?>
                                </div>

                            <? else: ?>
                                <? if (isset($item['url'])): ?>
                                    <a href="<?= \yii\helpers\Url::to($item['url']) ?>"
                                       class="Menu-top__link
                                       <? if (!$isHomePage || !preg_match('/.*#.*/', $item['url'])): ?>external<? endif ?>
                                       <? if (isset($item['active']) && $item['active']): ?>Menu-top__link--active<? endif ?>
                                        "><?= $item['label'] ?></a>
                                <? endif ?>
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
  function submitLogoutForm () {
    $('#logoutForm').submit();
  }

  function openLoginPopup () {
    $.magnificPopup.open({
      items: {
        src: '#Login-box',
      },
    });
  }
</script>
