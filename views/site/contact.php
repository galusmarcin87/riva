<?php
/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\components\mgcms\MgHelpers;

$this->title = MgHelpers::getSettingTranslated('contact_header', 'Contact');


?>
<?= $this->render('/common/breadcrumps') ?>

    <section class="Section Contact Section--grey">
        <div class="animatedParent">
            <div id="map" class="Contact__map fadeIn animated"></div>
        </div>
        <div class="container">
            <div class="Contact__cards">
                <div class="Card Card--dark animatedParent">
                    <div class="Card__inner fadeIn animated">
                        <div class="Card__header--small">
                            <?= Yii::t('db', 'Contact information'); ?>
                        </div>
                        <div class="Card__phone">
                            <img class="Card__icon" src="/images/phone-ico.png" alt=""/>
                            <a href="tel:<?= MgHelpers::getSetting('contact_phone', false, '+48 694 847 541') ?>"><?= MgHelpers::getSetting('contact_phone', false, '+48 694 847 541') ?></a>
                        </div>
                        <div class="Card__mail">
                            <img class="Card__icon" src="/images/mail-ico.png" alt=""/>
                            <a href="mailto:<?= MgHelpers::getSetting('contact_email', false, 'hello@recrowdsale.com') ?>"><?= MgHelpers::getSetting('contact_email', false, 'hello@recrowdsale.com') ?></a>
                        </div>
                        <p class="Card__sub-header"><?= Yii::t('db', 'Cooperation'); ?></p>
                        <div class="Card__mail">
                            <img class="Card__icon" src="/images/mail-ico.png" alt=""/>
                            <a href="mailto:<?= MgHelpers::getSetting('contact_email_business', false, 'business@recrowdsale.com') ?>"
                            ><?= MgHelpers::getSetting('contact_email_business', false, 'business@recrowdsale.com') ?></a
                            >
                        </div>
                    </div>
                </div>
                <div class="Card Card--white animatedParent">
                    <div class="Card__inner fadeIn animated">
                        <div class="Card__header--small">
                            <?= MgHelpers::getSetting('contact_company_name', false, 'Real Estate Crowdsale Sp. z o.o.') ?>
                        </div>
                        <div class="Card__location">
                            <div>
                                <i class="Card__icon fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div>
                                <?= MgHelpers::getSetting('contact_address', false, 'ul. Ludna 26/4 <br/>10-112 Warszawa') ?>
                            </div>
                        </div>
                        <div class="Card__phone">
                            <img class="Card__icon" src="/images/phone-ico.png" alt=""/>
                            <a href="tel:<?= MgHelpers::getSetting('contact_phone_right', false, '+48 694 847 541') ?>"><?= MgHelpers::getSetting('contact_phone_right', false, '+48 694 847 541') ?></a>
                        </div>
                        <div class="Card__mail">
                            <img class="Card__icon" src="/images/mail-ico.png" alt=""/>
                            <a href="mailto:<?= MgHelpers::getSetting('contact_email_right', false, 'kontakt@recrowdsale.com') ?>"
                            ><?= MgHelpers::getSetting('contact_email_right', false, 'kontakt@recrowdsale.com') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Section User-panel animatedParent">
        <div class="container fadeIn animated">
            <h2 class="text-center">
                Formularz kontaktowy
            </h2>
            <div class="User-Panel__form User-Panel__form--block">
                <div>
                    <?php
                    $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'class' => 'fadeInUpShort animated delay-250',
                        'fieldConfig' => \app\components\CrowdsaleHelper::getFormFieldConfig()
                    ]);

//                    echo $form->errorSummary($model);
                    ?>
                    <div class="User-Panel__form-group">
                        <?= $form->field($model, 'name')->textInput(['placeholder' => ' ']) ?>
                        <?= $form->field($model, 'subject')->textInput(['placeholder' => ' ']) ?>
                    </div>
                    <div class="User-Panel__form-group">
                        <?= $form->field($model, 'phone')->textInput(['placeholder' => ' ']) ?>
                        <?= $form->field($model, 'email')->textInput(['placeholder' => ' ']) ?>
                    </div>
                    <div class="User-Panel__form-group User-Panel__form-group--block">
                        <?= $form->field($model, 'body')->textarea(['placeholder' => ' ']) ?>
                    </div>
                    <div
                            class="Form__group form-group text-left checkbox"
                            style="margin-top: 15px;"
                    >
                        <?= $form->field($model, 'acceptTerms',
                            [
                                'checkboxTemplate' => "{input}\n" . $model->getAttributeLabel('acceptTerms') . "\n{error}",
                            ]
                        )->checkbox() ?>
                    </div>
                    <div class="text-center">
                        <input
                                style="margin-top: 0;"
                                type="submit"
                                class="btn btn-success"
                                value="Wyślij wiadomość"
                        />
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section>

<?= $this->render('contact/script') ?>

<?=$this->render('/common/newsletterForm')?>