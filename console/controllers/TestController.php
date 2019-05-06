<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\models\Test;

class TestController extends Controller
{
    public function actionTest()
    {
        $test = new Test();
        $test->id = rand(100, 500);
        $test->name = 'Test name '.rand(200, 300);
        $test->save();
    }
}
