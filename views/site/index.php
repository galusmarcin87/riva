<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\mgcms\MgHelpers;

?>

<?= $this->render('index/video') ?>

<?= $this->render('index/counter') ?>

<?= $this->render('index/section1') ?>

<?= $this->render('/common/projects', ['status' => \app\models\mgcms\db\Project::STATUS_ACTIVE, 'header' => 'Current projects']) ?>

<?= $this->render('/common/projects', ['status' => \app\models\mgcms\db\Project::STATUS_ENDED, 'header' => 'Ended projects']) ?>

<?= $this->render('index/map') ?>

<?= $this->render('index/paralax') ?>

<?= $this->render('/common/news') ?>

<?= $this->render('index/cooperateWith') ?>

<?= $this->render('/common/faq') ?>

<?= $this->render('/common/newsletterForm') ?>
