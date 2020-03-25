<?

/* @var $this yii\web\View */

use app\components\mgcms\MgHelpers;

$article = \app\models\mgcms\db\Article::findOne(MgHelpers::getSetting('Home - ID pierwszego artykułu pod produktami ' . Yii::$app->language));
$article2 = \app\models\mgcms\db\Article::findOne(MgHelpers::getSetting('Home - ID drugiego artykułu pod produktami ' . Yii::$app->language));

?>

<section class="Section animatedParent">
    <div class="container animated fadeIn">
        <div class="Grid Card-bg-wrapper">
            <? if ($article): ?>
                <div
                        class="Card-bg Card-bg--1"
                >
                    <div class="Card-bg__body text-center">
                        <h5 class="Card-bg__header"><?= $article->title ?></h5>
                        <?= $article->excerpt ?>
                        <a class="btn btn-success" href="<?= $article->linkUrl ?>">
                            <?= Yii::t('db', 'FIND OUT MORE'); ?>
                        </a>
                    </div>
                </div>
            <? endif; ?>
            <? if ($article2): ?>
                <div
                        class="Card-bg"
                >
                    <div class="Card-bg__body text-center">
                        <h5 class="Card-bg__header"><?= $article2->title ?></h5>
                        <?= $article2->excerpt ?>
                        <a class="btn btn-success" href="<?= $article2->linkUrl ?>">
                            <?= Yii::t('db', 'FIND OUT MORE'); ?>
                        </a>
                    </div>
                </div>
            <? endif; ?>
        </div>
    </div>
</section>