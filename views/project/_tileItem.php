<?

use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;
use yii\web\View;

/* @var $model Project */
/* @var $this yii\web\View */
$model->language = Yii::$app->language;

?>


<? if ($model->file && $model->file->isImage()): ?>
    <div class="Projects__card__image-wrapper">
        <img src="<?= $model->file->getImageSrc(455, 303); ?>" alt=""/>
    </div>
<? endif; ?>
<div class="Projects__card__header">
    <div class="Projects__card__heading">
        <?= $model->name ?>
    </div>
</div>

<div class="Projects__card__body">
    <ul class="List-custom__two">
        <li class="List-custom__two__item">
                  <span>
                    <?= Yii::t('db', 'Localization'); ?>:
                  </span>
            <span>
                    <strong><?= $model->localization ?></strong>
                  </span>
        </li>
        <li class="List-custom__two__item">
                  <span>
                    <?= Yii::t('db', 'Investition'); ?>:
                  </span>
            <span>
                    <strong><?= $model->investition_time ?></strong>
                  </span>
        </li>
        <li class="List-custom__two__item">
                  <span>
                   <?= Yii::t('db', 'Offered'); ?>:
                  </span>
            <span>
                    <strong><?= $model->percentage ?>%</strong>
                  </span>
        </li>
    </ul>
    <p class="Projects__card__text">
        <?= $model->lead ?>
    </p>
    <div class="Invest-counter">
        <? if ($model->elrv && $model->ebrv): ?>
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">

                    ELRV: <span class="Invest-counter__source__value"> <?= MgHelpers::convertNumberToNiceString((int)$model->elrv) ?></span>
                    (<span data-to="<?= round(($model->elrv / ($model->elrv + $model->ebrv)) * 100, 0) ?>"
                           class="Invest-counter__source__percent">0</span>%)
                </div>
                <div class="Invest-counter__target">
                    EBRV: <?= MgHelpers::convertNumberToNiceString(($model->ebrv)) ?>
                </div>
            </div>
            <div class="Invest-counter__value-line-wrapper">
                <div
                        data-to="<?= $model->elrv ?>"
                        data-slide-to="<?= round(($model->elrv / ($model->elrv + $model->ebrv)) * 100, 0) ?>"
                        class="Invest-counter__value-line"
                        style="width: 0%"
                ></div>
            </div>
        <? endif ?>
    </div>

    <div class="Invest-counter">
        <? if ($model->equality && $model->ebrv): ?>
            <div class="Invest-counter__header">
                <div class="Invest-counter__source">

                    <?= Yii::t('db', 'EQUITY') ?>: <span class="Invest-counter__source__value"> <?= MgHelpers::convertNumberToNiceString((int)$model->equality) ?></span>
                    (<span data-to="<?= round(($model->equality / ($model->equality + $model->ebrv)) * 100, 0) ?>"
                           class="Invest-counter__source__percent">0</span>%)
                </div>
                <div class="Invest-counter__target">
                    EBRV: <?= MgHelpers::convertNumberToNiceString(($model->ebrv)) ?>
                </div>
            </div>
            <div class="Invest-counter__value-line-wrapper">
                <div
                        data-to="<?= $model->equality ?>"
                        data-slide-to="<?= round(($model->equality / ($model->equality + $model->ebrv)) * 100, 0) ?>"
                        class="Invest-counter__value-line"
                        style="width: 0%"
                ></div>
            </div>
        <? endif ?>
    </div>

    <a href="<?= $model->linkUrl ?>" class="btn btn-success btn-block">
        <?= Yii::t('db', 'DETAILS OF INVESTITION'); ?>
    </a>
</div>


