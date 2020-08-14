<?php


namespace app\controllers;


use app\models\Free;
use yii\web\Controller;
use Yii;

class FreeController extends Controller
{
    public function actionIndex(){
        $frees = Free::find()->all();
        return $this->render('index',[
            'frees'=>$frees
        ]);
    }
    public function actionView(){
        $id = Yii::$app->request->get('id');
        if($id == 2){
            Yii::$app->session->setFlash('error',"Для того, чтобы получить доступ к уроку, необходимо произвести оплату");
            return $this->goHome();
        }
        $free = Free::findOne($id);
        return $this->render('view',[
            'free'=>$free
        ]);
    }
}