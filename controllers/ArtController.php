<?php


namespace app\controllers;


use yii\web\Controller;

class ArtController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}