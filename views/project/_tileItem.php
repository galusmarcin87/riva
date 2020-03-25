<?

use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;
use yii\web\View;

/* @var $model Project */
/* @var $this yii\web\View */
$model->language = Yii::$app->language;
?>

<div class="Projects__card fadeIn animated">
    <div class="Projects__card__header">
        <div class="Projects__card__heading">
            <?= $model->name ?>
        </div>
        <div class="Projects__card__location">
            <img src="/images/location-ico.png" alt=""/>
            <?= $model->localization ?>
        </div>
    </div>
    <? if ($model->file && $model->file->isImage()): ?>
        <div class="Projects__card__image-wrapper">
            <img src="<?= $model->file->getImageSrc(360, 210); ?>"/>
            <? if ($model->flag && $model->flag->isImage()): ?>
            <div class="Projects__card__country-flag">
                <img src="<?= $model->flag->getImageSrc(30, 20); ?>"/>
            </div>
            <?endif;?>
        </div>
    <?endif;?>
    <div class="Projects__card__body">
        <p class="Projects__card__text">
            <?= $model->lead ?>
        </p>
        <div class="Invest-counter">
            <? if ($model->money && $model->money_full): ?>
                <div class="Invest-counter__header">
                    <div class="Invest-counter__source">

                        $<span class="Invest-counter__source__value"><?= MgHelpers::convertNumberToNiceString((int)$model->money) ?></span>
                        (<span data-to="<?= round(($model->money / $model->money_full) * 100, 0) ?>"
                               class="Invest-counter__source__percent">0</span>%)
                    </div>
                    <div class="Invest-counter__target">
                        $<?= MgHelpers::convertNumberToNiceString($model->money_full) ?>
                    </div>
                </div>
                <div class="Invest-counter__value-line-wrapper">
                    <div
                            data-to="<?= $model->money ?>"
                            data-slide-to="<?= round(($model->money / $model->money_full) * 100, 0) ?>"
                            class="Invest-counter__value-line"
                            style="width: 0%"
                    ></div>
                </div>
            <? endif ?>
            <div class="Invest-counter__body">
                <div class="Invest-counter__body__heading">
                    <?= Yii::t('db', 'Time left'); ?>:
                </div>
                <div
                        data-date="<?= $model->date_crowdsale_end ?>"
                        class="Count-down-timer"
                >
                    <div class="Count-down-timer__day">
                        <span></span> <?= Yii::t('db', 'days'); ?>
                    </div>
                    <div class="Count-down-timer__hour">
                        <span></span> <?= Yii::t('db', 'hours'); ?>
                    </div>
                    <div class="Count-down-timer__minute">
                        <span></span> <?= Yii::t('db', 'minutes'); ?>
                    </div>
                    <div class="Count-down-timer__second">
                        <span></span> <?= Yii::t('db', 'seconds'); ?>
                    </div>
                </div>
            </div>
            <div class="Invest-counter__footer">
                <div><?= Yii::t('db', 'Investition'); ?>: <strong><?= $model->investition_time ?></strong></div>
                <div class="text-right"><?= Yii::t('db', 'Offered'); ?>: <strong><?= $model->percentage ?>%</strong>
                </div>
            </div>
        </div>
        <a href="<?= $model->linkUrl ?>" class="btn btn-success btn-block">
            <?= Yii::t('db', 'DETAILS OF INVESTITION'); ?>
        </a>
    </div>
</div>
