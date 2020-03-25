<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;
use yii\bootstrap\ActiveForm;
use yii\web\View;

$projectIds = MgHelpers::getSettingsArray('Home Slider - tablica id projektów');

$projects = Project::find()
    ->where(['status' => Project::STATUS_ACTIVE])
    ->limit(6)
    ->andWhere(['in', 'id', $projectIds])
    ->all();
?>


<section class="Slider">
    <div class="owl-carousel owl-theme">
        <? foreach ($projects as $index => $project): ?>
            <?= $this->render('_sliderItem', ['model' => $project, 'index' => $index, 'count' => sizeof($projects)]) ?>
        <? endforeach; ?>
    </div>
    <div class="Contact-form-mini animatedParent">
        <div class="Contact-form-mini__inner nimated fadeIn">
            <?php
            $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => \app\components\CrowdsaleHelper::getFormFieldConfig()
            ]);

            ?>
                <h6 class="Contact-form-mini__heading"><?= Yii::t('db', 'Leave Your phone number, we will call You'); ?></h6>
                <div class="Form__group form-group">
                    <input
                            class="Form__input form-control"
                            placeholder="&nbsp;"
                            id="name"
                            name="contact_name"
                            type="text"
                            required
                    />
                    <label class="Form__label" for="name"><?= Yii::t('db', 'First name and surname'); ?></label>
                </div>
                <div class="Form__group form-group">
                    <input
                            class="Form__input form-control"
                            placeholder="&nbsp;"
                            id="phone"
                            name="contact_phone"
                            type="phone"
                            required
                    />
                    <label class="Form__label" for="phone"><?= Yii::t('db', 'Phone number'); ?></label>
                </div>
                <div class="form-group">
                    <label for="phone"><b><?= Yii::t('db', 'Contact time'); ?></b></label>
                    <div class="Form__select">
                        <select class="form-control" name="contact_time">
                            <option selected value="10:00 - 12:00">10:00 - 12:00</option>
                            <option value="12:00 - 14:00">12:00 - 14:00</option>
                        </select>
                    </div>
                </div>
                <input
                        class="Contact-form-mini__submit btn btn-success btn-block"
                        type="submit"
                        name="contact_submit"
                        value="<?= Yii::t('db', 'SUBMIT FORM'); ?>"
                />
            <?php ActiveForm::end(); ?>
        </div>
        <div class="Contact-form-mini__icon">
            <i class="fa fa-phone" aria-hidden="true"></i>
        </div>
    </div>
</section>