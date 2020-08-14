<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Lesson;
use app\models\Category;
use app\models\Typelesson;

use dosamigos\datetimepicker\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Timetable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timetable-form">

    <?php $form = ActiveForm::begin(); ?>



</div>
<div class="row">
    <div class="col-md-4">
        <?= DateTimePicker::widget([
            'model' => $model,
            'attribute' => 'datatime',
            'language' => 'ru',
            'size' => 'sm',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd H:i:s',
                'todayBtn' => true
            ]
        ]);?>
        <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id','name')) ?>

        <?= $form->field($model, 'lesson_id')->dropDownList(ArrayHelper::map(Lesson::find()->all(),'id','title')) ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'typelesson_id')->dropDownList(ArrayHelper::map(Typelesson::find()->all(), 'id', 'name')) ?>

    </div>
    <div class="col-md-8">

    </div>
</div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
