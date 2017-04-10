<?php
 
namespace frontend\controllers;
 
use Yii;
use yii\web\Controller;
use common\models\post;
 
Class PostController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->view->title = 'Thao tác với model - Yii2 Framework';
         
        //Khởi tạo model
        $model = new post;
        $listPost = $model->getListPost();
        //print_r($listPost);
        return $this->render('index',['listPosts' => $listPost]);
    }
}