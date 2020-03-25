<?php
/* @var $model app\models\mgcms\db\Project */

/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\web\View;
use yii\helpers\Url;

$this->title = $model->name;
$model->language = Yii::$app->language;


?>

<style>
    .Project__content, .Project__header {
        background: #fff;
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: var(--grid);
        grid-template-columns: var(--grid)
    }
</style>

<?= $this->render('/common/breadcrumps') ?>

<section class="Section Section--grey Project">
    <div class="container">
        <div class="Project__header">
            <div class="Project__image">
                <?= $model->file->getImage(650, 400, [], \Imagine\Image\ManipulatorInterface::THUMBNAIL_OUTBOUND); ?>
                <? if ($model->flag && $model->flag->isImage()): ?>
                    <div class="Projects__card__country-flag">
                        <img src="<?= $model->flag->getImageSrc(30, 20); ?>"/>
                    </div>
                <?endif;?>
            </div>
            <div id="map" class="Project__location"></div>
        </div>
        <div class="Project__content">
            <div>
                <?= $model->lead ?>
                <? if ($model->files && sizeof($model->files) > 0 && $model->files[0]->isImage()): ?>
                    <div class="Gallery">
                        <div class="Gallery__active">
                            <img data-large="<?= $model->files[0]->getImageSrc(524, 524) ?>"
                                 src="<?= $model->files[0]->getImageSrc(524, 524) ?>">
                        </div>
                        <div class="Gallery__list">
                            <? foreach ($model->files as $file): ?>
                                <? if ($file->isImage()): ?>
                                    <img data-medium="<?= $file->getImageSrc(1000, 1000) ?>"
                                         data-large="<?= $file->getImageSrc(524, 524) ?>"
                                         src="<?= $file->getImageSrc(108, 108) ?>">
                                <? endif; ?>
                            <? endforeach; ?>
                        </div>
                    </div>
                <? endif; ?>
                <?= $model->text ?>
                <a class="btn btn-success btn-block"
                   href="<?= Url::to(['project/buy', 'id' => $model->id]) ?>">
                    <?= Yii::t('db', 'INVEST'); ?>
                </a>
                <a class="btn btn-primary btn-block" href="javascript:openCalculator()">
                    <?= Yii::t('db', 'Calculate your income'); ?>
                </a>
            </div>
            <div>
                <a class="btn btn-success btn-block" href="<?= Url::to(['project/buy', 'id' => $model->id]) ?>">
                    <?= Yii::t('db', 'INVEST'); ?>
                </a>
                <div class="Project__action">
                    <a class="btn btn-primary" href="<?= $model->whitepaper ?>">
                        <?= Yii::t('db', 'WHITEPAPER'); ?>
                    </a>
                    <a class="btn btn-primary" href="<?= $model->www ?>">
                        <?= Yii::t('db', 'WWW'); ?>
                    </a>
                </div>
                <div class="Invest-counter">
                    <div class="Invest-counter__header">
                        <div class="Invest-counter__source">
                            $<span class="Invest-counter__source__value"><?= MgHelpers::convertNumberToNiceString($model->money) ?></span>
                            <?if($model->money_full):?>
                            (<span data-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                   class="Invest-counter__source__percent">0</span>%)
                            <?endif;?>
                        </div>
                        <div class="Invest-counter__target">
                            $<?= MgHelpers::convertNumberToNiceString($model->money_full) ?>
                        </div>
                    </div>
                    <div class="Invest-counter__value-line-wrapper">
                        <div
                                data-to="<?= $model->money ?>"
                                <?if($model->money_full):?>
                                    data-slide-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                <?endif;?>
                                class="Invest-counter__value-line" style="width: 0%"></div>
                    </div>
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
                        <div class="text-right"><?= Yii::t('db', 'Offered'); ?>: <strong><?= $model->percentage ?>
                                %</strong>
                        </div>
                    </div>

                    <?= $this->render('view/table', ['model' => $model]) ?>

                    <strong>
                        <?= Yii::t('db', 'TOKEN'); ?>
                    </strong>

                    <?= $this->render('view/tokenTable', ['model' => $model]) ?>

                    <strong>
                        <?= Yii::t('db', 'BONUS FOR SALE'); ?>
                    </strong>

                    <?= $this->render('view/bonuses', ['model' => $model]) ?>


                </div>
            </div>
</section>

<?= $this->render('/common/newsletterForm') ?>
<?= $this->render('/common/news') ?>

<?= $this->render('view/script', ['model' => $model]) ?>
<?= $this->render('view/calculator', ['model' => $model]) ?>
