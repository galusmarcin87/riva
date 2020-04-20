<?php

use yii\helpers\Html;
use app\components\mgcms\yii\ActiveForm;
use app\components\mgcms\MgHelpers;

/* @var $this yii\web\View */
/* @var $model app\models\mgcms\db\Project */
/* @var $form app\components\mgcms\yii\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Bonus',
        'relID' => 'bonus',
        'value' => \yii\helpers\Json::encode($model->bonuses),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Payment',
        'relID' => 'payment',
        'value' => \yii\helpers\Json::encode($model->payments),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <div class="row">

        <?= $this->render('/common/languageBehaviorSwicher', ['model' => $model, 'form' => $form]) ?>

        <?= $form->field6md($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field6md($model, 'status')->dropDownList(\app\models\mgcms\db\Project::STATUSES) ?>

        <?= $form->field12md($model, 'localization')->textInput(['maxlength' => true, 'placeholder' => 'Localization']) ?>

        <?= $form->field6md($model, 'gps_lat')->textInput(['maxlength' => true, 'placeholder' => 'Gps Lat']) ?>

        <?= $form->field6md($model, 'gps_long')->textInput(['maxlength' => true, 'placeholder' => 'Gps Long']) ?>


        <?= $form->field12md($model, 'lead')->tinyMce() ?>

        <?= $form->field12md($model, 'text')->tinyMce() ?>

        <?= $form->field6md($model, 'file_id')->widget(\kartik\widgets\Select2::classname(), [
            'data' => \yii\helpers\ArrayHelper::map(\app\models\mgcms\db\File::find()->orderBy('id')->asArray()->all(), 'id', 'origin_name'),
            'options' => ['placeholder' => Yii::t('app', 'Choose File')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

        <?= $form->field6md($model, 'flag_id')->widget(\kartik\widgets\Select2::classname(), [
            'data' => \yii\helpers\ArrayHelper::map(\app\models\mgcms\db\File::find()->orderBy('id')->asArray()->all(), 'id', 'origin_name'),
            'options' => ['placeholder' => Yii::t('app', 'Wybierz flagę')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

        <?= $form->field6md($model, 'whitepaper')->textInput(['maxlength' => true, 'placeholder' => '']) ?>

        <?= $form->field6md($model, 'www')->textInput(['maxlength' => true, 'placeholder' => '']) ?>

        <?= $form->field6md($model, 'money')->textInput(['placeholder' => '']) ?>

        <?= $form->field6md($model, 'money_full')->textInput(['placeholder' => '']) ?>

        <?= $form->field6md($model, 'investition_time')->textInput(['maxlength' => true, 'placeholder' => '']) ?>

        <?= $form->field6md($model, 'percentage')->textInput(['placeholder' => '']) ?>

        <?= $form->field6md($model, 'date_presale_start')->widget(\kartik\datecontrol\DateControl::classname(), [
            'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
            'saveFormat' => 'php:Y-m-d',
            'ajaxConversion' => true,
            'options' => [
                'pluginOptions' => [
                    'placeholder' => Yii::t('app', 'Choose Date Presale Start'),
                    'autoclose' => true
                ]
            ],
        ]); ?>

        <?= $form->field6md($model, 'date_presale_end')->widget(\kartik\datecontrol\DateControl::classname(), [
            'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
            'saveFormat' => 'php:Y-m-d',
            'ajaxConversion' => true,
            'options' => [
                'pluginOptions' => [
                    'placeholder' => Yii::t('app', 'Choose Date Presale End'),
                    'autoclose' => true
                ]
            ],
        ]); ?>

        <?= $form->field6md($model, 'date_crowdsale_start')->widget(\kartik\datecontrol\DateControl::classname(), [
            'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
            'saveFormat' => 'php:Y-m-d',
            'ajaxConversion' => true,
            'options' => [
                'pluginOptions' => [
                    'placeholder' => Yii::t('app', 'Choose Date Crowdsale Start'),
                    'autoclose' => true
                ]
            ],
        ]); ?>

        <?= $form->field6md($model, 'date_crowdsale_end')->widget(\kartik\datecontrol\DateControl::classname(), [
            'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
            'saveFormat' => 'php:Y-m-d',
            'ajaxConversion' => true,
            'options' => [
                'pluginOptions' => [
                    'placeholder' => Yii::t('app', 'Choose Date Crowdsale End'),
                    'autoclose' => true
                ]
            ],
        ]); ?>

        <?= $form->field6md($model, 'percentage_presale_bonus')->textInput(['placeholder' => '']) ?>

        <?= $form->field6md($model, 'date_realization_profit')->widget(\kartik\datecontrol\DateControl::classname(), [
            'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
            'saveFormat' => 'php:Y-m-d',
            'ajaxConversion' => true,
            'options' => [
                'pluginOptions' => [
                    'placeholder' => Yii::t('app', 'Choose Date Realization Profit'),
                    'autoclose' => true
                ]
            ],
        ]); ?>

        <?= $form->field6md($model, 'token_value')->textInput(['placeholder' => '']) ?>

        <?= $form->field6md($model, 'token_currency')->textInput(['placeholder' => '']) ?>

        <?= $form->field6md($model, 'token_blockchain')->textInput(['maxlength' => true, 'placeholder' => '']) ?>

        <?= $form->field6md($model, 'token_to_sale')->textInput(['placeholder' => '']) ?>

        <?= $form->field6md($model, 'token_minimal_buy')->textInput(['placeholder' => '']) ?>

        <?= $form->field6md($model, 'token_left')->textInput(['placeholder' => '']) ?>

        <?= $form->field12md($model, 'buy_token_info')->tinyMce(['rows' => 6]) ?>



    </div>

    <div class="well">
        <div class="col-md-12">
            <?= $form->relatedFileInput($model, true, true) ?>
        </div>

        <legend><?= Yii::t('app', 'Images'); ?></legend>
        <?= $this->render('/common/_images', ['model' => $model, 'editable' => true]) ?>
    </div>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('app', 'Właściwosci')),
            'content' => $this->render('_formBonus', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->bonuses),
            ]),
        ],
//        [
//            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode(Yii::t('app', 'Payment')),
//            'content' => $this->render('_formPayment', [
//                'row' => \yii\helpers\ArrayHelper::toArray($model->payments),
//            ]),
//        ],
    ];
    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>
    <div class="form-group">
        <?php if (Yii::$app->controller->action->id != 'save-as-new'): ?>
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?php endif; ?>
        <?php if (Yii::$app->controller->action->id != 'create'): ?>
            <?= Html::submitButton(Yii::t('app', 'Save As New'), ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
        <?php endif; ?>
        <?= Html::a(Yii::t('app', 'Cancel'), Yii::$app->request->referrer, ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
