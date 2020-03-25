<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use app\models\mgcms\db\Project;
use yii\helpers\Json;

class ApiController extends \app\components\mgcms\MgCmsController
{

  const API_KEY = 'ASD08adsHD**HDJJ&^@kKD_';

  public function actionProjects($apiKey)
  {
    \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    $products = Project::find()->all();
    $arr = [];
    foreach ($products as $product) {
      $item = $product->attributes;
      if ($product->logo)
        $item['logo'] = Url::home(true) . $product->logo->imageSrc;
      if ($product->picture)
        $item['picture'] = Url::home(true) . $product->picture->imageSrc;
      if ($product->whitepapera)
        $item['whitepaper'] = Url::home(true) . $product->whitepapera->imageSrc;
      $arr[] = $item;
    }
    return $arr;
  }
}
