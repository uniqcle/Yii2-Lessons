<?php
namespace console\models;

use Yii;
use yii\db\ActiveRecord;

class Test extends ActiveRecord{

    public function rules(){

        return [
        [['id'], 'integer'],
               ];
    }
}