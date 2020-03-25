<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\mgcms\db\User */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\components\mgcms\MgHelpers;
use yii\bootstrap\Tabs;

$fieldConfig = [
    'options' => [
        'class' => "input input--hoshi",
    ],
    'template' => "{input}\n{beginLabel}<span class=\"input__label-content input__label-content--hoshi\">{labelTitle}</span>{endLabel}\n{error}",
    'inputOptions' => ['class' => 'input__field input__field--hoshi'],
    'labelOptions' => [
        'class' => "input__label input__label--hoshi input__label--hoshi-color-2",
    ],
    'wrapperOptions' => [
        'class' => "input input--hoshi",
    ]
];

?>
<?php
$form = ActiveForm::begin([
        'id' => 'login-form',
        'class' => 'fadeInUpShort animated delay-250',
        'fieldConfig' => $fieldConfig
    ]);

?>

<?= $form->errorSummary($model); ?>

<p>&nbsp;</p>
<div class="col">
  <input type="hidden" name="User[is_company]" value="0">
  <input name="User[is_company]" type="checkbox" id="isCompany" <?if($model->is_company):?>checked="checked"<?endif?> value="1">
  <label class="small-checkbox" for="isCompany">
    <?= $model->getAttributeLabel('is_company') ?>
  </label>
</div>

<div class="company" <? if (!$model->is_company): ?>style="display:none"<? endif ?>>
  <div>
    <?= $form->field($model, 'company_name')->textInput() ?>
  </div>

  <div>
    <?= $form->field($model, 'company_id')->textInput() ?>
  </div>

</div>


<div>
  <?= $form->field($model, 'first_name')->textInput() ?>
</div>

<div>
  <?= $form->field($model, 'last_name')->textInput() ?>
</div>

<div>
  <?= $form->field($model, 'citizenship')->textInput() ?>
</div>

<div>
  <?= $form->field($model, 'pesel')->textInput() ?>
</div>

<div>
  <?=
  $form->field($model, 'birthdate')->textInput();

  ?>
</div>

<div>
  <?= $form->field($model, 'birth_country')->textInput() ?>
</div>

<div>
  <?= $form->field($model, 'document_type')->textInput() ?>
</div>

<div>
  <?= $form->field($model, 'street')->textInput() ?>
</div>

<div>
  <?= $form->field($model, 'house_no')->textInput() ?>
</div>


<div>
  <?= $form->field($model, 'flat_no')->textInput() ?>
</div>


<div>
  <?= $form->field($model, 'postcode')->textInput() ?>
</div>


<div>
  <?= $form->field($model, 'city')->textInput() ?>
</div>


<div>
  <?= $form->field($model, 'email')->textInput(['type'=>'email']) ?>
</div>


<div>
  <?= $form->field($model, 'phone')->textInput() ?>
</div>





<div class="text-center"><button type="submit" class="btn btn-black" href="#"><?= Yii::t('db', 'Save'); ?><span></span></button></div>

<?php ActiveForm::end(); ?>

<script type="text/javascript">
  $('#isCompany').change(function(){
    if($(this).is(':checked')){
      $('.company').show();
    }else{
      $('.company').hide();
    }
  });
</script>