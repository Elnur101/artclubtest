<?php


namespace app\controllers;


use app\models\Lesson;
use yii\web\Controller;
use Yii;

class LessonController extends Controller
{
    public function actionView(){
        $id = Yii::$app->request->get('id');
        $lessons = Lesson::findOne($id);
        if(!Yii::$app->user->can('viewLesson') and $id != 11){

            Yii::$app->session->setFlash('error',"Для того, чтобы получить доступ к уроку, необходимо произвести оплату");
            return $this->goHome();
        }

        return $this->render('view',[
            'lessons'=>$lessons
        ]);
    }
}