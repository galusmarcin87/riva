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

<Section class="Section Project">
    <div class="container">
        <h1><?= $model->name ?></h1>
        <div class="Project__content">
            <? if ($model->file && $model->file->isImage()): ?>
                <?= $model->file->getImage(705, 605, ['class' => 'Project__photo'], \Imagine\Image\ManipulatorInterface::THUMBNAIL_OUTBOUND); ?>
            <? endif ?>
            <div class="Project__info">
                <div class="Project__slider">
                    <div class="owl-carousel">
                        <? foreach ($model->files as $file): ?>
                            <? if ($file->isImage()): ?>
                                <img src="<?= $file->getImageSrc(705, 605) ?>" class="item">
                            <? endif; ?>
                        <? endforeach; ?>
                    </div>
                </div>
                <div class="Project__info__content">
                    <?= $this->render('view/table', ['model' => $model]) ?>
                    <div class="Invest-counter">
                        <div class="Invest-counter__body">
                            <div class="Invest-counter__body__heading">
                                <?= Yii::t('db', 'Time left'); ?>
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
                        <div class="Invest-counter__header">
                            <div class="Invest-counter__source">
                                $<span class="Invest-counter__source__value"><?= MgHelpers::convertNumberToNiceString($model->money) ?></span>
                                <? if ($model->money_full): ?>
                                    (<span data-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                           class="Invest-counter__source__percent">0</span>%)
                                <? endif; ?>
                            </div>
                            <div class="Invest-counter__target">
                                $<?= MgHelpers::convertNumberToNiceString($model->money_full) ?>
                            </div>
                        </div>
                        <div class="Invest-counter__value-line-wrapper">
                            <div
                                    data-to="<?= $model->money ?>"
                                <? if ($model->money_full): ?>
                                    data-slide-to="<?= round(($model->money / $model->money_full) * 100, 3) ?>"
                                <? endif; ?>
                                    class="Invest-counter__value-line" style="width: 0%"></div>
                        </div>
                    </div>
                    <a class="btn btn-success btn-block btn--lowercase btn--line-top"
                       href="<?= Url::to(['project/buy', 'id' => $model->id]) ?>"><?= Yii::t('db', 'Invest'); ?></a>
                </div>
            </div>
        </div>
        <div class="Project__content">
            <div class="Project__map" id="map"></div>
            <? if (sizeof($model->bonuses) > 0): ?>


                <div>
                    <ul class="List-custm__checklist">
                        <? foreach ($model->bonuses as $bonus): ?>
                            <li class="List-custm__checklist__item">
                                <strong><?= $bonus->from ?></strong> <?= $bonus->value ?>
                            </li>
                        <? endforeach; ?>
                    </ul>
                </div>
            <? endif; ?>
        </div>
    </div>
    <div class="container">
        <p>
            <?= $model->lead ?>
        </p>
        <p>
            <small>
                <?= $model->text ?>
            </small>
        </p>
        <a class="btn btn-success btn--lowercase btn--medium btn--line-top"
           href="<?= Url::to(['project/buy', 'id' => $model->id]) ?>"><?= Yii::t('db', 'Invest'); ?></a>
        <div class="White-text-block">
            <div>
                <h5 class="White-text-block__header">
                    <strong><?= MgHelpers::getSettingTranslated('project - first column header', 'Masz pytania? Świetnie!') ?></strong><br>
                    <?= MgHelpers::getSettingTranslated('project - first column rest', 'Chętnie odpowiemy.<br>Skontaktuj się z nami.') ?>
                </h5>
            </div>
            <div>
                <p>
                    <span class="White-text-block__highline"><?= MgHelpers::getSettingTranslated('project - second column header', 'RIVA Finance') ?></span><br>
                    <?= MgHelpers::getSettingTranslated('project - second column', 'Adam Kowalski - Specjalista ds. inwestycji
                    <br>
                    <a href="tel+48 502 502 502">+48 502 502 502</a>
                    <br>
                    <a href="mailto:jan.nowak@propertyinvestment.pl">jan.nowak@propertyinvestment.pl</a>') ?>

                </p>
            </div>
            <div>
                <p>
                    <span class="White-text-block__highline"><?= MgHelpers::getSettingTranslated('project - third column header', 'RIVA Finance') ?></span><br>
                    <?= MgHelpers::getSettingTranslated('project - third column', 'Adam Kowalski - Specjalista ds. inwestycji
                    <br>
                    <a href="tel+48 502 502 502">+48 502 502 502</a>
                    <br>
                    <a href="mailto:jan.nowak@propertyinvestment.pl">jan.nowak@propertyinvestment.pl</a>') ?>
                </p>
            </div>
        </div>
    </div>
</Section>


<?= $this->render('/common/projects', ['header' => 'Other projects', 'showLink' => false]) ?>
<?= $this->render('/common/newsletterForm') ?>

<?= $this->render('view/script', ['model' => $model]) ?>

