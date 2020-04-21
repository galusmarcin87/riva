<?

use yii\bootstrap\ActiveForm;
use yii\web\View;
use app\components\mgcms\MgHelpers;

/* @var $this yii\web\View */

?>

<section class="Section text-center animatedParent Section--fixed-bg" style="background-image: url(/images/newsletter_bg.jpg);">
    <div class="container fadeIn animated">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h2><?= Yii::t('db', 'Newsletter'); ?></h2>
                <p>
                    <?= MgHelpers::getSettingTranslated('newsletter text 1', '<span class="Color--secondary">Bądz na bieżąco</span> Dopisz się do bazy inwestorów, aby otrzymywać informacjie o nowych projektach.<br>
                    Gwarantujemy zero spamu i same konkrety!') ?>
                </p>
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
                            ><?= Yii::t('db', 'Enter your email address'); ?></label
                            >
                        </div>

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
                    <input class="btn btn-success lowercase" type="submit" value="<?= Yii::t('db', 'Sign in'); ?>"/>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>