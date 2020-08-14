<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Typelesson */

$this->title = 'Create Typelesson';
$this->params['breadcrumbs'][] = ['label' => 'Typelessons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typelesson-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
