<?
/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;

$faq = \app\models\mgcms\db\Faq::find()->where(['lang' => Yii::$app->language, 'type' => \app\models\mgcms\db\Faq::TYPE_FAQ])->one();
if (!$faq) {
    return false;
}

?>

<section class="Section animatedParent">
    <div class="container fadeIn animated">
        <h2 class="text-center"><?= Yii::t('db', 'Questions and answers'); ?></h2>
        <div class="Accordion animatedParent" id="accordion" role="tablist">
            <? foreach ($faq->faqItems as $item): ?>
            <?= $this->render('/faq/_index',['model' => $item])?>


            <? endforeach; ?>

        </div>
        <a class="btn btn-success btn-block"
           href="<?= \yii\helpers\Url::to(['faq/index', 'id' => $faq->id]) ?>"><?= Yii::t('db', 'SEE ALL'); ?></a>
    </div>
</section>