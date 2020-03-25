<?

use yii\web\View;

/* @var $this yii\web\View */

?>

<section class="Section Section-heading Section--secondary">
    <div class="container">
        <div class="Breadcrumbs">
            <a href="/" class="Breadcrumbs__link">
                <?= Yii::t('db','Home page'); ?>
            </a>
            <a href="#" class="Breadcrumbs__link Breadcrumbs__link--active">
                <?= $this->title?>
            </a>
        </div>
        <h2><?= $this->title?></h2>
    </div>
</section>