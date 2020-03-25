<?

use app\models\mgcms\db\Project;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model Project */

?>

<div class="Card-horizontal__list">
    <? foreach ($model->bonuses as $bonus): ?>
        <div class="Card-horizontal__list__item">
            <?= $bonus->from ?>-<?= $bonus->to ?> <?= Yii::t('db', 'tokens'); ?>
            <div class="pull-right">
                <b>$<?= $bonus->value ?></b>
            </div>
        </div>
    <? endforeach; ?>
</div>