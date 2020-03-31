<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;
use yii\bootstrap\ActiveForm;
use yii\web\View;

$projectIds = MgHelpers::getSettingsArray('Home Slider - tablica id projektów');

$projects = Project::find()
    ->where(['status' => Project::STATUS_ACTIVE])
    ->limit(6)
    ->andWhere(['in', 'id', $projectIds])
    ->all();
?>


<section class="Slider">
    <div class="owl-carousel owl-theme">
        <? foreach ($projects as $index => $project): ?>
            <?= $this->render('_sliderItem', ['model' => $project, 'index' => $index, 'count' => sizeof($projects)]) ?>
        <? endforeach; ?>
    </div>
</section>