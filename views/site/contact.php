<?php
/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\components\mgcms\MgHelpers;

$this->title = MgHelpers::getSettingTranslated('contact_header', 'Contact');


?>
<?= $this->render('/common/breadcrumps') ?>

    <section class="Section User-panel animatedParent">
        <div class="container fadeIn animated">
            <h2>
                <?= Yii::t('db', 'Contact us'); ?>
            </h2>
            <div class="Contact-form">
                <div class="User-Panel__form User-Panel__form--block">
                    <div>
                        <?php
                        $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'fieldConfig' => \app\components\CrowdsaleHelper::getFormFieldConfig()
                        ]);

                        echo $form->errorSummary($model);
                        ?>
                        <div class="User-Panel__form-group">
                            <?= $form->field($model, 'name')->textInput(['placeholder' => ' ']) ?>
                            <?= $form->field($model, 'email')->textInput(['placeholder' => ' ']) ?>
                            <?= $form->field($model, 'phone')->textInput(['placeholder' => ' ']) ?>
                        </div>
                        <div class="User-Panel__form-group User-Panel__form-group--block">
                            <?= $form->field($model, 'body')->textarea(['placeholder' => ' ']) ?>
                        </div>
                    </div>
                    <?= $form->field($model, 'acceptTerms',
                        [
                            'options' => [
                                'class' => "Form__group form-group text-left",
                            ],
                            'checkboxTemplate' => "{input}\n{label}\n{error}",
                        ]
                    )->checkbox(['class' => 'Form__checkbox']) ?>

                    <?= $form->field($model, 'acceptTerms2',
                        [
                            'options' => [
                                'class' => "Form__group form-group text-left",
                            ],
                            'checkboxTemplate' => "{input}\n{label}\n{error}",
                        ]
                    )->checkbox(['class' => 'Form__checkbox']) ?>
                    <div class="text-right">
                        <input
                                style="margin-top: 0;"
                                type="submit"
                                class="btn btn-success btn-success--line-bottom"
                                value="<?= Yii::t('db', 'Send message'); ?>"
                        />
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="Contact__block">
                    <h6>RIVA FINANCE</h6>
                    <p>

                        <?= MgHelpers::getSetting('contact_address', false, '<b>Crowdsale Platform</b><br>
                        ul. Szachowa 1/854<br>
                        04-894 Warszawa') ?>

                    </p>
                    <p>
                        <strong>
                            <small>
                                <?= Yii::t('db', 'Office contact details'); ?>
                            </small>
                        </strong>
                        <br>
                        <?= MgHelpers::getSetting('contact_address_office', false, '<a href="tel:+48502148957">+48 502 148 957</a>
                        <br>
                        <a href="mailto:info@rivafinanced.com"></a>info@rivafinanced.com</a>') ?>

                    </p>
                    <p>
                        <strong>
                            <small>
                                <?= Yii::t('db', 'Media'); ?>
                            </small>
                        </strong>
                        <br>
                        <?= MgHelpers::getSetting('contact_address_media', false, '<a href="tel:+48502148957">+48 502 148 957</a>
                        <br>
                        <a href="mailto:media@rivafinanced.com"></a>media@rivafinanced.com</a>') ?>

                    </p>
                    <p>
                        <strong>
                            <small>
                                <?= Yii::t('db', 'Cooperation'); ?>
                            </small>
                        </strong>
                        <br>
                        <?= MgHelpers::getSetting('contact_address_cooperation', false, '<a href="mailto:media@rivafinanced.com"></a>media@rivafinanced.com</a>') ?>

                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="animatedParent">
            <div id="map" class="Contact__map fadeIn animated"></div>
        </div>
    </section>

<?= $this->render('contact/script') ?>
