<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Sale;
use yii\helpers\ArrayHelper;

class SaleController extends Controller
{
    public function actionIndex(){

        $sale = \Yii::$app->cache->get('sale'); //Получаем кэш
        if(!$sale) {  //Если кэша нет, то получаем данные
            $sale = ArrayHelper::getColumn(
                Sale::find()->select(['date', 'value'])->asArray()->all(), 'value'
            );

            array_walk($sale, function (&$item) {
                $item = floatval($item);
            });
         \Yii::$app->cache->set('sale', $sale, 60*2);  //Устанавливаем кэш. 3-й параметр время
        }

        return $this->render('index', [
            'sale' => $sale
        ]);
    }
}
