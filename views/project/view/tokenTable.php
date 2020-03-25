<?

use app\models\mgcms\db\Project;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model Project */

?>
<div class="Card-horizontal__list">
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Value'); ?>
        <div class="pull-right">
            <b><?= $model->token_value ?> <?= $model->token_currency ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        Blockchain:
        <?= Yii::t('db', 'Blockchain'); ?>
        <div class="pull-right">
            <b><?= $model->token_blockchain ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Intended for sale'); ?>:
        <div class="pull-right">
            <b>$<?= $model->token_to_sale ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Minimal purchase'); ?>:
        <div class="pull-right">
            <b>$<?= $model->token_minimal_buy ?></b>
        </div>
    </div>
    <div class="Card-horizontal__list__item">
        <?= Yii::t('db', 'Left'); ?>:
        <div class="pull-right">
            <b>$<?= $model->token_left ?></b>
        </div>
    </div>
</div>