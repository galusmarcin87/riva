<?

/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Project;
use yii\web\View;
use yii\widgets\ListView;

$projectSearch = new \app\models\mgcms\db\ProjectSearch();
$projectSearch->limit = 6;


$tabsStatuses = [Project::STATUS_ACTIVE, Project::STATUS_PLANNED, Project::STATUS_ENDED];
$tabsConfig = [];
foreach ($tabsStatuses as $status) {
    $provider = $projectSearch->search([], $status);
    $provider->pagination = false;

    $tabsConfig[] = [
        'name' => Project::STATUSES_EN[$status],
        'provider' => $provider
    ];
}


?>
<section class="Section Projects animatedParent">
    <div class="container fadeIn animated">
        <div class="row">
            <div class="col-md-4">
                <h2><?= Yii::t('db', 'Current projects'); ?></h2>
            </div>
            <div class="col-md-8 text-right">
                <div class="Projects__filter">
                    <? $isActiveUsed = false ?>
                    <? foreach ($tabsConfig as $index => $tabConfig): ?>
                        <?if($tabConfig['provider']->getCount() == 0) continue;?>
                        <a href="#w3-tab<?= $index ?>" data-toggle="tab"
                           class="btn btn-<?= $isActiveUsed ? 'success' : 'primary' ?>"><?= Yii::t('db', $tabConfig['name']); ?></a>
                        <? $isActiveUsed = true ?>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
        <?php

        $tabs = [];

        foreach ($tabsStatuses as $status) {
            $provider = $projectSearch->search([], $status);
            $provider->pagination = false;
            $tabs[] = [
                'label' => '',
                'content' => ListView::widget([
                    'dataProvider' => $provider,
                    'options' => ['class' => 'Projects__sortable animatedParent'],
                    'itemOptions' => ['class' => 'Projects__card fadeIn animated'],
                    'emptyTextOptions' => ['class' => 'col-md-12'],
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('/project/_tileItem',
                            [
                                'model' => $model,
                                'key' => $key,
                                'index' => $index,
                                'widget' => $widget,
                                'view' => $this,
                            ]);
                    },
                ]),
            ];
        }

        echo \yii\bootstrap\Tabs::widget([
            'items' => $tabs,
            'encodeLabels' => false,
        ]);

        ?>
        <a href="<?= \yii\helpers\Url::to(['project/index']) ?>"
           class="btn btn-success btn-block"><?= Yii::t('db', 'SEE ALL'); ?></a>
    </div>
    <script>
      window.addEventListener('DOMContentLoaded', (event) => {
          $('.Projects__filter .btn').click(function () {
              $('.Projects__filter .btn').removeClass('btn-primary');
              $('.Projects__filter .btn').addClass('btn-success');
              $(this).addClass('btn-primary').removeClass('btn-success');
          });
      });
  </script>
</section>

