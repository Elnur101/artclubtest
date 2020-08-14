<?php


namespace app\controllers;


use app\models\Category;
use yii\web\Controller;
use app\models\Lesson;
use Yii;

class CategoryController extends Controller
{
    public function actionIndex(){
        $id = Yii::$app->request->get('id');
        $lesson = Lesson::findOne($id);
//        debug($lesson);die;
//        return $this->render('view', [
//            'lessons' => $lessons,
//
//        ]);
    }
    public function actionView(){
        $id = Yii::$app->request->get('id');
        $lessons = Lesson::find()->where(['category_id'=>$id])->all();

        return $this->render('view', [
            'lessons' => $lessons,
        ]);
    }


}