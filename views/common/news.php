<?
/* @var $this yii\web\View */
use app\components\mgcms\MgHelpers;
use yii\web\View;

$category = \app\models\mgcms\db\Category::find()->where(['name' => 'aktualności ' . Yii::$app->language])->one();
if (!$category) {
  return false;
}
$articles = \app\models\mgcms\db\Article::find()->where(['category_id' => $category->id])->limit(6)->all();

?>
<section class="Section News animatedParent marginTop0">
    <div class="container fadeIn animated">
        <h2 class="text-center"><?= Yii::t('db', 'News'); ?></h2>
        <div class="Carousel">
            <div class="owl-carousel owl-theme animatedParent">
                <? foreach ($articles as $article): ?>
                  <?= $this->render('/article/_index', ['model' => $article]); ?>
                <? endforeach; ?>

            </div>
            <div class="text-center Carousel__arrows">
                <a class="News__arrow--left" href="#">
                    <img src="/images/arr-left-green.png" alt=""/>
                </a>
                <a class="News__arrow--right" href="#">
                    <img src="/images/arr-right-green.png" alt=""/>
                </a>
            </div>
        </div>
        <a href="<?= $category->linkUrl ?>" class="btn btn-success btn-block"><?= Yii::t('db', 'SEE ALL'); ?></a>
    </div>
</section>