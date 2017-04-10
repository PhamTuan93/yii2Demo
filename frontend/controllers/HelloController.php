<?php
namespace frontend\controllers;
use yii\web\Controller;
//Đưa vào model Hello
use app\models\Hello;
class HelloController extends Controller{
    
    /*public function actionIndex(){
    	return $this->render('index');
    }*/

    public  function actionUser(){
        //Tạo một đối tượng của class Hello
        $model = new Hello();
        //Gọi phương thức setUser
        $model->setUser('phamtuan','phamtuan@gmail.com');
        //Gọi phương thức getUser và xuất ra.
        echo 'Thong tin User <br/>'.$model->getUser();
    }   
}