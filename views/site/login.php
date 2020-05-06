<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\components\mgcms\MgHelpers;

$this->title = Yii::t('db', 'Log in');
$this->params['breadcrumbs'][] = $this->title;
$fieldConfig = \app\components\CrowdsaleHelper::getFormFieldConfig()

?>

<section class="Section Contact">
    <div class="container">
        <div class="Contact__grid">
            <div class="User-Panel__form User-Panel__form--block text-center">
                <?php
                $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'fieldConfig' => $fieldConfig
                ]);

                //          echo $form->errorSummary($model);
                ?>
                <h2><?= Yii::t('db', 'Login'); ?></h2>
                <?= $form->field($model, 'username')->textInput(['type' => 'text', 'required' => true, 'placeholder' => ' ']) ?>

                <?= $form->field($model, 'password')->passwordInput(['required' => true, 'placeholder' => ' ']) ?>

                <div class="Form__group form-group text-left">
                    <input type="hidden" name="LoginForm[rememberMe]" value="0">
                    <input
                            name="LoginForm[rememberMe]"
                            class="Form__checkbox"
                            type="checkbox"
                            id="rememberMe"
                            value="1"
                            checked
                            required
                    />
                    <label for="rememberMe">
                        <?= Yii::t('db', 'Remeber me.'); ?>
                    </label>
                    <?= Html::a(Yii::t('db', 'Forgotten password?'), ['site/forgot-password'], ['class' => 'Contact__remember-password']) ?>
                </div>

                <div class="text-center">
                    <input
                            style="margin-top: 88px !important;"
                            type="submit"
                            class="btn btn-success btn-block"
                            value="<?= Yii::t('db', 'Login'); ?>"
                    />
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="User-Panel__form User-Panel__form--block text-center">
                <div>
                    <?php
                    $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'fieldConfig' => $fieldConfig
                    ]);

                    //          echo $form->errorSummary($model);
                    ?>
                    <h2><?= Yii::t('db', 'Register'); ?></h2>
                    <?= $form->field($modelRegister, 'username')->textInput(['type' => 'email', 'required' => true, 'placeholder' => ' ']) ?>
                    <?= $form->field($modelRegister, 'password')->passwordInput(['required' => true, 'placeholder' => ' ']) ?>
                    <?= $form->field($modelRegister, 'passwordRepeat')->passwordInput(['required' => true, 'placeholder' => ' ']) ?>
                    <div class="Form__group form-group text-left">
                        <input type="hidden" name="RegisterForm[acceptTerms]" value="0">
                        <input
                                name="RegisterForm[acceptTerms]"
                                class="Form__checkbox"
                                type="checkbox"
                                id="agree"
                                value="1"
                                checked
                                required
                        />
                        <label for="agree">
                            <?= MgHelpers::getSettingTranslated('register_terms_label', '  Oświadczam, że zapoznałem się z <a href="#">Regulaminem</a><br>  i <a href="#">Polityką Prywatności.</a>') ?>

                        </label>
                    </div>

                    <div class="text-center">
                        <input
                                type="submit"
                                class="btn btn-success btn-block"
                                value="<?= Yii::t('db', 'Register'); ?>"
                        />
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
