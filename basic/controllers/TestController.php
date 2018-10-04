<?php

namespace app\controllers;

use app\components\TestService;
use app\models\Product;
use yii\web\Controller;

/**
 * Class TestController
 * @package app\controllers
 *
 */
class TestController extends Controller
{
    public function actionIndex()
    {
//        $model = new Product();
//        $model->id = 1;
//        $model->name = 'Good';
//        $model->price = 123;
//
//        return $this->render('index', [
//            'model' => $model
//        ]);

//        return $this->render('index', [
//            'var' => 'Hello World!'
//        ]);
//        return \Yii::$app->test->run();

        $model = new Product();
        $model->setAttributes(['id' => 1, 'name' => 'pear', 'price' => 70]);


        return VarDumper::dumpAsString($model->safeAttributes());
    }
}

