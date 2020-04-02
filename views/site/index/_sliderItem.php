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
            style="background-image: url('<?= $model->file && $model->file->isImage() ? $model->file->getImageSrc(1920, 760) : '' ?>')"
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
                      <?= Yii::t('db', 'Token rate'); ?>:
                    </span>
                        <span>
                      <?=$model->token_value?><?=$model->token_currency?>
                    </span>
                    </li>
                    <li class="Slider__description__list__item">
                    <span>
                      <?= Yii::t('db', 'Number of tokens'); ?>:
                    </span>
                        <span>
                      Która to liczba?
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