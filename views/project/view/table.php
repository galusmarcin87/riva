<?

use app\models\mgcms\db\Project;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model Project */

?>
<div class="Card-horizontal__list">
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Localization'); ?>:
        <div class="pull-right">
            <b><?= $model->localization ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Investition time'); ?>:
        <div class="pull-right">
            <b id="investition_time"><?= $model->investition_time ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Annual profit'); ?>:
        <div class="pull-right">
            <b><?= $model->percentage ?>%</b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Pre-sale start'); ?>:
        <div class="pull-right">
            <b><?= $model->date_presale_start ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Pre-sale end'); ?>:
        <div class="pull-right">
            <b><?= $model->date_presale_end ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Crowdsale start'); ?>:
        <div class="pull-right">
            <b><?= $model->date_crowdsale_start ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Crowdsale end'); ?>:
        <div class="pull-right">
            <b><?= $model->date_crowdsale_end ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Crowdsale profit'); ?>:
        <div class="pull-right">
            <b><?= $model->percentage ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Pre-sale bonus'); ?>:
        <div class="pull-right">
            <b><?= $model->percentage_presale_bonus ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Profit realization'); ?>:
        <div class="pull-right">
            <b><?= $model->date_realization_profit ?></b>
        </div>
    </div>
</div>