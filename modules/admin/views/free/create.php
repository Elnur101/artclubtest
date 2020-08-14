<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Free */

$this->title = 'Создать урок';
$this->params['breadcrumbs'][] = ['label' => 'Frees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="free-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
