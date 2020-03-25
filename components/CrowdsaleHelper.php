<?php

namespace app\components;

use Yii;
use app\models\mgcms\db\Setting;

/**
 * Helpers class
 * @author marcin
 */
class CrowdsaleHelper extends \yii\base\Component
{

    static function getFormFieldConfig($withPlaceholders = true)
    {
        if ($withPlaceholders) {
            return [
                'options' => [
                    'class' => "Form__label",
                ],
                'template' => "{input}\n{label}\n{error}",
                'inputOptions' => ['class' => 'Form__input Register__input form-control'],
                'labelOptions' => [
                    'class' => "Form__label",
                ],
                'wrapperOptions' => [
                    'class' => "Form__group  form-group",
                ]
            ];
        } else {
            return [
                'options' => [
                    'class' => "Form__label",
                ],
                'template' => "{beginLabel}{labelTitle}{input}\n\n{error}{endLabel}",
                'inputOptions' => ['class' => 'Form__input Register__input form-control'],
                'labelOptions' => [
                    'class' => "Form__label",
                ],
                'wrapperOptions' => [
                    'class' => "Form__group  form-group",
                ]
            ];
        }
    }
}
