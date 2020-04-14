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
        <h4><?= Yii::t('db', 'Knowledge base'); ?></h4>
        <div class="Accordion animatedParent" id="accordion_custom" role="tablist">
            <div>
                <? foreach ($faq->faqItems as $item): ?>
                    <?= $this->render('/faq/_index',['model' => $item])?>

                <? endforeach; ?>



                <a href="<?= \yii\helpers\Url::to(['faq/index', 'id' => $faq->id]) ?>"
                   class="Accordion__button btn btn-success btn-success--outline btn-success--reverse-colors"><?= Yii::t('db', 'See all'); ?></a>
            </div>
            <div class="Accordion__text"></div>
        </div>
    </div>
</section>
