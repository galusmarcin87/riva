<?
/* @var $this yii\web\View */

/* @var $model Project */


use app\components\mgcms\MgHelpers;
use yii\web\View;
use \app\models\mgcms\db\Project;

$fullValue = $model->equality + $model->flrv + $model->initial_value + $model->ebrv;
if (!$fullValue) {
    return false;
}

?>

<section class="Section">
    <div class="container mainCounter">
        <div class="Invest-counter left" style="width:<?= (int)($model->equality * 100 / $fullValue) ?>%;">
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">

                </div>
                <div class="Invest-counter__target">
                    &nbsp;<?= MgHelpers::convertNumberToNiceString($model->equality) ?>
                </div>
            </div>
            <div class="Invest-counter__value-line-wrapper">
                <div
                        data-slide-to="100"
                        class="Invest-counter__value-line"
                        style="width: 100%"
                ></div>
            </div>
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">
                    <?= Yii::t('db', 'Equity') ?>
                </div>
                <div class="Invest-counter__target">
                    <?= (int)($model->equality * 100 / $fullValue) ?>%
                </div>
            </div>
        </div>

        <div class="Invest-counter middle" style="width:<?= (int)($model->initial_value * 100 / $fullValue) ?>%;">
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">

                </div>
                <div class="Invest-counter__target">
                    &nbsp;<?= MgHelpers::convertNumberToNiceString($model->initial_value) ?>
                </div>
            </div>
            <div class="Invest-counter__value-line-wrapper">
                <div
                        data-slide-to="100"
                        class="Invest-counter__value-line"
                        style="width: 100%"
                ></div>
            </div>
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">
                    <?= Yii::t('db', 'Initial value') ?>
                </div>
                <div class="Invest-counter__target">

                    <?= (int)($model->initial_value * 100 / $fullValue) ?>%
                </div>
            </div>
        </div>

        <div class="Invest-counter middle2" style="width:<?= (int)($model->flrv * 100 / $fullValue) ?>%;">
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">

                </div>
                <div class="Invest-counter__target">
                    &nbsp;<?= MgHelpers::convertNumberToNiceString($model->flrv) ?>
                </div>
            </div>
            <div class="Invest-counter__value-line-wrapper">
                <div
                        data-slide-to="100"
                        class="Invest-counter__value-line"
                        style="width: 100%"
                ></div>
            </div>
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">
                    <?= Yii::t('db', 'FLRV') ?>
                </div>
                <div class="Invest-counter__target">
                    <?= (int)($model->flrv * 100 / $fullValue) ?>%
                </div>
            </div>
        </div>


        <div class="Invest-counter right" style="width:<?= (int)($model->ebrv * 100 / $fullValue) ?>%;">
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">

                </div>
                <div class="Invest-counter__target">
                    &nbsp;<?= MgHelpers::convertNumberToNiceString($model->ebrv) ?>
                </div>
            </div>
            <div class="Invest-counter__value-line-wrapper">
                <div
                        data-slide-to="100"
                        class="Invest-counter__value-line"
                        style="width: 100%"
                ></div>
            </div>
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">
                    <?= Yii::t('db', 'EBRV') ?>
                </div>
                <div class="Invest-counter__target">
                    <?= (int)($model->ebrv * 100 / $fullValue) ?>%
                </div>
            </div>
        </div>
</section>
