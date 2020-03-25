<?php
/* @var $model app\models\mgcms\db\Project */

/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\View;

/* @var $payment app\models\mgcms\db\Payment */
/* @var $form app\components\mgcms\yii\ActiveForm */

$this->title = $model->name;
$model->language = Yii::$app->language;

?>


<?= $this->render('/common/breadcrumps') ?>
<section class="Section Section--grey Project">
    <div class="container">
        <div class="Project__content">
            <?= $model->buy_token_info ?>
        </div>

    </div>
</section>