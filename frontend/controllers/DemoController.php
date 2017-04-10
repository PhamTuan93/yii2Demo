<?php
namespace frontend\controllers;
 
use Yii;
use yii\web\Controller;
 
Class DemoController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->view->title = 'Yii2 Framework - Hello world';
         
        return $this->render('index', ['hello' => 'Yii2 Franework - Hello world']);
    }
}