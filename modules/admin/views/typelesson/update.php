<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Typelesson */

$this->title = 'Update Typelesson: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Typelessons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="typelesson-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
