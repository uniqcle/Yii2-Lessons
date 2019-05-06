<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Sale extends ActiveRecord{

    public function rules(){
        return [
            [['id'], 'integer'],
            [['value'], 'number'],
            [['date'], 'string']
        ];
    }
}
