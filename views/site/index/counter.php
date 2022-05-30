<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\web\View;
use \app\models\mgcms\db\Project;

$leftValue = (int)MgHelpers::getSetting('suwak glowny - ilosc tokenow klienta', false, 10000);
$middleValue = (int)MgHelpers::getSetting('suwak glowny - ilosc tokenow na sprzedaz', false, 20000);
$rightValue = (int)MgHelpers::getSetting('suwak glowny - ilosc tokenow nierozdysponowanych', false, 20000);

$fullValue = $leftValue + $middleValue + $rightValue;

$projects = Project::find()->where(['status' => Project::STATUS_ACTIVE])->all();
$middleGathered = 0;
foreach($projects as $project){
    $middleGathered += (int)$project->money;
}

?>

<section class="Section">
    <div class="container mainCounter">
        <div class="Invest-counter left" style="width:<?= (int)($leftValue * 100 / $fullValue) ?>%;" title="<?= Yii::t('db', 'Client\'s tokens' ) ?>">
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">

                </div>
                <div class="Invest-counter__target">
                    &nbsp;
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

                </div>
                <div class="Invest-counter__target">
                    <?= MgHelpers::convertNumberToNiceString($leftValue) ?> <?= Yii::t('db', 'tokens') ?>
                </div>
            </div>
        </div>

        <div class="Invest-counter middle" style="width:<?= (int)($middleValue * 100 / $fullValue) ?>%;">
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">

                </div>
                <div class="Invest-counter__target">
                    &nbsp;
                </div>
            </div>
            <div class="Invest-counter__value-line-wrapper" title="<?= Yii::t('db', 'Tokens to sell') ?>">
                <div
                        data-to="<?= $middleValue ?>"
                        data-slide-to="<?= round(($middleGathered/ $middleValue) * 100, 0) ?>"
                        class="Invest-counter__value-line"
                        style="width: 0%"
                        title="<?= Yii::t('db', 'Tokens gathered') ?>"
                ></div>
            </div>
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">
                    <?= MgHelpers::convertNumberToNiceString($middleGathered) ?> <?= Yii::t('db', 'tokens') ?>
                </div>
                <div class="Invest-counter__target">
                    <?= MgHelpers::convertNumberToNiceString($middleValue) ?> <?= Yii::t('db', 'tokens') ?>
                </div>
            </div>
        </div>

        <div class="Invest-counter right" style="width:<?= (int)($rightValue * 100 / $fullValue) ?>%;" title="<?= Yii::t('db', 'Undistributed tokens') ?>">
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">

                </div>
                <div class="Invest-counter__target">
                    &nbsp;
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

                </div>
                <div class="Invest-counter__target">
                    <?= MgHelpers::convertNumberToNiceString($rightValue) ?> <?= Yii::t('db', 'tokens') ?>
                </div>
            </div>
        </div>
</section>
