<?

use yii\bootstrap\ActiveForm;
use yii\web\View;
use app\components\mgcms\MgHelpers;

/* @var $this yii\web\View */

?>


<section class="Section Section--white text-center animatedParent">
    <div class="container fadeIn animated">
        <h2><?= Yii::t('db', 'Newsletter'); ?></h2>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <?= MgHelpers::getSettingTranslated('newsletter text 1', 'newsletter text 1') ?>
            </div>
        </div>
        <div class="Newsletter animatedParent">
            <?php $form = ActiveForm::begin(['id' => 'newsletter-form', 'class' => 'fadeIn animated']); ?>
            <div class="Newsletter__inner">
                <div class="Form__group form-group">
                    <input
                            class="Form__input form-control"
                            placeholder="&nbsp;"
                            id="phone"
                            name="newsletterEmail"
                            type="email"
                            required
                    />
                    <label class="Form__label" for="phone"
                    >Wpisz swój adres e-mail</label
                    >
                </div>
                <input class="btn btn-success" type="submit" value="ZAPISZ SIĘ"/>
            </div>
            <div class="Form__group form-group text-left">
                <input class="Form__checkbox" type="checkbox" id="agree-1"/>
                <label for="agree-1">
                    <?= MgHelpers::getSettingTranslated('newsletter zgoda 1', 'newsletter zgoda 1') ?>
                </label>
            </div>
            <div class="Form__group form-group text-left">
                <input class="Form__checkbox" type="checkbox" id="agree-2"/>
                <label for="agree-2">
                    <?= MgHelpers::getSettingTranslated('newsletter zgoda 2', 'newsletter zgoda 2') ?>
                </label>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>