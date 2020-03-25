<?php
use \yii\helpers\Html;
use yii\web\View;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\mgcms\db\Article */

?>

<div class="item fadeIn animated">
    <div class="Card">
        <div class="Card__img-wrapper">
            <div class="Card__img-wrapper">
                <a href="<?= $model->linkUrl ?>">
                    <? if ($model->file && $model->file->isImage()): ?>
                        <img class="Card__img" src="<?= $model->file->getImageSrc(359, 228) ?>"/>
                    <? endif ?>
                </a>
            </div>
        </div>
        <div class="Card__body">
            <div class="Card__small-text">
                <?= date('Y-m-d', strtotime($model->created_on)) ?>
            </div>
            <h4 class="Card__header">
                <?= $model->title ?>
            </h4>
            <?= $model->excerpt ?>
            <a class="Card__link" href="<?= $model->linkUrl ?>">
                <?= Yii::t('db', 'read more'); ?> <span class="Card__arrow">→</span>
            </a>
        </div>
    </div>
</div>