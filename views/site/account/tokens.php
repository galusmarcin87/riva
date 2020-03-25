<?php
/* @var $this yii\web\View */
/* @var $payments Payment[] */
use yii\helpers\Html;
use app\components\mgcms\MgHelpers;
use app\models\mgcms\db\Payment;

?>
<section class="text-box blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <? if (sizeof($payments) == 0): ?>
          <p><?= Yii::t('db', 'You do not have any tokens'); ?></p>
        <? else: ?>
          <? foreach ($payments as $payment): ?>
            <div class="metrics">
              <h4 class="green"><?= Yii::t('db', 'Investition'); ?>:  &nbsp;<?= (string) $payment->project ?></h4>
              <p><?= Yii::t('db', 'Number of tokens purchased'); ?>:  &nbsp;<b> <?= $payment->amount ?></b></p>
              <p><?= Yii::t('db', 'Date of tokens purchased'); ?>:   &nbsp;<b><?= $payment->created_on ?></b></p>
              <p><?= Yii::t('db', 'Percentage'); ?>:   &nbsp;<b><?= $payment->percentage ?></b></p>
              <p><?= Yii::t('db', 'Bonus percentage'); ?>:   &nbsp;<b><?= $payment->bonusPercentage ?></b></p>
              <p><?= Yii::t('db', 'The number of the electronic wallet from which Ethereum was transferred'); ?>:  &nbsp; <b><?= $payment->user_token ?></b></p>
              <? if (in_array($payment->status, [Payment::STATUS_PAYMENT_CONFIRMED, Payment::STATUS_PAYMENT_REALISATION])): ?>
                <a href="<?= \yii\helpers\Url::to(['/site/metrics', 'hash' => MgHelpers::encrypt($payment->id)]) ?>" class="btn btn-black">
                  <?= Yii::t('db', 'View metrics'); ?><span></span>
                </a>
              <? endif ?>
              <p>&nbsp;</p>
            </div>
          <? endforeach ?>
        <? endif; ?>
      </div>
    </div>
  </div>



</section>