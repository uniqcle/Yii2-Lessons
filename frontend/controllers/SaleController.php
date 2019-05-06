<?php
namespace frontend\controllers;


use yii\web\Controller;
use frontend\models\Sale;
use yii\helpers\ArrayHelper;

class SaleController extends Controller
{
    public function actionIndex(){
        $sale = ArrayHelper::getColumn( Sale::find()->select([ 'date', 'value'])->asArray()->all(), 'value' );

        array_walk($sale, function(&$item){
            $item = floatval($item);
        });

        return $this->render('index', [
            'sale' => $sale
        ]);
    }
}
