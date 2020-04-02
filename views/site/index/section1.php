<?
/* @var $this yii\web\View */
use app\components\mgcms\MgHelpers;
use yii\web\View;

$article = \app\models\mgcms\db\Article::findOne(MgHelpers::getSetting('Home - ID artykułu pod sliderem ' . Yii::$app->language));

if (!$article) {
    return false;
}
$imageSrc = $article->file ? $article->file->getImageSrc(767, 559) : false;
?>

<section class="Section">
    <div class="container">
        <div class="row animatedParent">
            <div class="col-md-<?= $imageSrc ? 6 :  12 ?> Section__text fadeIn animated">
                <?= $article->excerpt ?>
                <a class="btn btn-success btn-success--outline btn-success--reverse-colors" href="<?= $article->linkUrl ?>">
                    <?= Yii::t('db', 'FIND OUT MORE'); ?>
                </a>
            </div>
            <? if ($imageSrc): ?>
                <div class="col-md-6 fadeIn animated">
                    <div class="Image-singe-container">
                        <img class="Section__image" src="<?= $imageSrc ?>"/>
                    </div>
                </div>
            <? endif; ?>
        </div>
    </div>
</section>