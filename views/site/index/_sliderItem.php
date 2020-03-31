<?php
/* @var $this yii\web\View */

/* @var $model \app\models\mgcms\db\Project */


use yii\helpers\Html;
use app\components\mgcms\MgHelpers;


$model->language = Yii::$app->language;

?>

<div class="item">
    <div
            class="Slider__item"
            style="background-image: url('<?= $model->file->getImageSrc(1920, 760) ?>')"
    >
        <div class="container">
            <div class="Slider__description">
                <div class="Slider__description__header">
                    <?= $model->name ?>
                </div>
                <div class="Slider__description__content">
                    <?= $model->lead ?>
                </div>
                <ul class="Slider__description__list">
                    <li class="Slider__description__list__item">
                    <span>
                      Kurs Tokena:
                    </span>
                        <span>
                      3,45 $
                    </span>
                    </li>
                    <li class="Slider__description__list__item">
                    <span>
                      Ilość tokenów:
                    </span>
                        <span>
                      1 786 901
                    </span>
                    </li>
                </ul>
                <div class="Slider__description__buttons">
                    <a class="btn btn-success btn-success--outline" href="<?= $model->linkUrl ?>"
                    ><?= Yii::t('db', 'Check projects'); ?></a>
                    <a class="btn btn-success"
                       href="<?= \yii\helpers\Url::to(['project/buy', 'id' => $model->id]) ?>"><?= Yii::t('db', 'Buy tokens'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="item">
    <div
            class="Slider__item"
            style="background-image: url(<?= $model->file->getImageSrc(1920, 760) ?>)"
    >
        <div class="container">
            <div class="Slider__counter">
                <span class="Slider__counter__active"><?= $index + 1 ?></span>
                <span class="Slider__counter__from">/ <?= $count ?></span>
            </div>
            <div class="Slider__header">
                <?= $model->name ?>
            </div>
            <div class="Slider__arrows">
                <div class="Slider__arrow Slider__arrow--left">
                    <img src="/images/arr-left.png" alt=""/>
                </div>
                <div class="Slider__arrow Slider__arrow--right">
                    <img src="/images/arr-right.png" alt=""/>
                </div>
            </div>
            <div class="Slider__footer">
                <div>
                    <a class="btn btn-success btn-big"
                       href="<?= $model->linkUrl ?>">
                        <?= Yii::t('db', 'DETAILS OF INVESTITION'); ?>
                    </a>
                </div>
                <div class="Slider__description">
                    <div class="row">
                        <div class="col-md-5">
                            <h6><?= Yii::t('db', 'Further information'); ?></h6>
                            <ul class="Slider__description__list">
                                <li><?= Yii::t('db', 'Localization'); ?>: <span><?= $model->localization ?></span></li>
                                <li><?= Yii::t('db', 'Token'); ?>: <span><?= $model->token_blockchain ?></span></li>
                                <li><?= Yii::t('db', 'Goal'); ?>:
                                    <span>$<?= MgHelpers::convertNumberToNiceString($model->money_full) ?></span></li>
                                <li><?= Yii::t('db', 'Collected'); ?>:
                                    <span>$<?= MgHelpers::convertNumberToNiceString($model->money) ?></span></li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-center">
                            <h6 class="text-left"><?= Yii::t('db', 'Time left'); ?></h6>
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
                            <a href="<?= \yii\helpers\Url::to(['project/buy', 'id' => $model->id]) ?>"
                               class="btn btn-success"><?= Yii::t('db', 'Invest'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>