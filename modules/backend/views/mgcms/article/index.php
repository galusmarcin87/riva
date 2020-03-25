<?php
/* @var $this yii\web\View */
/* @var $searchModel app\models\mgcms\db\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use app\components\mgcms\MgHelpers;

$this->title = Yii::t('app', 'Articles');
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);

?>
<div class="article-index">

  <h1><?= Html::encode($this->title) ?></h1>
  <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

  <p>
    <?= Html::a(Yii::t('app', 'Create Article'), ['create'], ['class' => 'btn btn-success']) ?>
  </p>
  <?php
  $gridColumn = [
      ['class' => 'yii\grid\SerialColumn'],
      ['attribute' => 'id', 'visible' => false],
      'title',
      [
          'attribute' => 'link',
          'value' => function($model) {
            return $model->getLink(Yii::t('app', 'Link'));
          },
          'format' => 'raw'
      ],
      [
          'attribute' => 'language',
          'filter' => app\components\mgcms\MgHelpers::arrayKeyValueFromArray(MgHelpers::getConfigParam('languages'), true),
      ],
      'created_on',
      [
          'attribute' => 'status',
          'format' => 'translate',
          'filterType' => GridView::FILTER_SELECT2,
          'filter' => app\components\mgcms\MgHelpers::arrayKeyValueFromArray(\app\models\mgcms\db\Article::STATUSES, true),
          'filterWidgetOptions' => [
              'pluginOptions' => ['allowClear' => true],
          ],
          'filterInputOptions' => ['placeholder' => Yii::t('app', 'Status')]
      ],
      [
          'attribute' => 'parent_id',
          'label' => Yii::t('app', 'Parent'),
          'value' => function($model) {
            return $model->parent ? $model->parent->title : '';
          },
          'filterType' => GridView::FILTER_SELECT2,
          'filter' => \yii\helpers\ArrayHelper::map(\app\models\mgcms\db\Article::find()->asArray()->all(), 'id', 'title'),
          'filterWidgetOptions' => [
              'pluginOptions' => ['allowClear' => true],
          ],
          'filterInputOptions' => ['placeholder' => Yii::t('app', 'Parent'), 'id' => 'grid-article-search-parent_id']
      ],
      [
          'attribute' => 'category_id',
          'label' => Yii::t('app', 'Category'),
          'value' => function($model) {
            return $model->category ? $model->category->name : '';
          },
          'filterType' => GridView::FILTER_SELECT2,
          'filter' => \yii\helpers\ArrayHelper::map(\app\models\mgcms\db\Category::find()->asArray()->all(), 'id', 'name'),
          'filterWidgetOptions' => [
              'pluginOptions' => ['allowClear' => true],
          ],
          'filterInputOptions' => ['placeholder' => Yii::t('app', 'Category'), 'id' => 'grid-article-search-category_id']
      ],
      'order',
      'promoted:boolean',
      'type',
      'tagString',
      [
          'class' => app\components\mgcms\yii\ActionColumn::className(),
          'template' => '{view} {clone} {update} {delete}',
          'buttons' => [
              'clone' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-tags"></span>', $url, [
                        'title' => Yii::t('app', 'clone')]);
              }]
      ],
  ];

  ?>
  <?=
  GridView::widget([
      'dataProvider' => $dataProvider,
      'filterModel' => $searchModel,
      'columns' => $gridColumn,
      'pjax' => true,
      'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-article']],
      'panel' => [
          'type' => GridView::TYPE_PRIMARY,
          'heading' => '<span class="glyphicon glyphicon-list-alt"></span>  ' . Html::encode($this->title),
      ],
      // your toolbar can include the additional full export menu
      'toolbar' => [
          '{export}',
          ExportMenu::widget([
              'dataProvider' => $dataProvider,
              'columns' => $gridColumn,
              'target' => ExportMenu::TARGET_BLANK,
              'fontAwesome' => true,
              'dropdownOptions' => [
                  'label' => 'Full',
                  'class' => 'btn btn-default',
                  'itemsBefore' => [
                      '<li class="dropdown-header">Export All Data</li>',
                  ],
              ],
          ]),
      ],
  ]);

  ?>

</div>
