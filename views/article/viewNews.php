<?php
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model \app\models\mgcms\db\Article */
$this->registerLinkTag(['rel' => 'canonical', 'href' => \yii\helpers\Url::canonical()]);

?>

<?= $this->render('/common/breadcrumps') ?>


<section class="Section Section--grey News paddingBottom0">
    <div class="container animatedParent">
        <div class="Card Card--single fadeIn animated">
            <? if ($model->file && $model->file->isImage()): ?>
              <img class="Card__img" src="<?= $model->file->getImageSrc() ?>"/>
            <? endif ?>
            <div class="Card__body">
                <? if ($isNewsSite): ?>
                  <div class="Card__small-text Card__small-text--primary">
                      <?= date('Y-m-d', strtotime($model->created_on)) ?>
                  </div>
                <? endif ?>
                <?= $model->content ?>
            </div>


        </div>
    </div>
</section>

<?= $this->render('/common/news') ?>

<?= $this->render('/common/newsletterForm') ?>
